<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package frondendie
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container_center">
		<?php the_title( '<h1 class="page__title">', '</h1>' ); ?>
		<?php frondendie_post_thumbnail(); ?>

		<div class="page__content">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'frondendie' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>
	</div>

</div><!-- #post-<?php the_ID(); ?> -->
