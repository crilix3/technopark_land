{% from './data.php' import data %}

<section class="places" id="places">
	<div class="places__content">

		<h2 class="places__title">почему ученики выбирают школу</h2>

		<div class="places__slider swiper ">
			<div class="places__slider-content swiper-wrapper">
				{% for i in range(0, 2) %}
				{% for item in data %}
				<?php if ( empty($block['places__item_hide']['{{ item.id }}']) ) { ?>
				<div class="places__item swiper-slide" data-filter="{{ item.filter | safe }}">
					{% if item.metro %}
					<div class="places__item-metro"><span>{{ item.metro | safe }}</span></div>
					{% endif %}
					<div class="places__item-txt">{{ item.txt | safe }}</div>
					<img class="places__item-place" src="img/places/cards/{{ item.id }}.jpg" alt="">
				</div><!-- places__item -->
				<?php } ?>
				{% endfor %}
				{% endfor %}
			</div>
			<div class="places__nav-buttons swiper-button">
				<div class="places__nav-buttons-prev swiper-button-prev"></div>
				<div class="places__nav-buttons-next swiper-button-next"></div>
			</div>
		</div>

	</div>
</section>