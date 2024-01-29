<?php
/*
Template Name: Development page template NEW
Template Post Type: page
*/
// strip_tags($input, '<br>');
get_header();
?>
<?php echo breadcrumbs(); ?>
<!-- begin devFirst -->
<section id="devFirst" class="devFirst section">
	<div class="container_center">
		<div class="devFirst__content">
			<div class="devFirst__left">
				<h1 class="section__title"><?php echo strip_tags(SCF::get('first__title'), '<span>') ?></h1>
				<div class="devFirst__anchor"></div>
			</div>
			<div class="devFirst__right">
				<div class="devFirst__link">
					<a href="<?php echo SCF::get('first__btn_link'); ?>" class="btn btn_border btn_round btn_round_md"><?php echo SCF::get('first__btn'); ?></a>
				</div>
				<h2 class="section__title"><?php echo strip_tags(SCF::get('first__text'), '<span>') ?></h2>
			</div>
			<div class="devFirst__img">
				<?php echo wp_get_attachment_image(SCF::get('first__img'), 'full') ?>
			</div>
		</div>
	</div>
</section>
<!-- end devFirst -->

<!-- begin devPortfolio -->
<section class="devPortfolio section">
	<div class="container_center">
		<div class="devAnchore" id="<?php echo SCF::get('portfolio__anchor'); ?>">
			<span><?php echo SCF::get('portfolio__anchor_name'); ?></span>
		</div>
		<div class="devPortfolio__head">
			<h2 class="section__title"><?php echo strip_tags(SCF::get('portfolio__title'), '<span>'); ?></h2>
			<div class="devPortfolio__action">
				<a href="<?php echo SCF::get('portfolio__btn_link'); ?>" class="btn btn_border btn_round btn_round_md" target="_blank"><?php echo SCF::get('portfolio__btn'); ?></a>
			</div>
		</div>
		<div class="devPortfolio__list">
			<?php
			$portfolio_project = SCF::get('portfolio-project');

			foreach ($portfolio_project as $item) {
			?>
				<div class="devPortfolio__item">
					<div class="devPortfolio__tags"><?php echo $item['portfolio__tags']; ?></div>
					<a href="<?php echo $item['portfolio__link'] ?>" class="devPortfolio__img" target="_blank">
						<?php echo wp_get_attachment_image($item['portfolio__img'], 'full') ?>
					</a>
					<div class="devPortfolio__bottom">
						<div class="devPortfolio__name"><?php echo $item['portfolio__name'] ?></div>
						<div class="devPortfolio__cat"><?php echo $item['portfolio__cat'] ?></div>
					</div>
				</div>
			<?php
			};
			?>
		</div>
	</div>
</section>
<!-- end devPortfolio -->

<!-- begin devWhy -->
<section id="devWhy" class="devWhy section section_light">
	<div class="container_center">
		<div class="devAnchore" id="<?php echo SCF::get('why__anchor'); ?>">
			<span><?php echo SCF::get('why__anchor_name'); ?></span>
		</div>
		<h2 class="section__title"><?php echo strip_tags(SCF::get('why__title'), '<span>'); ?></h2>
		<div class="devWhy__content">
			<div class="devWhy__left">
				<div class="devWhy__text"><?php echo SCF::get('why__text'); ?></div>
			</div>
			<div class="devWhy__right">
				<div class="devWhy__points">
					<?php
					$why_points = SCF::get('why_points');

					foreach ($why_points as $item) {
					?>
						<div class="devWhy__row">
							<div class="devWhy__percent"><?php echo $item['why__percent'] ?></div>
							<div class="devWhy__row_text"><?php echo $item['why__row_text'] ?></div>
						</div>
					<?php
					};
					?>
				</div>
			</div>
		</div>
		<div class="devWhy__action">
			<a href="<?php echo SCF::get('why__btn_link'); ?>" class="btn btn_border btn_round btn_round_contrast btn_round_md"><?php echo SCF::get('why__btn'); ?></a>
		</div>
	</div>
	<div class="devWhy__img">
		<?php echo wp_get_attachment_image(SCF::get('why__img'), 'full') ?>
	</div>
</section>
<!-- end devWhy -->

