<!DOCTYPE html>

<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$QUERY_STRING = http_build_query($_GET);
$QUERY_PARAM = $QUERY_STRING ? '?' . $QUERY_STRING : '';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$BASE_HREF_QUERY = $BASE_HREF . $QUERY_PARAM;
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$lang = isset($_GET['lang']) && $_GET['lang'] != '' ? urldecode( strtolower($_GET['lang']) ) : 'ru';
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';
include_once $ROOT . 'chunks/common.php';

if ( is_local_dev() ) {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}
?>

{# Блок для переопределения get-переменных на отдельных страницах в pages #}
{% block preversion %}{% endblock %}

<?php include_once $ROOT . 'version.php'; ?>

{# Блок для переопределения php-переменных версий на отдельных страницах в pages #}
{% block version %}{% endblock %}

<html lang="<?= $lang ?>" class="<?= is_webp() ? '' : 'no-webp' ?>">
<head>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<base href="<?= $BASE_HREF_QUERY ?>">

	<title><?= $title ?></title>
	<meta name="description" content="<?= strip_tags($description) ?>">
	<meta property="og:title" content="<?= strip_tags($title) ?>">
	<meta property="og:description" content="<?= strip_tags($description) ?>">
	<meta property="og:url" content="<?= $URL ?>">
	<meta property="og:image" content="<?= $share_image ?>?<?= date('md') ?>">
	<link rel="image_src" href="<?= $share_image ?>?<?= date('md') ?>">

	{#<link rel="stylesheet" href="js/libs/scrollbar/jquery.mCustomScrollbar.min.css">#}

	{#<link rel="stylesheet" href="css/common.style.css">#}
	{#<link rel="stylesheet" href="css/common.responsive.css" media="(max-width: 767px)">#}
	{#<link rel="stylesheet" href="css/common.ultrawide.css" media="(min-width: 1920px)">#}

  	<link rel="preload" href="css/fonts/synergysans/synergysans-vf.ttf" as="font" type="font/ttf" crossorigin>
	{% block styles %}
	{% endblock %}

	<link rel="icon" type="image/png" sizes="192x192" href="img/common/favicon.png">
	<link rel="icon" type="image/svg+xml" href="img/common/favicon.svg">
	<link rel="icon" type="image/x-icon" href="favicon.ico">

	<?php if ( $gtm ) { ?>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?= $gtm ?>');</script>
	<?php } ?>
	<?php if ( $yaMetrikaId ) { ?>
		<script>(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date(); for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }} k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(<?= $yaMetrikaId ?>, "init", {clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, ecommerce:"dataLayer"});</script>
	<?php } ?>
	<?php if ( $fb_pixel ) { ?>
		<script>!function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '<?= $fb_pixel ?>'); fbq('track', 'PageView');</script>
	<?php } ?>

</head>
<body class="<?= $body_class ?> <?= $version ? 'version-' . $version : '' ?> <?= $partner ? 'partner-' . $partner : '' ?> <?= $gtm ? '' : 'no-gtm' ?> {{ 'page-' + PAGE_SLUG if PAGE_SLUG }}">


	<?php if ( $gtm ) { ?>
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<?php } ?>
	<?php if ( $yaMetrikaId ) { ?>
		<noscript><div><img src="https://mc.yandex.ru/watch/<?= $yaMetrikaId ?>" style="position:absolute; left:-9999px;" alt=""></div></noscript>
	<?php } ?>
	<?php if ( $fb_pixel ) { ?>
		<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?= $fb_pixel ?>&ev=PageView&noscript=1"></noscript>
	<?php } ?>


	<div id="preloader"></div>

	{% import 'form/macro.php' as form %}

	{% block blocks %}
	<div class="wrapper">
		{% block blocks_inner %}{% endblock %}
		{% include 'footer/block.php' %}
		{% include 'running-line/block.php' %}
	</div>

	{% block blocks_popups %}
	{% include 'modal/block.php' %}
	{% endblock %}

	<div hidden>
		<a href="http://sydi.ru" target="_blank" rel="_nofollow"></a>
		<form></form>
	</div>
	{% endblock %}


	{% block js %}
	<script src="js/libs/jquery.min.js"></script>
	<script src="js/libs/lazysizes.min.js" async></script>
	<script src="js/libs/swiper-bundle.min.js" defer></script>
	{#<script src="js/libs/scrollbar/jquery.mCustomScrollbar.concat.min.js" defer></script>#}
	{% endblock %}

	{% block script %}
	<script src="js/script.js" defer></script>
	{% endblock %}

	<script>
		(function(){
			function loadCSS(hf) {var ms=document.createElement('link');ms.rel='stylesheet';ms.href=hf;document.getElementsByTagName('head')[0].insertBefore(ms, document.getElementsByTagName('link')[0]);}
			{% block css %}
			loadCSS('css/libs/swiper-bundle.min.css');
			{% endblock %}
		})();
	</script>

	{% block lander %}
	<script src="https://syn.su/js/lander.js" async></script>
	{% endblock %}

</body>
</html>