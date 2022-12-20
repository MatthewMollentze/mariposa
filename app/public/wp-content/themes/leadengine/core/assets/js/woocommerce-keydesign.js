(function($){
	"use strict";

	function get_cart(){
		if(window.wc_add_to_cart_params!=undefined){
			$.post({
				url: wc_add_to_cart_params.ajax_url,
				dataType: 'JSON',
				data: {
					action: 'woomenucart_ajax'
				},
				success: function(data, textStatus, XMLHttpRequest) {
					$('.keydesign-cart-dropdown').html(data.cart);
					if(data!='') {
						if($('.keydesign-cart .badge, .mobile-shopping-cart .badge').length){
							if(data.articles>0){
								$('.keydesign-cart .badge, .mobile-shopping-cart .badge').html(data.articles);
								$('.keydesign-cart .badge, .mobile-shopping-cart .badge').show();
							} else {
								$('.keydesign-cart .badge, .mobile-shopping-cart .badge').hide();
							}
						} else $('.keydesign-cart .cart-icon-container').append('<span class="badge">'+data.articles+'</span>');
					}
				}
			});
		}
	}

	$(document).ready(function(){
		$('body').bind("added_to_cart", get_cart);
		$('body').bind("wc_fragments_refreshed", get_cart);

		if ($('body.yith-request-a-quote-page').length > 0) {
    	$('body').addClass('woocommerce-cart');
    }
	});

})(jQuery);
