<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package frondendie
 */

get_header();
?>
	<?php
	breadcrumbs();

	// while ( have_posts() ) :
		// the_post();

		get_template_part( 'template-parts/content', get_post_type() );

		?>
		<!-- <div class="container_center"> -->
		<!-- </div> -->
		<?php

	// endwhile; // End of the loop.
	?>

<?php
// get_sidebar();
get_footer();
