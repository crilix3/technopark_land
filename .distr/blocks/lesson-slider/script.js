if (document.querySelector('.lesson-slider__slider')) {

	const sliderEl = document.querySelector('.lesson-slider__slider');

	const lessonSwiper = new Swiper(sliderEl, {
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

	let isWheeling = false;

	sliderEl.addEventListener('wheel', (e) => {
		if (isWheeling) return;

		e.preventDefault();

		if (e.deltaY > 0) {
			lessonSwiper.slideNext();
		} else {
			lessonSwiper.slidePrev();
		}

		isWheeling = true;
		setTimeout(() => {
			isWheeling = false;
		}, 600);
	});

}