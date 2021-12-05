<?php
$posts = get_posts( array(
	'numberposts' => 6,
	'category'    => 0,
	// 'include'     => array(),
	// 'exclude'     => array(),
	// 'meta_key'    => '',
	// 'meta_value'  =>'',
	'post_type'   => 'post',
	// 'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
?>
<!-- begin ideas -->
<section id="ideas" class="ideas section">
	<div class="container_center">
		<div class="ideas__content">
			<div class="slider__head">
				<h2 class="section__title"><span style="color: red">Ideas</span> & Advice</h2>
				<div class="slider__arrow">
					<div class="slick-arrow slick-prev ideas__prev"></div>
					<div class="slick-arrow slick-next ideas__next"></div>
				</div>
			</div>
			<div class="ideas__slider">
				<?php
				foreach( $posts as $post ){
			        setup_postdata( $post );
			        $post_id = $post->ID;
			        $category = get_the_category($post_id);
					$video = get_attached_media( 'video', $post_id );
					$video = array_shift( $video );

					if ($video) {
						// print_r($video->guid);
						?>
						<div class="ideas__item">
							<div class="ideas__video">
								<video src="<?php echo $video->guid; ?>" loop muted preload="auto" playsinline>
								</video>
							</div>
							<a href="<?php echo get_the_permalink($post_id); ?>" class="ideas__text">
								<h3><?php echo get_the_title($post_id); ?></h3>
								<p><?php echo the_excerpt_max_charlength($post_id, 260); ?></p>
							</a>
						</div>
						<?php
					} else {
						?>
						<a href="<?php echo get_the_permalink($post_id); ?>" class="ideas__item">
							<div class="ideas__img">
								<?php echo get_the_post_thumbnail($post_id, 'full') ?>
							</div>
							<div class="ideas__text">
								<h3><?php echo get_the_title($post_id); ?></h3>
								<p><?php echo the_excerpt_max_charlength($post_id, 260); ?></p>
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
	// document.addEventListener('DOMContentLoaded', ev => {
	// 	onVisible( '.ideas__video video', function(video) {
	// 		console.log('visible');
	// 		video.play();
	// 		// if (!video.onplaying) {
	// 		// }
	// 	}, function(video) {
	// 		console.log('hidden');
	// 		video.pause();
	// 		// if (video.onplaying) {
	// 		// }
	// 	});
	// });
</script>
