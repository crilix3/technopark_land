{
	let teachersSwiper
	
	if (document.querySelector('.teachers__slider')) {
		teachersSlider()
	}
	
	function teachersSlider() {
		
		teachersSwiper = new Swiper(".teachers__slider", {
			
			centeredSlides: true,
			loop: true,
			autoplay: {
				delay: 2000,
				disableOnInteraction: false
			},
			
			breakpoints: {
				767: {
					slidesPerView: 4.8,
					spaceBetween: 10,
					slidesOffsetBefore: -15
				},
				360: {
					slidesPerView: 1.9,
					spaceBetween: 0,
					slidesOffsetBefore: -18
				}
			},
			
			navigation: {
				nextEl: '.teachers__nav-buttons-next',
				prevEl: '.teachers__nav-buttons-prev'
			},
		})
	}
}
