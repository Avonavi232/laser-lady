<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package laserlady
 */

get_header();
?>
  <main class="page__main">


    <section class="banners-slider banners-slider-section">
      <div class="banners-slider__container">
        <div class="js-banners-slider">
          <div class="banners-slider__item">
            <img src="<?php echo get_template_directory_uri() . '/public/img/slide1.png'?>" alt="slide">
          </div>
          <div class="banners-slider__item">
            <img src="<?php echo get_template_directory_uri() . '/public/img/slide1.png'?>" alt="slide">
          </div>
          <div class="banners-slider__item">
            <img src="<?php echo get_template_directory_uri() . '/public/img/slide1.png'?>" alt="slide">
          </div>
        </div>
      </div>
    </section>

    <section class="what-is what-is-section section">
      <div class="container">
        <h2 class="section__title decorated-title">Что такое лазерная эпиляция?</h2>
        <p class="light">Лазерная эпиляция — это метод радикального удаления волос, с разрушением волосяных фолликулов при помощи лазерного излучения (свет с одной длиной волны с высокой направленностью и большой плотностью энергии).</p>
      </div>
    </section>

    <section class="about-us about-us-section section">
      <div class="container">
        <h2 class="section__title decorated-title">О нас</h2>
        <div class="row">
          <div class="col-sm-4">
            <div class="about-us__image-wrapper">
              <div class="about-us__image-container">
                <img src="<?php echo get_template_directory_uri() . '/public/img/img1.png'?>" alt="slide">
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="white-bg about-us__content">
              <h3 class="about-us__subtitle title_1">Для вас мы работаем на оборудовании №1 в мире!</h3>
              <p class="light">Наш лазер – 1S PRO с технологией IPLASER&copy; от компании Innovatione. Эпиляция IPLASER стала настоящим прорывом в сфере удаления волос. Поражение структуры волоса имеет накопительный результат, что в дальнейшем приводит к полному прекращению его роста.
                В инновационной системе соединены лучшие технические решения.
                На сегодняшний день - это один из наиболее эффективных способов борьбы с нежелательными волосами! Приходите
                к нам и убедитесь в этом сами!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="benefits-section section">
      <div class="container">
        <h2 class="section__title decorated-title">Преимущества IP Laser</h2>
        <ol class="benefits">
          <li class="benefits__item">
            <h3 class="benefits__item-title title_1">Работает на фототипах кожи С 1-го ПО 6-й</h3>
            <p class="light benefits__item-content">Метод подходит для всех типов кожи.
              В отличие от большинства лазерных аппаратов, позволяет работать эффективно и безопасно даже
              на очень смуглой коже.</p>
          </li>
          <li class="benefits__item">
            <h3 class="benefits__item-title title_1">Работает на фототипах кожи С 1-го ПО 6-й</h3>
            <p class="light benefits__item-content">Метод подходит для всех типов кожи.
              В отличие от большинства лазерных аппаратов, позволяет работать эффективно и безопасно даже
              на очень смуглой коже.</p>
          </li>
          <li class="benefits__item">
            <h3 class="benefits__item-title title_1">Работает на фототипах кожи С 1-го ПО 6-й</h3>
            <p class="light benefits__item-content">Метод подходит для всех типов кожи.
              В отличие от большинства лазерных аппаратов, позволяет работать эффективно и безопасно даже
              на очень смуглой коже.</p>
          </li>
          <li class="benefits__item">
            <h3 class="benefits__item-title title_1">Работает на фототипах кожи С 1-го ПО 6-й</h3>
            <p class="light benefits__item-content">Метод подходит для всех типов кожи.
              В отличие от большинства лазерных аппаратов, позволяет работать эффективно и безопасно даже
              на очень смуглой коже.</p>
          </li>
          <li class="benefits__item">
            <h3 class="benefits__item-title title_1">Работает на фототипах кожи С 1-го ПО 6-й</h3>
            <p class="light benefits__item-content">Метод подходит для всех типов кожи.
              В отличие от большинства лазерных аппаратов, позволяет работать эффективно и безопасно даже
              на очень смуглой коже.</p>
          </li>
        </ol>
      </div>
    </section>

    <section class="myths myths-section section">
      <div class="container">
        <h2 class="section__title decorated-title">Мифы и правда о лазерной эпиляции</h2>
        <div class="myth__content">
          <div class="white-bg">
            <div class="myth__item"></div>
          </div>
        </div>
      </div>
    </section>


  </main>
<?php
get_footer();
