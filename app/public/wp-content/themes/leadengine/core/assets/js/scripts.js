// ------------------------------------------------------------------------
// Check if element is in ViewPort
// ------------------------------------------------------------------------
(function($) {
    "use strict";
    $.belowthefold = function(element, settings) {
        var fold = $(window).height() + $(window).scrollTop();
        return fold <= $(element).offset().top - settings.threshold;
    };
    $.abovethetop = function(element, settings) {
        var top = $(window).scrollTop();
        return top >= $(element).offset().top + $(element).height() - settings.threshold;
    };
    $.rightofscreen = function(element, settings) {
        var fold = $(window).width() + $(window).scrollLeft();
        return fold <= $(element).offset().left - settings.threshold;
    };
    $.leftofscreen = function(element, settings) {
        var left = $(window).scrollLeft();
        return left >= $(element).offset().left + $(element).width() - settings.threshold;
    };
    $.inviewport = function(element, settings) {
        return !$.rightofscreen(element, settings) && !$.leftofscreen(element, settings) && !$.belowthefold(element, settings) && !$.abovethetop(element, settings);
    };
    $.extend($.expr[':'], {
        "below-the-fold": function(a, i, m) {
            return $.belowthefold(a, {
                threshold: 0
            });
        },
        "above-the-top": function(a, i, m) {
            return $.abovethetop(a, {
                threshold: 0
            });
        },
        "left-of-screen": function(a, i, m) {
            return $.leftofscreen(a, {
                threshold: 0
            });
        },
        "right-of-screen": function(a, i, m) {
            return $.rightofscreen(a, {
                threshold: 0
            });
        },
        "in-viewport": function(a, i, m) {
            return $.inviewport(a, {
                threshold: 0
            });
        }
    });
    // ------------------------------------------------------------------------
    // On window load
    // ------------------------------------------------------------------------
    $(window).on('load', function() {
      if ($('#kd-preloader').length > 0) {
        $('#kd-preloader').fadeOut('slow', function() {
            $(this).remove();
        });
      }
      // Add class on body when window is loaded
      $('body').addClass('kd-window-loaded');
    });

    $(document).ready(function() {

        if ($('.entry-header .breadcrumbs').length > 0) {
        var str = $(".entry-header .breadcrumbs").html();
        $(".entry-header .breadcrumbs").html(str.replace(/&gt;/g, '<span class="fa fa-angle-right"></span>'));
        }


        $('.parallax-overlay').each(function() {
            var size = $(this).attr('data-vc-kd-parallax');
            var height = $(this).closest('.kd_vc_parallax').innerHeight();
            $(this).css('height', size * height + 'px');
        });


        if ($('#single-page').length > 0) {
            $('body').addClass('single-post');
         }

        // ------------------------------------------------------------------------
        // Live Preview Customizer
        // ------------------------------------------------------------------------

        $("#customizer .switcher, .demo-switcher ").click(function() {
        $("#customizer").toggleClass('active');
        });

        // ------------------------------------------------------------------------
        // Topbar search
        // ------------------------------------------------------------------------


        $(".topbar-search .toggle-search").click(function() {
            $(".topbar-search .search-form").toggleClass('active');
            $(this).toggleClass('fa-times');
            if ($('.search-form.active .search-field').length) {
                $('.search-form.active .search-field').focus();
            }
        });

        function draw() {
            requestAnimationFrame(draw);
            scrollEvent();
        }
        draw();

        // ------------------------------------------------------------------------
        // Fixed Footer
        // ------------------------------------------------------------------------
        if ($("#footer.fixed").length) {
            var footerHeight = $("#footer.fixed").height();
            $("#wrapper").css("margin-bottom", footerHeight);
        }

        // ------------------------------------------------------------------------
        // Custom Search Field
        // ------------------------------------------------------------------------
        $("#s").each(function(index, elem) {
            var eId = $(elem).attr("id");
            var label = null;
            if (eId && (label = $(elem).parents("form").find("label[for=" + eId + "]")).length == 1) {
                $(elem).attr("placeholder", 'Search');
                $(label).remove();
            }
        });
        $(".search-submit, .blog_widget #bbp_search_submit").val('');
        $(".woocommerce-product-search input[type='submit']").val('');
        // ------------------------------------------------------------------------
        // Contact Form Buttons
        // ------------------------------------------------------------------------
        $(document).on("click", ".section .wpcf7-not-valid-tip,.section .wpcf7-mail-sent-ok, .blog-header-form .wpcf7-not-valid-tip, .blog-header-form .wpcf7-mail-sent-ok, .subscribe-form header .wpcf7-response-output, .modal-content-inner .wpcf7-not-valid-tip", function() {
            $(this).fadeOut();
        });
        // ------------------------------------------------------------------------
        // Reset reCaptcha for modal window
        // ------------------------------------------------------------------------
        if ($('.wpcf7-recaptcha').length > 0) {
    			$(document).on("click", ".modal-menu-item", function() {
    				grecaptcha.reset();
    			});
    		}
        // ------------------------------------------------------------------------
        // Blog video cover
        // ------------------------------------------------------------------------
        $('.background-video-image').each(function() {
            var imgSrc = $(this).children('img').attr('src');
            $(this).css('background', 'url("' + imgSrc + '")').css('background-position', 'initial');
        });

        $('.video-cover').each(function(){
                var videoCover = $(this);
                if(videoCover.find('iframe').length){
                    videoCover.find('iframe').attr('data-src', videoCover.find('iframe').attr('src'));
                    videoCover.find('iframe').attr('src','');
                }
            });

            $('.video-cover .play-video').on("click", function(){
                var playIcon = $(this);
                var videoCover = playIcon.closest('.video-cover');
                if(videoCover.find('video').length){
                    var video = videoCover.find('video').get(0);
                    videoCover.addClass('show-video');
                    video.play();
                    return false;
                } else if(videoCover.find('iframe').length){
                    var iframe = videoCover.find('iframe');
                var videoSrc = iframe.attr('data-src');
                var videoSrcAuto = videoSrc.replace('?feature=oembed', '?autoplay=1');
                    iframe.attr('src', videoSrcAuto);
                    videoCover.addClass('show-video');
                    return false;
                }
            });

        // ------------------------------------------------------------------------
        // Main Menu One Page Links
        // ------------------------------------------------------------------------

        $( "<span class='mobile-dropdown'></span>" ).appendTo( $( ".navbar-nav .menu-item-has-children" ) );

        $(".navbar-nav .menu-item-has-children .mobile-dropdown").click(function() {
        $(this).closest(".menu-item-has-children").toggleClass('mobile-visible');
        });

        // ------------------------------------------------------------------------
        // Bbpress Breadcrumbs
        // ------------------------------------------------------------------------

        if ($('.bbp-breadcrumb').length > 0) {
            $( '.bbp-breadcrumb' ).appendTo( $(".bbpress-breadcrumbs"));
        }

        // ------------------------------------------------------------------------
        // Main Smooth Scroll and Scroll Spy
        // ------------------------------------------------------------------------
        $('.navbar-collapse ul li a, .navbar-collapse .modal-menu-item.scroll-section').click(function() {
            $('.navbar-toggle:visible').click();
        });
        $(function() {
            $('.navbar-nav .one-page-link a, .footer_widget .menu li a, .scroll-section a, .modal-menu-item.scroll-section, .demo-button').bind('click', function(event) {
                if ($("body").hasClass("home")) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 90
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
                }
            });
        });
        $(function() {
            $('.portfolio-demo-button').bind('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 250
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });
        });
        $('body').scrollspy({
            offset: 100,
            target: '.navbar-fixed-top'
        });

        // ------------------------------------------------------------------------
        // WPGlobus compatibility - NavWalker conflict
        // ------------------------------------------------------------------------

        if ($('.wpglobus-selector-link').length > 0) {
            $('.wpglobus-selector-link .dropdown-menu').addClass('sub-menu');
        }

        // ------------------------------------------------------------------------
        // Back to top button
        // ------------------------------------------------------------------------
        $(window).bind("scroll", function() {
            if ($(window).scrollTop() > $(window).height()) {
                $('.back-to-top').addClass('active');
            }
            if ($(window).scrollTop() < $(window).height()) {
                $('.back-to-top').removeClass('active');
            }
        });
        $('.back-to-top').click(function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 500);
            return false;
        });

    });

    // ------------------------------------------------------------------------
    // Blog image carousel
    // ------------------------------------------------------------------------

    if (jQuery().owlCarousel) {
      jQuery('.post .entry-gallery .gallery').addClass('post-gallery-carousel');
      jQuery('.single-post .gallery').addClass('post-gallery-carousel');
    }

    if ($(".post .entry-gallery .post-gallery-carousel").length || $(".single-post .post-gallery-carousel").length) {
      $(".post .entry-gallery .post-gallery-carousel, .single-post .post-gallery-carousel").owlCarousel({
        stageClass: "owl-wrapper",
        stageOuterClass: "owl-wrapper-outer",
        loadedClass: "owl-carousel",
        items: 1,
        rewind: true,
        dots: true,
        dotsSpeed: 500,
      });
    }

    // ------------------------------------------------------------------------
    // Portfolio & Blog related posts slider
    // ------------------------------------------------------------------------

    if ($(".related-content.owlslider-related-posts").length) {
        $(".related-content.owlslider-related-posts").owlCarousel({
            stageClass: "owl-wrapper",
            stageOuterClass: "owl-wrapper-outer",
            loadedClass: "owl-carousel",
            responsive:{
                0:{
                    items:1,
                },
                767:{
                    items:3,
                }
            },
            nav: false,
            dots: true,
            dotsSpeed: 500,
            items: 3,
            rewind: true,
        });
    }

    // ------------------------------------------------------------------------
    // Portfolio photoSwipe init
    // ------------------------------------------------------------------------
    var PhotoSwipe = window.PhotoSwipe,
        PhotoSwipeUI_Default = window.PhotoSwipeUI_Default;

    $('body').on('click', 'a[data-size]', function(e) {
        if (!PhotoSwipe || !PhotoSwipeUI_Default) {
            return;
        }

        e.preventDefault();
        openPhotoSwipe(this);
    });

    var parseThumbnailElements = function(gallery, el) {
        var elements = $(gallery).find('a[data-size]').has('img'),
            galleryItems = [],
            index;

        elements.each(function(i) {
            var $el = $(this),
                size = $el.data('size').split('x'),
                caption;

            if($el.attr('data-caption-title') != null) {
                caption = '<div class="pswp__caption__title">'+$el.attr('data-caption-title')+'</div>';
            }

            if($el.attr('data-caption-desc') != null) {
                if(caption == null) caption = '';
                caption = caption + '<div class="pswp__caption__desc">'+$el.attr('data-caption-desc')+'</div>';
            }

            galleryItems.push({
                src: $el.attr('href'),
                w: parseInt(size[0], 10),
                h: parseInt(size[1], 10),
                title: caption,
                msrc: $el.find('img').attr('src'),
                el: $el
            });
            if (el === $el.get(0)) {
                index = i;
            }
        });

        return [galleryItems, parseInt(index, 10)];
    };

    var openPhotoSwipe = function(element, disableAnimation) {
        var pswpElement = $('.pswp').get(0),
            galleryElement = $(element).parents('.gallery, .hentry, .main, body').first(),
            gallery,
            options,
            items, index;

        items = parseThumbnailElements(galleryElement, element);
        index = items[1];
        items = items[0];

        options = {
            index: index,
            getThumbBoundsFn: function(index) {
                var image = items[index].el.find('img'),
                    offset = image.offset();

                return {
                    x: offset.left,
                    y: offset.top,
                    w: image.width()
                };
            },
            showHideOpacity: true,
            history: false
        };

        if (disableAnimation) {
            options.showAnimationDuration = 0;
        }

        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    };


    // ------------------------------------------------------------------------
    // Classie Script
    // ------------------------------------------------------------------------
    (function(window) {

        function classReg(className) {
            return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
        }
        var hasClass, addClass, removeClass;
        if ('classList' in document.documentElement) {
            hasClass = function(elem, c) {
                return elem.classList.contains(c);
            };
            addClass = function(elem, c) {
                elem.classList.add(c);
            };
            removeClass = function(elem, c) {
                elem.classList.remove(c);
            };
        } else {
            hasClass = function(elem, c) {
                return classReg(c).test(elem.className);
            };
            addClass = function(elem, c) {
                if (!hasClass(elem, c)) {
                    elem.className = elem.className + ' ' + c;
                }
            };
            removeClass = function(elem, c) {
                elem.className = elem.className.replace(classReg(c), ' ');
            };
        }

        function toggleClass(elem, c) {
            var fn = hasClass(elem, c) ? removeClass : addClass;
            fn(elem, c);
        }
        var classie = {
            hasClass: hasClass,
            addClass: addClass,
            removeClass: removeClass,
            toggleClass: toggleClass,
            has: hasClass,
            add: addClass,
            remove: removeClass,
            toggle: toggleClass
        };
        if (typeof define === 'function' && define.amd) {
            define(classie);
        } else {
            window.classie = classie;
        }

    })(window);
    // ------------------------------------------------------------------------
    // Animated Header
    // ------------------------------------------------------------------------

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
            header = document.querySelector('.navbar-default'),
            didScroll = false,
            changeHeaderOn = 50;

        function init() {
            window.addEventListener('scroll', function(event) {
                if (!didScroll) {
                    didScroll = true;
                    setTimeout(scrollPage, 100);
                }
            }, false);
            window.addEventListener('load', function(event) {
                if (!didScroll) {
                    didScroll = true;
                    setTimeout(scrollPage, 100);
                }
            }, false);
        }

        function scrollPage() {
            var sy = scrollY();
            if (sy >= changeHeaderOn) {
                classie.add(header, 'navbar-shrink');
            } else {
              if ( typeof(header) != 'undefined' && header != null ) {
                classie.remove(header, 'navbar-shrink');
              }
            }
            didScroll = false;
        }

        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        if (!$(header).hasClass("fixed-menu")) {
        init();
        }
    })();


})(jQuery);



function scrollEvent() {

    if (!is_touch_device()) {
        viewportTop = jQuery(window).scrollTop();

        if (jQuery(window).width())

            jQuery('.parallax-overlay').each(function() {
            elementOffset = jQuery(this).offset().top;
            distance = -(elementOffset - viewportTop) * 0.35;
            jQuery(this).css('transform', 'translate3d(0, ' + distance + 'px,0)');
        });

    }
}

function is_touch_device() {
    return 'ontouchstart' in window || 'onmsgesturechange' in window;
}
