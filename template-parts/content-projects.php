<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package frondendie
 */

?>

<?php breadcrumbs(); ?>

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
				<!-- <div class="video__wrapper js-youtube" id="<?php //echo SCF::get( 'first__video' ); ?>">
					<img src="<?php //echo get_template_directory_uri() ?>/img/play.svg" alt="Play" class="video__play" />
				</div> -->
				<div class="video__wrapper">
					<video src="<?php echo wp_get_attachment_url(SCF::get( 'first__video' )) ?>" muted loop preload="auto" playsinline>
					</video>
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

<?php if (SCF::get( 'dev_show' )): ?>
	<div class="container_center">
		<h2 class="section__title"><?php echo SCF::get( 'dev__title' ); ?></h2>
	</div>
<?php endif; ?>

<?php if (SCF::get( 'benchmark_show' )): ?>
	<!-- begin projectBenchmark -->
	<section id="projectBenchmark" class="projectBenchmark">
		<div class="container_center">
			<div class="projectBenchmark__content">
				<div class="projectBenchmark__left">
					<div class="projectCount"></div>
					<h2 class="project__title"><?php echo SCF::get( 'benchmark__name' ); ?></h2>
					<div class="project__text"><?php echo SCF::get( 'benchmark__text' ); ?></div>
				</div>
				<div class="projectBenchmark__img">
					<?php
					if (SCF::get( 'benchmark__video' ) !== "") {
						?>
						<div class="video__wrapper">
							<video src="<?php echo wp_get_attachment_url(SCF::get( 'benchmark__video' )) ?>" muted loop preload="auto" playsinline></video>
						</div>
						<?php
					} elseif (SCF::get( 'benchmark__json' )) {
						?>
						<div class="lotti" data-path="<?php echo wp_get_attachment_url(SCF::get( 'benchmark__json' )); ?>" data-anim-loop="false" data-name="benchmark__json"></div>
						<?php

					} elseif (SCF::get( 'benchmark__img' )) {
						echo wp_get_attachment_image(SCF::get( 'benchmark__img' ), 'full');
					}
					?>
				</div>
			</div>
		</div>
	</section>
	<!-- end projectBenchmark -->
<?php endif; ?>

<?php if (SCF::get( 'structure_show' )): ?>
<!-- begin projectStructure -->
<section id="projectStructure" class="projectStructure">
	<div class="container_center">
		<div class="projectStructure__content">
			<div class="projectStructure__left">
				<div class="projectCount"></div>
				<h2 class="project__title"><?php echo SCF::get( 'structure__name' ); ?></h2>
				<div class="project__text"><?php echo SCF::get( 'structure__text' ); ?></div>
			</div>
			<div class="projectStructure__img">
				<?php
				if (SCF::get( 'structure__video' ) !== "") {
					?>
					<div class="video__wrapper">
						<video src="<?php echo wp_get_attachment_url(SCF::get( 'structure__video' )) ?>" muted loop preload="auto" playsinline></video>
					</div>
					<?php
				} elseif (SCF::get( 'structure__json' )) {
					?>
					<div class="lotti" data-path="<?php echo wp_get_attachment_url(SCF::get( 'structure__json' )); ?>" data-anim-loop="false" data-name="structure__json"></div>
					<?php

				} elseif (SCF::get( 'structure__img' )) {
					echo wp_get_attachment_image(SCF::get( 'structure__img' ), 'full');
				}
				?>
			</div>
		</div>
	</div>
</section>
<!-- end projectStructure -->
<?php endif; ?>

<?php if (SCF::get( 'content_show' )): ?>
	<!-- begin projectContent -->
	<section id="projectContent" class="projectContent">
		<div class="container_center">
			<div class="projectContent__content">
				<div class="projectContent__left">
					<div class="projectCount"></div>
					<h2 class="project__title"><?php echo SCF::get( 'content__name' ); ?></h2>
				</div>
				<div class="projectContent__right">
					<div class="project__text"><?php echo SCF::get( 'content__text' ); ?></div>
				</div>
			</div>
			<div class="projectContent__img">
				<?php echo wp_get_attachment_image(SCF::get( 'content__img' ), 'full') ?>
				<?php if (SCF::get( 'content__json' )): ?>
					<div class="lotti" data-path="<?php echo wp_get_attachment_url(SCF::get( 'content__json' )); ?>" data-anim-loop="false" data-name="content__json"></div>
				<?php else: ?>
					<?php echo wp_get_attachment_image(SCF::get( 'content__decor' ), 'full') ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- end projectContent -->
