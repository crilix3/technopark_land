{% extends 'default.php' %}


{% block styles %}
<link rel="stylesheet" href="css/index.style.css">
<link rel="stylesheet" href="css/index.responsive.css" media="(max-width: 767px)">
<link rel="stylesheet" href="css/index.ultrawide.css" media="(min-width: 1920px)">
{% endblock %}


{% block blocks_inner %}
{% include 'circle/block.php' %}
{% include 'header/block.php' %}
{% include 'main/block.php' %}
{% include 'campus/block.php' %}
{% include 'global-studio/block.php' %}
{% include 'places/block.php' %}
{% include 'author-intro/block.php' %}
{% include 'final/block.php' %}

{% endblock %}
