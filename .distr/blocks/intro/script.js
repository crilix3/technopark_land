{
	
	let introSlider = null;

	function initIntroSlider() {
		const el = document.querySelector(".intro__slider");
		if (!el || el.swiper) return;

		introSlider = new Swiper(el, {
			loop: true,
			centeredSlides: true,
			// initialSlide: 4,
			speed: 800,
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			
			breakpoints: {
				360: {
					slidesPerView: 1.3,
					spaceBetween: 10,
				},
				768: {
					slidesPerView: 5,
					spaceBetween: 14,
				}
			},
			
			navigation: {
				nextEl: '.intro__nav-buttons-next',
				prevEl: '.intro__nav-buttons-prev'
			},
		});
	}

	initIntroSlider();
}
