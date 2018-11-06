<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://api-maps.yandex.ru/2.1/?apikey=38b50171-1df9-4bf0-8c68-53ff4817b81f&lang=ru_RU" type="text/javascript">
  </script>
	<?php wp_head(); ?>
</head>
<body>
<div class="page">
	<?php
	$logo = str_replace( site_url(), '', get_template_directory_uri() . '/public/img/logo.svg' );

	if ( file_exists( ABSPATH . $logo ) ) {
		$logo = file_get_contents( ABSPATH . $logo );
	} else {
	  $logo = '';
  }
	?>

  <header class="header page__header">
    <div class="header__upper">
      <div class="container">
        <div class="header__upper-flex">
          <div class="company-info">
            <p class="company-info__item">Пн-Вс 10:00 - 20:00</p>
            <span class="company-info__separator"></span>
            <p class="company-info__item">г.Санкт-Петербург</p>
            <p class="company-info__item">Владимирский просп., д. 1</p>
          </div>
          <div class="logo header__logo">
            <?php echo $logo?>
          </div>
          <div class="company-links header__company-links">
            <div class="socials-line company-links__item company-links__socials-line">
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
            <div class="company-links__item">
              <a href="tel:+79995501745" class="company-links__item-link">+7(999)550-17-45</a>
            </div>
            <div class="company-links__item">
              <a href="mailto:studia@gmail.com" class="company-links__item-link">studia@gmail.com</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="header__nav">
      <div class="container">
        <ul class="menu-list">
          <li class="menu-list__item">
            <a href="#" class="menu-list__item-link">Лазерная эпиляция</a>
          </li>
          <li class="menu-list__item">
            <a href="#" class="menu-list__item-link">О нас</a>
          </li>
          <li class="menu-list__item">
            <a href="#" class="menu-list__item-link">LP Lazer</a>
          </li>
          <li class="menu-list__item">
            <a href="#" class="menu-list__item-link">Специалисты</a>
          </li>
          <li class="menu-list__item">
            <a href="#" class="menu-list__item-link">Цены</a>
          </li>
          <li class="menu-list__item">
            <a href="#" class="menu-list__item-link">контакты</a>
          </li>
          <li class="menu-list__item accent">
            <a href="#" class="menu-list__item-link">записаться</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
