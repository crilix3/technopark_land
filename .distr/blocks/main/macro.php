{% import 'form/macro.php' as form %}

{% macro block( data, main_class='', main_id='' ) %}
<section class="main {{ main_class }} <?php if (!empty($_REQUEST['h1']) || !empty($_REQUEST['h2'])): ?>main_substitution<?php endif; ?>" id="{{ main_id }}">
	<div class="container">
		<div class="main__content">
			<div class="main__slider swiper">
				<div class="swiper-wrapper">
					{% for item in data.slider %}
					<div class="main__slide swiper-slide {% if item.centered %}main__slide_centered{% endif %}">
						<div class="main__slide-title">
							<img class="d-desktop" src="{{ item.image_d | safe }}" alt="">
							<img class="d-mobile" src="{{ item.image_m | safe }}" alt="">
						</div> <!-- main__slide-title -->
						{% if item.date %}
						<div class="main__slide-date">{{ item.date | safe }}</div>
						{% endif %}
						{% if item.popup %}
						<button class="main__slide-button button arrowDecor" data-modal-button="{{ item.popup[1] | safe }}" type="button"><span>{{ item.popup[0] | safe }}</span></button>
						{% endif %}
						{% if data.mobile_form %}
						<div class="main__slide-form d-mobile">
							{{ form.form(
							form_id = 'main-bottom',
							title = 'Получи реальный опыт в&nbsp;музыкальной индустрии под&nbsp;наставничеством действующих артистов',
							txt = 'Запишись на бесплатное мероприятие по одному из направлений',
							button_txt = 'Отправить',
							exclude_fields = { name: true, email: true }
							) }}
						</div>
						{% endif %}
					</div> <!-- main__slide -->
					{% endfor %}
				</div> <!-- swiper-wrapper -->
			</div> <!-- main__slider -->

			<div class="main__image">
				<img src="img/main/basta.png" alt="">
			</div> <!-- main__image -->

			{% if data.slider and data.slider.length > 1 %}
			<div class="main__nav swiper-nav">
				<div class="main__nav-button {{ main_class }} swiper-prev icons-arrow-prev"></div>
				<div class="main__nav-button {{ main_class }} swiper-next icons-arrow-next"></div>
			</div> <!-- main__slider-nav -->
			{% endif %}
		</div> <!-- main__content -->

		<a href="tel:+74951391151" class="main__phone-fab icons-phone" aria-label="Позвонить"></a>

	</div>
</section> <!-- main -->
{% endmacro %}