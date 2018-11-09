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
          <div class="banners-slider__item">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="what-is what-is-section section">
    <div class="container">
      <h2 class="section__title decorated-title">Что такое лазерная эпиляция?</h2>
      <p class="light">Лазерная эпиляция — это метод радикального удаления волос, с разрушением волосяных
        фолликулов при помощи лазерного излучения (свет с одной длиной волны с высокой направленностью и
        большой плотностью энергии).</p>
    </div>
  </section>

  <section class="about-us about-us-section section">
    <div class="container">
      <h2 class="section__title decorated-title">О нас</h2>
      <div class="row">
        <div class="col-sm-8 offset-sm-2 offset-md-0 col-md-2 col-lg-4 order-2 order-md-1">
          <div class="about-us__image-wrapper">
            <div class="about-us__image-container">
              <img src="<?php echo get_template_directory_uri() . '/public/img/img1.png' ?>"
                   alt="slide">
            </div>
          </div>
        </div>
        <div class="col-md-10 col-lg-8 order-1 order-md-2">
          <div class="white-bg about-us__content">
            <h3 class="about-us__subtitle title_1">Для вас мы работаем на оборудовании №1 в мире!</h3>
            <p class="light">Наш лазер – 1S PRO с технологией IPLASER&copy; от компании Innovatione.
              Эпиляция IPLASER стала настоящим прорывом в сфере удаления волос. Поражение структуры
              волоса имеет накопительный результат, что в дальнейшем приводит к полному прекращению
              его роста.
              В инновационной системе соединены лучшие технические решения.
              На сегодняшний день - это один из наиболее эффективных способов борьбы с нежелательными
              волосами! Приходите
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
      <div class="myths__content">
        <div class="white-bg">
          <div class="myths__slider js-myth-slider">
            <div class="myths__item myth-item">
              <div class="myth-item__header">
                <h3 class="myth-item__title">
                  <span class="styled">Миф 1.</span>
                  Лазерная эпиляция вызывает рак и негативно влияет на внутренние органы
                </h3>
              </div>
              <div class="myth-item__content">
                <p class="light">Это самый распространенный МИФ. IPLASER - это интенсивное световое
                  воздействие (инфракрасный спектр) – это не излучение, поэтому никакого
                  воздействия на внутренние органы он не оказывает, и дальше кожного покрова свет
                  не проникает. Его свет безвреден (есть официальное подтверждение Ростеста). Рак
                  вызывает ультрафиолет. У вас больше шансов навредить себе, находясь на солнце
                  или в солярии, чем на процедуре лазерной эпиляции.</p>
              </div>
            </div>
            <div class="myths__item myth-item">
              <div class="myth-item__header">
                <h3 class="myth-item__title">
                  <span class="styled">Миф 2.</span>
                  Лазерная эпиляция вызывает рак и негативно влияет на внутренние органы
                </h3>
              </div>
              <div class="myth-item__content">
                <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Architecto asperiores commodi corporis doloribus eligendi, et fugiat hic ipsam
                  iste, labore magni mollitia necessitatibus nisi nobis nulla odit perferendis
                  quaerat quas, qui quo recusandae sed similique soluta tenetur veritatis vero
                  voluptates.</p>
              </div>
            </div>
            <div class="myths__item myth-item">
              <div class="myth-item__header">
                <h3 class="myth-item__title">
                  <span class="styled">Миф 3.</span>
                  Лазерная эпиляция вызывает рак и негативно влияет на внутренние органы
                </h3>
              </div>
              <div class="myth-item__content">
                <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Accusantium animi assumenda at beatae debitis, dicta dignissimos dolor
                  doloremque dolorum eius eveniet hic impedit itaque iure iusto laborum magni
                  molestiae nam natus nihil nobis omnis pariatur placeat quis quisquam repudiandae
                  rerum saepe sapiente sed sunt. Aliquid animi blanditiis commodi cupiditate
                  deleniti dicta dignissimos dolorem dolorum ea eaque error, esse excepturi
                  explicabo inventore magnam maxime mollitia natus nihil nobis nostrum odio
                  pariatur quasi quibusdam quidem, quisquam recusandae saepe sapiente sequi
                  similique suscipit tempora totam ullam unde vel veritatis vitae voluptas? Id,
                  iusto.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="faq faq-section section">
    <div class="container">
      <h2 class="section__title decorated-title">Часто задаваемые вопросы</h2>
      <div class="faq__content">
        <div class="faq__current-q faq-current-q js-faq-current-container">
          <div class="js-faq-current-question faq-current-q__question">Это больно?</div>
          <div class="js-faq-current-answer faq-current-q__answer">Все зависит от вашей чувствительности.
            Болевой порог у всех людей совершенно разный. Клиенты говорят, что ощущают легкие
            покалывания и тепло, и это нормально, ведь корень волоса и волосяной фолликул подвергаются
            интенсивному воздействию выделенного спектра света. Так или иначе, на сегодняшний день это
            наиболее комфортная процедура из имеющихся.
          </div>
        </div>
        <ul class="faq-questions js-faq-questions">
          <li class="js-faq-question-container faq-questions__item">
            <div class="q js-faq-question">Это больно?</div>
            <div class="answer js-faq-answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Alias deleniti dolorem ex excepturi fuga natus nobis numquam porro veniam voluptate?
            </div>
          </li>
          <li class="js-faq-question-container faq-questions__item">
            <div class="q js-faq-question">После 3-4 процедуры усиливается рост волос. Что делать?</div>
            <div class="answer js-faq-answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Accusantium debitis eius, error facilis iste laborum, libero, maiores nisi optio
              repudiandae sapiente tempora unde voluptas. Beatae consectetur dolorem, earum error,
              eveniet fugit, mollitia neque qui reiciendis tenetur voluptas voluptatem? Aliquam
              aspernatur, dolorem doloribus excepturi facilis neque odit reprehenderit sint soluta
              veritatis.
            </div>
          </li>
          <li class="js-faq-question-container faq-questions__item">
            <div class="q js-faq-question">Как подготовиться к процедуре?</div>
            <div class="answer js-faq-answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Alias deleniti dolorem ex excepturi fuga natus nobis numquam porro veniam voluptate?
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="masters masters-section section">
    <div class="container">
      <h2 class="section__title decorated-title">Наши мастера</h2>
      <div class="masters__content">
        <div class="masters__slider js-masters-slider">

          <div class="masters__item master-item">
            <div class="master-item__background">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-5 offset-md-7 master-item__background-right">
                  </div>
                </div>
              </div>
            </div>

            <div class="master-item__content">
              <div class="master-item__img">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-7">
                      <img src="<?php echo get_template_directory_uri() . '/public/img/img2.png' ?>"
                           alt="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="master-item__description-container">
                <div class="master-item__description-wrapper">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-5 offset-md-7">
                        <div class="master-item__description-content">
                          <h3 class="master-item__name">Лидия</h3>
                          <div class="master-item__description">
                            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti esse
                              expedita, fugiat hic incidunt natus!</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="masters__item master-item">
            <div class="master-item__background">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-5 offset-md-7 master-item__background-right">
                  </div>
                </div>
              </div>
            </div>

            <div class="master-item__content">
              <div class="master-item__img">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-7">
                      <img src="<?php echo get_template_directory_uri() . '/public/img/img2.png' ?>"
                           alt="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="master-item__description-container">
                <div class="master-item__description-wrapper">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-5 offset-md-7">
                        <div class="master-item__description-content">
                          <h3 class="master-item__name">Лидия</h3>
                          <div class="master-item__description">
                            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti esse
                              expedita, fugiat hic incidunt natus!</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="masters__item master-item">
            <div class="master-item__background">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-5 offset-md-7 master-item__background-right">
                  </div>
                </div>
              </div>
            </div>

            <div class="master-item__content">
              <div class="master-item__img">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-7">
                      <img src="<?php echo get_template_directory_uri() . '/public/img/img2.png' ?>"
                           alt="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="master-item__description-container">
                <div class="master-item__description-wrapper">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-5 offset-md-7">
                        <div class="master-item__description-content">
                          <h3 class="master-item__name">Лидия</h3>
                          <div class="master-item__description">
                            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti esse
                              expedita, fugiat hic incidunt natus!</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="prices prices-section section">
    <div class="container">
      <h2 class="section__title decorated-title">Стоимость</h2>
      <div class="prices__slider js-prices-slider">
        <div>
          <div class="prices__item prices-table">
            <table>
              <thead>
              <tr>
                <th>Лицо</th>
                <th>Цена</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td><span class="content">Лицо полностью</span></td>
                <td><span class="content">2000</span></td>
              </tr>
              <tr>
                <td><span class="content">Щеки</span></td>
                <td><span class="content">500</span></td>
              </tr>
              <tr>
                <td colspan="2">
                  <div class="content bold centered">Шея</div>
                </td>
              </tr>
              <tr>
                <td><span class="content">Передняя поверхность</span></td>
                <td><span class="content">500</span></td>
              </tr>
              <tr>
                <td><span class="content">Задняя поверхность</span></td>
                <td><span class="content">500</span></td>
              </tr>
              <tr>
                <td colspan="2">
                  <span class="content"> </span>
                </td>
              </tr>
              <tr>
                <td><span class="content">Бакенбарды</span></td>
                <td><span class="content">400</span></td>
              </tr>
              <tr>
                <td><span class="content">Лоб</span></td>
                <td><span class="content">400</span></td>
              </tr>
              <tr>
                <td><span class="content">Верхняя губа</span></td>
                <td><span class="content">400</span></td>
              </tr>
              <tr>
                <td><span class="content">Крылья носа</span></td>
                <td><span class="content">300</span></td>
              </tr>
              <tr>
                <td><span class="content">Подбородок</span></td>
                <td><span class="content">300</span></td>
              </tr>
              <tr>
                <td><span class="content">Нижняя губа</span></td>
                <td><span class="content">200</span></td>
              </tr>
              <tr>
                <td><span class="content">Межбровье</span></td>
                <td><span class="content">200</span></td>
              </tr>
              <tr>
                <td colspan="2">
                  <div class="content bold centered">Комплексы</div>
                </td>
              </tr>
              <tr>
                <td><span class="content">Губы + подбородок</span></td>
                <td><span class="content">800</span></td>
              </tr>
              <tr>
                <td><span class="content">Щеки + бакенбарды</span></td>
                <td><span class="content">800</span></td>
              </tr>
              <tr>
                <td><span class="content">Шея полностью</span></td>
                <td><span class="content">800</span></td>
              </tr>
              <tr>
                <td><span class="content">Верхняя губа + подбородок</span></td>
                <td><span class="content">500</span></td>
              </tr>
              <tr>
                <td><span class="content">Верхняя губа + крылья носа</span></td>
                <td><span class="content">500</span></td>
              </tr>
              <tr>
                <td><span class="content">Верхняя губа + нижняя губа</span></td>
                <td><span class="content">500</span></td>
              </tr>
              <tr>
                <td><span class="content">Лоб + межбровье</span></td>
                <td><span class="content">500</span></td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div>
          <div class="prices__item prices-table">
            <table>
              <thead>
              <tr>
                <th>Тело (верхняя часть)</th>
                <th>Цена</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td><span class="content">Руки полностью</span></td>
                <td><span class="content">2000</span></td>
              </tr>
              <tr>
                <td><span class="content">Руки до локтя</span></td>
                <td><span class="content">1100</span></td>
              </tr>
              <tr>
                <td><span class="content">Плечи</span>
                </td>
                <td><span class="content">1100</span></td>
              </tr>
              <tr>
                <td><span class="content">Подмышки</span></td>
                <td><span class="content">500</span></td>
              </tr>
              <tr>
                <td colspan="2">
                  <div class="content bold centered">Грудь</div>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <div class="content bold">Молочные железы</div>
                </td>
              </tr>
              <tr>
                <td><span class="content">(5) DD</span></td>
                <td><span class="content">1000</span></td>
              </tr>
              <tr>
                <td><span class="content">(4) D</span></td>
                <td><span class="content">800</span></td>
              </tr>
              <tr>
                <td><span class="content">(3) C</span></td>
                <td><span class="content">600</span></td>
              </tr>
              <tr>
                <td><span class="content">(2) B</span></td>
                <td><span class="content">600</span></td>
              </tr>
              <tr>
                <td><span class="content">(1) A</span></td>
                <td><span class="content">500</span></td>
              </tr>
              <tr>
                <td><span class="content">(0) AA</span></td>
                <td><span class="content">500</span></td>
              </tr>
              <tr>
                <td colspan="2">
                  <span class="content"> </span>
                </td>
              </tr>
              <tr>
                <td><span class="content">Зона декольте</span></td>
                <td><span class="content">800</span></td>
              </tr>
              <tr>
                <td><span class="content">Ореолы (вокруг)</span></td>
                <td><span class="content">300</span></td>
              </tr>
              <tr>
                <td colspan="2">
                  <span class="content bold centered">Спина / живот</span>
                </td>
              </tr>
              <tr>
                <td><span class="content">Спина полностью</span></td>
                <td><span class="content">2000</span></td>
              </tr>
              <tr>
                <td><span class="content">Спина (до поясницы)</span></td>
                <td><span class="content">1500</span></td>
              </tr>
              <tr>
                <td><span class="content">Поясница</span></td>
                <td><span class="content">700</span></td>
              </tr>
              <tr>
                <td><span class="content">Живот полностью</span></td>
                <td><span class="content">1500</span></td>
              </tr>
              <tr>
                <td><span class="content">Линия живота</span></td>
                <td><span class="content">500</span></td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div>
          <div class="prices__item prices-table">
            <table>
              <thead>
              <tr>
                <th>Тело (нижняя часть)</th>
                <th>Цена</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td><span class="content">Тотальное бикини</span></td>
                <td><span class="content">1800</span></td>
              </tr>
              <tr>
                <td><span class="content">Глубокое бикини</span></td>
                <td><span class="content">1200</span></td>
              </tr>
              <tr>
                <td><span class="content">Бикини по линии белья</span></td>
                <td><span class="content">600</span></td>
              </tr>
              <tr>
                <td><span class="content">Межъягодичная область</span></td>
                <td><span class="content">600</span></td>
              </tr>
              <tr>
                <td><span class="content">Половые губы</span></td>
                <td><span class="content">400</span></td>
              </tr>
              <tr>
                <td colspan="2"><span class="content bold centered">Ноги</span></td>
              </tr>
              <tr>
                <td><span class="content">Ноги полностью + пальчики</span></td>
                <td><span class="content">3000<br><span class="red bold">(11.18-12.18 акция 2600)</span></span></td>
              </tr>
              <tr>
                <td><span class="content">Ноги полностью</span></td>
                <td><span class="content">2900<br><span class="red bold">(11.18-12.18 акция 2500)</span></span></td>
              </tr>
              <tr>
                <td><span class="content">Ягодицы</span></td>
                <td><span class="content">1500</span></td>
              </tr>
              <tr>
                <td><span class="content">Голени</span></td>
                <td><span class="content">1500</span></td>
              </tr>
              <tr>
                <td><span class="content">Бедра полностью</span></td>
                <td><span class="content">1800</span></td>
              </tr>
              <tr>
                <td colspan="2"><span class="content bold">Поверхность бедра</span></td>
              </tr>
              <tr>
                <td><span class="content">Передняя</span></td>
                <td><span class="content">800</span></td>
              </tr>
              <tr>
                <td><span class="content">Задняя</span></td>
                <td><span class="content">800</span></td>
              </tr>
              <tr>
                <td><span class="content">Боковая внутренняя</span></td>
                <td><span class="content">200</span></td>
              </tr>
              <tr>
                <td><span class="content">Боковая наружная</span></td>
                <td><span class="content">200</span></td>
              </tr>
              <tr>
                <td><span class="content">Коленная чашечка</span></td>
                <td><span class="content">300</span></td>
              </tr>
              <tr>
                <td><span class="content">Фаланги пальцев рук/ног</span></td>
                <td><span class="content">200</span></td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div>
          <div class="prices__item prices-table">
            <table>
              <thead>
              <tr>
                <th>Комплексы</th>
                <th>Цена</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td colspan="2"><span class="content bold centered">Комплекс №1</span></td>
              </tr>
              <tr>
                <td><span class="content">Ноги полностью</span></td>
                <td class="middle" rowspan="5"><span class="content">5000</span></td>
              </tr>
              <tr>
                <td><span class="content">Тотальное бикини</span></td>
              </tr>
              <tr>
                <td><span class="content">Подмышки</span></td>
              </tr>
              <tr>
                <td><span class="content">Нижняя часть лица на выбор</span></td>
              </tr>
              <tr>
                <td><span class="content">Фаланги пальцев</span></td>
              </tr>
              <tr>
                <td colspan="2"><span class="content bold centered">Комплекс №2</span></td>
              </tr>
              <tr>
                <td><span class="content">Ноги полностью</span></td>
                <td class="middle" rowspan="3"><span class="content">4500</span></td>
              </tr>
              <tr>
                <td><span class="content">Тотальное бикини</span></td>
              </tr>
              <tr>
                <td><span class="content">Подмышки</span></td>
              </tr>
              <tr>
                <td colspan="2"><span class="content bold centered">Комплекс №3</span></td>
              </tr>
              <tr>
                <td><span class="content">Тотальное бикини</span></td>
                <td class="middle" rowspan="2"><span class="content">2000</span></td>
              </tr>
              <tr>
                <td><span class="content">Подмышки</span></td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="contacts contacts-section section">
    <div class="container">
      <h2 class="section__title decorated-title">Контакты</h2>
      <div class="container">
        <div class="row milk-bg">
          <div class="col-sm-7">
            <div class="contacts-section__map-wrapper">
              <div class="contacts-section__map" id="map"></div>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="contacts-section__contacts">
              <div class="company-links">
                <div class="company-links__item">
                  <a href="tel:+79995501745" class="company-links__item-link">+7(999)550-17-45</a>
                </div>
                <div class="company-links__item">
                  <a href="mailto:studia@gmail.com" class="company-links__item-link">studia@gmail.com</a>
                </div>
              </div>
              <div class="company-info">
                <p class="company-info__item">Пн-Вс 10:00 - 20:00</p>
                <span class="company-info__separator"></span>
                <p class="company-info__item">г.Санкт-Петербург</p>
                <p class="company-info__item">Владимирский просп., д. 1</p>
              </div>
              <div class="socials-line">
                <div class="socials-line__item">
                  <a href="#" class="socials-line__item-link">
                    <span class="icon-vk"></span>
                  </a>
                </div>
                <div class="socials-line__item">
                  <a href="#" class="socials-line__item-link">
                    <span class="icon-instagram"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="sign-up sign-up-section section">
    <div class="container">
      <h2 class="section__title decorated-title">Записаться можно здесь</h2>
      <div class="sign-up__form contact-form">
				<?php
				echo do_shortcode( '[contact-form-7 id="10" title="Записаться можно здесь"]' )
				?>
      </div>
    </div>
  </section>

</main>
<?php
get_footer();
?>
