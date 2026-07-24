{% from './data.php' import data %}


<section class="teachers" id="teachers">
	<div class="container">
		<div class="teachers__content">

			<img class="teachers__icon" src="img/teachers/icon-b&s.svg" alt="basta & synergy">

			<h2 class="teachers__title">
			Ваше первое занятие проведут практикующие эксперты музыкальной индустрии
			</h2>

			<div class="teachers__nav-buttons swiper-button">
				<div class="teachers__nav-buttons-prev swiper-button-prev"></div>
				<div class="teachers__nav-buttons-next swiper-button-next"></div>
			</div>

			<div class="teachers__slider swiper">
				<div class="teachers__slider-content swiper-wrapper">
					{% for i in range(0, 2) %}
					{% for item in data %}
					<div class="teachers__item swiper-slide lazy" data-filter="{{ item.filter | safe }}">
						<div class="teachers__item-role">{{ item.role | safe }}</div>
						<div class="teachers__item-name">{{ item.name | safe }}</div>
						<img class="teachers__item-photo" src="img/teachers/cards/{{ item.photo | safe }}.png" alt="photo">
						{#<button class="teachers__item-button button" data-modal-button="modalbox" type="button">+</button>#}
					</div>
					{% endfor %}
					{% endfor %}
				</div>
			</div>

			{#<button class="teachers__button" data-modal-button="modalbox" type="button">Увидеть всех <span data-quantity>(30)</span></button>#}

		</div>
	</div>
</section>
