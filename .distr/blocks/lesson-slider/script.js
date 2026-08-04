if (document.querySelector('.lesson-slider__slider')) {
	new Swiper('.lesson-slider__slider', {
		slidesPerView: 'auto',
		centeredSlides: true,
		spaceBetween: 20,
		initialSlide: 1,
		loop: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: '.lesson-slider__nav-button_next',
			prevEl: '.lesson-slider__nav-button_prev',
		},
		breakpoints: {
			768: {
				spaceBetween: 90,
			},
		},
	});
}