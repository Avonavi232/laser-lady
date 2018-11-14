;(function () {
  //Main banners slider
  const $bannerSlider = $('.js-banners-slider');

  if ($bannerSlider.length) {
    $bannerSlider.slick({
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: false,
      dots: true
    });
  }


  //Myth slider
  const $mythSlider = $('.js-myth-slider');
  if ($mythSlider.length) {
    const
      $slickControls = $(`<div class="slick-controls"></div>`),
      $slickSlidesInfo = $(`<div class="slick-slides-info"></div>`),
      $slickCurrentSlide = $('<div class="slick-current-slide"></div>'),
      $slickTotalSlides = $('<div class="slick-total-slides"></div>');

    $slickSlidesInfo.append($slickCurrentSlide);
    $slickSlidesInfo.append($slickTotalSlides);
    $slickControls.append($slickSlidesInfo);

    $mythSlider.on('init', function () {
      const
        prevBtn = $mythSlider.find('.slick-prev'),
        nextBtn = $mythSlider.find('.slick-next');

      $slickControls.prepend(prevBtn.clone(true));
      $slickControls.append(nextBtn.clone(true));
      $mythSlider.append($slickControls);
      prevBtn.remove();
      nextBtn.remove();
    });

    $mythSlider.on('init reInit afterChange', function (event, slick, currentSlide) {
      let i = (currentSlide ? currentSlide : 0) + 1;
      $slickCurrentSlide.text(('0' + i).slice(-2));
      $slickTotalSlides.text(('0' + slick.slideCount).slice(-2));
    });

    $mythSlider.slick({
      autoplay: false,
      autoplaySpeed: 3000,
      arrows: true,
      dots: false
    });
  }


  //FAQ
  const $faqContainer = $('.js-faq-questions');
  if ($faqContainer.length) {
    const
      $currentContainer = $('.js-faq-current-container');

    let $active;

    $faqContainer.on('click', '.js-faq-question-container', function () {
      if ($active && $active.is($(this))) {
        return;
      }

      const
        $q = $(this).find('.js-faq-question'),
        $a = $(this).find('.js-faq-answer');

      if ($active && $active.length) {
        $active.removeClass('faq-questions__item_active');
        $active.find('.js-faq-answer').slideUp(300);
      }

      $active = $(this);

      if ($q.length && $a.length) {
        $(this).addClass('faq-questions__item_active');
        $a.slideDown(300);
      }
    });
  }


  //Masters slider
  const $mastersSlider = $('.js-masters-slider');
  if ($mastersSlider.length && $mastersSlider.children().length > 1) {
    $mastersSlider.slick({
      autoplay: false,
      autoplaySpeed: 3000,
      arrows: true,
      dots: true
    });
  }

  //Prices slider
  const $pricesSlider = $('.js-prices-slider');
  if ($pricesSlider.length) {

    const settings = {
      autoplay: false,
      autoplaySpeed: 3000,
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      infinite: false
    };

    if (window.matchMedia("(max-width: 767px)").matches) {
      settings.slidesToShow = 1;
    }
    $pricesSlider.slick(settings);
  }

  //Ymaps
  ymaps.ready(function () {
    // Создание карты.
    var myMap = new ymaps.Map("map", {
        center: [59.932148064155996, 30.347569500000017],
        zoom: 16,
        controls: ['zoomControl', 'fullscreenControl']
      },
      {
        yandexMapDisablePoiInteractivity: true
      }
    );

    var myGeoObject = new ymaps.GeoObject({
      // Описание геометрии.
      geometry: {
        type: "Point",
        coordinates: [59.932148064155996, 30.347569500000017]
      },
      properties: {
        hintContent: 'Laser-lady.ru'
      }
    });
    myMap.geoObjects
      .add(myGeoObject);
  });

  //Fixed header header__nav_fixed
  const $nav = $('.js-nav');
  if ($nav.length) {
    const sticky = $nav.offset().top;

    document.addEventListener('scroll', function () {
      const
        scrollTop = $(window).scrollTop();

      if (scrollTop >= sticky && !$nav.hasClass ('header__nav_fixed')) {
        $nav.addClass('header__nav_fixed');
        $('body').css({
          paddingTop: `${$nav.height()}px`
        })
      } else if (scrollTop < sticky && $nav.hasClass('header__nav_fixed')) {
        $nav.removeClass('header__nav_fixed');
        $('body').css({
          paddingTop: 0
        })
      }
    });
  }

  //Smooth scroll
  const $menuList = $('.js-menu-list');
  if ($menuList.length) {
    $menuList.on("click", "a", function (event) {
      event.preventDefault();

      const
        id = $(this).attr('href'),
        top = $(id).offset().top;

      $('body,html').animate({scrollTop: top}, 1000);
    });
  }

})();