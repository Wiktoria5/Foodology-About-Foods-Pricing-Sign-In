<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fodology
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
        <div class="container">
            <div class="header__nav">
                <div class="header__nav--logo">
                    <a href="" class="m-menu-link">
                        <i class="fas fa-bars"></i>
                    </a>
					<?php
					wp_nav_menu(
					array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'mobile',
					'container_class'	=> 'm-header__nav__main',
					'menu_class'	=> 'm-header__nav--items'
					)
					);
					?>
                    <a href=""><?php bloginfo( 'name' ); ?></a>
                </div>
					<?php
					wp_nav_menu(
					array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container_class'	=> 'header__nav__main',
					'menu_class'	=> 'header__nav--items'
					)
					);
					?>
            </div>
        </div>
    </header>

	<section class="main">
        <div class="container">
            <div class="main__body">
                <div class="main__body--text">
					<h6><?php the_field('subtitle'); ?></h6>
                    <h1><?php the_field('title'); ?></h1>
                    <p> <?php the_field('description_title'); ?> </p>
                    <a href=""> <?php the_field('button'); ?> </a>
                </div>
                <div class="main__body--photo">
                    <div class="main__photo--wrapper"></div>
					<img src="<?php the_field('main-screen-photo'); ?>" alt="main-screen">
                </div>
            </div>
        </div>
    </section>