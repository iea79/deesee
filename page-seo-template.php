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
				<div class="video__wrapper js-youtube" id="<?php echo SCF::get( 'first__video' ); ?>">
					<img src="<?php echo get_template_directory_uri() ?>/img/play.svg" alt="Play" class="video__play" />
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

                foreach ($problems_rezult as $item) {
                    ?>
                    <div class="seoProblems__chart">
                        <div class="seoProblems__stat">
                            <div class="seoProblems__percent"><?php echo $item['problems__rezult_percent'] ?>%</div>
                            <div class="seoProblems__label"><?php echo $item['problems__rezult_label'] ?></div>
                        </div>
                    </div>
                    <?php
                };
            ?>
        </div>
    </div>
</section>
<!-- end seoProblems -->

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

                <?php else: ?>
                    <?php echo wp_get_attachment_image( SCF::get( 'research__img' ), 'full'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end seoResearch -->

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

                <?php else: ?>
                    <?php echo wp_get_attachment_image( SCF::get( 'semantic__img' ), 'full'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end seoCore -->

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

                <?php else: ?>
                    <?php echo wp_get_attachment_image( SCF::get( 'optimization__img' ), 'full'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end seoOptimization -->

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

                <?php else: ?>
                    <?php echo wp_get_attachment_image( SCF::get( 'indexation__img' ), 'full'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end seoIndexation -->

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

                <?php else: ?>
                    <?php echo wp_get_attachment_image( SCF::get( 'analytics__img' ), 'full'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end seoAnalytics -->

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

                <?php else: ?>
                    <?php echo wp_get_attachment_image( SCF::get( 'off_site__img' ), 'full'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end seoOffSite -->

<?php
$works = get_posts( array(
	'numberposts' => 6,
	'category'    => 0,
	// 'include'     => array(),
	'exclude'     => array($post->ID),
	// 'meta_key'    => '',
	// 'meta_value'  =>'',
	'post_type'   => 'projects',
	// 'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
?>
<!-- begin ideas -->
<section id="ideas" class="ideas section">
	<div class="container_center">
		<div class="ideas__content">
			<div class="slider__head">
				<h2 class="section__title">Our <span style="color: red">works</span></h2>
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
						// print_r($video);
						?>
						<div class="ideas__item">
							<div class="ideas__video">
                                <!-- <div class="video__wrapper js-youtube" id="<?php // echo $video ?>"> -->
                                    <!-- <img src="<?php // echo get_template_directory_uri() ?>/img/play.svg" alt="Play" class="video__play" /> -->
                                <!-- </div> -->
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
                            <!-- <?php print_r($workMeta); ?> -->
							<div class="ideas__img">
								<?php echo get_the_post_thumbnail($id, 'full') ?>
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
</section>
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
