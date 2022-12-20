import { useEffect, useState, useCallback, useRef } from '@wordpress/element'
import { __ } from '@wordpress/i18n'
import { Transition } from '@headlessui/react'
import {
    installPlugin,
    updateTemplatePart,
    addLaunchPagesToNav,
    updateOption,
} from '@onboarding/api/WPApi'
import { useConfetti } from '@onboarding/hooks/useConfetti'
import { useWarnOnLeave } from '@onboarding/hooks/useWarnOnLeave'
import { runAtLeastFor, waitFor200Response } from '@onboarding/lib/util'
import {
    createWordpressPages,
    trashWordpressPages,
    updateGlobalStyleVariant,
} from '@onboarding/lib/wp'
import { useUserSelectionStore } from '@onboarding/state/UserSelections'
import { Logo, Spinner } from '@onboarding/svg'

export const CreatingSite = () => {
    const [isShowing] = useState(true)
    const [confettiReady, setConfettiReady] = useState(false)
    const [warnOnLeaveReady, setWarnOnLeaveReady] = useState(true)
    const canLaunch = useUserSelectionStore((state) => state.canLaunch())
    const { siteType, siteInformation, pages, style, plugins, goals } =
        useUserSelectionStore()
    const [info, setInfo] = useState([])
    const [infoDesc, setInfoDesc] = useState([])
    const inform = (msg) => setInfo((info) => [msg, ...info])
    const informDesc = (msg) => setInfoDesc((infoDesc) => [msg, ...infoDesc])
    const dryRun = useRef()
    useWarnOnLeave(warnOnLeaveReady)

    const doEverything = useCallback(async () => {
        if (!canLaunch) {
            throw new Error(__('Site is not ready to launch.', 'extendify'))
        }
        try {
            inform(__('Applying site styles', 'extendify'))
            informDesc(__('A beautiful site in... 3, 2, 1', 'extendify'))

            await waitFor200Response()
            await runAtLeastFor(
                async () =>
                    await updateOption('blogname', siteInformation.title),
                2000,
                { dryRun: dryRun.current },
            )

            if (!dryRun.current) {
                await waitFor200Response()
                await updateGlobalStyleVariant(style?.variation ?? {})

                await waitFor200Response()
                await updateTemplatePart('extendable/header', style?.headerCode)

                await waitFor200Response()
                await updateTemplatePart('extendable/footer', style?.footerCode)
            }

            let pageIds
            inform(__('Generating page content', 'extendify'))
            informDesc(__('Starting off with a full site...', 'extendify'))
            await waitFor200Response()
            await runAtLeastFor(
                async () => {
                    const blogPage = {
                        // slug is only used internally
                        slug: 'blog',
                        title: __('Blog', 'extendify'),
                    }
                    const pagesWithBlog = [...pages, blogPage]
                    await waitFor200Response()
                    pageIds = await createWordpressPages(
                        pagesWithBlog,
                        siteType,
                        style,
                    )
                    await waitFor200Response()
                    const addBlogPageToNav = goals.some(
                        (goal) => goal.slug === 'blog',
                    )
                    const updatedHeaderCode = addLaunchPagesToNav(
                        addBlogPageToNav ? pagesWithBlog : pages,
                        pageIds,
                        style?.headerCode,
                    )

                    await waitFor200Response()
                    await updateTemplatePart(
                        'extendable/header',
                        updatedHeaderCode,
                    )
                },
                2000,
                { dryRun: dryRun.current },
            )

            if (plugins?.length) {
                inform(__('Installing suggested plugins', 'extendify'))
                for (const [index, plugin] of plugins.entries()) {
                    // TODO: instead of updating here, we could have a progress component
                    // that we can update a % of the width every index/n
                    informDesc(
                        __(
                            `${index + 1}/${plugins.length}: ${plugin.name}`,
                            'extendify',
                        ),
                    )
                    await waitFor200Response()
                    try {
                        await installPlugin(plugin)
                    } catch (e) {
                        // If this fails, wait and try again
                        await waitFor200Response()
                        await installPlugin(plugin)
                    }
                }
            }

            inform(__('Setting up your site assistant', 'extendify'))
            informDesc(__('Helping your site to be successful...', 'extendify'))
            await waitFor200Response()
            await runAtLeastFor(
                async () =>
                    await trashWordpressPages([
                        { slug: 'hello-world', type: 'post' },
                        { slug: 'sample-page', type: 'page' },
                    ]),
                2000,
                { dryRun: dryRun.current },
            )
            if (!dryRun.current) {
                await waitFor200Response()
                await updateOption('permalink_structure', '/%postname%/')
            }
            inform(__('Your site has been created!', 'extendify'))
            informDesc(__('Redirecting in 3, 2, 1...', 'extendify'))
            // fire confetti here
            setConfettiReady(true)
            setWarnOnLeaveReady(false)
            await new Promise((resolve) => setTimeout(resolve, 2500))

            if (!dryRun.current) {
                await waitFor200Response()
                await updateOption(
                    'extendify_onboarding_completed',
                    new Date().toISOString(),
                )
            }

            return pageIds
        } catch (e) {
            // if the error is 4xx, we should stop trying and prompt them to reload
            if (e.status >= 400 && e.status < 500) {
                setWarnOnLeaveReady(false)
                const alertMsg = __(
                    'We encountered a server error we cannot recover from. Please reload the page and try again.',
                    'extendify',
                )
                alert(alertMsg)
                location.href = window.extOnbData.adminUrl
            }
            await new Promise((resolve) => setTimeout(resolve, 2000))
            return doEverything()
        }
    }, [
        goals,
        pages,
        plugins,
        siteType,
        style,
        canLaunch,
        siteInformation.title,
    ])

    useEffect(() => {
        const q = new URLSearchParams(window.location.search)
        dryRun.current = q.has('dry-run')
    }, [])

    useEffect(() => {
        doEverything().then(() => {
            window.location.replace(
                window.extOnbData.adminUrl +
                    'admin.php?page=extendify-assist&extendify-launch-success',
            )
        })
    }, [doEverything])

    useConfetti(
        {
            particleCount: 2,
            angle: 320,
            spread: 120,
            origin: { x: 0, y: 0 },
            colors: ['var(--ext-partner-theme-primary-text, #ffffff)'],
        },
        2500,
        confettiReady,
    )

    return (
        <Transition
            show={isShowing}
            appear={true}
            enter="transition-all ease-in-out duration-500"
            enterFrom="md:w-40vw md:max-w-md"
            enterTo="md:w-full md:max-w-full"
            className="bg-partner-primary-bg text-partner-primary-text py-12 px-10 md:h-screen flex flex-col justify-between md:w-40vw md:max-w-md flex-shrink-0">
            <div className="max-w-prose">
                <div className="md:min-h-48">
                    {window.extOnbData?.partnerLogo && (
                        <div className="pb-8">
                            <img
                                style={{ maxWidth: '200px' }}
                                src={window.extOnbData.partnerLogo}
                                alt={window.extOnbData?.partnerName ?? ''}
                            />
                        </div>
                    )}
                    <div>
                        {info.map((step, index) => {
                            if (!index) {
                                return (
                                    <Transition
                                        appear={true}
                                        show={isShowing}
                                        enter="transition-opacity duration-1000"
                                        enterFrom="opacity-0"
                                        enterTo="opacity-100"
                                        leave="transition-opacity duration-1000"
                                        leaveFrom="opacity-100"
                                        leaveTo="opacity-0"
                                        className="text-4xl flex space-x-4 items-center"
                                        key={step}>
                                        {step}
                                    </Transition>
                                )
                            }
                        })}
                        <div className="flex space-x-4 items-center mt-6">
                            <Spinner className="spin" />
                            {infoDesc.map((step, index) => {
                                if (!index) {
                                    return (
                                        <Transition
                                            appear={true}
                                            show={isShowing}
                                            enter="transition-opacity duration-1000"
                                            enterFrom="opacity-0"
                                            enterTo="opacity-100"
                                            leave="transition-opacity duration-1000"
                                            leaveFrom="opacity-100"
                                            leaveTo="opacity-0"
                                            className="text-lg"
                                            key={step}>
                                            {step}
                                        </Transition>
                                    )
                                }
                            })}
                        </div>
                    </div>
                </div>
            </div>
            <div className="hidden md:flex items-center space-x-3">
                <span className="opacity-70 text-xs">
                    {__('Powered by', 'extendify')}
                </span>
                <span className="relative">
                    <Logo className="logo text-partner-primary-text w-28" />
                    <span className="absolute -bottom-2 right-3 font-semibold tracking-tight">
                        Launch
                    </span>
                </span>
            </div>
        </Transition>
    )
}
