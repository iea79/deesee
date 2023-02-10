<?php
$speaks = SCF::get('speaks');
if ($speaks) {
    if ( get_page_template_slug() != 'cases.php' ) {
        ?>
        <!-- not cases -->
        <!-- begin speaks -->
        <section id="speaks" class="speaks section">
            <div class="container_center">
                <div class="speaks__list">
                    <div class="speaks__item">
                        <h2 class="section__title"><?php echo SCF::get( 'speaks__title' ); ?></h2>
                    </div>
                    <?php
                    foreach ($speaks as $item) {
                        $image = $item['speaks__img'];
                        $text = $item['speaks__text'];
                        $link = $item['speaks__link'];
                        ?>
                        <?php if ($link !== ''): ?>
                            <a href="<?php echo $link ?>" class="speaks__item">
                        <?php else: ?>
                            <div class="speaks__item">
                        <?php endif; ?>
                            <?php
                            if ($image) {
                                ?>
                                <div class="speaks__img">
                                    <?php echo wp_get_attachment_image($item['speaks__img'], 'full', array('loading' => 'lazy')); ?>
                                </div>

                                <?php
                            }
                            if ($text !== '') {
                                ?>
                                <div class="speaks__text">
                                    <?php echo $text; ?>
                                </div>
                                <?php
                            }
                            ?>
                        <?php if ($link !== ''): ?>
                            </a>
                        <?php else: ?>
                            </div>
                        <?php endif; ?>
                        <?php
                    };
                    ?>
                    <div class="speaks__item">
                        <a href="<?php echo SCF::get( 'speaks__btn_link' ); ?>" class="btn btn_round btn_border"><?php echo SCF::get( 'speaks__btn' ); ?></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end speaks -->
        <?php
    } else {
        ?>
        <!-- begin speaks -->
        <section id="speaks" class="speaks section">
            <div class="container_center">
                <div class="speaks__list">
                    <div class="speaks__item">
                        <h2 class="section__title">OUR WORK <span style="color: #DDC181">SPEAKS</span> FOR ITSELF</h2>
                    </div>
                    <?php
                    foreach ($speaks as $item) {
                        // print_r($item);
                        ?>
                        <?php if (get_the_permalink($item)): ?>
                            <a href="<?php echo get_the_permalink($item) ?>" class="speaks__item">
                            <?php else: ?>
                                <div class="speaks__item">
                                <?php endif; ?>
                                <?php
                                if (has_post_thumbnail($item)) {
                                    ?>
                                    <div class="speaks__img">
                                        <?php echo get_the_post_thumbnail($item, 'full'); ?>
                                    </div>

                                    <?php
                                }
                                ?>
                                <?php if (get_the_permalink($item)): ?>
                                </a>
                            <?php else: ?>
                            </div>
                        <?php endif; ?>
                        <?php
                    };
                    ?>
                    <div class="speaks__item">
                        <a href="/portfolio/" class="btn btn_round btn_border">More works</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end speaks -->
        <?php
    }
}
