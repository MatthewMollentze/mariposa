;
(function($) {

  "use strict";

  // MutationSelectorObserver represents a selector and it's associated initialization callback.
  var MutationSelectorObserver = function(selector, callback) {
    this.selector = selector;
    this.callback = callback;
  };

  // List of MutationSelectorObservers.
  var msobservers = [];
  msobservers.initialize = function(selector, callback) {

    // Wrap the callback so that we can ensure that it is only
    // called once per element.
    var seen = [];
    var callbackOnce = function() {
      if (seen.indexOf(this) == -1) {
        seen.push(this);
        $(this).each(callback);
      }
    };

    // See if the selector matches any elements already on the page.
    $(selector).each(callbackOnce);

    // Then, add it to the list of selector observers.
    this.push(new MutationSelectorObserver(selector, callbackOnce));
  };

  // The MutationObserver watches for when new elements are added to the DOM.
  var observer = new MutationObserver(function(mutations) {

    // For each MutationSelectorObserver currently registered.
    for (var j = 0; j < msobservers.length; j++) {
      $(msobservers[j].selector).each(msobservers[j].callback);
    }
  });

  // Observe the entire document.
  observer.observe(document.documentElement, {
    childList: true,
    subtree: true,
    attributes: true
  });

  // Deprecated API (does not work with jQuery >= 3.1.1):
  $.fn.initialize = function(callback) {
    msobservers.initialize(this.selector, callback);
  };
  $.initialize = function(selector, callback) {
    msobservers.initialize(selector, callback);
  };
})(jQuery);

jQuery(document).ready(function($) {

  $(".kd_number_string").initialize(function() {
    jQuery(this).countTo();
  });

  $(".countdown").initialize(function() {
    var text_days = $(this).attr("data-text-days");
    var text_hours = $(this).attr("data-text-hours");
    var text_minutes = $(this).attr("data-text-minutes");
    var text_seconds = $(this).attr("data-text-seconds");
    var count_year = $(this).attr("data-count-year");
    var count_month = $(this).attr("data-count-month");
    var count_day = $(this).attr("data-count-day");
    var count_date = count_year + '/' + count_month + '/' + count_day;
    $(this).countdown(count_date, function(event) {
      $(this).html(
        event.strftime('<span class="CountdownContent">%D<span class="CountdownLabel">' + text_days + '</span></span><span class="CountdownSeparator">:</span><span class="CountdownContent">%H <span class="CountdownLabel">' + text_hours + '</span></span><span class="CountdownSeparator">:</span><span class="CountdownContent">%M <span class="CountdownLabel">' + text_minutes + '</span></span><span class="CountdownSeparator">:</span><span class="CountdownContent">%S <span class="CountdownLabel">' + text_seconds + '</span></span>')
      );
    });
  });

  $(".features-tabs").initialize(function() {
    $("li.tab", this).appendTo($(".tabs", this));
    $(this).easytabs({
      updateHash: false,
      animationSpeed: 'fast',
      transitionIn: 'fadeIn'
    });
  });


  jQuery(".kd-text-rotator").initialize(function(index, value) {
    jQuery(this).addClass("start-rotator");
  });

  jQuery(".kd_progress_bar").initialize(function() {
    var percent = '0.' + jQuery(this).find(".kd_progressbarfill").attr("data-value");
    var filltime = parseInt(jQuery(this).find(".kd_progressbarfill").attr("data-time"));
    var add_width = (percent * jQuery(this).find(".kd_progressbarfill").parent().width()) + 'px';
    jQuery(this).find(".kd_progressbarfill").animate({
      width: add_width
    }, {
      duration: filltime,
      queue: false
    });
  });

  $(".kd_pie_chart .kd_chart").initialize(function() {
    $(this).easyPieChart({
      easing: "easeInQuad",
      barColor: "#000",
      trackColor: "rgba(210, 210, 210, 0.2)",
      animate: 2000,
      size: "160",
      lineCap: 'square',
      lineWidth: "2",
      scaleColor: false,
      onStep: function(from, to, percent) {
        $(this.el).find(".pc_percent").text(Math.round(percent));
      }
    });
    var chart = window.chart = $("kd_pie_chart .kd_chart").data("easyPieChart");
  });


  $(".feature-sections-wrapper").initialize(function() {
    $("li.nav-label", this).appendTo($(".sticky-tabs", this));
    $('.sticky-tabs li a[href*=\\#]').bind('click', function(e) {
      e.preventDefault();
      var target = $(this).attr("href");
      $('html, body').stop().animate({
        scrollTop: $(target).offset().top - 136
      }, 1000, 'easeOutCubic');
      return false;
    });

    var feature_container = $(".feature-sections-wrapper");
    var feature_nav = $(".feature-sections-tabs");
    var offset = feature_container.offset().top;

    $(window).scroll(function(event) {
      var scroll = $(window).scrollTop();
      var total = feature_container.height() + offset - 400;
      if (scroll > total) {
        feature_nav.addClass('sticky-hide')
      }
      if (scroll < total) {
        feature_nav.removeClass('sticky-hide')
      }
    });
  });


  jQuery('.mg-gallery').initialize(function() {
    var msnry = new Masonry(this, {
      itemSelector: '.mg-single-img',
      columnWidth: '.mg-sizer',
      percentPosition: true,
      gutter: 15
    });
      setInterval(function(){
        msnry.reloadItems();
        msnry.layout();
      },500);
  });


  jQuery('.kd_map').initialize(function() {
    var map_id = $(this).attr('id');
    setTimeout(
      function() {
        eval("initKdMap_" + map_id + "()");
      }, 1000);
  });



});
