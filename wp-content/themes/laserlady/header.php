<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body>
<div class="page">
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
                    <div class="logo">
                        <div class="graybox"></div>
                    </div>
                    <div class="company-links">
                        <div class="socials-line company-links__item">
                            <div class="socials-line__item"></div>
                            <div class="socials-line__item"></div>
                        </div>
                        <div class="company-links__item">+7(999)550-17-45</div>
                        <div class="company-links__item">studia@gmail.com</div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="header__nav">
            <div class="container">
                <?php
                $menu_name = 'primary';
                $locations = get_nav_menu_locations();

                if( $locations && isset($locations[ $menu_name ]) ){
	                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
	                $menu_items = wp_get_nav_menu_items( $menu );

	                // создаем список
	                $menu_list = '<ul class="header-nav">';

	                foreach ( (array) $menu_items as $key => $menu_item ){
		                $menu_list .= '<li class="header-nav__item"><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
	                }

	                $menu_list .= '</ul>';
                  echo $menu_list;
                }
                ?>
            </div>
        </nav>
    </header>
