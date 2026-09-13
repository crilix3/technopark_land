{% set PAGE_SLUG = 'microphones' %}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {% block styles %}
    <link rel="stylesheet" href="css/microphones.style.css">
    <link rel="stylesheet" href="css/microphones.responsive.css" media="(max-width: 767px)">
    <link rel="stylesheet" href="css/microphones.ultrawide.css" media="(min-width: 1920px)">
    {% endblock %}
    <title>МИКРОФОНЫ</title>
</head>

<body>
    {% block blocks_inner %}
    <div class="wrapper">
        {% include '@microphones/header/block.php' %}
        {% include '@microphones/microphones/block.php' %}
    </div>

    {% endblock %}
</body>

</html>