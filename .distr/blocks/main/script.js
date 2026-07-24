{
	let mainSlider = null;

	function initMainSlider() {
		const el = document.querySelector("#main .main__slider");
		if (!el || el.swiper) return;

		mainSlider = new Swiper(el, {
			loop: true,
            slidesPerView: 1,
			speed: 800,
			autoplay: {
				delay: 3000,
				disableOnInteraction: false
			},
			navigation: {
				nextEl: '.main__nav-button.swiper-next',
				prevEl: '.main__nav-button.swiper-prev'
			},
		});
	}

	initMainSlider();
}

{
	let mainSliderBottom = null;

	function initMainSliderBottom() {
		const el = document.querySelector("#main-bottom .main__slider");
		if (!el || el.swiper) return;

		mainSliderBottom = new Swiper(el, {
            slidesPerView: 1,
			navigation: {
				nextEl: '.main__nav-button.bottom.swiper-next',
				prevEl: '.main__nav-button.bottom.swiper-prev'
			},
		});
	}

	initMainSliderBottom();
}