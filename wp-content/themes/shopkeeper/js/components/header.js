jQuery( function ($) {

	"use strict";

	var header = $('#page_wrapper.sticky_header');

	// sticky header
	$(window).on( 'scroll', function() {

		if ( $(this).scrollTop() > 15 ) {
			header.find('.top-headers-wrapper').addClass('on_page_scroll');
			header.find('#site-top-bar').addClass('hidden');
			header.find('.site-header').addClass('sticky');
			if ( $(window).width() > 1024 ) {
				header.find('.site-logo').css('display', 'none');
				header.find('.sticky-logo').css('display', 'block');
			}
		} else {
			header.find('.top-headers-wrapper').removeClass('on_page_scroll');
			header.find('#site-top-bar').removeClass('hidden');
			header.find('.site-header').removeClass('sticky');
			if ( $(window).width() > 1024 ) {
				header.find('.site-logo').css('display', 'block');
				header.find('.sticky-logo').css('display', 'none');
			}
		}

		// mobile header position when logged in
		if( $(window).width() <= 600 ) {

			if ($(document).scrollTop() > 0) {
				$('body.admin-bar .sticky_header .top-headers-wrapper').css('top', '0');
			} else {
				$('body.admin-bar .sticky_header .top-headers-wrapper').css('top', '46px');
			}
		} else {
			$('body.admin-bar .sticky_header .top-headers-wrapper').css('top', '');
		}

	});

	// smooth transition
	if( getbowtied_scripts_vars.smooth_transition ) {
		if( $('#header-loader-under-bar').length ) {
			NProgress.configure({
		        template: '<div class="bar" role="bar"></div>',
		        parent: '#header-loader',
		        showSpinner: false,
		        easing: 'ease',
		        minimum: 0.3,
		        speed: 500,
		    });
		}
	}
});
