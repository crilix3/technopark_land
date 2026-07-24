{% from './data.njk' import data %}

<section class="faq" id="faq">
	<div class="container">
		<div class="faq__content">
			<h2 class="faq__title">Часто задаваемые вопросы</h2>

			<!-- Десктоп -->
			<div class="faq__grid">
				{% for item in data %}
				<div class="faq__item">
					<div class="faq__item-preview">
						<p class="faq__item-question">{{ item.question | safe }}</p>
					</div>

					<div class="faq__item-full">
						<p class="faq__item-answer">{{ item.answer | safe }}</p>
					</div>

					<button class="faq__item-button button" type="button"></button>
				</div>
				{% endfor %}
			</div>

			<!-- Мобилка -->
			<div class="faq-mobile">
				{% for item in data %}
				<div class="faq-mobile__item">
					<div class="faq-mobile__header">
						<p class="faq-mobile__question">{{ item.question | safe }}</p>
						<button class="faq-mobile__button button" type="button"></button>
					</div>

					<div class="faq-mobile__answer-wrap">
						<p class="faq-mobile__answer">{{ item.answer | safe }}</p>
					</div>
				</div>
				{% endfor %}
			</div>
		</div>
	</div>
</section>