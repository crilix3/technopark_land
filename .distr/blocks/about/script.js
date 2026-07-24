{
	
	let swiper
	
	if (document.querySelector('.about__video-success')) {
		aboutSlider()
		window.addEventListener('resize', aboutSlider)
	}
	
	function aboutSlider() {
		
		swiper = new Swiper(".about__video-success", {
			
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			
			breakpoints: {
				360: {
					slidesPerView: 1.2,
					spaceBetween: 10,
					direction: 'horizontal'
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 10,
					direction: 'vertical'
				}
			}
		})
	}
}

