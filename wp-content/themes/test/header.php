<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navigation-wrapper">
            <a href="#!">
                <div class="logo">
                    <img width ="35" src="<?php echo get_template_directory_uri()?>./img/logo/logo.png" alt="">
                    <img width ="50" src="<?php echo get_template_directory_uri()?>./img/logo/Waxom.png" alt="">
                </div>
            </a>

            <ul class="navigation">
                <li class="navigation__item">
                    <a class="navigation__link" href="#!">Home</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#!">About Us</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#!">Portfolio</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#!">Features</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#!">Blog</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#!">Pricing</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#!">Shortcodes</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#!">Contact</a>
                </li>
                <li class="icon_cart">
                    <img src="<?php echo get_template_directory_uri()?>./img/logo/icon-cart.png" alt="icon-cart">
                </li>
                <li class="icon_search">
                    <img src="<?php echo get_template_directory_uri()?>./img/logo/icon-search.png" alt="icon-search">
                </li>
            </ul>
        </nav>