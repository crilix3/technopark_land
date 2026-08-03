if (document.querySelector('.lesson-slider__slider')) {
	new Swiper('.lesson-slider__slider', {
		slidesPerView: 'auto',
		centeredSlides: true,
		spaceBetween: 20,
		initialSlide: 1,
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