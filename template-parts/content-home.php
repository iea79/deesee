<div class="panther">
	<div class="panther__text">deesee media</div>
	<div class="panther__img">
		<img src="<?php echo get_template_directory_uri() . '/img/panther.png' ?>" alt="" id="panther">
	</div>
</div>
<!-- begin firstScreen -->
<section id="firstScreen" class="firstScreen">
	<div class="container_center">
		<h1 class="firstScreen__head">
			<span class="firstScreen__left"><?php echo SCF::get( 'firstScreen__left' ); ?></span>
			<span class="firstScreen__right"><?php echo SCF::get( 'firstScreen__right' ); ?></span>
		</h1>
	</div>
	<div class="firstScreen__bottom">
		<div class="firstScreen__text"><?php echo SCF::get( 'firstScreen__text' ); ?></div>
		<div class="firstScreen__go"><?php echo SCF::get( 'firstScreen__go' ); ?></div>
		<div class="firstScreen__action">
			<a href="<?php echo SCF::get( 'first_screen_button_link' ); ?>" class="btn"><?php echo SCF::get( 'firstScreen__action' ); ?></a>
		</div>
	</div>
	<div class="facts">
		<div class="facts__content">
			<div class="facts__trap">
				<div class="facts__title"><span><?php echo SCF::get( 'facts__title' ); ?></span></div>
			</div>
			<div class="facts__list">
				<?php
					$facts = SCF::get('facts');

					foreach ($facts as $item) {
						?>
						<div class="facts__item">
							<div class="facts__number"><?php echo $item['facts__number'] ?></div>
							<div class="facts__text"><?php echo $item['facts__text'] ?></div>
						</div>
						<?php
					};
				?>
			</div>
		</div>
	</div>
</section>
<!-- end firstScreen -->

<!-- begin canHelp -->
<section id="canHelp" class="canHelp section">
	<div class="container_center">
		<div class="canHelp__content">
			<h2 class="section__title"><?php echo SCF::get( 'canHelp__title' ); ?></h2>
			<div class="canHelp__list">
				<?php
					$canHelp = SCF::get('canHelp');

					foreach ($canHelp as $item) {
						?>
						<div class="canHelp__item">
							<div class="canHelp__preffix"><?php echo $item['canHelp__preffix'] ?></div>
							<div class="canHelp__name"><?php echo $item['canHelp__name'] ?></div>
							<div class="canHelp__text">
								<?php echo $item['canHelp__text'] ?>
							</div>
							<div class="canHelp__more">
								<a href="<?php echo $item['canHelp__more'] ?>">MORE</a>
							</div>
						</div>
						<?php
					};
				?>
				<div class="canHelp__item">
					<a href="<?php echo SCF::get( 'canHelp__btn_link' ); ?>" class="btn btn_round"><?php echo SCF::get( 'canHelp__btn' ); ?></a>
				</div>
			</div>
		</div>
	</div>
	<div class="canHelp__title">Problem solving</div>
</section>
<!-- end canHelp -->

<!-- begin design -->
<section id="design" class="design section">
	<div class="container_center">
		<div class="design__head">
			<h2 class="section__title"><?php echo SCF::get( 'design__title' ); ?></h2>
			<div class="section__sub"><?php echo SCF::get( 'design__sub' ); ?></div>
		</div>
		<div class="design__content">
			<?php
				$design__tabs = SCF::get('design__tabs');
				$index = 1;
			?>
			<div class="design__tabs">
				<?php
				foreach ($design__tabs as $item) {
					$active = '';
					if ($index === 1) {
						$active = 'active';
					}
					echo '<div class="design__tab '.$active.'" data-tab="d'.$index.'">'.$item['design__tab'].'</div>';
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
						<?php echo wp_get_attachment_image($item['design__img'], 'full') ?>
					</div>
					<div class="design__text">
						<?php echo $item['design__text'] ?>
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

<!-- begin claimOffer -->
<section id="claimOffer" class="claimOffer section">
	<div class="container_center">
		<div class="claimOffer__content">
			<div class="claimOffer__left">
				<h2 class="section__title"><?php echo SCF::get( 'claimOffer__title' ); ?></h2>
				<div class="section__sub"><?php echo SCF::get( 'claimOffer__sub' ); ?></div>
			</div>
			<div class="claimOffer__right">
				<a href="<?php echo SCF::get( 'claimOffer__btn_link' ); ?>" class="btn"><?php echo SCF::get( 'claimOffer__btn' ); ?></a>
			</div>
		</div>
	</div>
</section>
<!-- end claimOffer -->


<?php

require get_template_directory() . '/inc/speaks.php';

require get_template_directory() . '/inc/ideas.php';

?>

<div class="bottomBox">

<?php

require get_template_directory() . '/inc/review-section.php';

require get_template_directory() . '/inc/get-touch.php';

?>

</div>
