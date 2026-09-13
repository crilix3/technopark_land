{% set PAGE_SLUG = 'audio-core' %}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {% block styles %}
    <link rel="stylesheet" href="css/audio-core.style.css">
    <link rel="stylesheet" href="css/audio-core.responsive.css" media="(max-width: 767px)">
    <link rel="stylesheet" href="css/audio-core.ultrawide.css" media="(min-width: 1920px)">
    {% endblock %}
    <title>АУДИО ЯДРО И КОНТРОЛЬ</title>
</head>

<body>
    {% block blocks_inner %}
    <div class="wrapper">
        {% include '@audio-core/header/block.php' %}
        {% include '@audio-core/audio-core/block.php' %}
    </div>

    {% endblock %}
</body>

</html>