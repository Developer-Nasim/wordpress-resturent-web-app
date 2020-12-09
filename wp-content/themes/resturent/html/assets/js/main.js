(function ($) {
"use strict";

	/*=========================
	PRELOADER JS
	===========================*/
    $(window).on('load', function(event) {
		$('.proloader').delay(500).fadeOut(500);
	});   
	

	/*=========================
	MEANMENU JS
	===========================*/
	$('#mobile-menu').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "767"
	});

	/*=========================
	HEADER STICKY JS
	===========================*/
	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 245) {
			$(".header-sticky").removeClass("sticky");
		} else {
			$(".header-sticky").addClass("sticky");
		}
	});

	/*=========================
	HERO SLICK SLIDER JS
	===========================*/
	function mainSlider() {
		var BasicSlider = $('.hero-slider');
		BasicSlider.on('init', function (e, slick) {
			var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
			doAnimations($firstAnimatingElements);
		});
		BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
			var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
			doAnimations($animatingElements);
		});
		BasicSlider.slick({
			autoplay: false,
			autoplaySpeed: 10000,
			dots: true,
			fade: true,
			arrows: false,
			responsive: [
				{ breakpoint: 767, settings: { dots: true, arrows: false } }
			]
		});

		function doAnimations(elements) {
			var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
			elements.each(function () {
				var $this = $(this);
				var $animationDelay = $this.data('delay');
				var $animationType = 'animated ' + $this.data('animation');
				$this.css({
					'animation-delay': $animationDelay,
					'-webkit-animation-delay': $animationDelay
				});
				$this.addClass($animationType).one(animationEndEvents, function () {
					$this.removeClass($animationType);
				});
			});
		}
	}
	mainSlider();

	

	// ABOUT-SLICK-SLIDER
	$('.abour-slider-activer').slick({
		autoplay: false,
		autoplaySpeed: 10000,
		prevArrow:'<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Back</button>',
	});

	// user-slider
	$('.user-area').slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 4,
		responsive: [
			{
			  breakpoint: 1224,
			  settings: {
				slidesToShow: 4,
				slidesToScroll: 3,
			  }
			},
			{
			  breakpoint: 991,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 2
			  }
			},
			{
			  breakpoint: 768,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
		  ]
	  });

	// play-box
	$('.play-box-activer').slick({
		infinite: true,
		slidesToShow: 2,
		responsive: [
			{
			  breakpoint: 1224,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
			  }
			},
			{
			  breakpoint: 991,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
		  ]
	  });




	/*=========================
	OWL CAROUSEL JS
	===========================*/
	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:0,
		items:1,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	    nav:true,
		dots:false,
	    responsive:{
	        0:{
	            items:1
	        },
	        767:{
	            items:3
	        },
	        992:{
	            items:5
	        }
	    }
	})

	/*=========================
	recipy-item-gallery magnificPopup image JS
	===========================*/
	$('.recipy-item-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by ZakTheRaj</small>';
			}
		}
	});

	

	/*=========================
	magnificPopup video JS
	===========================*/
	$('.popup-video').magnificPopup({
		type: 'iframe'
	});

	/*=========================
	NICE SLECT JS
	===========================*/
	$('select').niceSelect();

	// scrollToTop
	$.scrollUp({
		scrollName: 'scrollUp', // Element ID
		topDistance: '300', // Distance from top before showing element (px)
		topSpeed: 300, // Speed back to top (ms)
		animation: 'fade', // Fade, slide, none
		animationInSpeed: 200, // Animation in speed (ms)
		animationOutSpeed: 200, // Animation out speed (ms)
		scrollText: '<i class="fal fa-angle-up"></i>', // Text for element
		activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	});

	// WOW active
	new WOW().init();


})(jQuery);