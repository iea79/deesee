<?php
global $post;
$ideas = get_posts( array(
	'numberposts' => 6,
	'exclude'	  => 1383,
	'post_type'   => 'post',
));
if (SCF::get('ideas_post')) {
	$ideas = get_posts( array(
		'numberposts' => 6,
		'exclude'	  => 1383,
		'post_type'   => 'post',
		'include'     => SCF::get('ideas_post'),
		'orderby' 	  => 'post__in',
		'post__in'    => SCF::get('ideas_post')
	));
}

if ($ideas) {
?>
<!-- begin ideas -->
<?php if (is_page_template('page-web-design-template.php')): ?>
	<section id="ideas" class="ideas related">
		<div class="container_center">
			<div class="devAnchore" id="blog">
		        <span>our blog</span>
		    </div>
<?php else: ?>
	<section id="ideas" class="ideas section">
		<div class="container_center">
<?php endif; ?>
		<div class="ideas__content">
			<div class="slider__head">
				<?php if (is_page_template('page-web-design-template.php')): ?>
					<h2 class="section__title">Related <span style="color: #DDC181">articles</span></h2>
				<?php else: ?>
					<h2 class="section__title"><span style="color: #DDC181">Ideas</span> & Advice</h2>
				<?php endif; ?>
				<div class="slider__arrow">
					<div class="slick-arrow slick-prev ideas__prev"></div>
					<div class="slick-arrow slick-next ideas__next"></div>
				</div>
			</div>
			<div class="ideas__slider">
				<?php
				foreach( $ideas as $post ){
			        setup_postdata( $post );
			        $post_id = $post->ID;
					$video = SCF::get( 'post__video_file', $post_id );
					// $video = get_attached_media( 'video', $post_id );
					// $video = get_children( array( 'post_type'=>'attachment', 'post_parent'=>$post_id ) );
					// $video = array_shift( $video );

					if ($video) {
						// print_r($video->guid);
						?>
						<div class="ideas__item">
							<div class="ideas__video">
								<div class="video__wrapper">
									<video src="<?php echo wp_get_attachment_url($video); ?>" loop muted preload="auto" playsinline loading="lazy"></video>
								</div>
							</div>
							<a href="<?php echo get_the_permalink($post_id); ?>" class="ideas__text">
								<h3><?php echo get_the_title(); ?></h3>
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
				<a href="/blog/" class="btn btn_round btn_border">Read More</a>
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
<?php
}
