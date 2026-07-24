{% from './data.php' import data as items %}


<section class="intro" id="intro">
	<div class="container">

		<div class="intro__slider swiper">
			<div class="intro__slider-content swiper-wrapper">

				{% for item in items %}
				<div class="intro__item swiper-slide">
					<div class="intro__item-num">{{ loop.index | safe }}</div>
					<div class="intro__item-title">{{ item.title | safe }}</div>
					<div class="intro__item-txt">{{ item.txt | safe }}</div>
					<img class="intro__item-img" src="img/intro/img-{{ loop.index | safe }}.jpg" alt="">
				</div>
				{% endfor %}
				{% for item in items %}
				<div class="intro__item swiper-slide">
					<div class="intro__item-num">{{ loop.index | safe }}</div>
					<div class="intro__item-title">{{ item.title | safe }}</div>
					<div class="intro__item-txt">{{ item.txt | safe }}</div>
					<img class="intro__item-img" src="img/intro/img-{{ loop.index | safe }}.jpg" alt="">
				</div>
				{% endfor %}
			</div>

			<div class="intro__nav-buttons swiper-button">
				<div class="intro__nav-buttons-prev swiper-button-prev"></div>
				<div class="intro__nav-buttons-next swiper-button-next"></div>
			</div>
		</div>
	</div>
</section>
