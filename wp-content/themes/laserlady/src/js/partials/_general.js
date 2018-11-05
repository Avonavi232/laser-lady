;(function () {
  //Main banners slider
  const $bannerSlider = $('.js-banners-slider');

  if ($bannerSlider.length) {
    $bannerSlider.slick({
      autoplay: false,
      autoplaySpeed: 3000,
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
      $currentContainer = $('.js-faq-current-container'),
      $currentQ = $('.js-faq-current-question'),
      $currentA = $('.js-faq-current-answer');

    $faqContainer.on('click', '.js-faq-question-container', function () {
      const
        $q = $(this).find('.js-faq-question'),
        $a = $(this).find('.js-faq-answer');

      if ($q.length && $a.length){
        $currentContainer.slideToggle(300, function () {
          $currentA.text($a.text());
          $currentQ.text($q.text());
          $currentContainer.slideToggle(300);
        });
      }
    });
  }


  //Masters slider
  const $mastersSlider = $('.js-masters-slider');
  if ($mastersSlider.length) {
    $mastersSlider.slick({
      autoplay: false,
      autoplaySpeed: 3000,
      arrows: true,
      dots: false
    });
  }

})();