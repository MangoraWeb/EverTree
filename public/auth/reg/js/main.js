(function ($) {

	"use strict";

	$(window).on('load', function () {
		$('[data-loader="circle-side"]').fadeOut(); // will first fade out the loading animation
		$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
		$('body').delay(350);
		$(window).scroll();
	});
	
	/* Round Input Slider */
	$("#budget_slider1").roundSlider({
		radius: 100,
		min: 0,
		max: 1000,
		step: 5,
		editableTooltip: true,
		width: 20,
		handleSize: "+15",
		handleShape: "dot",
		sliderType: "min-range",
		value: 0,
		
	});

	/* Check and radio input styles */
	$('input.icheck').iCheck({
		checkboxClass: 'icheckbox_square-grey',
		radioClass: 'iradio_square-grey'
	});
	
	/* Scroll to top small screens: change the top position offset based on your content*/
	var $Scrolbt = $('button.backward,button.forward');
	var $Element = $('html, body');

	if (window.innerWidth < 800) {
		$Scrolbt.on("click", function () {
			$Element.animate({
				scrollTop: 100
			}, "slow");
			return false;
		});
	}
	
    /* Form submit loader */
    $('form').on('submit',function() {
        var form = $("form#wrapped");
        form.validate();
        if (form.valid()) {
            $("#loader_form").fadeIn();
        }
    });
	
	/*  Image popups */
	$('.magnific-gallery').each(function () {
		$(this).magnificPopup({
			delegate: 'a',
			type: 'image',
			gallery: {
				enabled: true
			},
			removalDelay: 500, //delay removal by X to allow out-animation
			callbacks: {
				beforeOpen: function () {
					// just a hack that adds mfp-anim class to markup 
					this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
					this.st.mainClass = this.st.el.attr('data-effect');
				}
			},
			closeOnContentClick: true,
			midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
		});
	});

	/* Carousel*/
	$('.owl-carousel').owlCarousel({
		items: 1,
		dots: false,
		loop: true,
		autoplay: true,
		autoHeight: true,
		autoplayTimeout: 3500,
		animateOut: 'fadeOut',
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});

})(window.jQuery);