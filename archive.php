<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package frondendie
 */

get_header();
?>

	<?php if ( have_posts() ) : ?>
		<?php breadcrumbs(); ?>
		<div class="container_center">

			<header class="page-header">
				<?php
				if ( is_post_type_archive( 'reviews' ) ) {
					echo '<h1 class="section__title">Testimotionals</h1>';
				} elseif ( is_post_type_archive( 'projects' ) ) {
					echo '<h1 class="section__title">Our <span style="color: #DDC181;">works</span></h1>';
				} else {
					the_archive_title( '<h1 class="section__title">', '</h1>' );
				}
				// the_archive_description( '<div class="archive-description">', '</div>' );

				?>
			</header><!-- .page-header -->

			<?php
			if ( is_post_type_archive( 'reviews' ) ) {

				get_template_part( 'template-parts/archive', get_post_type() );

			} elseif (  is_post_type_archive( 'projects' )  ) {

				get_template_part( 'template-parts/archive', get_post_type() );

			} else {

				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;
			}

			the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;

			?>

		</div>
		<?php

		require get_template_directory() . '/inc/get-touch.php';

	?>

<?php
// get_sidebar();
get_footer();
