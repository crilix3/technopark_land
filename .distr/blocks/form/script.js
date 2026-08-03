{
	/* Inits */
	initSendSuccess();
	initCheckboxes();


	/* Functions */
	function initSendSuccess() {
		document.querySelectorAll('form').forEach(form => {
			/* Событие после отправки, которое генерит лендер */
			form.addEventListener('send-success', event => {

				document.querySelector('body').classList.add('page-form-sended');
				event.currentTarget.classList.add('form-sended');

			});
		});
	}


	function initCheckboxes() {
		const checkboxes = document.querySelectorAll('input[name="personalDataAgree"]');

		if ( !checkboxes.length ) return;

		document.addEventListener('focus', ({ target }) => {
			const { form } = target;

			if ( !form || target.matches('[type="hidden"], [name="personalDataAgree"]') ) return;

			checkboxes.forEach((checkbox) => {
				if ( checkbox.form === form && !checkbox.checked ) {
					checkbox.checked = true;
					checkbox.dispatchEvent(new Event('change', { bubbles: true }));
					if ( window.jQuery ) window.jQuery(checkbox).trigger('change');
				}
			});
		}, true);
	}

}