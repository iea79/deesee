<?php $web_dev_page = (get_post_type() === 'projects' && !is_page_template() && !is_archive()); ?>
<!-- begin getTouch -->
<section id="getTouch" class="getTouch section">
    <div class="container_center">
        <div class="getTouch__content">
            <div class="getTouch__left">
                <h2 class="section__title">
                    Get in
                    <span
                        <?php if ( $web_dev_page ): ?>
                            style="color: #DDC181"
                        <?php else: ?>
                            style="color: #DDC181"
                        <?php endif; ?>
                        >touch
                    </span>
                </h2>
                <?php echo do_shortcode( '[contact-form-7 id="256" title="Get in touch"]' ); ?>
            </div>
            <div class="getTouch__right">
                <div class="map">
                    <?php if (SCF::get( 'map_image' ) && !is_archive()): ?>
                        <?php echo wp_get_attachment_image(SCF::get( 'map_image' ), 'full', array('loading' => 'lazy')) ?>
                    <?php else: ?>
                        <?php echo wp_get_attachment_image(834, 'full', array('loading' => 'lazy')) ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end getTouch -->
