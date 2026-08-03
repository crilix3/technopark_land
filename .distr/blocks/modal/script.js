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

	open(modalBox) {

		this.config.beforeShow?.(modalBox)

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

				const iframe = targetModalBox.querySelector('iframe') ?? null
				const pdfUrl = iframe ? iframe.getAttribute('src') : null
				const isMobile = window.innerWidth < 1280

				if (isMobile && pdfUrl) { // if PDF Iframe
					window.open(pdfUrl, '_blank')
				} else {
					this.open(targetModalBox)
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

