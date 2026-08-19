{% macro webp(url, class, alt, lazy=true, fetchpriority=false) %}
{% set pathname = url.slice( 0, url.length - 3) %}
{% set attr = 'src' %}

{% if lazy %}
{% set attr = 'data-src' %}
{% set class = class | default('') + ' lazy' %}
{% endif %}

<img {{ attr }}="<?= is_local_dev() ? '{{ url }}' : '{{ pathname }}webp' ?>" alt="{{ alt }}" {% if fetchpriority %} fetchpriority="high" {% endif %} {% if class %}class="{{ class }}"{% endif %}  {% if not fetchpriority %}loading="lazy"{% endif %}>
{% endmacro %}