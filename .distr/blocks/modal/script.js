class ModalBox {

	constructor(props) {

		let defaultConfig = {
			buttonsSelector: 'data-modal-button',
			modalBoxesSelector: 'data-modal',
			shadow: null,
			beforeShow: null,
			afterShow: null,
			beforeClose: null,
			afterClose: null
		}

		this.config = Object.assign(defaultConfig, props)
		this.fixButton = document.querySelector('.fixMobileButton')
		this.init()
	}

	init() {
		this.isOpened = false

		if (!this.config.shadow && !document.querySelector('.modalbox__shadow')) {
			this.config.shadow = document.createElement('div')
			this.config.shadow.classList.add('modalbox__shadow')
			document.body.appendChild(this.config.shadow)
		}
		this.events()
	}

	open(modalBox, triggerButton = null) {

		this.config.beforeShow?.(modalBox)

		if (triggerButton) {
			this.fillModalContent(modalBox, triggerButton)
		}

		let header = document.querySelector('#header')
		header.style.zIndex = '50'
		document.querySelector('.modalbox--active')?.classList.remove('modalbox--active')
		modalBox.classList.add('modalbox--active')
		this.config.shadow.classList.add('modalbox__shadow--show')
		this.bodyScroll()
		this.hideFixButton()
		this.isOpened = true

		this.config.afterShow?.(modalBox)
	}

	fillModalContent(modalBox, triggerButton) {

		const contentAttr = triggerButton.getAttribute('data-modal-content')

		if (!contentAttr) return

		let content = {}

		try {
			content = JSON.parse(contentAttr)
		} catch (err) {
			console.warn('Не удалось распарсить data-modal-content:', err)
			return
		}

		const titleEl = modalBox.querySelector('[data-title]')
		const submitEl = modalBox.querySelector('[data-submit-text]')
		const sourceInput = modalBox.querySelector('input[name="comments[Источник]"]')

		if (titleEl && content.title) titleEl.innerHTML = content.title
		if (submitEl && content.submitText) submitEl.innerHTML = content.submitText
		if (sourceInput) sourceInput.setAttribute('value', content.source || '')

	}

	close(modalBox) {

		this.config.beforeClose?.(modalBox)

		if (modalBox.classList.contains('modalbox_video')) {

			const video = modalBox.querySelector('video')

			if (video) {
				video.pause()
				video.currentTime = 0
			}
		}

		if (this.isOpened) {
			let header = document.querySelector('#header')
			header.style.zIndex = '500'
			modalBox.classList.remove('modalbox--active')
			this.config.shadow.classList.remove('modalbox__shadow--show')
			this.bodyScroll()
			this.isOpened = false
			const fixButton = document.querySelector('.fixMobileButton')
			if (fixButton) {
				this.showFixButton()
			}
		}
		this.config.afterClose?.(modalBox)
	}

	events() {

		document.addEventListener("click", function (e) {

			const openedModalBox = document.querySelector('.modalbox--active')
			const button = e.target.closest(`[${this.config.buttonsSelector}]`)

			if (button) {
				e.preventDefault()

				const targetModalBox = document.querySelector(`[data-modal="${button.getAttribute(this.config.buttonsSelector)}"]`)

				if (!targetModalBox) {
					console.warn('Модалка не найдена:', button.getAttribute(this.config.buttonsSelector))
					return
				}

				const iframe = targetModalBox.querySelector('iframe') ?? null
				const pdfUrl = iframe ? iframe.getAttribute('src') : null
				const isMobile = window.innerWidth < 1280

				if (isMobile && pdfUrl) {
					window.open(pdfUrl, '_blank')
				} else {
					this.open(targetModalBox, button)
				}

				return
			}

			if (e.target.closest('[data-modalboxClose]')) {
				e.preventDefault()
				this.close(openedModalBox)
				return
			}

			if (
				e.target.classList.contains('modalbox__wrap') ||
				e.target.closest('.modalbox__shadow')
			) this.close(openedModalBox)

		}.bind(this))
	}

	bodyScroll() {

		const html = document.documentElement
		const body = document.body
		const header = document.querySelector('#header')
		const marginSize = window.innerWidth - html.clientWidth

		if (this.isOpened === true) {
			html.classList.remove("modalbox__opened")
			body.style.marginRight = ""
			if (header.classList.contains('fix')) header.style.paddingRight = `0px`
			return
		}

		html.classList.add("modalbox__opened")
		if (marginSize) body.style.marginRight = `${marginSize}px`
		if (header.classList.contains('fix')) header.style.paddingRight = `${marginSize}px`
	}

	hideFixButton() { if (document.querySelector('.fixMobileButton')) this.fixButton.hidden = true }
	showFixButton() { if (document.querySelector('.fixMobileButton')) this.fixButton.hidden = false }
}

window.myModalBox = new ModalBox({
	afterClose: (modalBox) => {
		if (modalBox.classList.contains('modalbox_thanks')) {
			location.reload()
		}
	}
})


// myModalBox.open(document.querySelector('[data-modal="modalbox"]'))

initEventPicker()

function initEventPicker() {
	document.querySelectorAll('.event-picker').forEach(picker => {
		const cards = picker.querySelectorAll('.event-card')
		const nextButton = picker.querySelector('.event-picker__next')

		cards.forEach(card => {
			const input = card.querySelector('input[type="radio"]')

			card.addEventListener('click', () => {
				cards.forEach(c => c.classList.remove('event-card--active'))
				card.classList.add('event-card--active')
				input.checked = true
				nextButton.disabled = false
			})
		})

		nextButton.addEventListener('click', () => {
			const selected = picker.querySelector('input[type="radio"]:checked')
			if (!selected) return

			const currentModal = nextButton.closest('[data-modal]')
			const targetModalId = nextButton.getAttribute('data-next-modal')
			const targetModal = document.querySelector(`[data-modal="${targetModalId}"]`)

			if (!targetModal) {
				console.warn('Целевая модалка не найдена:', targetModalId)
				return
			}

			const hiddenField = targetModal.querySelector('input[name="comments[Мероприятие]"]')
			if (hiddenField) hiddenField.setAttribute('value', selected.value)

			window.myModalBox.close(currentModal)
			window.myModalBox.open(targetModal)
		})
	})
}

