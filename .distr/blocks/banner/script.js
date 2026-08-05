document.querySelectorAll('.scroll-down').forEach(button => {
	button.addEventListener('click', () => {
		const targetSelector = button.getAttribute('data-scroll-target');
		const target = document.querySelector(targetSelector);

		if (target) {
			target.scrollIntoView({ behavior: 'smooth', block: 'start' });
		}
	});
});