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
				breakpoint: 993,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 769,
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
		speed: 2000,
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
				breakpoint: 769,
				settings: {
					slidesToShow: 2,
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
		arrows: false,
		dots: false,
		infinite: true,
		speed: 1000,
		autoplay: true,
		autoplaySpeed: 1000,
		prevArrow: $(".prev3"),
		nextArrow: $(".next3"),
		mobileFirst: true,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					arrows:  true
				},
			},
		]
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

	/** project filter starts **/
	jQuery('#projectFilter').change(function(){
		let selectedProject = jQuery(this).val();
		if(selectedProject !== ''){
			jQuery('.project-box').addClass('d-none');
			jQuery('.project-box.'+selectedProject).removeClass('d-none');
		}else{
			jQuery('.project-box').removeClass('d-none');
		}

	});
	/** project filter ends **/

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

//	 Blog slider starts here
//
//     var timeStart = 0;
//
//     function wheely(e) {
//         var y = e.originalEvent.deltaY;
//         var timeStop = new Date().getTime();
//         var timeDiff = timeStop - timeStart;
//         if (timeDiff > 200) {
//             if (y > 0) {
//                 nextSlide();
//             }
//             if (y < 0) {
//                 prevSlide();
//             }
//         }
//         timeStart = timeStop;
//     }
//
//
// 	function prevSlide() {
// 		if (jQuery(".slide.active").is(":first-child")) {
// 			// if (!jQuery(".slider").hasClass("dragging")) {
// 				jQuery(".slide:first-child").addClass("bounce");
// 				setTimeout(function () {
// 					jQuery(".slide:first-child").removeClass("bounce");
// 				}, 300);
// 			// }
// 		} else {
// 			jQuery(".slide.active")
// 				.removeClass("active")
// 				.addClass("queue")
// 				.prev()
// 				.removeClass("prev")
// 				.addClass("active");
// 		}
// 	}
//
// 	function nextSlide() {
// 		if (jQuery(".active").is(":last-child")) {
// 			// if (!jQuery(".slider").hasClass("dragging")) {
// 				jQuery(".slide:last-child").addClass("bounce");
// 				setTimeout(function () {
// 					jQuery(".slide:last-child").removeClass("bounce");
// 				}, 300);
// 			// }
// 		} else {
//             console.log(jQuery(".slide.active")
//                 .next())
// 			jQuery(".slide.active")
// 				.removeClass("active")
// 				.addClass("prev")
// 				.next()
// 				.removeClass("queue")
// 				.addClass("active");
//
// 		}
// 	}
//
//     jQuery(document).on("wheel", wheely);

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




// const THRESHOLD = 30;
// let s = document.getElementById('scrollbox');
// let children = s.children;
// let bottoms = [];
// let scrollHeight;
// let heightWithoutMargins;
// for (let i = 0; i < children.length; ++i) {
// 	let child = children[i];
// 	let style = child.currentStyle || window.getComputedStyle(child);
// 	if (i === 0) {
// 		heightWithoutMargins = parseInt(style.height) +
// 			parseInt(style.paddingTop) +
// 			parseInt(style.paddingBottom) +
// 			parseInt(style.borderTop) +
// 			parseInt(style.borderBottom);
// 		scrollHeight = child.offsetTop;
// 	}
//
// 	let bottom = child.offsetTop - scrollHeight + heightWithoutMargins - THRESHOLD;
// 	bottoms.push(bottom);
// 	if (i !== 0) {
// 		child.style.display = 'none';
// 	}
// }
// s.style.height = heightWithoutMargins + 'px';
// var currentVisible = children[0];
// var lastScrollTop = 0;
// s.onscroll = function(e) {
// 	let y = s.scrollTop;
// 	console.log(y);
// 	lastScrollTop = y;
// 	var firstVisible;
// 	if (y > lastScrollTop) {
// 	}
// 	// 	// down
// 	for (let i = 0; i < bottoms.length; ++i) {
// 		let child = children[i];
// 		if (y < bottoms[i]) {
// 			firstVisible = child;
// 			break;
// 		}
// 	}
//
//
// 	if (firstVisible !== currentVisible) {
// 		currentVisible.style.display = 'none';
// 		currentVisible = firstVisible;
// 		currentVisible.style.display = 'initial';
// 	}
// 	console.log(currentVisible);
// };

let sliderOptions = {
	threshold: 0.6,
	root: document.getElementById('scrollbox'),
	rootMargin: "-21px 0px 0px 0px"
};
if (jQuery(window).width() > 768) {
let sliderObserver = new IntersectionObserver((entries, observer) => {
	entries.forEach(entry => {
			entry.target.classList.toggle("appear", entry.isIntersecting)
			let element = jQuery(entry.target);
			if(entry.isIntersecting){
				element.children('.project-box').addClass('appear');
			}
	});
}, sliderOptions);
document.querySelectorAll('.slide').forEach(slide => { sliderObserver.observe(slide) });
}


if(jQuery(window).width() < 768){
let projectBoxObserver = new IntersectionObserver((entries, observer)=>{
	entries.forEach(entry => {
			let element = entry.target;
			if(!entry.isIntersecting){
				element.classList.remove("appear");
			}else{
				let parent = jQuery(element).parent('.slide');
				parent.addClass('appear');
				element.classList.add("appear");
			}
			entry.target.classList.toggle("appear", entry.isIntersecting);
	});
},sliderOptions);
document.querySelectorAll('.project-box').forEach(box => { projectBoxObserver.observe(box) });
}