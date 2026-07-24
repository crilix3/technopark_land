{% import 'button/macro.php' as button %}


<header class="header" id="header">
	<div class="container">

		<div class="header__content">

			<a href="<?= $BASE_HREF_QUERY ?>">
				<img class="header__logo" src="img/header/logo.svg" alt="logo">
			</a>

			<nav class="header__nav">
				<ul>
					<li><a href="#advantages" class="scroll">О школе</a></li>
					<li><a href="#programs" class="scroll">Программы обучения</a></li>
					<li><a href="#teachers" class="scroll">Преподаватели</a></li>
					<li><a href="#faq" class="scroll">Частые вопросы</a></li>
				</ul>
			</nav>

			<div class="header__buttons">

				<button class="buttonRegister icons-arrow" data-modal-button="modalbox" type="button">
					<span>Записаться на пробное занятие</span>
				</button>
					<button class="buttonRegister buttonRegister-mobile icons-arrow" data-modal-button="modalbox" type="button">
						<span>Записаться на пробник</span>
					</button>

			</div>

		</div>

		<nav class="header__nav header__nav_mb">
			<ul>
				<li><a href="#advantages" class="scroll">О школе</a></li>
				<li><a href="#programs" class="scroll">Программы обучения</a></li>
				<li><a href="#teachers" class="scroll">Преподаватели</a></li>
				<li><a href="#faq" class="scroll">Частые вопросы</a></li>
			</ul>
		</nav>
	</div>

	<div class="header__menu menu" data-nav data-nav-close>

		<div class="header__menu-wrapper">

			<div class="header__menu-info-wrapper">

				<?php if ( $block['footer__info-phones'] ) { ?>
				<div class="header__menu-info">
					<h3 class="header__menu-info-subtitle">Горячая линия</h3>
					<div class="header__menu-info-phones">
						<?= $block['phone-1-link'] ?>
						<?= $block['phone-2-link'] ?>
					</div>
					{#<div class="header__menu-info-phoneStudents">
						<h3>Для студентов</h3>
						<a href="tel:88003500060">8 800 350-00-60</a>
					</div>#}
				</div>
				<?php } ?>

				<?php if ( $block['footer__info-address'] ) { ?>
				<div class="header__menu-address">
					<h3>Адреса приёмных комиссий:</h3>
					<div><span>Сокол</span> Ленинградский проспект, 80Г</div>
					<div><span>Семеновская</span> Улица Измайловский Вал, 2</div>
					<div><span>Охотный ряд</span> Улица Тверская, 4</div>
				</div>
				<?php } ?>

				<div class="header__menu-info-schedule">
					<h3>График работы:</h3>
					<div>Пн-Вс&nbsp;<span>09:00 - 21:00</span></div>
				</div>

				<div class="header__menu-buttons">
					<button class="header__menu-buttons-feedback button shadow" data-modal-button="modalbox" type="button">
						Обратная связь
					</button>
					<?php if ( $block['vk-link'] ) { ?>
					<a href="<?= $block['vk-link'] ?>" target="_blank"><img src="img/header/icon-vk.svg" alt="icon-vk"></a>
					<?php } ?>
					<?php if ( $block['tg-link'] ) { ?>
					<a href="<?= $block['tg-link'] ?>" target="_blank"><img src="img/header/icon-tg.svg" alt="icon-tg"></a>
					<?php } ?>
				</div>
			</div>
		</div>

		<button class="header__menu-close" type="button" data-nav-close></button>
	</div>

</header>