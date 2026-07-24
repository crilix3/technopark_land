{% import 'button/macro.php' as button %}


<header class="header" id="header">
	<div class="container">

		<div class="header__content">
			<a href="<?= $BASE_HREF_QUERY ?>">
				<img class="header__logo" src="img/header/logo.svg" alt="logo">
			</a>
			<div class="header__buttons">
				<button class="header__buttons-phone button" data-modal-button="modalbox" type="button">
					<span>Связаться</span>
				</button>
			</div>
		</div>

	</div>
</header>
