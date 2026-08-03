{% import 'button/macro.php' as button %}
{% import 'form/macro.php' as form %}


{% macro block( data, PAGE_SLUG ) %}
<section class="presentation container {{ data.class }}" {% if data.id %} id="{{ data.id }}" {% endif %}>

	<div class="presentation__top">
		<div class="presentation__header">
			<h2 class="presentation__title h3">{{ data.title | safe }}</h2>
			<div class="presentation__text">{{ data.text | safe }}</div>
		</div><!-- presentation__header -->

		<div class="presentation__cards">
			{% for card in data.cards %}
			<div class="presentation__card">
				<div class="presentation__card-num">{{ loop.index }}</div>
				<div class="presentation__card-title">{{ card.title | safe }}</div>
				{% if card.text %}
				<div class="presentation__card-text">{{ card.text | safe }}</div>
				{% endif %}
			</div><!-- presentation__card -->
			{% endfor %}
		</div><!-- presentation__cards -->
	</div><!-- presentation__top -->

	<div class="presentation__form">
		{{ form.form(
		form_id = data.id,
		title = data.form.title,
		txt = data.form.text,
		button = button.black({
			title: data.form.button,
			icon: 'icons-corner-right',
			attr: 'type="submit"'
		}),
		exclude_fields = { name: true, email: true }
		) }}
	</div><!-- presentation__form -->

</section><!-- {{ data.id or data.class }} -->
{% endmacro %}
