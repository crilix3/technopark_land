{% set PAGE_SLUG = 'soft' %}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {% block styles %}
    <link rel="stylesheet" href="css/soft.style.css">
    <link rel="stylesheet" href="css/soft.responsive.css" media="(max-width: 767px)">
    <link rel="stylesheet" href="css/soft.ultrawide.css" media="(min-width: 1920px)">
    {% endblock %}
    <title>СОФТ И ПРОДАКШН</title>
</head>

<body>
    {% block blocks_inner %}
    <div class="wrapper">
        {% include '@soft/header/block.php' %}
        {% include '@soft/soft/block.php' %}
    </div>

    {% endblock %}
</body>

</html>