;(function () {
    const $bannerSlider = $('.js-banners-slider');

    if ($bannerSlider.length){
        $bannerSlider.slick({
            autoplay: false,
            autoplaySpeed: 3000,
            arrows: false,
            dots: true
        });
    }


})();