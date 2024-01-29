<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frondendie
 */

?>
	</main>

	<footer id="colophon" class="footer">
		<div class="footer__content">
			<div class="footer__soc">
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
			<div class="footer__copy">
				<a href="mailto: hello@deessemedia.com">hello@deessemedia.com</a>
				<a href="tel: (747) 231-1111">(747) 231-1111</a>
			</div>
			<div class="footer__terms">
				<span><?php echo date('Y'); ?> © All rights reserved</span>
				<a href="https://deessemedia.com/privacy-policy/">Privacy Policy</a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

<?php echo do_shortcode( '[start_project]' ); ?>

</body>
</html>
