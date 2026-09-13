{% from 'common/macro.php' import webp %}
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
							<div class="main__slide-content d-desktop">
								<img class="d-mobile" src="{{ item.image_m | safe }}" alt="">
								<div class="main__slide-text">
									<div class="main__slide-text_content">
										<div class="main__slide-fullText">
											<span class="main__slide-pretitle">Твой путь<br />в индустрию</span>
											<h1 class="main__slide-heading">Начинается здесь</h1>
										</div>
										<p class="main__slide-subtitle">Новый кампус Школы современной музыки <br /> БАСТА х СИНЕРГИЯ: учись и создавай<br />на профессиональном уровне</p>
									</div>
									<div class="main__slide-buttons">
										<button class="main__slide-button main__slide-button_primary btn-desktop" data-modal-button="modalbox" type="button"><span>Записаться на экскурсию по кампусу</span></button>
										<button class="main__slide-button main__slide-button_primary d-mobile" data-modal-button="modalbox" type="button"><span>Записаться на экскурсию</span></button>
									</div>
								</div>
							</div> <!-- main__slide-content -->
						</div>
						{% if item.date %}
						<div class="main__slide-date">{{ item.date | safe }}</div>
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
				{{ webp(url='img/main/basta.png', class='main__image--desc', alt='Баста', lazy=false, fetchpriority=true) }}
			</div> <!-- main__image -->

			{% if data.slider and data.slider.length > 1 %}
			<div class="main__nav swiper-nav">
				<div class="main__nav-button {{ main_class }} swiper-prev icons-arrow-prev"></div>
				<div class="main__nav-button {{ main_class }} swiper-next icons-arrow-next"></div>
			</div> <!-- main__slider-nav -->
			{% endif %}
		</div> <!-- main__content -->

		<a href="tel:+79687258796" class="main__phone-fab icons-phone" aria-label="Позвонить"></a>

	</div>
</section> <!-- main -->
{% endmacro %}