{% import 'form/macro.php' as form %}


{% macro block( data, PAGE_SLUG ) %}
<section class="modalbox modalbox-open-day {{ data.class }}" data-modal="{{ data.id }}" aria-hidden="true">
	<div class="modalbox__wrap">
		<div class="modalbox__window" role="modal" aria-modal="true">

			<button data-modalboxClose class="modalbox__close"></button>

			<div class="modalbox-open-day__header">
				<div class="modalbox-open-day__title-1">{{ data.title_1 | safe }}</div>
				<div class="modalbox-open-day__title-2">{{ data.title_2 | safe }}</div>
			</div><!-- modalbox-open-day__header -->

			<div class="modalbox-open-day__tags">
				{% for tag in data.tags %}
				<div class="modalbox-open-day__tag">{{ tag | safe }}</div>
				{% endfor %}
			</div><!-- modalbox-open-day__tags -->

			<div class="modalbox-open-day__date">{{ data.date | safe }}</div>

			<div class="modalbox-open-day__cards">
				{% for card in data.cards %}
				<div class="modalbox-open-day__card modalbox-open-day__card_{{ loop.index }} {{ 'modalbox-open-day__card_black' if loop.index > 3 }}">
					{% if loop.index < 4 %}
					<div class="modalbox-open-day__card-num">{{ loop.index }}</div>
					{% endif %}
					<div class="modalbox-open-day__card-title">{{ card | safe }}</div>
				</div><!-- modalbox-open-day__card -->
				{% endfor %}
			</div><!-- modalbox-open-day__cards -->

			<div class="modalbox-open-day__form">
				{{ form.form (
				form_id = data.id,
				title = data.form.title,
				txt = data.form.text,
				button_txt = data.form.button,
				exclude_fields = { name: true, email: true }
				)}}
			</div><!-- modalbox__form -->

		</div><!-- modalbox__window -->
	</div><!-- modalbox__wrap -->
</section><!-- modalbox -->
{% endmacro %}
