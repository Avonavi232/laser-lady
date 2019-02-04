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
$banners = array();

$query = new WP_Query( array(
	'post_type'      => 'banner',
	'post_status'    => 'publish',
	'posts_per_page' => - 1,
) );

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		$post_id     = get_the_ID();
		$banner_meta = get_post_meta( $post_id, 'banner', true );

		if ( $banner_meta ) {
			$banners[] = array(
				'id'     => $post_id,
				'images' => $banner_meta
			);
		}
	}
}
wp_reset_query();
?>
<main class="page__main">

    <section class="banners-slider banners-slider-section">
        <div class="banners-slider__container">
            <div class="js-banners-slider">
				<?php
				foreach ( $banners as $banner ) {
					?>
                    <div>
                        <div class="banners-slider__item banner-id-<?php echo $banner['id'] ?>">
                        </div>
                        <style>
                            <?php
                            if (isset($banner['images']['bgc'])) {
                                ?>
                            .banners-slider__item.banner-id-<?php echo $banner['id']?> {
                                background-color: <?php echo $banner['images']['bgc']?>
                            }

                            <?php
                            }
                            ?>
                            @media (min-width: 1200px) {
                                .banners-slider__item.banner-id-<?php echo $banner['id']?> {
                                    background-image: url(<?php echo $banner['images']['xl']?>)
                                }
                            }

                            @media (min-width: 768px) and (max-width: 1199.98px) {
                                .banners-slider__item.banner-id-<?php echo $banner['id']?> {
                                    background-image: url(<?php echo $banner['images']['md']?>)
                                }
                            }

                            @media (max-width: 767.98px) {
                                .banners-slider__item.banner-id-<?php echo $banner['id']?> {
                                    background-image: url(<?php echo $banner['images']['sm']?>)
                                }
                            }
                        </style>
                    </div>
					<?php
				}
				?>
            </div>
        </div>
    </section>

    <section id="what-is" class="what-is what-is-section section">
        <div class="container">
            <h2 class="section__title decorated-title">Что такое лазерная эпиляция?</h2>
            <p class="light">Лазерная эпиляция — это метод радикального удаления волос, с разрушением волосяных
                фолликулов при помощи лазерного излучения (свет с одной длиной волны с высокой направленностью и
                большой плотностью энергии).</p>
            <div class="centered">
                <span class="btn" data-toggle="modal" data-target="#exampleModal">
                    <span class="btn__label">Записаться</span>
                </span>
            </div>
        </div>
    </section>

    <section id="about-us" class="about-us about-us-section section">
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
                            его роста.</p>
                        <p class="light">В инновационной системе соединены лучшие технические решения.
                            На сегодняшний день - это один из наиболее эффективных способов борьбы с нежелательными
                            волосами! Приходите
                            к нам и убедитесь в этом сами!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="benefits" class="benefits-section section">
        <div class="container">
            <h2 class="section__title decorated-title">Преимущества IP Laser</h2>
            <ol class="benefits">
                <li class="benefits__item">
                    <h3 class="benefits__item-title title_1">Процедура проводится довольно быстро</h3>
                    <p class="light benefits__item-content">Как правило, один сеанс лазерной эпиляции длится от
                        нескольких минут до 1,5 часов, в зависимости от площади обрабатываемой поверхности</p>
                </li>
                <li class="benefits__item">
                    <h3 class="benefits__item-title title_1">Первые результаты видны после первого сеанса</h3>
                    <p class="light benefits__item-content">За одну секунду аппарат испускает три импульса на одну
                        область. В промежутках между импульсами кожный покров имеет время на релаксацию, что увеличивает
                        эффективность процедуры и снижает неприятные ощущения</p>
                </li>
                <li class="benefits__item">
                    <h3 class="benefits__item-title title_1">Работает на фототипах кожи С 1-го ПО 6-й</h3>
                    <p class="light benefits__item-content">Метод подходит для всех типов кожи.
                        В отличие от большинства лазерных аппаратов, позволяет работать эффективно и безопасно даже
                        на очень смуглой коже</p>
                </li>
                <li class="benefits__item">
                    <h3 class="benefits__item-title title_1">Безопасность</h3>
                    <p class="light benefits__item-content">При максимальной нагрузке стекло не нагревается выше 30
                        градусов, благодаря современной системе охлаждения CoolingPro. Поэтому на нашем лазере ожоги
                        невозможны!</p>
                </li>
                <li class="benefits__item">
                    <h3 class="benefits__item-title title_1">Объединяет возможности других лазеров</h3>
                    <p class="light benefits__item-content">На данный момент, существует несколько видов лазеров.
                        Диодный и александритовый лазер воздействуют на меланин. Неодимовый длинноимпульсный лазер
                        воздействует на белок. IPLASER, в свою очередь, воздействеут и на меланин, и на белок, в связи с
                        длиной волны света 755 - 1064 нм</p>
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
                                    или в солярии, чем на процедуре лазерной эпиляции</p>
                            </div>
                        </div>
                        <div class="myths__item myth-item">
                            <div class="myth-item__header">
                                <h3 class="myth-item__title">
                                    <span class="styled">Миф 2.</span>
                                    После процедуры удаления, волосы вырастают еще более жесткие, их количество
                                    увеличивается
                                </h3>
                            </div>
                            <div class="myth-item__content">
                                <p class="light">Наоборот, количество волосков значительно сокращается, а проросшие
                                    волоски становятся тоньше.</p>
                            </div>
                        </div>
                        <div class="myths__item myth-item">
                            <div class="myth-item__header">
                                <h3 class="myth-item__title">
                                    <span class="styled">Миф 3.</span>
                                    Лазерная эпиляция - это дорого
                                </h3>
                            </div>
                            <div class="myth-item__content">
                                <p class="light">Низкая стоимость расходных материалов, благодаря чему, использование
                                    аппаратов системы IPLASER доступно всем. Да, и только представьте, сколько обычно
                                    женщина тратит в год денег на покупку средств для депиляции (станки, кремы, пенки и
                                    т.д.). А за 5-10 лет? И посчитайте стоимость курса лазерной эпиляции, взглянув на
                                    наши цены (6-8 сеансов с интервалом в 1 месяц и все)</p>
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
                <ul class="faq-questions js-faq-questions">
                    <li class="js-faq-question-container faq-questions__item">
                        <div class="q js-faq-question">Это больно?</div>
                        <div class="answer js-faq-answer">Все зависит от вашей чувствительности. Болевой порог у всех
                            людей совершенно разный. Клиенты говорят, что ощущают легкие покалывания и тепло, и это
                            нормально, ведь корень волоса и волосяной фолликул подвергаются интенсивному воздействию
                            выделенного спектра света. Так или иначе, на сегодняшний день это наиболее комфортная
                            процедура из имеющихся
                        </div>
                    </li>
                    <li class="js-faq-question-container faq-questions__item">
                        <div class="q js-faq-question">Как подготовиться к процедуре?</div>
                        <div class="answer js-faq-answer">
                            <ul class="custom-list">
                                <li>перед процедурой волосы на обратываемой зоне необходимо сбрить (станком или с
                                    помощью депиляционного крема). Лучше всегда за сутки до процедуры ( но, ни в коем
                                    случае, не в день ее проведения), чтобы длина волоска не превышала 1-2 мм., т.к. чем
                                    меньше волос, тем комфортнее процедура, т. к волос может сгорать под воздействием
                                    светового излучения
                                </li>
                                <li>не загорайте за 5-7 дней до и после процедуры (в том числе и в солярии)</li>
                                <li>не травмируйте кожный покров 3 дня до и 3 дня после процедуры (не пользуйтесь
                                    скрабами, пилингами, жесткими мочалками, исключите походы в бани, сауны и бассейны)
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="js-faq-question-container faq-questions__item">
                        <div class="q js-faq-question">Через сколько времени ждать эффекта?</div>
                        <div class="answer js-faq-answer">Провели процедуру, теперь набираемся терпения и ждем. На
                            следующий день ничего не произойдет. На второй и третий день тоже. Более того, может даже
                            показаться, что волосы растут. Дело в том, что волосок под воздействиям лазера погиб и кожа
                            его постепенно может выталкивать в течение нескольких дней. Спустя 2 недели начинается самое
                            интересное и долгожданное - волосы начинают выпадать. В среднем, в течение месяца выпадет
                            порядка 20-30% волос на обработанном участке. Далее начнут расти "проснувшиеся" волоски -
                            ими мы и занимаемся на следующей процедуре.
                        </div>
                    </li>
                    <li class="js-faq-question-container faq-questions__item">
                        <div class="q js-faq-question">После 3-4 процедуры усиливается рост волос. Что делать?</div>
                        <div class="answer js-faq-answer">Главное не паниковать. Такая реакция абсолютно нормальная и
                            физиологична, дело в том, что спящие луковицы, которые энергия световой волны не может
                            удалить начинают просыпаться и давать рост. Реакция временная и нужно просто продолжать по
                            назначенному курсу.
                        </div>
                    </li>
                    <li class="js-faq-question-container faq-questions__item">
                        <div class="q js-faq-question">Сколько процедур нужно, чтобы волосы перестали расти?</div>
                        <div class="answer js-faq-answer">Все очень индивидуально и точного ответа на этот вопрос нет.
                            Зависит в первую очередь от цвета волос. Чем темнее волос, тем более эффективна процедура.
                            Так же сильное влияние оказывает уровень гормонального фона на разных зонах и в организме в
                            целом. В среднем количество процедур варьируется от 4 до 10.
                        </div>
                    </li>
                    <li class="js-faq-question-container faq-questions__item">
                        <div class="q js-faq-question">Волосы пропадут навсегда?</div>
                        <div class="answer js-faq-answer">Мы с вами откровенны! Лазерная эпиляция разрушает волосяной
                            фолликул, но наш организм способен его восстановить. После полного курса вы можете на годы
                            забыть про лишнюю растительность. Даже если рост волос возобновляется, то далеко не в полном
                            объеме - это всего несколько тонких и светлых волосков, которые пропадут после 1-2х
                            процедур. Поэтому примерно раз в год рекомендуется проходить закрепляющую процедуру.
                        </div>
                    </li>
                    <li class="js-faq-question-container faq-questions__item">
                        <div class="q js-faq-question">Каким образом удалять волосы между процедурами?</div>
                        <div class="answer js-faq-answer">Брить станком или электробритвой. Ни в коем случае не
                            использовать воск и шугаринг. Фолликул волоса восстановится и наши усилия окажутся
                            напрасными.
                        </div>
                    </li>
                    <li class="js-faq-question-container faq-questions__item">
                        <div class="q js-faq-question">Светлые волосы можно удалить лазером?</div>
                        <div class="answer js-faq-answer">Любая система для эпиляции, которая основана на световом
                            импульсе, может удалять только темный волос. То есть лазер «не видит» светлый, седой или
                            пушковый волосок и, соответственно, не устраняет его. Поэтому, если вы от природы блондинка,
                            то лазерная эпиляция вам просто не поможет. Если волос содержит, хоть немного меланина
                            (темного вещества) - тогда возможно.
                        </div>
                    </li>
                    <li class="js-faq-question-container faq-questions__item">
                        <div class="q js-faq-question">Есть ли противопоказания?</div>
                        <div class="answer js-faq-answer">Есть. К ним относятся: беременность, кормление грудью,
                            эпилепсия и онкология, острые инфекционные заболевания, ишемическая болезнь сердца и
                            гипертония. IPLASER эпиляция запрещена при наличии кардиостимулятора и слухового аппарата.
                            При гормональных нарушениях в организме, подобная процедура также пользы не принесет. Не
                            советуем делать эпиляцию при острой фазе герпеса. Он очень чувствителен к свету и его
                            заживление может затянуться (или он появится в новых местах). Лучше приходить спустя 2
                            недели после заживления. С осторожностью следует делать лазерную эпиляцию при варикозном
                            расширении вен и аллергии на свет. Но, тем не менее, в обоих случаях лазерная эпиляция
                            возможна.
                        </div>
                    </li>
                </ul>
            </div>
            <p class="item">У вас больше не осталось вопросов? Тогда можете записаться прямо сейчас!</p>
            <div class="item centered">
                <span class="btn" data-toggle="modal" data-target="#exampleModal">
                    <span class="btn__label">Записаться</span>
                </span>
            </div>
        </div>
    </section>

    <section id="masters" class="masters masters-section section">
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
                                                        <p class="light">Лидия- лицензированный специалист, прошедший
                                                            обучение в центре Innovatione г. Москва</p>
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

    <section id="prices" class="prices prices-section section">
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
                                <td><span class="content">3000<br><span class="red bold">(11.18-12.18 акция 2600)</span></span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="content">Ноги полностью</span></td>
                                <td><span class="content">2900<br><span class="red bold">(11.18-12.18 акция 2500)</span></span>
                                </td>
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

    <section id="contacts" class="contacts contacts-section section">
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
                                    <a href="tel:+79816986908" class="company-links__item-link">+7(981)698-69-08</a>
                                </div>
                                <div class="company-links__item">
                                    <a href="mailto:laser_lady@mail.ru"
                                       class="company-links__item-link">laser_lady@mail.ru</a>
                                </div>
                            </div>
                            <div class="company-info">
                                <p class="company-info__item">Пн-Вс 10:00 - 20:00</p>
                                <span class="company-info__separator"></span>
                                <p class="company-info__item">г.Санкт-Петербург</p>
                                <p class="company-info__item">ул. Верности, 17</p>
                            </div>
                            <div class="socials-line">
                                <div class="socials-line__item">
                                    <a target="_blank" href="https://vk.com/laser_lady_spb"
                                       class="socials-line__item-link">
                                        <span class="icon-vk"></span>
                                    </a>
                                </div>
                                <div class="socials-line__item">
                                    <a target="_blank" href="https://www.instagram.com/laser_lady_spb/"
                                       class="socials-line__item-link">
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

    <section id="sign-up" class="sign-up sign-up-section section">
        <div class="container">
            <h2 class="section__title decorated-title">Записаться можно здесь</h2>

            <div style="padding: 50px 0; border: 1px solid red">
                <iframe style="width: 100%; height: 500px" src="https://napriem.com/a6cfb5?min=1&hideall=1"></iframe>
            </div>

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
