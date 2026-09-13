{% from './data.php' import data %}

<section class="global-studio" id="global-studio">
    {% include 'circle-mobile/block.php' %}
    <div class="container">
        <div class="global-studio__content">
            <h1 class="global-studio__title">{{data.title}}</h1>
            <p class="global-studio__subtitle">{{ data.subtitle | safe }}</p>
            <div class="global-studio__equipments">
                <div class="global-studio__grid">
                    {% for item in data.equipments %}
                    <article class="global-studio__card">
                        <div class="global-studio__card-body">
                            <h2 class="global-studio__card-name">{{ item.name }}</h2>
                            <p class="global-studio__card-desc">{{ item.description | safe}}</p>
                            <a class="global-studio__card-link" href="/{{item.linkKey}}">Посмотреть</a>
                        </div>
                        <img class="global-studio__card-img" src="img/global-studio/{{ item.img }}" alt="{{ item.name }}">
                    </article>
                    {% endfor %}
                </div>
            </div>
            <div class="global-studio__buttons">
                <button class="final-cta__button d-desktop" data-modal-button="modalbox" type="button">
                    Записаться на экскурсию по кампусу
                </button>
                <button class="final-cta__button d-mobile" data-modal-button="modalbox" type="button">
                    Записаться на экскурсию
                </button>
            </div>
        </div>
    </div>
</section>