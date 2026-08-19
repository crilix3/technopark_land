{% from 'common/macro.php' import webp %}
{% from './data.php' import data %}

<section class="running-line">
    <div class="marquee-infinite">
        <div>
            {% for item in data %}
            <div class="running-line__item">
                {{ webp(url='img/running-line/' ~ item.img) }}
            </div>
            {% endfor %}
        </div>
    </div>
</section>