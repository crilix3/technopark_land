<section class="ecosystem" id="ecosystem">
	<div class="container">
		<div class="ecosystem__content">

			<div class="ecosystem__top">
				<picture>
					<source srcset="img/ecosystem/top_m.svg" media="(max-width: 767px)"/>
					<img src="img/ecosystem/top_d.svg" alt="">
				</picture>
			</div>

			<div class="ecosystem__box">
				<div class="ecosystem__animation ecosystem__animation_reverse">
					{% for i in range(0, 7) %}
					<div class="ecosystem__animation-item ecosystem__animation-item_{{ 7 - i }}" style="--i: {{ i }};">
						<svg preserveAspectRatio="xMinYMid meet" viewBox="0 0 69 151" fill="none" xmlns="http://www.w3.org/2000/svg" class="ecosystem__animation-img">
							<g class="anim-group group-base">
								<path d="M68.0673 150.245C61.0917 146.375 54.8186 141.767 49.2498 136.417C41.1988 128.527 34.919 119.348 30.4104 108.882C25.9019 98.2545 23.6473 86.9828 23.6472 75.0673C23.6472 63.1517 25.9018 51.9606 30.4104 41.4942C34.9191 30.8668 41.1987 21.6081 49.2498 13.718C54.8187 8.36753 61.0915 3.79549 68.0673 0V150.245Z" fill="#ED131C"/>
								<path d="M23.4447 134.226C16.4213 126.842 10.8608 118.394 6.76325 108.882C2.25468 98.2545 7.82013e-05 86.9828 5.34058e-05 75.0673C5.34058e-05 63.1517 2.25465 51.9606 6.76325 41.4942C10.8608 31.8357 16.4212 23.3077 23.4447 15.9102V134.226Z" fill="#ED131C"/>
							</g>
							<g class="anim-group group-secondary">
								<path d="M68.0673 150.245C61.0917 146.375 54.8186 141.767 49.2498 136.417C41.1988 128.527 34.919 119.348 30.4104 108.882C25.9019 98.2545 23.6473 86.9828 23.6472 75.0673C23.6472 63.1517 25.9018 51.9606 30.4104 41.4942C34.9191 30.8668 41.1987 21.6081 49.2498 13.718C54.8187 8.36753 61.0915 3.79549 68.0673 0V150.245Z" fill="#ED131C"/>
								<path d="M23.4447 134.226C16.4213 126.842 10.8608 118.394 6.76325 108.882C2.25468 98.2545 7.82013e-05 86.9828 5.34058e-05 75.0673C5.34058e-05 63.1517 2.25465 51.9606 6.76325 41.4942C10.8608 31.8357 16.4212 23.3077 23.4447 15.9102V134.226Z" fill="#ED131C"/>
							</g>
						</svg>
					</div>
					{% endfor %}
				</div>

				<img class="ecosystem__box-image" src="img/ecosystem/bs.svg" alt="">

				<div class="ecosystem__animation ecosystem__animation_direct">
					{% for i in range(0, 7) %}
					<div class="ecosystem__animation-item ecosystem__animation-item_{{ i + 1 }}" style="--i: {{ i }};">
						<svg preserveAspectRatio="xMaxYMid meet" viewBox="0 0 69 151" fill="none" xmlns="http://www.w3.org/2000/svg" class="ecosystem__animation-img">
							<g class="anim-group group-base">
								<path d="M-0.00549316 150.245C6.97013 146.375 13.2432 141.767 18.812 136.417C26.863 128.527 33.1427 119.348 37.6513 108.882C42.1599 98.2545 44.4145 86.9828 44.4145 75.0673C44.4145 63.1517 42.1599 51.9606 37.6513 41.4942C33.1427 30.8668 26.863 21.6081 18.812 13.718C13.2431 8.36753 6.97029 3.79549 -0.00549316 0V150.245Z" fill="#ED131C"/>
								<path d="M44.6171 134.226C51.6405 126.842 57.201 118.394 61.2985 108.882C65.8071 98.2545 68.0617 86.9828 68.0617 75.0673C68.0617 63.1517 65.8071 51.9606 61.2985 41.4942C57.201 31.8357 51.6406 23.3077 44.6171 15.9102V134.226Z" fill="#ED131C"/>
							</g>
							<g class="anim-group group-secondary">
								<path d="M-0.00549316 150.245C6.97013 146.375 13.2432 141.767 18.812 136.417C26.863 128.527 33.1427 119.348 37.6513 108.882C42.1599 98.2545 44.4145 86.9828 44.4145 75.0673C44.4145 63.1517 42.1599 51.9606 37.6513 41.4942C33.1427 30.8668 26.863 21.6081 18.812 13.718C13.2431 8.36753 6.97029 3.79549 -0.00549316 0V150.245Z" fill="#ED131C"/>
								<path d="M44.6171 134.226C51.6405 126.842 57.201 118.394 61.2985 108.882C65.8071 98.2545 68.0617 86.9828 68.0617 75.0673C68.0617 63.1517 65.8071 51.9606 61.2985 41.4942C57.201 31.8357 51.6406 23.3077 44.6171 15.9102V134.226Z" fill="#ED131C"/>
							</g>
						</svg>
					</div>
					{% endfor %}
				</div>
			</div>

			<div class="ecosystem__info">

				<h2 class="ecosystem__info-title">Музыкальная <br>образовательная экосистема полного цикла</h2>

				<div class="ecosystem__info-txt">Школа современной музыки обучает на всех уровнях — от индивидуальных занятий и курсов до программ среднего и высшего образования</div>
				<div class="ecosystem__info-txt">Мы объединяем академическую базу и энергию индустрии, чтобы превращать талант в профессию</div>
			</div>

			<div class="ecosystem__photos">
				<div class="ecosystem__photos-track">
					{% for i in range(0, 2) %}
					<div class="ecosystem__photos-track-group">
						<img src="img/ecosystem/students-01.png" alt="">
						<img src="img/ecosystem/students-01.png" alt="">
					</div>
					{% endfor %}
				</div>
				<div class="ecosystem__photos-track">
					{% for i in range(0, 2) %}
					<div class="ecosystem__photos-track-group">
						<img src="img/ecosystem/students-02.png" alt="">
						<img src="img/ecosystem/students-02.png" alt="">
					</div>
					{% endfor %}
				</div>
			</div>

			<q class="ecosystem__quote">«В каждом наброске, в каждом черновике учитель продолжается в своём ученике»</q>

		</div>
	</div>
</section>
