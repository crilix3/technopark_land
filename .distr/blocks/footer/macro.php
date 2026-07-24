{% macro block( data, PAGE_SLUG ) %}
<footer class="footer {{ data.class }}" {% if data.id %} id="{{ data.id }}" {% endif %}>
	<div class="container">

		<div class="footer__nav">
			<img class="footer__nav-logo" src="img/footer/logo.svg" alt="logo">
			<nav>
				<ul>
					<li><a href="#advantages" class="scroll">О школе</a></li>
					<li><a href="#programs" class="scroll">Программы обучения</a></li>
					<li><a href="#teachers" class="scroll">Преподаватели</a></li>
					<li><a href="#faq" class="scroll">Частые вопросы</a></li>
					<li>
						<button class="footer__nav-button button button_red arrowDecor" data-modal-button="modalbox" type="button">Подобрать программу</button>
					</li>
				</ul>
			</nav>
		</div>

		<div class="footer__content">
			<div class="footer__info">
				<?php if ( $block['footer__info-title'] ) { ?>
					<div class="footer__info-title">Контакты Школы современной музыки</div>
				<?php } ?>
				<div class="footer__info-content">
					<div class="footer__info-schedule">
						<h3>График работы</h3>
						<div><span>Пн. &mdash;&nbsp;вс.</span>&nbsp;09:00&nbsp;&mdash; 21:00</div>
					</div>
					<?php if ( $block['footer__info-phones'] ) { ?>
						<div class="footer__info-phones">
							<h3>Горячая линия</h3>
							<div class="footer__info-phones-items">
								<?= $block['phone-1-link'] ?>
								<?= $block['phone-2-link'] ?>
							</div>
						</div>
					<?php } ?>
					{#<div class="footer__info-phoneStudents">
						<h3 class="d-desktop">&nbsp;</h3>
						<a href="tel:<?= $phone_2_link ?>"><?= $phone_2 ?></a>
					</div>#}
				</div>
			</div>

			<div class="footer__feedback">
				<button class="footer__feedback-button button" data-modal-button="modalbox" type="button">Обратная связь</button>
				<?php if ( $block['vk-link'] ) { ?>
					<a href="<?= $block['vk-link'] ?>" target="_blank"><img src="img/footer/icon-vk.svg" alt="icon-vk" class="footer__feedback-icon-vk"></a>
				<?php } ?>
				<?php if ( $block['tg-link'] ) { ?>
					<a href="<?= $block['tg-link'] ?>" target="_blank"><img src="img/footer/icon-tg.svg" alt="icon-tg" class="footer__feedback-icon-tg"></a>
				<?php } ?>
			</div>
		</div>

		<div class="footer__legal">
			<div class="footer__legal-content">
				<?php if ( $block['license-link'] ) { ?>
					<div class="footer__legal-license"><a class="link-unhover" href="https://sys3.ru/zielseiten/shkolabasty.rf/license.pdf" target="_blank">Лицензия</a></div>
				<?php } ?>
				<div class="footer__legal-policy"><a class="link-unhover" href="<?= $block['privacy-link'] ?>" target="_blank">Политика конфиденциальности</a></div>
			</div><!-- footer__legal-content -->
			<div class="footer__legal-content">
				<div class="footer__legal-synergy">© <?= date('Y') ?> Synergy. Все права защищены</div>
				<?php if ( $block['footer__legal-design'] ) { ?>
					<div class="footer__legal-design">
						<span>Дизайн разработан «Синергия Креатив»</span>
						{#<a href="#">Подробнее</a>#}
					</div><!-- footer__legal-design -->
				<?php } ?>
				<?php if ( $block['footer__legal-synergydigital'] ) { ?>
					<div class="footer__legal-synergydigital">
						<span>Данный сайт принадлежит и&nbsp;управляется независимым рекламным агентством ООО &laquo;Синергия Диджитал&raquo;.</span>
						<a href="http://sydi.ru" target="_blank" rel="_nofollow">Подробнее</a>
					</div><!-- footer__legal-synergydigital -->
				<?php } ?>
			</div><!-- footer__legal-content -->
		</div><!-- footer__legal -->

	</div>
</footer><!-- {{ data.id or data.class }} -->
{% endmacro %}
