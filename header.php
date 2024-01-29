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

$bgColor = SCF::get('project_bg_color');
$bodyColor = '';
if ($bgColor && !is_archive()) {
	$bodyColor = 'style="background: ' . $bgColor . '"';
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5J4SDQ8');
	</script>
	<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?> <?php echo $bodyColor ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J4SDQ8" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php wp_body_open(); ?>
	<!-- <div id="page" class="site"> -->
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'frondendie'); ?></a> -->

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