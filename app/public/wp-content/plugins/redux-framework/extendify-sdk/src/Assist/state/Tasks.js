import { useEffect, useState } from '@wordpress/element'
import create from 'zustand'
import { devtools, persist } from 'zustand/middleware'
import { getTaskData, saveTaskData } from '../api/Data'

const state = (set, get) => ({
    // These are tests the user is in progress of completing.
    // Not to be confused with tasks that are in progress.
    activeTests: [],
    // These are tasks that the user has seen. When added,
    // they will look like [{ key, firstSeenAt }]
    seenTasks: [],
    // These are tasks the user has already completed
    // [{ key, completedAt }] but it used to just be [key]
    // so use ?.completedAt to check if it's completed with the (.?)
    completedTasks: [],
    inProgressTasks: [],
    isCompleted(taskId) {
        return get().completedTasks.some((task) => task?.id === taskId)
    },
    completeTask(taskId) {
        if (get().isCompleted(taskId)) {
            return
        }
        set((state) => ({
            completedTasks: [
                ...state.completedTasks,
                {
                    id: taskId,
                    completedAt: new Date().toISOString(),
                },
            ],
        }))
    },
    isSeen(taskId) {
        return get().seenTasks.some((task) => task?.id === taskId)
    },
    seeTask(taskId) {
        if (get().isSeen(taskId)) {
            return
        }
        const task = {
            id: taskId,
            firstSeenAt: new Date().toISOString(),
        }
        set((state) => ({
            seenTasks: [...state.seenTasks, task],
        }))
    },
    uncompleteTask(taskId) {
        set((state) => ({
            completedTasks: state.completedTasks.filter(
                (task) => task.id !== taskId,
            ),
        }))
    },
    toggleCompleted(taskId) {
        if (get().isCompleted(taskId)) {
            get().uncompleteTask(taskId)
            return
        }
        get().completeTask(taskId)
    },
})

const storage = {
    getItem: async () => JSON.stringify(await getTaskData()),
    setItem: async (_, value) => await saveTaskData(value),
    removeItem: () => undefined,
}

export const useTasksStore = create(
    persist(devtools(state, { name: 'Extendify Assist Tasks' }), {
        name: 'extendify-assist-tasks',
        getStorage: () => storage,
    }),
    state,
)

/* Hook useful for when you need to wait on the async state to hydrate */
export const useTasksStoreReady = () => {
    const [hydrated, setHydrated] = useState(useTasksStore.persist.hasHydrated)
    useEffect(() => {
        const unsubFinishHydration = useTasksStore.persist.onFinishHydration(
            () => setHydrated(true),
        )
        return () => {
            unsubFinishHydration()
        }
    }, [])
    return hydrated
}