<?php endif; ?>

<?php if (SCF::get( 'visual_show' )): ?>
	<!-- begin projectVisual -->
	<section id="projectVisual" class="projectVisual">
		<!-- <div class="projectVisual__bg"> -->
			<?php // echo wp_get_attachment_image(SCF::get( 'visual__bg' ), 'full') ?>
		<!-- </div> -->
		<div class="container_center">
			<div class="projectVisual__content">
				<div class="projectVisual__left">
					<div class="projectCount"></div>
					<h2 class="project__title"><?php echo SCF::get( 'visual__title' ); ?></h2>
					<div class="project__text"><?php echo SCF::get( 'visual__text' ); ?></div>
				</div>
				<div class="projectVisual__img">
					<?php
					if (SCF::get( 'visual__json' ) !== "") {
						?>
						<div class="lotti" data-path="<?php echo wp_get_attachment_url(SCF::get( 'visual__json' )); ?>" data-anim-loop="false" data-name="visual__json"></div>
						<?php
					} elseif (SCF::get( 'visual__img' )) {
						echo wp_get_attachment_image(SCF::get( 'visual__img' ), 'full');
					}
					?>
				</div>
			</div>
			<?php
				$visual_options = SCF::get('visual_options');

				if ($visual_options) {
					?>
					<div class="projectVisual__bottom">
						<div class="projectVisual__list">
							<?php
							foreach ($visual_options as $item) {
								?>
									<div class="projectVisual__listItem">
										<div class="projectVisual__name"><?php echo $item['visual__name']; ?></div>
										<div class="projectVisual__thumb">
											<?php echo wp_get_attachment_image($item['visual__opt_img'], 'full') ?>
										</div>
										<div class="projectVisual__sub"><?php echo $item['visual__sub']; ?></div>
									</div>
								<?php
							};
							?>
						</div>
					</div>
					<?php
				}
			?>
		</div>
	</section>
	<!-- end projectVisual -->
<?php endif; ?>

<?php if (SCF::get( 'moodboard_show' )): ?>
<!-- begin projectMoodboard -->
<section id="projectMoodboard" class="projectMoodboard">
	<div class="container_center">
		<div class="projectMoodboard__content">
			<div class="projectMoodboard__left">
				<div class="projectCount"></div>
				<h2 class="project__title"><?php echo SCF::get( 'moodboard__title' ); ?></h2>
				<div class="project__text"><?php echo SCF::get( 'moodboard__text' ); ?></div>
			</div>
			<div class="projectMoodboard__right">
				<div class="video__wrapper">
					<video src="<?php echo wp_get_attachment_url(SCF::get( 'moodboard__video' )) ?>" muted loop preload="auto" playsinline></video>
				</div>
				<div class="projectMoodboard__gallery">

					<?php
						// $moodboard_gallery = SCF::get('moodboard-gallery');
						//
						// foreach ($moodboard_gallery as $item) {
						// 	$moodImage = wp_get_attachment_image($item['moodboard__img'], 'full');
						// 	$moodUrl = wp_get_attachment_url($item['moodboard__img']);
						// 	echo '
						// 	<a href="'.$moodUrl.'">
						// 		'.$moodImage.'
						// 	</a>
						// 	';
						// };
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end projectMoodboard -->
<?php endif; ?>

<?php if (SCF::get( 'concept_show' )): ?>
<!-- begin projectConcept -->
<section id="projectConcept" class="projectConcept">
	<div class="container_center">
		<div class="projectConcept__content">
			<div class="projectConcept__left">
				<div class="projectCount"></div>
				<h2 class="project__title"><?php echo SCF::get( 'concept__title' ); ?></h2>
			</div>
			<div class="projectConcept__right">
				<div class="project__text"><?php echo SCF::get( 'concept__text' ); ?></div>
			</div>
		</div>
		<div class="projectConcept__right">
			<div class="projectConcept__gallery">
				<?php
					$concept_gallery = SCF::get('concept-gallery');

					foreach ($concept_gallery as $item) {
						$conceptVideo = $item['concept__file'];
						$conceptImg = $item['concept__img'];
						if ($conceptVideo !== '' && !$conceptImg) {
							?>
							<div class="projectConcept__item">
								<div class="video__wrapper">
									<video src="<?php echo wp_get_attachment_url($conceptVideo) ?>" muted loop preload="auto" playsinline></video>
								</div>
							</div>
							<?php
						}
						if ($conceptImg && $conceptVideo === '') {
							echo  '<div class="projectConcept__item">
							'.wp_get_attachment_image($conceptImg, 'full').
							'</div>';
						}
					};
				?>
			</div>
		</div>
	</div>
