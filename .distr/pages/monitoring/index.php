{% set PAGE_SLUG = 'monitoring' %}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {% block styles %}
    <link rel="stylesheet" href="css/monitoring.style.css">
    <link rel="stylesheet" href="css/monitoring.responsive.css" media="(max-width: 767px)">
    <link rel="stylesheet" href="css/monitoring.ultrawide.css" media="(min-width: 1920px)">
    {% endblock %}
    <title>МОНИТОРИНГ</title>
</head>

<body>
    {% block blocks_inner %}
    <div class="wrapper">
        {% include '@monitoring/header/block.php' %}
        {% include '@monitoring/monitoring/block.php' %}
    </div>

    {% endblock %}
</body>

</html>