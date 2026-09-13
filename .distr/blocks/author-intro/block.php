{% from 'common/macro.php' import webp %}
<section class="author-intro" id="author-intro">
	{% include 'circle-mobile/block.php' %}
	<div class="container">
		<div class="author-intro__wrapper">
			<h2 class="author-intro__title">БАСТА О ШКОЛЕ</h2>
			<a href="https://sys3.ru/zielseiten/shkolabasty.rf/video.mp4" data-fancybox data-type="video" class="author-intro__video-link">
				{{ webp(url='img/author-intro/preview.png', class='author-intro__preview', alt='Баста о школе') }}
				<span class="author-intro__play-btn"></span>
			</a>
		</div>
	</div>

</section>