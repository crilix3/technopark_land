document.querySelectorAll('.faq__item-header').forEach(header => {
	header.addEventListener('click', () => {
		const item = header.closest('.faq__item');
		const isActive = item.classList.contains('active');

		document.querySelectorAll('.faq__item.active').forEach(el => {
			el.classList.remove('active');
		});

		if (!isActive) {
			item.classList.add('active');
		}
	});
});