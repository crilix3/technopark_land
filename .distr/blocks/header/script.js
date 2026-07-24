fixMenu()
window.onscroll = () => fixMenu()

function fixMenu() {
	
	const header = document.querySelector('#header');
	const mains = document.querySelectorAll('.main');
    const scrollTop = window.scrollY;
	
	if (header && mains.length > 0) {

		if (window.scrollY > 0) {
			header.classList.add('fix')
			// main.style.marginTop = header.offsetHeight + 'px'
		} else {
			header.classList.remove('fix')
			// main.style.marginTop = '0px'
		}

		let isOnMain = false;

        mains.forEach(main => {
            const mainTop = main.offsetTop;
            const mainBottom = mainTop + main.offsetHeight;

            if (scrollTop >= mainTop && scrollTop <= mainBottom) {
                isOnMain = true;
            }
        });

        if (isOnMain) {
            header.classList.remove('header-after-main');
        } else {
            header.classList.add('header-after-main');
        }
	}
}


if (document.querySelector('#header')) headerMenuInit()

function headerMenuInit() {
	
	if (!document.querySelector('[data-nav]')) return
	
	const body = document.querySelector('body')
	const header = document.querySelector('.header')
	const menuBtn = document.querySelectorAll('[data-nav-btn]')
	const menu = document.querySelector('[data-nav]')
	const scrollbarWidth= window.innerWidth - document.documentElement.clientWidth

	menu.style.opacity = '0'
	
	menuBtn.forEach(button => {
		button.addEventListener('click', () => {
			// console.log('click')
			const isNotActive = menu.classList.toggle('active')
			isNotActive ? openMenu() : closeMenu()
		})
	})

	document.querySelectorAll('[data-nav-close]').forEach(button => {
		button.addEventListener('click', closeMenu)
	})
	
	// for (const link of menuLinks) {
	// 	link.addEventListener('click', () => {
	// 		if (window.innerWidth < 768) {
	// 			closeMenu();
	// 		}
	// 	});
	// }
	
	document.addEventListener('click', e => {
		if (!header.contains(e.target) && menu.classList.contains('active')) {
			closeMenu()
		}
	})
	
	function openMenu() {
		// menuBtn.querySelector('#hamburger').classList.toggle('animate')
		// menuBtn.style.pointerEvents = 'none';
		menu.style.opacity = '1';
		menu.classList.remove('closing')
		setTimeout(() => {
			// menuBtn.style.pointerEvents = 'initial';
		}, 1000)
		body.classList.add('blocked')
		if (scrollbarWidth) body.style.marginRight = `${scrollbarWidth}px`
	}
	
	function closeMenu() {
		// menuBtn.querySelector('#hamburger').classList.remove('animate')
		// menuBtn.style.pointerEvents = 'none';
		menu.classList.remove('active')
		menu.classList.add('closing')
		setTimeout(() => {
			menu.classList.remove('active', 'closing')
			menu.style.opacity = '0'
			// menuBtn.style.pointerEvents = 'initial';
		}, 1000)
		body.classList.remove('blocked')
		if (scrollbarWidth) body.style.marginRight = ''
	}
	
	// menuBtn.click()
}