<!-- begin devNoticed -->
<section id="devNoticed" class="devNoticed section">
	<div class="container_center">
		<div class="devAnchore" id="<?php echo SCF::get('noticed__anchor'); ?>">
			<span><?php echo SCF::get('noticed__anchor_name'); ?></span>
		</div>
		<div class="devNoticed__content">
			<h2 class="section__title"><?php echo strip_tags(SCF::get('noticed__title'), '<span>'); ?></h2>
			<div class="section__sub"><?php echo SCF::get('noticed__text'); ?></div>
		</div>
		<div class="devNoticed__list">
			<?php
			$noticed_list = SCF::get('noticed_list');

			foreach ($noticed_list as $item) {
			?>
				<div class="devNoticed__item">
					<?php echo wp_get_attachment_image($item['noticed__img'], 'full') ?>
					<div class="devNoticed__name"><?php echo $item['noticed__name'] ?></div>
				</div>
			<?php
			};
			?>
		</div>
	</div>
</section>
<!-- end devNoticed -->

<!-- begin devProsCons -->
<section id="devProsCons" class="devProsCons section">
	<div class="container_center">
		<div class="devAnchore" id="<?php echo SCF::get('cons__anchor'); ?>">
			<span><?php echo SCF::get('cons__anchor_name'); ?></span>
		</div>
		<div class="devProsCons__head">
			<h2 class="section__title"><?php echo strip_tags(SCF::get('cons__title'), '<span>'); ?></h2>
			<div class="section__sub"><?php echo SCF::get('cons__text'); ?></div>
		</div>
		<div class="devProsCons__content">
			<div class="devProsCons__col">
				<div class="devProsCons__title"><?php echo SCF::get('cons__builder_title'); ?></div>
				<ul class="devProsCons__list">
					<?php
					$cons_builder_plus_list = SCF::get('cons_builder_plus_list');

					foreach ($cons_builder_plus_list as $item) {
					?>
						<li class="devProsCons__plus"><span><?php echo $item['cons__builder_plus'] ?></span></li>
					<?php
					};
					?>
				</ul>
				<ul class="devProsCons__list">
					<?php
					$cons_builder_minus_list = SCF::get('cons_builder_minus_list');

					foreach ($cons_builder_minus_list as $item) {
					?>
						<li class="devProsCons__minus"><span><?php echo $item['cons__builder_minus'] ?></span></li>
					<?php
					};
					?>
				</ul>
			</div>
			<div class="devProsCons__col">
				<div class="devProsCons__title"><?php echo SCF::get('cons__custom_title'); ?></div>
				<ul class="devProsCons__list">
					<?php
					$cons_custom_plus_list = SCF::get('cons_custom_plus_list');

					foreach ($cons_custom_plus_list as $item) {
					?>
						<li class="devProsCons__plus"><span><?php echo $item['cons__custom_plus'] ?></span></li>
					<?php
					};
					?>
				</ul>
				<ul class="devProsCons__list">
					<?php
					$cons_custom_minus_list = SCF::get('cons_custom_minus_list');

					foreach ($cons_custom_minus_list as $item) {
					?>
						<li class="devProsCons__minus"><span><?php echo $item['cons__custom_minus'] ?></span></li>
					<?php
					};
					?>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- end devProsCons -->

<!-- begin devServices -->
<section id="devServices" class="devServices section">
	<div class="container_center">
		<div class="devServices__content">
			<div class="devServices__haed">
				<div class="devAnchore" id="<?php echo SCF::get('services__anchor'); ?>">
					<span><?php echo SCF::get('services__anchor_name'); ?></span>
				</div>
				<h2 class="section__title"><?php echo strip_tags(SCF::get('services__title'), '<span>, <br>'); ?></h2>
			</div>
			<?php
			$services_list = SCF::get('services_list');

			foreach ($services_list as $key => $item) {
			?>
				<div class="devServices__item">
					<div class="devServices__title"><?php echo $item['services__item_title'] ?></div>
					<div class="devServices__text"><?php echo $item['services__item_text'] ?></div>
					<div class="devServices__action">
						<button data-form="<?php echo $item['services__item_title'] ?>" class="btn btn_round btn_border btn_round_md" data-toggle="modal" data-target="#orderModal">Order</button>
						<?php if ($item['services__item_link']) : ?>
							<a href="#" data-toggle="modal" data-target="#seeExample-<?php echo $key ?>">See example</a>
						<?php endif; ?>
					</div>
				</div>
				<?php if ($item['services__item_link']) : ?>
					<!-- begin Modal seeExample -->
					<div class="modal fade seeExample" id="seeExample-<?php echo $key ?>">
						<div class="modal-dialog">
							<div class="modal-content">
								<a href="#" class="modal-close" data-dismiss="modal"></a>
								<?php
								$url = $item['services__item_link'];
								$mime = getUrlMimeType($url);
								// print_r($mime);
								if ($mime === 'mp4') {
								?>
									<video src="<?php echo $url ?>" autoplay></video>
								<?php
								}
								if ($mime === 'pdf') {
								?>
									<iframe src="<?php echo $url ?>" frameborder="0"></iframe>
								<?php
								}
								?>
							</div>
						</div>
					</div>
					<!-- end Modal seeExample -->
				<?php endif; ?>
			<?php
			};
			?>
			<div class="devServices__img">
				<?php echo wp_get_attachment_image(SCF::get('services__img'), 'full') ?>
			</div>
		</div>
	</div>

	<!-- begin Modal orderModal -->
	<div class="modal fade orderModal" id="orderModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<a href="#" class="modal-close" data-dismiss="modal"></a>
				<div class="orderModal__header">
					<img src="<?php echo get_template_directory_uri() . '/img/order-head.jpg' ?>" alt="">
				</div>
				<div class="modal-body">
					<div class="modal-title">Do you want to order a UI/UX design service?</div>
					<?php echo do_shortcode('[contact-form-7 id="984" title="Oreder modal form from development templdate"]'); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- end Modal orderModal -->
