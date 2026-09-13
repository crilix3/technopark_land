{% macro form(
form_id,
action='
<?= $action ?>',
form_class='',
title='',
title_class='',
txt='',
addtxt,
button,
button_class='',
button_txt='',
add_fields,
exclude_fields,
form_success_text='',
attr='',
select
)%}

<form class="form {{ form_class | safe }}" action="{{ action | safe }}" {{ attr | safe }}>

	<input type="hidden" name="form" value="{{ form_id | safe }}">

	{% if title %}
	<div class="form__title {{ title_class }}" data-title>{{ title | safe }}</div>
	{% endif %}

	<div class="form__items">

		{% if not exclude_fields.name %}
		{{ form_item({ name: 'name', type: 'text', placeholder: 'Имя', required: true }) }}
		{% endif %}

		{% if not exclude_fields.phone %}
		{{ form_item({ name: 'phone', type: 'text', placeholder: 'Телефон', required: true }) }}
		{% endif %}

		{% if not exclude_fields.email %}
		{{ form_item({ name: 'email', type: 'email', placeholder: 'Почта', required: true }) }}
		{% endif %}

		{% if add_fields.length %}
		{% for item in add_fields %}
		{{ form_item( item ) }}
		{% endfor %}
		{% endif %}

		{% if select %}
		<div class="form__item form__item_select">
			<div class="select">
				<div class="select__field">
					<span class="select__field-txt">Выбери</span>
				</div>
				<div class="select__options scrollbar">
					<div class="select__options-item"></div>
				</div>
				<input type="hidden" name="selected-option" value="">
			</div>
		</div>
		{% endif %}

		{% if addtxt %}
		<div class="form__addTxt">{{ form_addtxt | safe }}</div>
		{% endif %}

		<div class="form__item form__item_button">
			{% if button %}
			{{ button | safe }}
			{% else %}
			<button type="submit" class="button shadow arrowDecor {{ button_class }}"><span data-submit-text>{{ button_txt }}</span></button>
			{% endif %}
		</div>
	</div>

	<div class="form__footer">
		<label class="form__footer-label">
			<div class="form__footer-checkbox">
				<input type="checkbox" name="personalDataAgree" checked>
				<div class="form__footer-checkbox-icon icon-checkbox"></div>
			</div>
			<div class="form__footer-txt">Даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь <nobr>с&nbsp;<a href="<?= $block['privacy-link'] ?>" target="_blank" class="link-unhover">политикой конфиденциальности</a></nobr>
			</div>
		</label>
	</div>

	{% if link %}
	<input name="link" type="hidden" value="{{ link | safe }}">
	{% endif %}

</form>

{#{{ form_success( form_success_text ) }}#}
{% endmacro %}


{% macro form_item(item) %}
<div class="form__item form__item_{{ item.type }} {{ 'd-none' if item.type == 'hidden' }}" data-name="{{ item.name }}">
	{% if item.type == 'textarea' %}

	<textarea name="{{ item.name }}" placeholder="{{ item.placeholder | safe }}" class="form__input form__input_textarea" {{ 'required' if item.required }} {{ item.attr | safe }}></textarea>

	{% elseif item.type == 'select' %}

	<select name="{{ item.name }}" class="form__input" {{ 'required' if item.required }} {{ item.attr | safe }}>
		<option value="" disabled selected>{{ item.placeholder | safe }}</option>
		{% for option in item.options %}
		<option value="{{ option.value | safe }}">{{ option.text }}</option>
		{% endfor %}
	</select>

	{% elseif item.type == 'radio-group' %}

	<span class="form__radio-label">{{ item.placeholder | safe }}</span>
	<div class="form__radio-group">
		{% for option in item.options %}
		<label class="form__radio-option">
			<input type="radio" name="{{ item.name }}" value="{{ option.value | safe }}" {{ 'required' if item.required }} {{ 'checked' if loop.first }}>
			<span>{{ option.text }}</span>
		</label>
		{% endfor %}
	</div>

	{% else %}

	{% if item.type == 'number' %}<label class="form__item-label"><span class="form__item-label-text">{{ item.placeholder | safe }}</span>{% endif %}
		<input name="{{ item.name }}" type="{{ item.type }}" placeholder="{{ item.placeholder | striptags | safe }}" value="{{ item.value | safe }}" class="form__input" {{ 'min=1' if item.type=='number' }} {{ 'required' if item.required }} {{ item.attr | safe }}>
		{% if item.type == 'number' %}</label>{% endif %}

	{% endif %}
</div>
{% endmacro %}


{% macro form_success( form_success_text ) %}
<div class="form-success">
	<div class="form-success-inner">
		<div class="form-success__text">
			{% if form_success_text %}
			{{ form_success_text | safe }}
			{% else %}
			Спасибо, что подписались на&nbsp;рассылку ;) <br>
			Мы&nbsp;сообщим о&nbsp;запуске проекта.
			{% endif %}
		</div>
		<i class="form-success__icon icon-crossroad-fill-gray"></i>
	</div>
</div>
{% endmacro %}