{% from './data.php' import data %}


<section class="programs" id="programs" data-filteredAndLimitedCards>
	<div class="container">

		<div class="programs__filter">
			{% for button in data.buttons %}
			<button class="programs__filter-button {% if loop.first %} active{% endif %}" type="button" data-filter="{{ button | safe }}" data-filterBtn>
				{{ button | safe }}
			</button>
			{% endfor %}
		</div>

		<div class="programs__content">
			{% for item in data.items %}
			{% if item.category == 'special' %}
			<div class="programs__item programs__item--special" data-item data-filter="">
				<div class="programs__item-date">22 апреля в 18:00</div>
				<h3 class="programs__item-title">Приглашаем тебя на&nbsp;день открытых дверей</h3>
				<button class="programs__item-buttonMore button arrowDecor" data-modal-button="modalbox-open-day" type="button">
					Узнать больше
				</button>
			</div>
			{% else %}
			<div class="programs__item" data-item data-filter="{{ item.category | safe }}">
				<div class="programs__item-img">
					<img src="img/programs/cards/{{ item.id | safe }}.jpg" alt="program-preview">
				</div>
				<div class="programs__item-info">
					<div class="programs__item-info-category">{{ item.category_text | safe }}</div>
					<h3 class="programs__item-info-title">{{ item.title | safe }}</h3>
					<button class="programs__buttonLast" data-modal-button="modalbox">
						Записаться
					</button>
				</div>

			</div>
			{% endif %}
			{% endfor %}
		</div>

		<button class="programs__button" data-moreBtn type="button">
			Показать ещё <span data-quantity></span>
		</button>

	</div>
</section>