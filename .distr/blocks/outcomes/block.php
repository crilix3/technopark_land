{% from './data.php' import data %}

<section class="outcomes" id="outcomes">
	<div class="container">
		<h2 class="outcomes__title">{{ data.title | safe }}</h2>

		<p class="outcomes__subtitle">{{ data.subtitle | safe }}</p>

		<div class="outcomes__list">
			{% for item in data.items %}
			<div class="outcomes__item outcomes__item-{{ loop.index }} lazy {% if item.class %}{{ item.class | safe }}{% endif %}">
				<h3 class="outcomes__item-title">{{ item.title | safe }}</h3>
				<p class="outcomes__item-text">{{ item.text | safe }}</p>
			</div>
			{% endfor %}
		</div>

		<p class="outcomes__caption">{{ data.caption | safe }}</p>

		<button class="outcomes__button buttonRegister" data-modal-button="modalbox" type="button">
			<span>{{ data.button | safe }}</span>
		</button>
	</div>
</section>