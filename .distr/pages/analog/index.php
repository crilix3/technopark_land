{% set PAGE_SLUG = 'analog' %}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {% block styles %}
    <link rel="stylesheet" href="css/analog.style.css">
    <link rel="stylesheet" href="css/analog.responsive.css" media="(max-width: 767px)">
    <link rel="stylesheet" href="css/analog.ultrawide.css" media="(min-width: 1920px)">
    {% endblock %}
    <title>АНАЛОГОВЫЙ ТРАКТ</title>
</head>

<body>
    {% block blocks_inner %}
    <div class="wrapper">
        {% include '@analog/header/block.php' %}
        {% include '@analog/analog/block.php' %}
    </div>

    {% endblock %}
</body>

</html>