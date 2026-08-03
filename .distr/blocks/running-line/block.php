{% from './data.php' import data %}

<section class="running-line">
    <div class="marquee-infinite">
        <div>
            {% for item in data %}
            <div class="running-line__item">
                <img src="img/running-line/{{ item.img | safe }}" class="" alt="">
            </div>
            {% endfor %}
        </div>
    </div>
</section>