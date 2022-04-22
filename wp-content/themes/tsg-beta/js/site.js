jQuery(document).ready(function($){
	// $(window).on('load', function () {
    //     if ($('body').hasClass('preloader-enabled')) {
    //         $('#loader-wrapper').fadeOut(2000, function () {
    //             //$(this).remove();
    //             $('body').removeClass('preloader-enabled');
	// 							$hero = $('.hero');
	// 							if ($hero.length > 0) {
	// 								$hero.flickity('unpausePlayer');
	// 							}

    //         });
    //     }
    // });
	// Hamburger
	$('.hamburger').on('click', function(event){
		event.preventDefault();

		$(this).toggleClass('is-active');
		$('html, body').toggleClass('is-noscroll is-open-menu');
		$('.mobile-menu').toggleClass('is-open-menu');
	});

	$('.popup-modal').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#username',
		modal: true
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});

	
	// handle main nav dropdown menu functionality
	$('.main-nav .menu-item-has-children > a').on('click',function(event){
		event.preventDefault();
		event.stopPropagation();

		var this_menu = $(this).parent(),
			this_open = $(this).parent().hasClass('open-submenu');
		// check if this submenu is open
		if(this_open) {
			// remove classes from the current open sub-menu <li>
			$(this).parent().removeClass('open-submenu current-open-menu');
			// find the closest open sub-menu <li> in the parent tree and add current class to it
			$(this).closest('.open-submenu').addClass('current-open-menu');
		} else {
			// remove classes from all open sub-menu <li>
			$('.main-nav .open-submenu').removeClass('open-submenu current-open-menu');
			// find this and all parent sub-menu <li>, add open class
			$(this).parents('.menu-item-has-children').addClass('open-submenu');
			// add current class to this sub-menu <li>
			this_menu.addClass('current-open-menu');
		}
	});

	// Remove Navigation when clicked outside
	//$(document).mouseup(function (event) {
	//	var container = $('.main-nav');
    //
	//	if (!container.is(event.target) && container.has(event.target).length === 0) {
	//		container.children('.menu-item').removeClass('open-submenu current-open-menu');
	//	}
	//});

	// flickity options
	var flickity_defaults = {
		cellSelector: '.slideshow-slide',
		accessibility: false,
		cellAlign: 'center',
		contain: true,
		draggable: '>1',
		autoPlay: true,
		prevNextButtons: true,
		pageDots: false,
		wrapAround: true
	};

	// init flickity sliders
	$('.slideshow').each( function( index ) {
		var flickity_options = flickity_defaults; // get default flickity options
		var slider_options = $(this).data('flickity-options'); // get slider custom options
		// check if custom options are set and parse into default options
		if( typeof slider_options !== 'undefined' ){
			flickity_options = $.extend( {}, flickity_defaults, slider_options );
		}
		// init flickity on this element
		var $carousel = $(this).flickity( flickity_options );

		if ($carousel.hasClass('hero')) {
			$carousel.flickity('unpausePlayer');
		};
	});

	// as tabs are dynamic, find the first on and activate it
	$(window).on('load', function() {
		$('.tabs-nav li').first().addClass('is-active');
		$('.tab-container li').first().addClass('is-active');;
	});

	var $tabButton = $('.tabs-nav li a');
	var $tab = $('.tab');

	$tabButton.on('click', function(e) {
		e.preventDefault();

		if ($(this).parent().hasClass('is-active'))
			return;

		var $href = $(this).attr('href');
		$target = $($href);
		$tab.not($target).removeClass('is-active');
		$target.addClass('is-active');
		$tabButton.parent().not($(this).parent()).removeClass('is-active');
		$(this).parent().addClass('is-active');

	});

	$('.gallery, .gallery-wrapper').magnificPopup({
		delegate: 'a', // the selector for gallery item
    type: 'image',
	  gallery:{
	    enabled:true
	  }
	});
	// $(window).on("load",function(){
  //            $(".section").mCustomScrollbar();
  // });

});
