<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frondendie
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
<!-- <div id="page" class="site"> -->
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'frondendie' ); ?></a> -->

	<header id="masthead" class="header">
		<div class="header__content">
			<div class="menu__toggle"></div>
			<div class="header__mobile mobile"></div>
			<div class="header__left">
				<nav id="site-navigation-1" class="nav">
					<?php
					wp_nav_menu(
						array(
							'menu'            => 'menu-1',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'menu',
							'menu_id'         => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'walker' => new description_walker()
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
			<div class="header__center">
				<?php the_custom_logo(); ?>
			</div>
			<div class="header__right">
				<nav id="site-navigation-2" class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'menu'            => 'menu-2',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'menu',
							'menu_id'         => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'walker' => new description_walker()
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
			<div class="header__border"></div>
		</div>

	</header><!-- #masthead -->

	<main class="main">
