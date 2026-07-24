{% macro common( data ) %}
{% set tag = 'a' if data.href or (data.attr and 'href' in data.attr) else 'button' %}
<{{ tag }} {% if data.href or data.href == '' %} href="{{ data.href | safe }}" {% if 'https' in data.href %} target="_blank" {% endif %}{% endif %} {{ data.attr | safe }} class="button {{ data.class | striptags(true) | safe }}">
	{{ data.title | safe }}
	{%- if data.icon %}<i class="button__icon {{ data.icon }}">{%- if data.icon_content %}<span class="{{ data.icon_content }}"></span>{% endif %}</i>{% endif %}
	{%- if data.note %}<div class="button__note">{{ data.note | safe }}</div>{% endif %}
</{{ tag | striptags(true) }}>
{% endmacro %}


{% macro red( data ) %}
{% set data_m = {
	title: data.title,
	href: data.href,
	attr: data.attr or '',
	icon: data.icon,
	class: 'button_red ' + (data.class or '')
} %}
{{ common( data_m ) }}
{% endmacro %}


{% macro black( data ) %}
{% set data_m = {
	title: data.title,
	href: data.href,
	attr: data.attr or '',
	icon: data.icon,
	class: 'button_black ' + (data.class or '')
} %}
{{ common( data_m ) }}
{% endmacro %}
