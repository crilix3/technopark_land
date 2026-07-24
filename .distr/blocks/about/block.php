{% import './data.php' as data %}


<section class="about" id="about">
	<div class="container">
		<div class="about__content">

			<h2 class="about__title">Об университете <span>Синергия</span></h2>
			<div class="about__txt_mb"><span>Наша цель</span>&nbsp;&mdash; качественное образование для вашей успешной карьеры</div>

			<div class="about__video">
				<div class="about__video-bg">
					<video class="about__video-bg-video" autoplay loop muted playsinline preload="auto">
						<source src="https://tilda.sys3.ru/shkolabasty/about.mp4" type="video/mp4"></source>
					</video>
				</div>

				<div class="about__video-label">
					<span>Наша цель</span> — качественное образование для&nbsp;твоей успешной карьеры
				</div>
				<div class="about__video-success swiper">
					<div class="about__video-success-content swiper-wrapper">
						{% for item in data.success %}
						<div class="about__video-success-item swiper-slide">
							<div class="about__video-success-item-rating">
								<span>{% if loop.index == 1 %} № 1 {% else %} ТОП-3 {% endif %}</span>
							</div>
							<div class="about__video-success-item-title">{{ item.title | safe }}</div>
							<div class="about__video-success-item-txt">{{ item.txt | safe }}</div>
						</div>
						{% endfor %}
					</div>
				</div>
				{#<div class="about__video-play">
					<a href="https://rutube.ru/play/embed/276918382c40f792215aeaaacbbc90c9/?p=aWcmfcM8_Gg9HiRz_eBiVA" data-fancybox data-type="iframe">
						<img src="img/about/icon-play.svg" alt="play">
					</a>
					<div>Смотрите видео об&nbsp;Университете</div>
				</div>#}
			</div>

			<div class="about__stat">
				{% for item in data.stat %}
				<div class="about__stat-item">
					<div class="about__stat-item-val">{{ item.val | safe }}</div>
					<div class="about__stat-item-txt">{{ item.txt | safe }}</div>
				</div>
				{% endfor %}
			</div>

		</div>
	</div>
</section>
