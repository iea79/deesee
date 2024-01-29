<?php if (SCF::get( 'price__anchor_name' )): ?>
    <!-- begin devPrice -->
    <section id="devPrice" class="devPrice section">
        <div class="container_center">
            <div class="devAnchore" id="<?php echo SCF::get( 'price__anchor_name' ); ?>">
                <span><?php echo SCF::get( 'price__anchor_name' ); ?></span>
            </div>
            <h2 class="section__title"><?php echo strip_tags(SCF::get( 'price__title' ), '<span>, <br>'); ?></h2>
            <div class="devPrice__cols">
                <?php
                    $price_list = SCF::get('price_list');

                    if ($price_list) {
                        foreach ($price_list as $item) {
                            ?>
                            <div class="devPrice__col">
                                <div class="devPrice__head">
                                    <div class="devPrice__name"><?php echo $item['price__name']; ?></div>
                                    <div class="devPrice__summ"><?php echo $item['price__summ']; ?></div>
                                </div>
                                <div class="devPrice__body">
                                    <div class="devPrice__text">
                                        <?php echo $item['price__text']; ?>
                                    </div>
                                </div>
                                <div class="devPrice__action">
                                    <a href="/get-in-touch/"><?php echo $item['price__link']; ?></a>
                                </div>
                            </div>
                            <?php
                        };
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- end devPrice -->
<?php endif; ?>