</section>
<!-- end projectConcept -->
<?php endif; ?>

<?php if (SCF::get( 'details_show' )): ?>
<!-- begin projectDetail -->
<section id="projectDetail" class="projectDetail">
	<div class="container_center">
		<div class="projectCount"></div>
		<h2 class="project__title"><?php echo SCF::get( 'details__title' ); ?></h2>
		<div class="projectDetail__scroll horizontallScroll">
			<div class="projectDetail__gallery">
				<?php
					$detail_gallery = SCF::get('details-gallery');
					$itemCount = 1;

					foreach ($detail_gallery as $item) {
						$conceptVideo = $item['details__file'];
						$conceptImg = $item['details__img'];
						echo '<div class="projectDetail__item item-'.$itemCount.'">';
						if ($conceptVideo !== '' && !$conceptImg) {
							echo  '
							<div class="video__wrapper">
								<video src="'.wp_get_attachment_url($conceptVideo).'" muted loop preload="auto" playsinline></video>
							</div>
							';
						}
						if ($conceptImg && $conceptVideo === '') {
							echo  wp_get_attachment_image($conceptImg, 'full');
						}
						echo "</div>";
						if ($itemCount == 7) {
							$itemCount = 1;
						} else {
							$itemCount++;
						}
					};
				?>
			</div>
		</div>
	</div>
</section>
<!-- end projectDetail -->
<?php endif; ?>

<!-- begin Modal videoReview -->
<div class="modal fade videoReview" id="videoReview">
    <div class="modal-dialog">
        <div class="modal-content">
            <a href="#" class="modal-close" data-dismiss="modal"></a>
            <!-- <div class="video__wrapper"></div> -->
        </div>
    </div>
</div>
<!-- end Modal videoReview -->

<?php if (SCF::get( 'frontend_show' )): ?>
<!-- begin projectFrontend -->
<section id="projectFrontend" class="projectFrontend">
	<div class="projectFrontend__bg">
		<?php echo wp_get_attachment_image(SCF::get( 'frontend__bg' ), 'full') ?>
	</div>
	<div class="container_center">
		<div class="projectFrontend__content">
			<div class="projectFrontend__left">
				<div class="projectCount"></div>
				<h2 class="project__title"><?php echo SCF::get( 'frontend__title' ); ?></h2>
				<div class="project__text"><?php echo SCF::get( 'frontend__text' ); ?></div>
			</div>
			<div class="projectFrontend__img">
				<?php if (SCF::get( 'frontend__video' )): ?>
					<div class="video__wrapper">
						<video src="<?php echo wp_get_attachment_url(SCF::get( 'frontend__video' )) ?>" muted loop preload="auto" playsinline></video>
					</div>
				<?php elseif (SCF::get( 'frontend__img' )): ?>
					<?php echo wp_get_attachment_image(SCF::get( 'frontend__img' ), 'full') ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- end projectFrontend -->
<?php endif; ?>

<?php if (SCF::get( 'mobile_show' )): ?>
<!-- begin projectMobile -->
<section id="projectMobile" class="projectMobile">
	<div class="container_center">
		<div class="projectCount"></div>
		<div class="projectMobile__head">
			<h2 class="project__title"><?php echo SCF::get( 'mobile__title' ); ?></h2>
			<?php if (SCF::get( 'mobile__text' )): ?>
				<div class="project__text"><?php echo SCF::get( 'mobile__text' ); ?></div>
			<?php endif; ?>
		</div>
		<div class="projectMobile__content">
			<?php
				$mobile_list = SCF::get('mobile_list');

				foreach ($mobile_list as $item) {
					?>
						<div class="projectMobile__item">
							<?php
							if ($item[ 'mobile__video' ]) {
								?>
								<video src="<?php echo wp_get_attachment_url($item[ 'mobile__video' ]) ?>" muted loop preload="auto" playsinline></video>
								<?php
							} elseif ($item[ 'mobile__img' ]) {
								echo wp_get_attachment_image($item[ 'mobile__img' ], 'full');
							}
							?>
						</div>
					<?php
				};
			?>
		</div>
	</div>
