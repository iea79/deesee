<?php
/*
Template Name: Web Design template
Template Post Type: page
*/
get_header();
?>
<!-- begin webdisHome -->
<section id="webdisHome" class="webdisHome">
    <?php breadcrumbs(); ?>
    <div class="container_center">
        <div class="webdisHome__content">
            <div class="webdisHome__left">
                <h1 class="section__title"><?php echo strip_tags(SCF::get( 'first__title' ), '<span>, <strong>, <br>'); ?></h1>
                <?php
                    $first_slider = SCF::get('first-slider');

                    if ($first_slider) {
                        ?>
                        <div class="webdisHome__links">
                            <?php
                            foreach ($first_slider as $item) {
                                ?>
                                    <span><?php echo $item['slider__title'] ?></span>
                                <?php
                            };
                            ?>
                        </div>
                        <?php
                    }
                ?>
                <div class="webdisHome__btn desktop">
                    <a href="<?php echo SCF::get( 'first__btn_link' ); ?>" class="btn btn_border btn_round btn_round_md">
                        <?php echo SCF::get( 'first__btn' ); ?>
                    </a>
                </div>
            </div>
            <div class="webdisHome__right">
                <?php
                if ($first_slider) {
                    ?>
                    <div class="webdisHome__images">
                        <?php
                        foreach ($first_slider as $item) {
                            ?>
                            <div class="webdisHome__img">
                                <?php echo wp_get_attachment_image($item['slider__img'], 'full') ?>
                            </div>
                            <?php
                        };
                        ?>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="webdisHome__btn mobile">
                <a href="<?php echo SCF::get( 'first__btn_link' ); ?>" class="btn btn_border btn_round btn_round_md">
                    <?php echo SCF::get( 'first__btn' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end webdisHome -->

<!-- begin webdisPromo -->
<div id="webdisPromo" class="webdisPromo section section_light">
    <div class="container_center">
        <div class="devAnchore" id="webPromo">
            <span>Every Business Needs Website</span>
        </div>
        <div class="webdisPromo__content">
            <div class="webdisPromo__left">
                <h2 class="section__title"><?php echo strip_tags(SCF::get( 'promo__title' ), '<span>, <strong>, <br>'); ?></h2>
                <div class="webdisPromo__btn desktop">
                    <a href="<?php echo SCF::get( 'promo__link' ); ?>" class="btn btn_round btn_round_md btn_small btn_border btn_round_contrast"><?php echo SCF::get( 'promo__btn' ); ?></a>
                </div>
            </div>
            <div class="webdisPromo__right">
                <div class="webdisPromo__text"><?php echo SCF::get( 'promo__text' ); ?></div>
            </div>
        </div>
        <div class="webdisPromo__btn mobile">
            <a href="<?php echo SCF::get( 'promo__link' ); ?>" class="btn btn_round btn_round_md btn_small btn_border"><?php echo SCF::get( 'promo__btn' ); ?></a>
        </div>
    </div>
    <div class="webdisPromo__img"><?php echo wp_get_attachment_image(SCF::get( 'promo__img' ),'full') ?></div>
</div>
<!-- end webdisPromo -->

<!-- begin webdisWhy -->
<section id="webdisWhy" class="webdisWhy section section_light">
    <div class="container_center">
        <div class="devAnchore" id="<?php echo SCF::get( 'why__anchor' ); ?>">
            <span><?php echo SCF::get( 'why__anchor_name' ); ?></span>
        </div>
        <div class="webdisWhy__content">
            <div class="webdisWhy__left">
                <h2 class="section__title"><?php echo strip_tags(SCF::get( 'why__title' ), '<span>, <strong>, <br>'); ?></h2>
                <div class="webdisWhy__text"><?php echo SCF::get( 'why__text' ); ?></div>
                <div class="webdisWhy__note"><?php echo SCF::get( 'why__note' ); ?></div>
            </div>
            <div class="webdisWhy__img">
                <?php echo wp_get_attachment_image(SCF::get( 'why__img' ),'full') ?>
            </div>
        </div>
    </div>
</section>
<!-- end webdisWhy -->

<!-- begin webdisNecessities -->
<div id="webdisNecessities" class="webdisNecessities section">
    <div class="container_center">
        <div class="devAnchore" id="webNecessities">
            <span>Necessities</span>
        </div>
        <div class="webdisNecessities__top">
            <h2 class="section__title"><?php echo strip_tags(SCF::get( 'necessit__title' ), '<span>, <strong>, <br>'); ?></h2>
        </div>
        <div class="webdisNecessities__content">
            <?php
                $necessit_list = SCF::get('necessit_list');

                foreach ($necessit_list as $item) {
                    ?>
                    <div class="webdisNecessities__item">
                        <div class="webdisNecessities__img"><?php echo wp_get_attachment_image($item['necessit__img'],'full') ?></div>
                        <div class="webdisNecessities__descr">
                            <?php echo $item['necessit__descr'] ?>
                        </div>
                    </div>
                    <?php
                };
            ?>
        </div>
    </div>
</div>
<!-- end webdisNecessities -->

<!-- begin devProsCons -->
<section id="devProsCons" class="devProsCons section">
    <div class="container_center">
        <div class="devAnchore" id="<?php echo SCF::get( 'cons__anchor' ); ?>">
            <span><?php echo SCF::get( 'cons__anchor_name' ); ?></span>
        </div>
        <div class="devProsCons__head">
            <h2 class="section__title"><?php echo strip_tags(SCF::get( 'cons__title' ), '<span>'); ?></h2>
            <div class="section__sub"><?php echo SCF::get( 'cons__text' ); ?></div>
        </div>
        <div class="devProsCons__content">
            <div class="devProsCons__col">
                <div class="devProsCons__title"><?php echo SCF::get( 'cons__builder_title' ); ?></div>
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
                <div class="devProsCons__title"><?php echo SCF::get( 'cons__custom_title' ); ?></div>
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

<!-- begin devChoose -->
<section id="devChoose" class="devChoose section section_light">
    <div class="container_center">
		<div class="devAnchore" id="<?php echo SCF::get( 'choose__anchor' ); ?>">
			<span><?php echo SCF::get( 'choose__anchor_name' ); ?></span>
		</div>
        <div class="devChoose__content">
            <div class="devChoose__left">
                <h2 class="section__title"><?php echo strip_tags(SCF::get( 'choose__title' ), '<span>, <br>'); ?></h2>
                <a href="" class="devChoose__action desktop">
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
                $semi = count($process_list)/2;

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
                    if ($i == $semi) {
                        ?>
                        <div class="devProcess__visibled"></div>
                        <?php
                    }
                };
            ?>
        </div>
    </div>
</section>
<!-- end devProcess -->

<!-- begin webdisWhy -->
<section id="webdisWhy" class="webdisWhy section">
    <div class="container_center">
        <div class="devAnchore" id="<?php echo SCF::get( 'why2__anchor' ); ?>">
            <span><?php echo SCF::get( 'why2__anchor_name' ); ?></span>
        </div>
        <div class="webdisWhy__content">
            <div class="webdisWhy__left">
                <h2 class="section__title"><?php echo strip_tags(SCF::get( 'why2__title' ), '<span>, <strong>, <br>'); ?></h2>
                <div class="webdisWhy__text"><?php echo SCF::get( 'why2__text' ); ?></div>
                <div class="webdisWhy__note"><?php echo SCF::get( 'why2__note' ); ?></div>
            </div>
            <div class="webdisWhy__img">
                <?php echo wp_get_attachment_image(SCF::get( 'why2__img' ),'full') ?>
            </div>
        </div>
    </div>
</section>
<!-- end webdisWhy -->

<!-- begin faq -->
<section id="faq" class="faq section">
    <div class="container_center">
        <div class="devAnchore" id="<?php echo SCF::get( 'faq__anchor' ); ?>">
            <span><?php echo SCF::get( 'faq__anchor_name' ); ?></span>
        </div>
        <div class="faq__content">
            <div class="faq__img">
                <?php echo wp_get_attachment_image(SCF::get( 'faq__img' ),'full') ?>
            </div>
            <div class="faq__right">
                <h2 class="section__title"><?php echo strip_tags(SCF::get( 'faq__title' ), '<strong>, <br>, <span>'); ?></h2>
                <div class="faq__list">
                    <?php
                        $faq_list = SCF::get('faq_list');

                        foreach ($faq_list as $item) {
                            ?>
                            <div class="faq__item" data-collapse-wrapper>
                                <div class="faq__name" data-collapse>
                                    <span><?php echo $item['faq__name']; ?></span>
                                    <div class="faq__toggle"></div>
                                </div>
                                <div class="faq__text"><?php echo $item['faq__text']; ?></div>
                            </div>
                            <?php
                        };
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end faq -->

<?php
require get_template_directory() . '/inc/ideas.php';
?>
<!-- Begin container_center -->
<div class="container_center">
    <div class="devAnchore" id="contact">
        <span>Contact</span>
    </div>
</div>
<!-- End container_center -->

<?php


require get_template_directory() . '/inc/get-touch.php';

get_footer();
