<!-- begin devReviews -->
<section id="devReviews" class="devReviews section section_light">
    <div class="container_center">
        <?php if (SCF::get( 'reiew__title' )): ?>
            <div class="devAnchore" id="<?php echo SCF::get( 'reiew__anchor_name' ); ?>">
                <span><?php echo SCF::get( 'reiew__anchor_name' ); ?></span>
            </div>
            <h2 class="section__title"><?php echo strip_tags(SCF::get( 'reiew__title' ), '<span>, <br>'); ?></h2>
        <?php else: ?>
            <h2 class="section__title">Testimonials</h2>
        <?php endif; ?>
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
                    $postId = get_the_id();
                    $head = explode(',', $title);
                    $headCount = count($head);
                    $scf = SCF::gets();
                    // var_dump($scf);
                    // var_dump($postId);
                    // var_dump(count($head));
                    $ytlink = $scf['review__video'];
                    $video = $scf['review__video_file'];
                    $preview = $scf['review__video_prev'];
                    ?>
                        <div class="devReviews__item">
                            <div class="devReviews__video desktop">
                                <?php if ($video): ?>
                                    <div class="devReviews__video_file">
                                        <div class="devReviews__video_prev">
                                            <?php echo wp_get_attachment_image($preview,'full') ?>
                                        </div>
                                        <div class="devReviews__play" data-toggle="modal" data-target="#devReviewsVideo-<?php echo $postId; ?>"></div>
                                    </div>
                                <?php else: ?>
                                    <?php if ($preview): ?>
                                        <div class="devReviews__video_prev">
                                            <?php echo wp_get_attachment_image($preview,'full') ?>
                                        </div>
                                    <?php else: ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <div class="devReviews__content">
                                <div class="devReviews__head">
                                    <div class="devReviews__video mobile">
                                        <?php if ($video): ?>
                                            <div class="devReviews__video_file">
                                                <div class="devReviews__video_prev">
                                                    <?php echo wp_get_attachment_image($preview,'full') ?>
                                                </div>
                                                <div class="devReviews__play" data-toggle="modal" data-target="#devReviewsVideo-<?php echo $postId; ?>"></div>
                                            </div>
                                        <?php else: ?>
                                            <?php if ($preview): ?>
                                                <div class="devReviews__video_prev">
                                                    <?php echo wp_get_attachment_image($preview,'full') ?>
                                                </div>
                                            <?php else: ?>
                                                <?php the_post_thumbnail(); ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
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
<?php
while ( $reviews->have_posts() ) {
    $reviews->the_post();
    $scf = SCF::gets();
    $ytlink = $scf['review__video'];
    $video = $scf['review__video_file'];
    $postId = get_the_id();

    if ($video) {
        ?>
        <!-- begin Modal devReviewsVideo -->
        <div class="modal fade devReviewsVideo" id="devReviewsVideo-<?php echo $postId; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <a href="#" class="modal-close" data-dismiss="modal"></a>
                    <video src="<?php echo wp_get_attachment_url($video) ?>" poster="<?php echo wp_get_attachment_url($preview) ?>" data-play-btn></video>
                </div>
            </div>
        </div>
        <!-- end Modal devReviewsVideo -->
        <?php
    }

}
wp_reset_postdata();
?>
<!-- end devReviews -->
