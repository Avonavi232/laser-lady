<?php
/**
 * Created by PhpStorm.
 * User: ALEX
 * Date: 04.02.2019
 * Time: 21:51
 */

function ll_banners_shortcode() {
	$query = new WP_Query( array(
		'post_type'      => 'banner',
		'post_status'    => 'publish',
		'posts_per_page' => - 1,
	) );

	$banners = array();

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

	if ( empty( $banners ) ) {
		return;
	}
	ob_start();
	?>
    <section class="banners-slider banners-slider-section">
        <div class="banners-slider__container">
            <div class="js-banners-slider">
							<?php
							foreach ( $banners as $banner ) {
								?>
                  <div>
                      <div class="banners-slider__item banner-id-<?php echo $banner['id'] ?>"></div>
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
	<?php
	return ob_get_clean();
}

add_shortcode( 'banners', 'll_banners_shortcode' );

//BENEFITS
function ll_benefit_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'title'          => 'Заголовок преимущества',
		'content-length' => 60
	), $atts );
	ob_start();
	?>
    <li data-content-length="<?php echo $a['content-length'] ?>" class="benefits__item js-truncated-content">
        <h3 class="benefits__item-title title_1"><?php echo $a['title'] ?></h3>
        <p class="light benefits__item-content js-truncated-content-text"><?php echo $content ?></p>
        <span data-hide-text="Скрыть"
              class="benefits__item-readmore light js-truncated-content-readmore js-truncated-content-trigger">Больше информации</span>
    </li>
	<?php
	return ob_get_clean();
}

add_shortcode( 'benefit', 'll_benefit_shortcode' );


function ll_benefits_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'title' => 'Наши преимущества',
		'img'   => ''
	), $atts );
	ob_start();
	?>


    <section id="benefits" class="benefits-section section">
        <div class="container">
            <h2 class="section__title decorated-title"><?php echo $a['title'] ?></h2>
            <div class="row">
                <div class="col-sm-6">
                    <ol class="benefits"><?php echo do_shortcode( $content ) ?></ol>
                </div>
                <div class="col-sm-6">
                    <div class="benefits-section__decor-img">
											<?php echo $a['img'] ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<?php
	return ob_get_clean();
}

add_shortcode( 'benefits', 'll_benefits_shortcode' );


//МИФЫ
function ll_myth_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'index' => 'Миф 1',
		'title' => 'Заголовок'
	), $atts );
	ob_start();
	?>
    <div class="myths__item myth-item">
        <div class="myth-item__header">
            <h3 class="myth-item__title">
                <span class="styled"><?php echo $a['index'] ?></span>
							<?php echo $a['title'] ?>
            </h3>
        </div>
        <div class="myth-item__content">
            <p class="light"><?php echo $content ?></p>
        </div>
    </div>
	<?php
	return ob_get_clean();
}

add_shortcode( 'myth', 'll_myth_shortcode' );

function ll_myths_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'title' => 'Мифы и правда о лазерной эпиляции'
	), $atts );
	ob_start();
	?>
    <section class="myths myths-section section">
        <div class="container">
            <h2 class="section__title decorated-title"><?php echo $a['title'] ?></h2>
            <div class="myths__content">
                <div class="white-bg">
                    <div class="myths__slider js-myth-slider">
											<?php echo do_shortcode( $content ) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php
	return ob_get_clean();
}

add_shortcode( 'myths', 'll_myths_shortcode' );


//ЧАВО
function ll_question_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'title' => 'Заголовок'
	), $atts );
	ob_start();
	?>
    <li class="js-faq-question-container faq-questions__item">
        <div class="q js-faq-question"><?php echo $a['title'] ?></div>
        <div class="answer js-faq-answer"><?php echo $content ?></div>
    </li>
	<?php
	return ob_get_clean();
}

add_shortcode( 'question', 'll_question_shortcode' );

function ll_faq_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'title' => 'Часто задаваемые вопросы',
		'img'   => ''
	), $atts );
	ob_start();
	?>

    <section class="faq faq-section section">
        <div class="container">
            <h2 class="section__title decorated-title"><?php echo $a['title'] ?></h2>
            <div class="faq__content">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="faq-questions js-faq-questions">
													<?php echo do_shortcode( $content ) ?>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <div class="faq-section__decor-img">
	                        <?php echo $a['img'] ?>
                        </div>
                    </div>
                </div>
                <p class="el">У вас больше не осталось вопросов? Тогда можете записаться прямо сейчас!</p>
                <div class="el centered">
			<span class="btn" data-toggle="modal" data-target="#exampleModal">
				<span class="btn__label">Записаться</span>
			</span>
                </div>
            </div>
        </div>
    </section>
	<?php
	return ob_get_clean();
}

add_shortcode( 'faq', 'll_faq_shortcode' );


//Мастера
function ll_master_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'name' => 'Имя',
		'img'  => ''
	), $atts );
	ob_start();
	?>
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
													<?php echo $a['img'] ?>
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
                                    <h3 class="master-item__name"><?php echo $a['name'] ?></h3>
                                    <div class="master-item__description">
                                        <p class="light"><?php echo $content ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
	return ob_get_clean();
}

add_shortcode( 'master', 'll_master_shortcode' );

function ll_masters_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'title' => 'Наши мастера'
	), $atts );
	ob_start();
	?>
    <section id="masters" class="masters masters-section section">
        <div class="container">
            <h2 class="section__title decorated-title"><?php echo $a['title'] ?></h2>
            <div class="masters__content">
                <div class="masters__slider js-masters-slider">
									<?php echo do_shortcode( $content ) ?>
                </div>
            </div>
        </div>
    </section>
	<?php
	return ob_get_clean();
}

add_shortcode( 'masters', 'll_masters_shortcode' );


//Мастера
function ll_price_table_shortcode( $atts, $content = null ) {
	ob_start();
	?>
    <div>
        <div class="prices__item prices-table">
					<?php echo $content ?>
        </div>
    </div>
	<?php
	return ob_get_clean();
}

add_shortcode( 'table', 'll_price_table_shortcode' );

function ll_prices_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'title' => 'Стоимость'
	), $atts );
	ob_start();
	?>
    <section id="prices" class="prices prices-section section">
        <div class="container">
            <h2 class="section__title decorated-title"><?php echo $a['title'] ?></h2>
            <div class="prices__slider js-prices-slider">
							<?php echo do_shortcode( $content ) ?>
            </div>
        </div>
    </section>
	<?php
	return ob_get_clean();
}

add_shortcode( 'prices', 'll_prices_shortcode' );







