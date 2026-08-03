const sections = document.querySelectorAll('[data-filteredAndLimitedCards]')

for (const section of sections) {
	filteredAndLimitedItems(section)
}

function filteredAndLimitedItems(section) {

	let visibleElems, openElemsPerClick

	if (window.innerWidth < 767) {
		visibleElems = 6
		openElemsPerClick = 2
	}  else {
		visibleElems = 4
		openElemsPerClick = 4
	}

	filter('[data-item]', '[data-filterBtn]', 'все программы')
	showMore('[data-item]', '[data-moreBtn]', visibleElems, openElemsPerClick)

	function filter(elem, button, resetFilterButtonTxt) {

		const filterButtons = section.querySelectorAll(button)
		const items = section.querySelectorAll(elem)

		for (const button of filterButtons) {

			button.addEventListener('click', () => {

				const filter = button.textContent.trim().toLowerCase()

				for (const button of filterButtons) button.classList.remove('active')
				button.classList.add('active')

				for (const item of items) {

					const itemFilters = item.dataset.filter.split('•').map(f => f.trim().toLowerCase())

					if (filter === resetFilterButtonTxt) {
						item.style.display = ''
					} else {
						item.style.display = itemFilters.some(f => f.includes(filter)) ? '' : 'none'
					}
				}
				showMore('[data-item]', '[data-moreBtn]', visibleElems, openElemsPerClick)
			})
		}
	}

	function showMore(elem, button, visibleElems, openElemsPerClick) {

		const allItems = Array.from(section.querySelectorAll(elem))
		const filteredCards= allItems.filter(item => item.style.display !== 'none')
		const showMoreButton = section.querySelector(button)

		const allItemsCountElem = section.querySelector('h2 [data-quantity]')
		const hiddenItemsCountElem = showMoreButton.querySelector('[data-quantity]')

		if (!showMoreButton) return

		filteredCards.forEach((item, index) => {
			item.style.display = index < visibleElems ? '' : 'none'
		})

		showMoreButton.style.display = filteredCards.length <= visibleElems ? 'none' : ''

		let currentVisibleCount = visibleElems

		updateCount()

		showMoreButton.onclick = () => {

			const nextVisibleCount = currentVisibleCount + openElemsPerClick

			filteredCards.forEach((item, index) => {
				if (index < nextVisibleCount) {
					item.style.display = ''
				}
			})

			showMoreButton.style.display = nextVisibleCount >= filteredCards.length ? 'none' : ''

			currentVisibleCount = nextVisibleCount

			updateCount()
		}

		function updateCount() {

			const hiddenCount = filteredCards.length - currentVisibleCount

			if (allItemsCountElem) {
				allItemsCountElem.textContent = `(${allItems.length})`
			}

			if (hiddenItemsCountElem) {
				hiddenItemsCountElem.textContent = `(${hiddenCount > 0 ? hiddenCount : 0})`
			}
		}
	}
}
