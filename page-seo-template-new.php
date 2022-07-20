<?php
/*
Template Name: SEO page template NEW
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
	                <h1 class="section__title"><?php echo strip_tags(SCF::get( 'first__title' ), '<span>, <br>') ?></h1>
	                <div class="devFirst__text">
	                	<?php echo SCF::get( 'first__text' ) ?>
	                </div>
	            </div>
	            <div class="devFirst__right">
					<div class="devFirst__link">
						<a href="<?php echo SCF::get( 'first__btn_link' ); ?>" class="btn btn_border btn_round btn_round_md"><?php echo SCF::get( 'first__btn' ); ?></a>
					</div>
					<h2 class="section__title"><?php echo strip_tags(SCF::get( 'first__sub' ), '<span>, <br>') ?></h2>
	            </div>
				<div class="devFirst__img">
					<?php echo wp_get_attachment_image(SCF::get( 'first__img' ),'full') ?>
				</div>
	        </div>
	    </div>
	</section>
	<!-- end devFirst -->

	<!-- begin devPortfolio -->
	<section class="devPortfolio section">
	    <div class="container_center">
			<div class="devAnchore" id="<?php echo SCF::get( 'portfolio__anchor' ); ?>">
				<span><?php echo SCF::get( 'portfolio__anchor_name' ); ?></span>
			</div>
			<div class="devPortfolio__head">
				<h2 class="section__title"><?php echo strip_tags(SCF::get( 'portfolio__title' ), '<span>'); ?></h2>
					<?php if (SCF::get( 'portfolio__text' )): ?>
						<div class="devPortfolio__text">
							<?php echo SCF::get( 'portfolio__text' ); ?>
						</div>
					<?php else: ?>
						<div class="devPortfolio__action">
							<a href="<?php echo SCF::get( 'portfolio__btn_link' ); ?>" class="btn btn_border btn_round btn_round_md" target="_blank"><?php echo SCF::get( 'portfolio__btn' ); ?></a>
						</div>
					<?php endif; ?>
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

	<!-- begin seoWhy -->
	<section id="seoWhy" class="seoWhy section section_light">
	    <div class="container_center">
			<div class="devAnchore" id="<?php echo SCF::get( 'why__anchor' ); ?>">
				<span><?php echo SCF::get( 'why__anchor_name' ); ?></span>
			</div>
			<h2 class="section__title"><?php echo strip_tags(SCF::get( 'why__title' ), '<span>'); ?></h2>
			<div class="seoWhy__text"><?php echo SCF::get( 'why__text' ); ?></div>
			<div class="seoWhy__points">
				<?php
				$why_points = SCF::get('why_points');

				foreach ($why_points as $item) {
					?>
					<div class="seoWhy__row">
						<div class="seoWhy__row_text"><?php echo $item['why__row_text'] ?></div>
					</div>
					<?php
				};
				?>
			</div>
	    </div>
		<div class="seoWhy__video">
			<?php if (SCF::get( 'why__video' )): ?>
				<video src="<?php echo wp_get_attachment_url(SCF::get( 'why__video' )) ?>" autoplay muted loop></video>
			<?php else: ?>
				<?php echo wp_get_attachment_image(SCF::get( 'why__img' ),'full') ?>
			<?php endif; ?>
		</div>
	</section>
	<!-- end seoWhy -->

	<!-- begin devMarketing -->
	<section id="devMarketing" class="devMarketing section">
	    <div class="container_center">
			<div class="devAnchore" id="<?php echo SCF::get( 'marketing__anchor' ); ?>">
				<span><?php echo SCF::get( 'marketing__anchor_name' ); ?></span>
			</div>
	        <div class="devMarketing__content">
                <h2 class="section__title"><?php echo strip_tags(SCF::get( 'marketing__title' ), '<span>'); ?></h2>
                <div class="section__sub"><?php echo SCF::get( 'marketing__text' ); ?></div>
			</div>
            <div class="devMarketing__list">
				<?php
					$marketing_list = SCF::get('marketing_list');

					foreach ($marketing_list as $item) {
						?>
							<div class="devMarketing__item">
								<div class="devMarketing__abbr"><?php echo $item['marketing__abbr'] ?></div>
								<div class="devMarketing__name"><?php echo $item['marketing__name'] ?></div>
								<div class="devMarketing__text"><?php echo $item['marketing__sub'] ?></div>
								<a href="<?php echo $item['marketing__link'] ?>" class="devMarketing__more">MORE</a>
							</div>
						<?php
					};
				?>
            </div>
	    </div>
	</section>
	<!-- end devMarketing -->

	<!-- begin devFaq -->
	<section id="devFaq" class="devFaq section">
	    <div class="container_center">
			<div class="devAnchore" id="<?php echo SCF::get( 'faq__anchor' ); ?>">
				<span><?php echo SCF::get( 'faq__anchor_name' ); ?></span>
			</div>
	        <div class="devFaq__content">
                <h2 class="section__title"><?php echo strip_tags(SCF::get( 'faq__title' ), '<span>'); ?></h2>
			</div>
            <div class="devFaq__list">
				<?php
					$faq_list = SCF::get('faq_list');

					foreach ($faq_list as $item) {
						?>
							<div class="devFaq__item">
								<div class="devFaq__text"><?php echo $item['faq__text'] ?></div>
							</div>
						<?php
					};
				?>
            </div>
			<?php if (SCF::get('counter__toggle')): ?>
				<!-- semrush siteaudit widget -->
				<div class="devFaq__form dayCounter">
					<div class="dayCounter__title"><?php echo SCF::get( 'counter__title' ); ?></div>
					<div class="dayCounter__content">
						<div class="dayCounter__col">
							<div class="dayCounter__label">Hours</div>
							<div class="dayCounter__count hours">00</div>
						</div>
						<div class="dayCounter__sep">:</div>
						<div class="dayCounter__col">
							<div class="dayCounter__label">Minutes</div>
							<div class="dayCounter__count minutes">12</div>
						</div>
						<div class="dayCounter__sep">:</div>
						<div class="dayCounter__col">
							<div class="dayCounter__label">Seconds</div>
							<div class="dayCounter__count seconds">34</div>
						</div>
					</div>
					<div class="dayCounter__sub"><?php echo strip_tags(SCF::get( 'counter__sub' ), '<b>, <strong>'); ?></div>
					<div id="ssa-widget"></div>
				</div>
				<?php echo SCF::get( 'faq__counter' ); ?>
				<!-- /semrush siteaudit widget -->
			<?php endif; ?>
	    </div>
	</section>
	<!-- end devFaq -->

	<!-- begin seoServices -->
	<section id="seoServices" class="seoServices section">
	    <div class="container_center">
			<div class="seoServices__haed">
				<div class="devAnchore" id="<?php echo SCF::get( 'services__anchor' ); ?>">
					<span><?php echo SCF::get( 'services__anchor_name' ); ?></span>
				</div>
				<h2 class="section__title"><?php echo strip_tags(SCF::get( 'services__title' ), '<span>, <br>'); ?></h2>
			</div>
	        <div class="seoServices__content">
				<?php
					$services_list = SCF::get('services_list');

					foreach ($services_list as $item) {
						?>
							<div class="seoServices__item">
								<div class="seoServices__img">
									<?php echo wp_get_attachment_image($item[ 'services__img' ],'full') ?>
								</div>
								<div class="seoServices__body">
									<div class="devServices__title"><?php echo $item['services__item_title'] ?></div>
									<div class="devServices__text"><?php echo $item['services__item_text'] ?></div>
									<div class="devServices__action">
										<button data-form="<?php echo $item['services__item_title'] ?>" class="btn btn_round btn_border btn_round_md" data-toggle="modal" data-target="#orderModal">Order</button>
										<span><?php echo $item['services__item_price_link'] ?></span>
										<a href="#" data-form="<?php echo $item['services__item_title'] ?>" data-toggle="modal" data-target="#sampleModal">Sample</a>
									</div>
								</div>
							</div>
						<?php
					};
				?>
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
						<div class="orderModal__form">
							<?php echo do_shortcode( '[contact-form-7 id="984" title="Oreder modal form from development templdate"]' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end Modal orderModal -->

		<!-- begin Modal orderModal -->
		<div class="modal fade orderModal orderModal_sample" id="sampleModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<a href="#" class="modal-close" data-dismiss="modal"></a>
					<div class="orderModal__header">
						<img src="<?php echo get_template_directory_uri() . '/img/order-head.jpg' ?>" alt="">
					</div>
					<div class="modal-body">
						<div class="modal-title">Email you`d like us to send your sample to</div>
						<div class="orderModal__form orderModal__form_single">
							<?php echo do_shortcode( '[contact-form-7 id="1096" title="Oreder modal form from seo sample template"]' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end Modal orderModal -->
	</section>
	<!-- end seoServices -->

	<!-- begin devChoose -->
	<section id="devChoose" class="devChoose section section_light">
	    <div class="container_center">
			<div class="devAnchore" id="<?php echo SCF::get( 'choose__anchor' ); ?>">
				<span><?php echo SCF::get( 'choose__anchor_name' ); ?></span>
			</div>
	        <div class="devChoose__content">
	            <div class="devChoose__left">
	                <h2 class="section__title"><?php echo strip_tags(SCF::get( 'choose__title' ), '<span>, <br>'); ?></h2>
	                <a href="<?php echo SCF::get( 'choose__link' ); ?>" class="devChoose__action desktop">
	                	<?php echo wp_get_attachment_image(SCF::get( 'choose__img' ),'full') ?>
						<span><?php echo SCF::get( 'choose__text' ); ?></span>
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
					<a href="" class="devChoose__action mobile">
	                	<?php echo wp_get_attachment_image(SCF::get( 'choose__img' ),'full') ?>
						<span><?php echo SCF::get( 'choose__text' ); ?></span>
	                </a>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- end devChoose -->

	<!-- begin devReviews -->
	<section id="devReviews" class="devReviews section section_light">
	    <div class="container_center">
			<div class="devAnchore" id="<?php echo SCF::get( 'reiew__anchor_name' ); ?>">
				<span><?php echo SCF::get( 'reiew__anchor_name' ); ?></span>
			</div>
			<h2 class="section__title"><?php echo strip_tags(SCF::get( 'reiew__title' ), '<span>, <br>'); ?></h2>
	        <div class="devReviews__slider">
				<?php
					$reiew_list = SCF::get('reiew__name');
					// var_dump($reiew_list);

					$reviews = new WP_Query([
						'post_type'   => 'reviews',
						'orderby' => 'post__in',
						'post__in'	  => $reiew_list
					]);

					while ( $reviews->have_posts() ) {
						$reviews->the_post();
						$title = get_the_title();
						$head = explode(',', $title);
						$headCount = count($head);
						$scf = SCF::gets();
						// var_dump($scf);
						// var_dump(count($head));
						$ytlink = $scf['review__video'];
						$video = $scf['review__video_file'];
						$preview = $scf['review__video_prev'];
						?>
							<div class="devReviews__item">
								<div class="devReviews__video desktop">
									<?php if ($video): ?>
										<div class="devReviews__video_file">
											<video src="<?php echo wp_get_attachment_url($video) ?>" poster="<?php echo wp_get_attachment_url($preview) ?>" data-play-btn></video>
											<div class="devReviews__video_prev">
												<?php echo wp_get_attachment_image($preview,'full') ?>
											</div>
											<div class="devReviews__play"></div>
										</div>
									<?php else: ?>
										<?php the_post_thumbnail(); ?>
									<?php endif; ?>
								</div>
								<div class="devReviews__content">
									<div class="devReviews__head">
										<div class="devReviews__video mobile">
											<?php the_post_thumbnail(); ?>
										</div>
										<div class="devReviews__col">
											<div class="devReviews__name"><?php echo $head[0]; ?></div>
											<?php if ($headCount > 1): ?>
												<div class="devReviews__comp"><?php echo $head[1]; ?></div>
											<?php endif; ?>
										</div>
									</div>
									<div class="devReviews__text"><?php the_content(); ?></div>
								</div>
							</div>
						<?php
					};
					wp_reset_postdata();
				?>
	        </div>
	    </div>
	</section>
	<!-- end devReviews -->

	<!-- begin devProcess -->
	<section id="devProcess" class="devProcess section">
	    <div class="container_center">
			<div class="devAnchore" id="<?php echo SCF::get( 'process__anchor' ); ?>">
				<span><?php echo SCF::get( 'process__anchor_name' ); ?></span>
			</div>
			<h2 class="section__title"><?php echo strip_tags(SCF::get( 'process__title' ), '<span>, <br>'); ?></h2>
	        <div class="devProcess__list">
				<?php
					$process_list = SCF::get('process_list');

					// var_dump($process_list);
					$i = 0;
					$list_lenght = count($process_list);
					$semi = round($list_lenght/2);

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
										<?php echo wp_get_attachment_image($item['process__img'],'full') ?>
									</div>
								</div>
							</div>
						<?php
						$i++;
						if ($list_lenght > 5) {
							if ($i == $semi) {
								?>
								<div class="devProcess__visibled"></div>
								<?php
							}
						} else {
							if ($i == $list_lenght) {
								?>
								<div class="devProcess__visibled"></div>
								<?php
							}
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
