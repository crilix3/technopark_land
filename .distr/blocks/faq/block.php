{% from './data.njk' import data %}

<section class="faq" id="faq">
	<div class="container">
		<div class="faq__content">
			<h2 class="faq__title">Часто задаваемые вопросы</h2>

			<div class="faq__wrapper">
				<div class="faq__grid">
					{% for item in data %}
					<div class="faq__item">
						<button class="faq__item-header" type="button">
							<p class="faq__item-question">{{ item.question | safe }}</p>
							<span class="faq__item-arrow"></span>
						</button>

						<div class="faq__item-body">
							<p class="faq__item-answer">{{ item.answer | safe }}</p>
						</div>
					</div>
					{% endfor %}
				</div>
			</div>

		</div>
	</div>
</section>