(function($) {

	//AOS Init starts
	AOS.init();
	//AOS Init ends

	//toggle mobile navbar starts
	jQuery(".device-nav").click(function(){
		jQuery(this).find('span').toggleClass('fa-times').toggleClass('fa-bars');
		jQuery("nav").toggleClass("reveal");
	});
	//toggle mobile navbar ends

	//(our service slider) starts
	jQuery(".service-slider").slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		infinite: true,
		speed: 1000,
		autoplay: true,
		prevArrow: jQuery('.service-section .slider-arrow-box .prev'),
		nextArrow: jQuery('.service-section .slider-arrow-box .next'),
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 640,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});
	//(our service slider) starts

	//partner-logo slider (partnership slider) starts
	jQuery(".partner-slider").slick({
		speed: 5000,
		autoplay: true,
		autoplaySpeed: 0,
		draggable: true,
		// // centerMode: true,
		cssEase: "linear",
		slidesToShow: 4,
		slidesToScroll: 1,
		variableWidth: true,
		infinite: true,
		// initialSlide: 1,
		arrows: false,
		buttons: false,
		//
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				}
			}
		]
	});
	//partner-logo slider (partnership slider) ends

	//(project slider ends
	jQuery(".project-slider").slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		infinite: true,
		speed: 1000,
		autoplay: true,
		// prevArrow: jQuery('.project-section .slider-arrow-box .prev'),
		nextArrow: jQuery('.project-section .slider-arrow-box .next'),
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		],
	});
	//project slider ends



	// //inner project slider starts
	// jQuery("#project-slider").slick({
	// 	slidesToShow: 1,
	// 	slidesToScroll: 1,
	// 	arrows: true,
	// 	dots: false,
	// 	infinite: true,
	// 	speed: 1000,
	// 	autoplay: true,
	// 	prevArrow: $(".prev3"),
	// 	nextArrow: $(".next3"),
	// });
	// //inner project slider ends


	//inner project slider starts
	jQuery("#project-slider").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		infinite: true,
		speed: 1000,
		autoplay: false,
		prevArrow: $(".prev3"),
		nextArrow: $(".next3"),
	});
	//inner project slider ends

	//about gallery starts
		jQuery(".ks-gallery-grid").imagesLoaded(function(){
			jQuery('.ks-gallery-grid').masonry({
				itemSelector: '.ks-gallery-grid-item',
				gutter: 30,
			});
			AOS.refresh();
		});
	//about gallery ends
	/** magnific pop-up on .gallery-link starts **/
	jQuery('.gallery-link').magnificPopup({
		gallery: {
			enabled: true
		},
		type: 'image' // this is default type
	});
	/** magnific pop-up on .gallery-link ends **/

	/** contact form hide fake placeholder starts**/
	jQuery(".input-placeholder input, .input-placeholder textarea").focus(function() {
		jQuery(this).parents('.input-placeholder').children('.placeholder').hide();
	}).focusout(function() {
		if(jQuery(this).val().length) {
			jQuery(this).parents('.input-placeholder').children('.placeholder').hide();
		}else{
			jQuery(this).parents('.input-placeholder').children('.placeholder').show();
		}
	});
	jQuery(".input-placeholder select").change(function() {
		if(jQuery(this).val().length) {
			jQuery(this).parents('.input-placeholder').children('.placeholder').hide();
		} else {
			jQuery(this).parents('.input-placeholder').children('.placeholder').show();
		}
	});
	/** contact form hide fake placeholder ends**/

	/** header video modal script start **/
	let $videoSrc;
	$('.video-btn').click(function() {
		$videoSrc = $(this).data( "src" );
		console.log($videoSrc);
		// $("#ks_video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" );
		$("#ks_video").attr('src',$videoSrc );
		$('#ksVideoModal').modal({
			keyboard: false,
		});
	});
	// stop playing the youtube video when I close the modal
	$('#ksVideoModal').on('hide.bs.modal', function (e) {
		// a poor man's stop video
		$("#ks_video").attr('src',$videoSrc);
	})
	/** header video modal script end **/

	/** sticky form toggle **/
	jQuery('.sticky-form-title').click(function(){
		let stickyForm = jQuery('.ks-sticky-form');
		stickyForm.toggleClass('active');
	});

})( jQuery );

//counter starts
var counted = 0;
jQuery(window).scroll(function () {
	let counterEle = document.getElementById("counter");
	if(counterEle) {
		var oTop = jQuery("#counter").offset().top - window.innerHeight;
		if (counted == 0 && jQuery(window).scrollTop() > oTop) {
			jQuery(".count").each(function () {
				var $this = jQuery(this),
					countTo = $this.attr("data-count");
				jQuery({
					countNum: $this.text(),
				}).animate(
					{
						countNum: countTo,
					},

					{
						duration: 2000,
						easing: "swing",
						step: function () {
							$this.text(Math.floor(this.countNum));
						},
						complete: function () {
							$this.text(this.countNum);
							//alert('finished');
						},
					}
				);
			});
			counted = 1;
		}
	}
});
//counter ends

//on scroll add `scrolled-navbar` class
let num = 100; //number of pixels before modifying styles
jQuery(window).bind('scroll', function () {
	if (jQuery(window).scrollTop() > num) {
		jQuery('#masthead').addClass('scrolled-navbar');
	}else{
		jQuery('#masthead').removeClass('scrolled-navbar');
	}
});