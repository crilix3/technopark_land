<?php
{% set data = {

	id: 'documents',
	title: 'Документы об&nbsp;обучении',
	text: 'У&nbsp;Школы современной музыки есть государственная аккредитация и&nbsp;лицензия на&nbsp;образовательную деятельность',
	cards: [
		{
			title: 'Высшее образование',
			text: 'Диплом государственного образца о&nbsp;высшем образовании',
			image_d: "<?= $block['documents__card-image-1_d'] ?>",
			image_m: "<?= $block['documents__card-image-1_m'] ?>"
		},
		{
			title: 'Колледж',
			text: 'Диплом государственного образца о&nbsp;среднем профессиональном образовании',
			image_d: "<?= $block['documents__card-image-2_d'] ?>",
			image_m: "<?= $block['documents__card-image-2_m'] ?>"
		},
		{
			title: 'Курсы',
			text: 'Удостоверение об&nbsp;окончании курсов дополнительного образования или&nbsp;повышения квалификации',
			image_d: "<?= $block['documents__card-image-3_d'] ?>",
			image_m: "<?= $block['documents__card-image-3_m'] ?>"
		}
	],
	form: {
		title: 'Хочешь узнать больше о&nbsp;Школе современной музыки <br><b>БАСТА × СИНЕРГИЯ?</b>',
		text: 'Поможем выбрать программу обучения и&nbsp;ответим на&nbsp;все вопросы',
		button: 'Получить консультацию'
	}

}%}


{# Резерв #}
{#



#}