</section>
<!-- end projectMobile -->
<?php endif; ?>

<?php if (SCF::get( 'seo_show' )): ?>
<!-- begin projectSeo -->
<section id="projectSeo" class="projectSeo">
	<div class="container_center">
		<div class="projectSeo__content">
			<div class="projectSeo__left">
				<div class="projectCount"></div>
				<h2 class="project__title"><?php echo SCF::get( 'seo__title' ); ?></h2>
				<div class="project__text"><?php echo SCF::get( 'seo__text' ); ?></div>
			</div>
			<div class="projectSeo__img">
				<?php if ( SCF::get( 'seo__json' ) ): ?>
					<div class="lotti" data-path="<?php echo wp_get_attachment_url(SCF::get( 'seo__json' )); ?>" data-anim-loop="false" data-name="seo__json"></div>
				<?php elseif( SCF::get( 'seo__img' ) ): ?>
					<?php echo wp_get_attachment_image(SCF::get( 'seo__img' ), 'full') ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- end projectSeo -->
<?php endif; ?>

<?php if (SCF::get( 'qa_show' )): ?>
<!-- begin projectQa -->
<section id="projectQa" class="projectQa">
	<div class="container_center">
		<div class="projectQa__head">
			<div class="projectCount"></div>
			<h2 class="project__title"><?php echo SCF::get( 'qa__title' ); ?></h2>
			<div class="project__text"><?php echo SCF::get( 'qa__text' ); ?></div>
		</div>
		<?php if (SCF::get( 'qa__img' )): ?>
			<div class="projectQa__img">
				<?php echo wp_get_attachment_image(SCF::get( 'qa__img' ), 'full') ?>
			</div>
		<?php endif; ?>
	</div>
</section>
<!-- end projectQa -->
<?php endif; ?>

<?php if (SCF::get( 'team_show' )): ?>
<!-- begin projectMembers -->
<section id="projectMembers" class="projectMembers section">
    <div class="container_center">
		<h2 class="section__title"><?php echo SCF::get( 'team__title' ); ?></h2>
		<?php
			$projectTeam = SCF::get('top_member');
			$members = get_posts([
				'posts_per_page'  =>  -1,
				'post_type'       => 'teams',
				'include'         => SCF::get('top_member'),
				'orderby' 		  => 'post__in',
				'post__in'        => SCF::get('top_member')
			]);
		?>
        <div class="teamList">
			<?php
            foreach ($members as $member) {
                setup_postdata( $member );
                // var_dump($member->ID);

                $memberMeta = SCF::gets($member);
                ?>
				<div class="teamList__item">
					<div class="teamList__photo" style="background: <?php echo SCF::get( 'team_color' ); ?>">
						<?php echo get_the_post_thumbnail($member, 'full') ?>
					</div>
					<div class="teamList__name"><?php echo get_the_title($member); ?></div>
					<div class="teamList__prof"><?php echo $memberMeta['team__prof']; ?></div>
				</div>
                <?php
            }
            wp_reset_postdata();			?>
        </div>
    </div>
</section>
<!-- end projectMembers -->
<?php endif; ?>

<?php if (SCF::get( 'started_show' )): ?>
<!-- begin getStarted -->
<section id="getStarted" class="getStarted">
	<div class="container_center">
		<div class="getStarted__content">
			<div class="getStarted__left">
				<h2 class="section__title"><?php echo SCF::get( 'started__title' ); ?></h2>
				<div class="section__sub"><?php echo SCF::get( 'started__text' ); ?></div>
			</div>
			<div class="getStarted__right">
				<a href="<?php echo SCF::get( 'started__link' ); ?>" class="btn btn_border btn_round"><?php echo SCF::get( 'started__btn' ); ?></a>
			</div>
		</div>
	</div>
</section>
<!-- end getStarted -->
<?php endif; ?>

<?php
require get_template_directory() . '/inc/get-touch.php';
