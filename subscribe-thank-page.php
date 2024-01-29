<?php
/*
Template Name: Thank subscribe
Template Post Type: page
*/
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

	<div class="subscribe subscribeThank">
		<div class="subscribeThank__bg">
			<img src="<?php echo get_template_directory_uri() . '/img/panther-thanks.svg' ?>" alt="">
		</div>
		<!-- Begin container_center -->
		<div class="container_center">
			<div class="subscribe__content">
				<div class="subscribe__left">
					<h1 class="section__title"><?php echo SCF::get('first__title'); ?></h1>
					<div class="section__sub"><?php echo SCF::get('first__sub'); ?></div>
					<a href="<?php echo wp_get_attachment_url(SCF::get('first__file')) ?>" class="subscribe__download" download="">
						<svg xmlns="http://www.w3.org/2000/svg" width="84" height="84" viewBox="0 0 84 84" fill="none">
							<circle cx="42" cy="42" r="42" fill="#BFA778" />
							<path d="M54 46V51.3333C54 52.0406 53.719 52.7189 53.219 53.219C52.7189 53.719 52.0406 54 51.3333 54H32.6667C31.9594 54 31.2811 53.719 30.781 53.219C30.281 52.7189 30 52.0406 30 51.3333V46" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M35.334 39.333L42.0007 45.9997L48.6673 39.333" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M42 46V30" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
						<span><?php echo SCF::get('first__btn'); ?></span>
					</a>
					<div class="section__sub"><?php echo SCF::get('first__sub2'); ?></div>
					<div class="subscribe__soc">
						<?php
						wp_nav_menu(
							array(
								'menu'            => 'socials',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							)
						);
						?>
					</div>
				</div>
				<div class="subscribe__right">
					<div class="subscribe__imgs">
						<img src="<?php echo get_template_directory_uri() . '/img/subscr1.png' ?>" alt="">
						<img src="<?php echo get_template_directory_uri() . '/img/subscr2.png' ?>" alt="">
					</div>
				</div>
			</div>
		</div>
		<!-- End container_center -->
	</div>
</body>
<?php
wp_footer();
?>

</html>