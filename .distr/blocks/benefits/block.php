{% from './data.php' import data %}

<section class="benefits" id="benefits">
	<div class="container">
		<h2 class="benefits__title">{{ data.title | safe }}</h2>

		<div class="benefits__list">
			{% for item in data.items %}
			<div class="benefits__item benefits__item-{{ loop.index }} lazy {% if item.class %}{{ item.class | safe }}{% endif %}">
				<h3 class="benefits__item-title">{{ item.title | safe }}</h3>
				<p class="benefits__item-text">{{ item.text | safe }}</p>
			</div>
			{% endfor %}
		</div>
	</div>
</section>