<?php
// Defaults
$title = 'Школа современной музыки БАСТА × СИНЕРГИЯ | Вокал, рэп, звукорежиссура' . (isset($subtitle) ? ' | ' . $subtitle : '');
$description = isset($description) ? $description : 'Пройди бесплатное пробное занятие и учись у тех, кто задаёт тренды в музыкальной индустрии. Более 20 современных направлений под руководством артистов GAZ и преподавателей школы БАСТА × СИНЕРГИЯ';
$share_image = 'img/common/share.jpg';

$body_class = '';

$gtm = get_gtm() ?? '';
$yaMetrikaId = '108514105';
$fb_pixel = '';

$unit = 'uncertain';
$type = '';
$land = 'basta_trial_lesson';
$redirect = 'thanks/';
$quote_id = '';


/* Blocks */
$block['is-block-about'] = true;

$block['phone-1'] = '8 968 725-87-96';
$block['phone-2'] = '8 910 638 86 04';
$block['email'] = '';

$block['license-link'] = 'https://sys3.ru/zielseiten/shkolabasty.rf/license.pdf';
$block['privacy-link'] = '#privacy';
$block['vk-link'] = 'https://vk.ru/bastaschool';
$block['tg-link'] = 'https://t.me/bastaschool';
$block['presentation-link'] = 'https://disk.yandex.ru/d/Wbc3-BJX5G_zTA';

$block['documents__card-image-emblem'] = 'img/documents/emblem.svg';
$block['documents__card-image-1_d'] = 'img/documents/diploma-red.svg';
$block['documents__card-image-1_m'] = $block['documents__card-image-1_d'];
$block['documents__card-image-2_d'] = 'img/documents/diploma-green.svg';
$block['documents__card-image-2_m'] = $block['documents__card-image-2_d'];
$block['documents__card-image-3_d'] = 'img/documents/diploma-blue.svg';
$block['documents__card-image-3_m'] = $block['documents__card-image-3_d'];

$block['footer__info-title'] = true;
$block['footer__info-address'] = true;
$block['footer__info-phones'] = true;
$block['footer__legal-design'] = true;
$block['footer__legal-synergydigital'] = true;

$h1 = '';
$h2 = '';

/* Versions */
switch ($version) {
	case 'basta_trial_kids':
		$land = 'basta_trial_kids';
	break;
	case 'two':
		$land = 'two';
	break;
}

/* Postprocess */
$block['phone-1-link'] = get_phone_link($block['phone-1']);
$block['phone-2-link'] = get_phone_link($block['phone-2']);
$block['email-link'] = get_email_link($block['email']);

$action = implode(array(
	'&unit=', $unit,
	'&type=', $type,
	'&land=', $land,
	'&lang=', $lang,
	'&version=', $version,
	'&partner=', $partner,
	'&quote_id=', $quote_id,
	'&redirect=', urlencode($redirect),
	'&ignore-thanksall=1'
));