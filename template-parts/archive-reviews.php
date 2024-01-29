<?php
global $post;

$reviewQuery = new WP_Query( [
    'posts_per_page' => -1,
    'post_type'		 => 'reviews',
    'orderby'        => 'comment_count',
] );


if ( $reviewQuery->have_posts() ) {
    echo '<div class="archiveReview">';
        while ( $reviewQuery->have_posts() ) {
            $reviewQuery->the_post();
            $video = get_post_meta($post->ID, 'review__video_file')[0];
            $poster = get_post_meta($post->ID, 'review__video_prev')[0];
            $title = explode(', ', get_the_title());
            // print_r($title);
            // $name =

            if ($video) {
                ?>
                <div class="archiveReview__item">
                    <div class="archiveReview__video">
                        <video src="<?php echo wp_get_attachment_url($video); ?>" preload="auto" data-play-btn data-play="false"></video>
                        <div class="archiveReview__poster">
                            <?php echo wp_get_attachment_image($poster,'full'); ?>
                        </div>
                    </div>
                    <div class="archiveReview__control">
                        <div class="archiveReview__play"></div>
                        <!-- <img src="<?php echo get_template_directory_uri() . '/img/play-gold.svg' ?>" alt="" class="archiveReview__play"> -->
                        <div>
                            <div class="archiveReview__name"><?php echo $title[0]; ?></div>
                            <?php if ($title[1]): ?>
                                <div class="archiveReview__sub"><?php echo $title[1]; ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div class="archiveReview__item">
                    <div class="archiveReview__head">
                        <div class="archiveReview__photo">
                            <?php
                                if (has_post_thumbnail()) {
                                    echo the_post_thumbnail();
                                } else {
                                    echo wp_get_attachment_image($poster,'thumbnail');
                                }
                            ?>
                            <?php  ?>
                        </div>
                        <div>
                            <div class="archiveReview__name"><?php echo $title[0]; ?></div>
                            <?php if ($title[1]): ?>
                                <div class="archiveReview__sub"><?php echo $title[1]; ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="archiveReview__text"><?php the_content(); ?></div>
                </div>
                <?php
            }
        }
    echo '</div>';
} else {
    // Постов не найдено
}

wp_reset_postdata();
