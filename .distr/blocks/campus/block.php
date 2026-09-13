{% from './data.php' import data %}

<section class="campus" id="campus">
    {% include 'circle-mobile/block.php' %}
    <div class="container">
        <div class="campus__content">
            <h1 class="campus__title">{{data.title}}</h1>
            <div class="campus__carousel">
                <div class="campus__carousel-comp">
                    <div class="campus__carousel-wrap" id="carouselWrap">
                        {% for item in data.items %}
                        <div class="campus__carousel-element" data-img="{{ item.icon[0] | safe }}">
                            <div class="campus__carousel-img_block">
                                <div class="campus__carousel-inner">
                                    <img src="{{ item.icon[0] | safe }}" alt="{{ item.text|striptags }}" class="campus__carousel-img d-desktop" loading="lazy">
                                    <img src="{{ item.iconMobile[0] | safe }}" alt="{{ item.text|striptags }}" class="campus__carousel-img d-mobile" loading="lazy">
                                </div>
                            </div>
                            <div class="campus__carousel-text_block">
                                <span class="campus__carousel-text">{{item.text}}</span>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>