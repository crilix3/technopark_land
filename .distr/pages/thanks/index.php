{% extends 'default.php' %}

{% set PAGE_SLUG = 'thanks' %}


{% block preversion %}
<?php $subtitle = 'Спасибо!'; ?>
{% endblock %}


{% block styles %}
<link rel="stylesheet" href="css/thanks.style.css">
<link rel="stylesheet" href="css/thanks.responsive.css" media="(max-width: 767px)">
<link rel="stylesheet" href="css/thanks.ultrawide.css" media="(min-width: 1920px)">
{% endblock %}


{% block blocks_inner %}
{% include '@thanks/header/block.php' %}
{% include '@thanks/thanks/block.php' %}
{% endblock %}
