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
			<div class="footer__copy">2020 © All rights reserved</div>
			<div class="footer__terms">
				<a href="">Terms of use</a>
				<a href="">Privacy</a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
