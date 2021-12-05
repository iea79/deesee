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
			} elseif (SCF::get( 'first__image' )) {
				?>
				<div class="projectHome__img">
				<?php
				echo wp_get_attachment_image(SCF::get( 'first__image' ), 'full');
				?>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>
<!-- end projectHome -->

<div class="container_center">
	<h2 class="section__title"><?php echo SCF::get( 'dev__title' ); ?></h2>
</div>

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
				} elseif (SCF::get( 'benchmark__img' )) {
					echo wp_get_attachment_image(SCF::get( 'benchmark__img' ), 'full');
				}
				?>
			</div>
		</div>
	</div>
</section>
<!-- end projectBenchmark -->

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
			<?php echo wp_get_attachment_image(SCF::get( 'content__decor' ), 'full') ?>
		</div>
	</div>
</section>
<!-- end projectContent -->

<!-- begin projectVisual -->
<section id="projectVisual" class="projectVisual">
	<div class="projectVisual__bg">
		<?php echo wp_get_attachment_image(SCF::get( 'visual__bg' ), 'full') ?>
	</div>
	<div class="container_center">
		<div class="projectVisual__content">
			<div class="projectVisual__left">
				<div class="projectCount"></div>
				<h2 class="project__title"><?php echo SCF::get( 'visual__title' ); ?></h2>
				<div class="project__text"><?php echo SCF::get( 'visual__text' ); ?></div>
			</div>
			<div class="projectVisual__img">
				<?php
				if (SCF::get( 'visual__video' ) !== "") {
					?>
					<div class="video__wrapper">
						<video src="<?php echo wp_get_attachment_url(SCF::get( 'visual__video' )) ?>" muted loop preload="auto" playsinline></video>
					</div>
					<?php
				} elseif (SCF::get( 'visual__img' )) {
					echo wp_get_attachment_image(SCF::get( 'visual__img' ), 'full');
				}
				?>
			</div>
		</div>
	</div>
</section>
<!-- end projectVisual -->

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
				<div class="projectMoodboard__gallery">
					<?php
						$moodboard_gallery = SCF::get('moodboard-gallery');

						foreach ($moodboard_gallery as $item) {
							$moodImage = wp_get_attachment_image($item['moodboard__img'], 'full');
							$moodUrl = wp_get_attachment_url($item['moodboard__img']);
							echo '
							<a href="'.$moodUrl.'">
								'.$moodImage.'
							</a>
							';
						};
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end projectMoodboard -->

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
								<video src="<?php echo wp_get_attachment_url('.$conceptVideo.') ?>" muted loop preload="auto" playsinline></video>
							</div>
							';
						}
						if ($conceptImg && $conceptVideo === '') {
							echo  wp_get_attachment_image($conceptImg, 'full');
						}
						echo "</div>";
						if ($itemCount == 6) {
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
				<?php echo wp_get_attachment_image(SCF::get( 'frontend__img' ), 'full') ?>
			</div>
		</div>
	</div>
</section>
<!-- end projectFrontend -->

<!-- begin projectMobile -->
<section id="projectMobile" class="projectMobile">
	<div class="container_center">
		<div class="projectCount"></div>
		<div class="projectMobile__head">
			<h2 class="project__title"><?php echo SCF::get( 'mobile__title' ); ?></h2>
			<div class="project__text"><?php echo SCF::get( 'mobile__text' ); ?></div>
		</div>
		<div class="projectMobile__content">
			<div class="projectMobile__decktop">
				<div class="projectMobile__media">
					<?php
					if (SCF::get( 'desktop__video' ) !== "") {
						?>
						<div class="video__wrapper">
							<video src="<?php echo wp_get_attachment_url(SCF::get( 'desktop__video' )) ?>" muted loop preload="auto" playsinline></video>
						</div>
						<?php
					} elseif (SCF::get( 'desktop__img' )) {
						echo wp_get_attachment_image(SCF::get( 'desktop__img' ), 'full');
					}
					?>
				</div>
			</div>
			<div class="projectMobile__mobile">
				<div class="projectMobile__media">
					<?php
					if (SCF::get( 'mobile__video' ) !== "") {
						?>
						<div class="video__wrapper">
							<video src="<?php echo wp_get_attachment_url(SCF::get( 'mobile__video' )) ?>" muted loop preload="auto" playsinline></video>
						</div>
						<?php
					} elseif (SCF::get( 'mobile__img' )) {
						echo wp_get_attachment_image(SCF::get( 'mobile__img' ), 'full');
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end projectMobile -->

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
				<?php echo wp_get_attachment_image(SCF::get( 'seo__img' ), 'full') ?>
			</div>
		</div>
	</div>
</section>
<!-- end projectSeo -->

<!-- begin projectQa -->
<section id="projectQa" class="projectQa">
	<div class="container_center">
		<div class="projectQa__head">
			<div class="projectCount"></div>
			<h2 class="project__title"><?php echo SCF::get( 'qa__title' ); ?></h2>
			<div class="project__text"><?php echo SCF::get( 'qa__text' ); ?></div>
		</div>
		<div class="projectQa__img">
			<?php echo wp_get_attachment_image(SCF::get( 'qa__img' ), 'full') ?>
		</div>
	</div>
</section>
<!-- end projectQa -->

<!-- begin projectMembers -->
<section id="projectMembers" class="projectMembers section">
    <div class="container_center">
		<h2 class="section__title"><?php echo SCF::get( 'team__title' ); ?></h2>
        <div class="projectMembers__content">
			<?php
			$members = get_posts([
                'posts_per_page'  =>  -1,
                'post_type'       => 'teams',
                'include'         => SCF::get('top_member'),
				'order'			  => 'ASC'
            ]);

            foreach ($members as $member) {
                setup_postdata( $member );
                // var_dump($member);

                $memberMeta = SCF::gets($member);
                ?>
				<div class="projectMembers__item">
					<div class="projectMembers__photo">
						<?php echo get_the_post_thumbnail($member, 'full') ?>
					</div>
					<div class="projectMembers__name"><?php echo get_the_title($member); ?></div>
					<div class="projectMembers__prof"><?php echo $memberMeta['team__prof']; ?></div>
				</div>
                <?php
            }
            wp_reset_postdata();			?>
        </div>
    </div>
</section>
<!-- end projectMembers -->

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

<?php
require get_template_directory() . '/inc/get-touch.php';
