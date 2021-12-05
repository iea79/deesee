<?php 
global $post;

$videoReviewQuery = new WP_Query( [
    'posts_per_page' => 10,
    'post_type'		 => 'reviews',
    'orderby'        => 'comment_count',
    'meta_query' => [
        'relation' => 'OR',
        [
            'key' => 'review__video',
            'value' => '',
            'compare' => '!='
        ]
    ]
] );

$textReviewQuery = new WP_Query( [
    'posts_per_page' => 10,
    'post_type'		 => 'reviews',
    'orderby'        => 'comment_count',
    'meta_query' => [
        'relation' => 'OR',
        [
            'key' => 'review__video',
            'value' => '',
            'compare' => '='
        ]
    ]
] );

if ( $videoReviewQuery->have_posts() ) {
    ?>
    <div class="archiveReviewSlider__wrapper">
        <div class="archiveReviewSlider">
        <?php
            while ( $videoReviewQuery->have_posts() ) {
                $videoReviewQuery->the_post();
                // var_dump(get_post_meta($post->ID, 'review__video')[0]);

                ?>
                <div class="archiveReviewSlider__item">
                    <div class="video__wrapper js-youtube" id="<?php echo get_post_meta($post->ID, 'review__video')[0]; ?>">
                        <img src="<?php echo get_template_directory_uri() . '/img/play.svg' ?>" alt="" class="video__play">
                    </div>
                </div>
                <!-- <div class="archiveReviewSlider__item">
                    <div class="video__wrapper js-youtube" id="<?php echo get_post_meta($post->ID, 'review__video')[0]; ?>">
                        <img src="<?php echo get_template_directory_uri() . '/img/play.svg' ?>" alt="" class="video__play">
                    </div>
                </div>
                <div class="archiveReviewSlider__item">
                    <div class="video__wrapper js-youtube" id="<?php echo get_post_meta($post->ID, 'review__video')[0]; ?>">
                        <img src="<?php echo get_template_directory_uri() . '/img/play.svg' ?>" alt="" class="video__play">
                    </div>
                </div> -->
                <?php
            }
        ?>
        </div>
        <div class="container_center">
            <div class="archiveReviewSlider__footer slider__head">
                <div class="archiveReviewSlider__count">01</div>
                <div class="archiveReviewSlider__arrows slider__arrow">
                    <div class="slick-arrow slick-prev archiveReviewSlider__prev"></div>
                    <div class="slick-arrow slick-next archiveReviewSlider__next"></div>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    // Постов не найдено
}

// echo "<br>";
// echo "<br>";
// echo "<br>";

if ( $textReviewQuery->have_posts() ) {
    echo '<div class="archiveReview">';
        while ( $textReviewQuery->have_posts() ) {
            $textReviewQuery->the_post();

            ?>
            <div class="archiveReview__item">
                <div class="archiveReview__head">
                    <div class="archiveReview__photo">
                        <?php echo the_post_thumbnail(); ?>
                    </div>
                    <div class="archiveReview__name"><?php the_title(); ?></div>
                </div>
                <div class="archiveReview__text"><?php the_content(); ?></div>
            </div>
            <?php
        }
    echo '</div>';
} else {
    // Постов не найдено
}

wp_reset_postdata();