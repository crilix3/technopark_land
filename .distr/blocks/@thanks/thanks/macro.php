{% import 'form/macro.php' as form %}

{% macro block( data ) %}
<section class="thanks container {{ data.class }}" {% if data.id %} id="{{ data.id }}" {% endif %}>

	<div class="thanks__top">
		<div class="thanks__header">
			<div class="thanks__title h3">{{ data.title | safe }}</div>
			<img src="img/main/slide-01_d.svg" class="thanks__img" alt="">
			<a href="<?= $BASE_HREF ?>" class="thanks__button button button_red shadow">На главную</a>
		</div><!-- thanks__header -->

	</div><!-- thanks__top -->

</section><!-- {{ data.id or data.class }} -->
{% endmacro %}