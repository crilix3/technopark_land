{% import 'form/macro.php' as form %}


{% macro block( data ) %}
<section class="thanks container {{ data.class }}" {% if data.id %} id="{{ data.id }}" {% endif %}>

	<div class="thanks__top">
		<div class="thanks__header">
			<div class="thanks__title h3">{{ data.title | safe }}</div>
			<div class="thanks__subtitle">{{ data.subtitle | safe }}</div>
			<div class="thanks__text">{{ data.text | safe }}</div>
			<a href="<?= $block['presentation-link'] ?>" class="thanks__button button button_red shadow arrowDecor" target="_blank">Скачать</a>
		</div><!-- thanks__header -->

		<div class="thanks__cards">
			{% for card in data.cards %}
			<div class="thanks__card">
				<div class="thanks__card-num">{{ loop.index }}</div>
				<div class="thanks__card-title">{{ card.title | safe }}</div>
				{% if card.text %}
				<div class="thanks__card-text">{{ card.text | safe }}</div>
				{% endif %}
			</div><!-- thanks__card -->
			{% endfor %}
		</div><!-- thanks__cards -->
	</div><!-- thanks__top -->

</section><!-- {{ data.id or data.class }} -->
{% endmacro %}
