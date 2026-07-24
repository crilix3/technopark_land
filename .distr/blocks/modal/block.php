{% import 'form/macro.php' as form %}

<div class="modalbox modalbox_feedback" data-modal="modalbox" aria-hidden="true">
	<div class="modalbox__wrap">
		<div class="modalbox__window" role="modal" aria-modal="true">
			<button data-modalboxClose class="modalbox__close"></button>
			<div class="modalbox__form">
				{{ form.form ( form_id = 'modalbox', form_class = 'form_vertical', title
				= 'Остались вопросы? Оставьте заявку <br />
				и&nbsp;получите консультацию', button_txt = 'Оставить заявку',
				exclude_fields = { question: true, email: true } )}}
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
					{{ form.form ( form_id = 'modalbox-partner', form_class =
					'form_vertical', title = 'Стать партнером', button_txt = 'Оставить
					заявку', exclude_fields = { question: true, email: true } )}}
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