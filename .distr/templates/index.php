{% extends 'default.php' %}


{% block styles %}
<link rel="stylesheet" href="css/index.style.css">
<link rel="stylesheet" href="css/index.responsive.css" media="(max-width: 767px)">
<link rel="stylesheet" href="css/index.ultrawide.css" media="(min-width: 1920px)">
{% endblock %}


{% block blocks_inner %}
{% include 'header/block.php' %}
{% include 'main/block.php' %}
{% include 'trial-cta/block.php' %}
{% include 'ecosystem/block.php' %}
{% include 'advantages/block.php' %}
{% include 'lesson-preview/block.php' %}
{% include 'programs/block.php' %}
{% include 'author-intro/block.php' %}
{% include 'teachers/block.php' %}
{% include 'places/block.php' %}
{% include 'signup-steps/block.php' %}
{% include 'faq/block.php' %}
{% include 'final/block.php' %}

{% endblock %}
