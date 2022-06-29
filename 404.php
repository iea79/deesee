<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package frondendie
 */

get_header();
?>

	<section class="error-404 not-found">

		<?php breadcrumbs(); ?>
		<!-- Begin container_center -->
		<div class="container_center">
			<header class="page-header">
				<div class="section__title" style="color: #DDC181;">404</div>
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'frondendie' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'frondendie' ); ?></p>
				<p><a href="/" class="btn">Go home</a></p>

			</div><!-- .page-content -->
		</div>
		<!-- End container_center -->
	</section><!-- .error-404 -->

<?php
get_footer();
