{% import 'form/macro.php' as form %}

<div class="modalbox modalbox_feedback" data-modal="modalbox" aria-hidden="true">
	<div class="modalbox__wrap">
		<div class="modalbox__window" role="modal" aria-modal="true">
			<button data-modalboxClose class="modalbox__close"></button>
			<div class="modalbox__form">
				{% set ticket_fields = [
				{
				name: 'comments[Способ связи]',
				type: 'radio-group',
				placeholder: 'Выберите способ связи',
				options: [
				{ value: 'Звонок', text: 'Звонок' },
				{ value: 'WA/TG/Max и т.д.', text: 'WA/TG/Max и т.д.' }
				]
				},
				{
				name: 'comments[Источник]',
				type: 'hidden',
				value: 'Скидка'
				}
				] %}

				{{ form.form(
				form_id = 'modalbox-ticket',
				form_class = 'form_vertical',
				title = 'Запишитесь на экскурсиюпо кампусу',
				button_txt = 'Получить скидку',
				exclude_fields = { question: true, email: true },
				add_fields = ticket_fields
				)}}
			</div>
		</div>
	</div>
</div>

<div class="modalbox modalbox_feedback" data-modal="modalbox-partner" aria-hidden="true">
	<div class="modalbox__wrap">
		<div class="modalbox__window" role="modal" aria-modal="true">
			<button data-modalboxClose class="modalbox__close"></button>
			<div class="feedback__content">
				<div class="feedback__form">
					{% set ticket_fields = [
				{
				name: 'comments[Способ связи]',
				type: 'radio-group',
				placeholder: 'Выберите способ связи',
				options: [
				{ value: 'Звонок', text: 'Звонок' },
				{ value: 'WA/TG/Max и т.д.', text: 'WA/TG/Max и т.д.' }
				]
				},
				{
				name: 'comments[Источник]',
				type: 'hidden',
				value: 'Скидка'
				}
				] %}

				{{ form.form(
				form_id = 'modalbox-ticket',
				form_class = 'form_vertical',
				title = 'Запишитесь на экскурсиюпо кампусу',
				button_txt = 'Получить скидку',
				exclude_fields = { question: true, email: true },
				add_fields = ticket_fields
				)}}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modalbox modalbox_thanks" data-modal="modalbox-thanks" aria-hidden="true">
	<div class="modalbox__wrap">
		<div class="modalbox__window" role="modal" aria-modal="true">
			<button data-modalboxClose class="modalbox__close"></button>
			<div class="thanks__content">
				<div class="thanks__img"></div>
				<div class="thanks__info">
					<div class="thanks__info-title">Спасибо!</div>
					<button class="thanks__info-button button shadow" data-modalboxClose type="button">
						Закрыть
					</button>
				</div>
			</div>
		</div>
	</div>
</div>


{% include 'modalbox-open-day/block.php' %}