{% macro block( data, PAGE_SLUG ) %}
<section class=" container {{ data.class }}" {% if data.id %} id="{{ data.id }}" {% endif %}>



</section><!-- {{ data.id or data.class }} -->
{% endmacro %}