</section>
<!-- end devServices -->

<!-- begin devChoose -->
<section id="devChoose" class="devChoose section section_light">
	<div class="container_center">
		<div class="devAnchore" id="<?php echo SCF::get('choose__anchor'); ?>">
			<span><?php echo SCF::get('choose__anchor_name'); ?></span>
		</div>
		<div class="devChoose__content">
			<div class="devChoose__left">
				<h2 class="section__title"><?php echo strip_tags(SCF::get('choose__title'), '<span>, <br>'); ?></h2>
				<a href="<?php echo SCF::get('choose__link'); ?>" class="devChoose__action desktop">
					<?php echo wp_get_attachment_image(SCF::get('choose__img'), 'full') ?>
					<span><?php echo SCF::get('choose__text'); ?></span>
				</a>
			</div>
			<div class="devChoose__right">
				<div class="devChoose__list">
					<?php
					$choose_list = SCF::get('choose_list');

					foreach ($choose_list as $item) {
					?>
						<div class="devChoose__item">
							<span></span>
							<div class="devChoose__text"><?php echo $item['choose__item'] ?></div>
						</div>
					<?php
					};
					?>
				</div>
				<a href="<?php echo SCF::get('choose__link'); ?>" class="devChoose__action mobile">
					<?php echo wp_get_attachment_image(SCF::get('choose__img'), 'full') ?>
					<span><?php echo SCF::get('choose__text'); ?></span>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- end devChoose -->

<?php require get_template_directory() . '/inc/dev-review-section.php'; ?>

<?php require get_template_directory() . '/inc/dev-price-section.php'; ?>

<!-- begin devProcess -->
<section id="devProcess" class="devProcess section">
	<div class="container_center">
		<div class="devAnchore" id="<?php echo SCF::get('process__anchor'); ?>">
			<span><?php echo SCF::get('process__anchor_name'); ?></span>
		</div>
		<h2 class="section__title"><?php echo strip_tags(SCF::get('process__title'), '<span>, <br>'); ?></h2>
		<div class="devProcess__list">
			<?php
			$process_list = SCF::get('process_list');

			// var_dump($process_list);
			$i = 0;
			$semi = count($process_list) / 2;

			// var_dump($semi);

			foreach ($process_list as $item) {
			?>
				<div class="devProcess__item">
					<div class="devProcess__toggle">
						<div class="devProcess__name"><?php echo $item['process__name'] ?></div>
					</div>
					<div class="devProcess__content">
						<div class="devProcess__descr">
							<div class="devProcess__title"><?php echo $item['process__name'] ?></div>
							<div class="devProcess__text"><?php echo $item['process__text'] ?></div>
						</div>
						<div class="devProcess__img">
							<?php echo wp_get_attachment_image($item['process__img'], 'full') ?>
						</div>
					</div>
				</div>
				<?php
				$i++;
				if ($i == $semi) {
				?>
					<div class="devProcess__visibled"></div>
			<?php
				}
			};
			?>
		</div>

		<div class="devAnchore" id="contact">
			<span>Contact</span>
		</div>

	</div>
</section>
<!-- end devProcess -->
<?php

require get_template_directory() . '/inc/get-touch.php';

get_footer();
