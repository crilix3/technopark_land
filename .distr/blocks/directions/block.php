{% from './data.php' import data %}

<section class="directions" id="directions">
	<div class="container">
		<h2 class="directions__title">{{ data.title | safe }}</h2>
		<p class="directions__subtitle">{{ data.subtitle | safe }}</p>

		<ul class="directions__list">
			{% for item in data.items %}
			<li class="directions__item">
				<span class="directions__icon">
					<img class="lazy" data-src="{{ item.icon[0] | safe }}" alt="{{ item.icon[1] | safe }}">
				</span>
				<p class="directions__text">{{ item.text | safe }}</p>
			</li>
			{% endfor %}
		</ul>
	</div>
</section>