{% extends 'default.php' %}


{% block styles %}
<link rel="stylesheet" href="css/index.style.css">
<link rel="stylesheet" href="css/index.responsive.css" media="(max-width: 767px)">
<link rel="stylesheet" href="css/index.ultrawide.css" media="(min-width: 1920px)">
{% endblock %}


{% block blocks_inner %}
{% include 'header/block.php' %}
{% include 'main/block.php' %}
{% include 'directions/block.php' %}
{% include 'programs/block.php' %}
{% include 'banner/block.php' %}
{% include 'benefits/block.php' %}
{% include 'lesson-slider/block.php' %}
{% include 'places/block.php' %}
{% include 'outcomes/block.php' %}
{% include 'faq/block.php' %}
{% include 'final/block.php' %}

{% endblock %}
