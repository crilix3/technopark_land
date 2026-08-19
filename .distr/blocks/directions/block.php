{% from 'common/macro.php' import webp %}
{% from './data.php' import data %}

<section class="directions" id="directions">
	<div class="container">
		<h2 class="directions__title">{{ data.title | safe }}</h2>
		<p class="directions__subtitle">{{ data.subtitle | safe }}</p>

		<ul class="directions__list">
			{% for item in data.items %}
			<li class="directions__item">
				<span class="directions__icon">
					{{ webp(url=item.icon[0], alt=item.icon[1]) }}
				</span>
				<p class="directions__text">{{ item.text | safe }}</p>
			</li>
			{% endfor %}
		</ul>
	</div>
</section>