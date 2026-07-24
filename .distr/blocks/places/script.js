{
	let placesSwiper
	
	if (document.querySelector('.places__slider')) {
		placesSlider()
	}
	
	function placesSlider() {
		
		placesSwiper = new Swiper(".places__slider", {
			
			centeredSlides: true,
			loop: true,
			autoplay: {
				delay: 2000,
				disableOnInteraction: false
			},
			
			breakpoints: {
				767: {
					slidesPerView: 5.4,
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
				nextEl: '.places__nav-buttons-next',
				prevEl: '.places__nav-buttons-prev'
			},
		})
	}
}
