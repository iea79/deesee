<?php
/*
Template Name: Developer page template
Template Post Type: page
*/

get_header();
?>
<?php echo breadcrumbs(); ?>
<!-- begin pageHead -->
<section id="pageHead" class="pageHead">
	<div class="container_center">
		<div class="pageHead__content">
			<div class="pageHead__left">
				<h1 class="section__title"><?php echo SCF::get( 'first__title' ); ?></h1>
				<div class="section__sub"><?php echo SCF::get( 'first__text' ); ?></div>
				<div class="pageHead__action">
					<a href="<?php echo SCF::get( 'first__btn_link' ); ?>" class="btn btn_round"><?php echo SCF::get( 'first__btn' ); ?></a>
				</div>
			</div>
			<div class="pageHead__right">
				<div class="pageHead__img">
					<?php echo wp_get_attachment_image(SCF::get( 'first__img' ), 'full'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end pageHead -->

<!-- begin pageSteps -->
<section id="pageSteps" class="pageSteps">
	<div class="container_center">
		<div class="pageSteps__list">
			<?php
				$case__steps = SCF::get('case__steps');
				$caseStepImg = wp_get_attachment_image(SCF::get( 'steps__banner_bg' ), 'full');
				$caseStepBannerText = SCF::get( 'steps__banner_text' );
				$caseStepLast = SCF::get( 'steps__last' );

				foreach ($case__steps as $item) {
					?>
					<div class="pageSteps__item"><?php echo $item['steps__text']; ?></div>
					<?php
				};
			?>
			<?php if ($caseStepLast !== ''): ?>
				<div class="pageSteps__last">
					<span><?php echo SCF::get( 'steps__last' ); ?></span>
				</div>
			<?php endif; ?>
			<div class="pageSteps__banner">
				<div class="pageSteps__bannerBg">
					<?php echo $caseStepImg; ?>
				</div>
				<?php echo $caseStepBannerText; ?>
			</div>
		</div>
	</div>
</section>
<!-- end pageSteps -->

<!-- begin design -->
<section id="design" class="design section">
	<div class="container_center">
		<div class="design__head">
			<h2 class="section__title"><?php echo SCF::get( 'process__head_title' ); ?></h2>
			<div class="section__sub"><?php echo SCF::get( 'process__head_subtitle' ); ?></div>
		</div>
		<div class="design__content">
			<?php
				$design__tabs = SCF::get('case__process');
				$index = 1;
			?>
			<div class="design__tabs">
				<?php
				foreach ($design__tabs as $item) {
					$active = '';
					if ($index === 1) {
						$active = 'active';
					}
					echo '<div class="design__tab '.$active.'" data-tab="d'.$index.'">'.$item['process__title'].'</div>';
					$index++;
				};
				?>
			</div>
			<?php
			$index = 1;
			foreach ($design__tabs as $item) {
				$active = '';
				if ($index === 1) {
					$active = 'active';
				}
				?>
				<div class="design__plate <?php echo $active ?>" data-plate="d<?php echo $index ?>">
					<div class="design__img">
						<?php echo wp_get_attachment_image($item['process__img'], 'full') ?>
					</div>
					<div class="design__text">
						<h3><?php echo $item['process__title'] ?></h3>
						<?php echo $item['process__text'] ?>
					</div>
				</div>
				<?php
				$index++;
			};
			?>
		</div>
	</div>
</section>
<!-- end design -->

<!-- begin caseCost -->
<section id="caseCost" class="caseCost">
	<div class="container_center">
		<div class="caseCost__content">
			<div class="caseCost__left">
				<h2 class="section__title"><?php echo SCF::get( 'cost__title' ); ?></h2>
				<div class="caseCost__sub"><?php echo SCF::get( 'cost__content' ); ?></div>
			</div>
			<div class="caseCost__right">
				<div class="caseCost__img">
					<?php echo wp_get_attachment_image(SCF::get( 'cost__img' ), 'full'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end caseCost -->

<!-- begin claimOffer -->
<section id="claimOffer" class="claimOffer section">
	<div class="container_center">
		<div class="claimOffer__content">
			<div class="claimOffer__left">
				<h2 class="section__title"><?php echo SCF::get( 'order__title' ); ?></h2>
				<div class="section__sub"><?php echo SCF::get( 'order__sub' ); ?></div>
			</div>
			<div class="claimOffer__right">
				<a href="<?php echo SCF::get( 'order__btn_link' ); ?>" class="btn"><?php echo SCF::get( 'order__btn' ); ?></a>
			</div>
		</div>
	</div>
</section>
<!-- end claimOffer -->

<!-- begin casePrice -->
<section id="casePrice" class="casePrice">
	<div class="container_center">
		<h2 class="section__title" data-title="<?php echo strip_tags(SCF::get( 'price__title' )); ?>"><?php echo SCF::get( 'price__title' ); ?></h2>
		<div class="casePrice__list">
			<?php
				$case__price__list = SCF::get('case__price__list');
				// var_dump($case__price__list);

				if ($case__price__list) {
					foreach ($case__price__list as $item) {
						?>
						<div class="casePrice__item">
							<div class="casePrice__city"><?php echo $item['price__city'] ?></div>
							<div class="casePrice__price"><?php echo $item['price__price'] ?></div>
							<div class="casePrice__lists"><?php echo $item['price__list'] ?></div>
							<div class="casePrice__descr"><?php echo $item['price__descr'] ?></div>
						</div>
						<?php
					};
				}

			?>
		</div>
	</div>
</section>
<!-- end casePrice -->

<?php
require get_template_directory() . '/inc/speaks.php';

require get_template_directory() . '/inc/review-section.php';

require get_template_directory() . '/inc/ideas.php';

require get_template_directory() . '/inc/get-touch.php';

get_footer();
