jQuery(document).ready(function() {
  "use strict";
	var el = jQuery(".kd_progress_bar");
	jQuery(el).each(function() {
		jQuery(this).appear(function() {
			var percent = ( jQuery(this).find(".kd_progressbarfill").attr("data-value") / 100 );
			var filltime = parseInt(jQuery(this).find(".kd_progressbarfill").attr("data-time"));
			var add_width = (percent*jQuery(this).find(".kd_progressbarfill").parent().width())+'px';
			jQuery(this).find(".kd_progressbarfill").animate({
				width: add_width
			}, { duration: filltime, queue: false });
		});
	});
});
