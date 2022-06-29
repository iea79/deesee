<?php
/*
Template Name: SEO project template
Template Post Type: projects
*/
get_header();
?>
<?php echo breadcrumbs(); ?>
<!-- begin projectHome -->
<section id="projectHome" class="projectHome">
	<div class="projectHome__bg">
		<?php echo wp_get_attachment_image(SCF::get( 'first__bg' ), 'full') ?>
	</div>
	<div class="container_center">
		<div class="projectHome__content">
			<h1 class="section__title"><?php echo SCF::get( 'first__title' ); ?></h1>
			<div class="section__sub"><?php echo SCF::get( 'first__text' ); ?></div>
		</div>
		<div class="projectHome__media">
			<?php

			if (SCF::get( 'first__video' ) !== "") {
				?>
				<div class="video__wrapper">
					<video src="<?php echo wp_get_attachment_url(SCF::get( 'first__video' )) ?>" muted loop preload="auto" playsinline></video>
				</div>
				<?php
			} elseif (SCF::get( 'first__img' )) {
				?>
				<div class="projectHome__img">
				<?php
				echo wp_get_attachment_image(SCF::get( 'first__img' ), 'full');
				?>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>
<!-- end projectHome -->


<?php if (SCF::get( 'problems_show' )): ?>
<!-- begin seoProblems -->
<section id="seoProblems" class="seoProblems section lrBorder bBorder">
    <div class="container_center">
        <div class="seoProblems__content">
            <div class="seoProblems__left">
                <h2 class="section__title"><?php echo SCF::get( 'problems__title' ); ?></h2>
            </div>
            <div class="seoProblems__list">
                <?php
                    $problems_list = SCF::get('problems_list');

                    foreach ($problems_list as $item) {
                        ?>
                            <div class="seoProblems__item"><?php echo $item['problems__list_item'] ?></div>
                        <?php
                    };
                ?>
            </div>
        </div>
        <div class="seoProblems__donut">
            <?php
                $problems_rezult = SCF::get('problems_rezult');
				$i = 0;

                foreach ($problems_rezult as $item) {
					if ($item['problems__rezult_json']) {
						?>
						<div class="lotti" data-path="<?php echo wp_get_attachment_url($item['problems__rezult_json']); ?>" data-anim-loop="false" data-name="problems__json<?php echo $i ?>"></div>
						<?php
					} else {
	                    ?>
	                    <div class="seoProblems__chart">
	                        <div class="seoProblems__stat">
	                            <div class="seoProblems__percent"><?php echo $item['problems__rezult_percent'] ?>%</div>
	                            <div class="seoProblems__label"><?php echo $item['problems__rezult_label'] ?></div>
	                        </div>
	                    </div>
	                    <?php
					}
					$i++;
                };
            ?>
        </div>
    </div>
</section>
<!-- end seoProblems -->
<?php endif; ?>

<?php if (SCF::get( 'research_show' )): ?>
<!-- begin seoResearch -->
<section id="seoResearch" class="seoResearch section lrBorder">
    <div class="container_center">
        <div class="seoResearch__content">
            <div class="seoResearch__left">
                <div class="projectCount"></div>
                <div class="section__sub"><?php echo SCF::get( 'research__text' ); ?></div>
            </div>
            <div class="seoResearch__right">
                <?php if ( SCF::get( 'research__file' ) ): ?>
					<div class="lotti" data-path="<?php echo wp_get_attachment_url(SCF::get( 'research__json' )); ?>" data-anim-loop="false" data-name="research__json"></div>
                <?php elseif ( SCF::get( 'research__video' ) ): ?>
					<div class="seoResearch__video">
						<div class="video__wrapper">
							<video src="<?php echo wp_get_attachment_url(SCF::get( 'research__video' )) ?>" muted loop preload="auto" playsinline></video>
						</div>
					</div>
                <?php else: ?>
                    <?php echo wp_get_attachment_image( SCF::get( 'research__img' ), 'full'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end seoResearch -->
<?php endif; ?>

<?php if (SCF::get( 'semantic_show' )): ?>
<!-- begin seoCore -->
<section id="seoCore" class="seoCore section lrBorder">
    <div class="container_center">
        <div class="seoCore__content">
            <div class="seoCore__left">
                <div class="projectCount"></div>
                <div class="section__sub"><?php echo SCF::get( 'semantic__text' ); ?></div>
            </div>
            <div class="seoCore__right">
                <?php if ( SCF::get( 'semantic__file' ) ): ?>
					<div class="lotti" data-path="<?php echo wp_get_attachment_url(SCF::get( 'semantic__json' )); ?>" data-anim-loop="false" data-name="semantic__json"></div>
				<?php elseif ( SCF::get( 'semantic__video' ) ): ?>
					<div class="seoCore__video">
						<div class="video__wrapper">
							<video src="<?php echo wp_get_attachment_url(SCF::get( 'semantic__video' )) ?>" muted loop preload="auto" playsinline></video>
						</div>
					</div>
                <?php else: ?>
                    <?php echo wp_get_attachment_image( SCF::get( 'semantic__img' ), 'full'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end seoCore -->
<?php endif; ?>

<?php if (SCF::get( 'optimization_show' )): ?>
<!-- begin seoOptimization -->
<section id="seoOptimization" class="seoOptimization section lrBorder">
    <div class="container_center">
        <div class="seoOptimization__content">
            <div class="seoOptimization__left">
                <div class="projectCount"></div>
                <div class="section__sub"><?php echo SCF::get( 'optimization__text' ); ?></div>
            </div>
            <div class="seoOptimization__right">
                <?php if ( SCF::get( 'optimization__file' ) ): ?>
					<div class="lotti" data-path="<?php echo wp_get_attachment_url(SCF::get( 'optimization__json' )); ?>" data-anim-loop="false" data-name="optimization__json"></div>
				<?php elseif ( SCF::get( 'optimization__video' ) ): ?>
					<div class="seoOptimization__video">
						<div class="video__wrapper">
							<video src="<?php echo wp_get_attachment_url(SCF::get( 'optimization__video' )) ?>" muted loop preload="auto" playsinline></video>
						</div>
					</div>
                <?php else: ?>
					<div class="seoOptimization__img">
	                    <?php echo wp_get_attachment_image( SCF::get( 'optimization__img' ), 'full'); ?>
					</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end seoOptimization -->
<?php endif; ?>

<?php if (SCF::get( 'indexation_show' )): ?>
<!-- begin seoIndexation -->
<section id="seoIndexation" class="seoIndexation section lrBorder">
    <div class="container_center">
        <div class="seoIndexation__content">
            <div class="seoIndexation__left">
                <div class="projectCount"></div>
                <div class="section__sub"><?php echo SCF::get( 'indexation__text' ); ?></div>
            </div>
            <div class="seoIndexation__right">
                <?php if ( SCF::get( 'indexation__file' ) ): ?>
					<div class="lotti" data-path="<?php echo wp_get_attachment_url(SCF::get( 'indexation__json' )); ?>" data-anim-loop="false" data-name="indexation__json"></div>
				<?php elseif ( SCF::get( 'indexation__video' ) ): ?>
					<div class="seoIndexation__video">
						<div class="video__wrapper">
							<video src="<?php echo wp_get_attachment_url(SCF::get( 'indexation__video' )) ?>" muted loop preload="auto" playsinline></video>
						</div>
					</div>
                <?php else: ?>
					<div class="seoIndexation__img">
	                    <?php echo wp_get_attachment_image( SCF::get( 'indexation__img' ), 'full'); ?>
					</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end seoIndexation -->
<?php endif; ?>

<?php if (SCF::get( 'analytics_show' )): ?>
<!-- begin seoAnalytics -->
<section id="seoAnalytics" class="seoAnalytics section lrBorder">
    <div class="container_center">
        <div class="seoAnalytics__content">
            <div class="seoAnalytics__left">
                <div class="projectCount"></div>
                <div class="section__sub"><?php echo SCF::get( 'analytics__text' ); ?></div>
            </div>
            <div class="seoAnalytics__right">
                <?php if ( SCF::get( 'analytics__file' ) ): ?>
					<div class="lotti" data-path="<?php echo wp_get_attachment_url(SCF::get( 'analytics__json' )); ?>" data-anim-loop="false" data-name="analytics__json"></div>
				<?php elseif ( SCF::get( 'analytics__video' ) ): ?>
					<div class="seoAnalytics__video">
						<div class="video__wrapper">
							<video src="<?php echo wp_get_attachment_url(SCF::get( 'analytics__video' )) ?>" muted loop preload="auto" playsinline></video>
						</div>
					</div>
                <?php else: ?>
                    <?php echo wp_get_attachment_image( SCF::get( 'analytics__img' ), 'full'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end seoAnalytics -->
<?php endif; ?>

<?php if (SCF::get( 'off_site_show' )): ?>
<!-- begin seoOffSite -->
<section id="seoOffSite" class="seoOffSite section lrBorder bBorder">
    <div class="container_center">
        <div class="seoOffSite__content">
            <div class="seoOffSite__left">
                <div class="projectCount"></div>
                <div class="section__sub"><?php echo SCF::get( 'off_site__text' ); ?></div>
            </div>
            <div class="seoOffSite__right">
                <?php if ( SCF::get( 'off_site__file' ) ): ?>
					<div class="lotti" data-path="<?php echo wp_get_attachment_url(SCF::get( 'off_site__json' )); ?>" data-anim-loop="false" data-name="off_site__json"></div>
				<?php elseif ( SCF::get( 'off_site__video' ) ): ?>
					<div class="seoOffSite__video">
						<div class="video__wrapper">
							<video src="<?php echo wp_get_attachment_url(SCF::get( 'off_site__video' )) ?>" muted loop preload="auto" playsinline></video>
						</div>
					</div>
                <?php else: ?>
                    <?php echo wp_get_attachment_image( SCF::get( 'off_site__img' ), 'full'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end seoOffSite -->
<?php endif; ?>

<?php
// $works = get_posts( array(
// 	'numberposts' => 6,
// 	'category'    => 0,
// 	// 'include'     => array(),
// 	'exclude'     => array($post->ID),
// 	// 'meta_key'    => '',
// 	// 'meta_value'  =>'',
// 	'post_type'   => 'projects',
// 	// 'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
// ) );
?>
<!-- begin ideas -->
<!-- <section id="ideas" class="ideas section">
	<div class="container_center">
		<div class="ideas__content">
			<div class="slider__head">
				<h2 class="section__title">Our <span style="color: #DDC181">works</span></h2>
				<div class="slider__arrow">
					<div class="slick-arrow slick-prev ideas__prev"></div>
					<div class="slick-arrow slick-next ideas__next"></div>
				</div>
			</div>
			<div class="ideas__slider">
				<?php
				foreach( $works as $work ){
                    $id = $work->ID;
			        get_post( $id );
			        // $category = get_the_category($id);
                    $workMeta = get_post_meta( $id );
					$video = get_attached_media( 'video', $id );
					$video = array_shift( $workMeta['first__video'] );


					if ($video && $video !== "") {
						?>
						<div class="ideas__item">
							<div class="ideas__video">
								<div class="video__wrapper">
	                                <video src="<?php echo wp_get_attachment_url( $video ); ?>" autoplay muted loop preload=""></video>
	                            </div>
							</div>
							<a href="<?php echo get_the_permalink($id); ?>" class="ideas__text">
								<h3><?php echo get_the_title($id); ?></h3>
								<p><?php echo the_excerpt_max_charlength($id, 260); ?></p>
								<div class="ideas__more">view More</div>
							</a>
						</div>
						<?php
					} else {
						?>
						<a href="<?php echo get_the_permalink($id); ?>" class="ideas__item">
							<div class="ideas__video">
								<div class="video__wrapper">
									<?php echo get_the_post_thumbnail($id, 'full') ?>
								</div>
							</div>
							<div class="ideas__text">
								<h3><?php echo get_the_title($id); ?></h3>
								<p><?php echo the_excerpt_max_charlength($id, 260); ?></p>
                                <div class="ideas__more">view More</div>
							</div>
						</a>
						<?php
					}
			    }
			    wp_reset_postdata();
				 ?>
			</div>

			<div class="ideas__action">
				<a href="/blog" class="btn btn_round btn_border">Read More</a>
			</div>
		</div>
	</div>
</section> -->
<!-- end ideas -->

<script>
	document.addEventListener('DOMContentLoaded', ev => {
		// onVisible( '.ideas__video video', function(video) {
		// 	console.log('visible');
		// 	video.play();
		// 	// if (!video.onplaying) {
		// 	// }
		// }, function(video) {
		// 	console.log('hidden');
		// 	video.pause();
		// 	// if (video.onplaying) {
		// 	// }
		// });
	});
</script>

<?php
require get_template_directory() . '/inc/get-touch.php';
get_footer();
