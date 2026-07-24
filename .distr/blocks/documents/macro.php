{% import 'form/macro.php' as form %}


{% macro block( data, PAGE_SLUG ) %}
<section class="documents container {{ data.class }}" {% if data.id %} id="{{ data.id }}" {% endif %}>

	<div class="documents__header">
		<h2 class="documents__title h3">{{ data.title | safe }}</h2>
		<div class="documents__text">{{ data.text | safe }}</div>
	</div><!-- documents__header -->

	<div class="documents__cards">
		{% for card in data.cards %}
		<div class="documents__card">
			<div class="documents__card-header">
				<div class="documents__card-title">{{ card.title | safe }}</div>
				<div class="documents__card-text">{{ card.text | safe }}</div>
			</div>
			<div class="documents__card-image">
				<?php if ( $block['documents__card-image-emblem'] ) { ?>
					<img src="<?= $block['documents__card-image-emblem'] ?>" alt="" loading="lazy" class="documents__card-image-emblem">
				<?php } ?>
				<img src="{{ card.image_d | safe }}" alt="" loading="lazy" class="d-desktop">
				<img src="{{ card.image_m | safe }}" alt="" loading="lazy" class="d-mobile">
			</div><!-- documents__card-image -->
			{#<div class="documents__card-icon icons-look"></div>#}
		</div><!-- documents__card -->
		{% endfor %}
	</div><!-- documents__cards -->

	<div class="documents__form">
		{{ form.form(
		form_id = data.id,
		title = data.form.title,
		txt = data.form.text,
		button_txt = data.form.button,
		exclude_fields = { name: true, email: true }
		) }}
	</div><!-- documents__form -->

</section><!-- {{ data.id or data.class }} -->
{% endmacro %}
