document.querySelectorAll('.faq__item-button').forEach(btn => {
	btn.addEventListener('click', function () {
		const item = this.closest('.faq__item');
		item.classList.toggle('is-open');
	});
});

document.querySelectorAll('.faq-mobile__button').forEach(btn => {
	btn.addEventListener('click', function () {
		const item = this.closest('.faq-mobile__item');
		item.classList.toggle('is-open');
	});
});