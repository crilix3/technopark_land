(function () {
  var MOBILE_QUERY = '(max-width: 767px)';

  function initStudioCards() {
    var mql = window.matchMedia(MOBILE_QUERY);
    var cards = document.querySelectorAll('.global-studio__card');
    if (!cards.length) return;

    var observer = null;

    function showCard(card) {
      card.classList.add('is-visible');
    }

    function hideCard(card) {
      card.classList.remove('is-visible');
    }

    function startObserver() {
      if (observer) return;

      observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            showCard(entry.target);
          } else {
            // Блок ушёл из зоны видимости — прячем картинку обратно
            hideCard(entry.target);
          }
        });
      }, {
        // Блок считается «долистанным», когда виден на 30%.
        threshold: 0.3,
        // Небольшой отступ снизу, чтобы срабатывало чуть заранее.
        rootMargin: '0px 0px -10% 0px'
      });

      cards.forEach(function (card) {
        observer.observe(card);
      });
    }

    function stopObserver() {
      if (!observer) return;
      observer.disconnect();
      observer = null;
      cards.forEach(hideCard);
    }

    function handleChange(e) {
      if (e.matches) {
        startObserver();
      } else {
        stopObserver();
      }
    }

    if (mql.matches) {
      startObserver();
    }

    if (mql.addEventListener) {
      mql.addEventListener('change', handleChange);
    } else if (mql.addListener) {
      mql.addListener(handleChange);
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initStudioCards);
  } else {
    initStudioCards();
  }
})();