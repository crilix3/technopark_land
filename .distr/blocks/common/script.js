preLoader()

function preLoader() {
	const preloader = document.getElementById('preloader')
	const page = document.querySelector('.wrapper')
	preloader.classList.add('hidden')
	setTimeout(() => { preloader.remove(); page.style.opacity = 1 }, 600)
}

window.addEventListener('pageshow', function (e) {
	if (e.persisted) {
		location.reload()
	}
})

// ScrollToElem

scrollToElem()

function scrollToElem() {
	
	const scrollLinks = document.querySelectorAll('.scroll')
	const header = document.querySelector('#header')
	
	for (const scrollLink of scrollLinks) {
		
		scrollLink.addEventListener('click', function(e) {
			e.preventDefault()
			
			const targetElem = document.querySelector(this.getAttribute('href'))
			
			if (!targetElem || !header) return
			
			const headerHeight 	= header.offsetHeight
			const elementTop 		= targetElem.getBoundingClientRect().top + window.scrollY
			let position 				= elementTop - headerHeight
			
			window.scrollTo({
				top: position,
				behavior: 'smooth'
			})
		})
	}
}


