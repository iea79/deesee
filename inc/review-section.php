<!-- begin review -->
<section id="review" class="review section">
    <div class="container_center">
        <div class="slider__head">
            <h2 class="section__title">Testimonials</h2>
            <!-- <div class="slider__arrow"> -->
                <!-- <div class="slick-arrow slick-prev review__prev"></div> -->
                <!-- <div class="slick-arrow slick-next review__next"></div> -->
            <!-- </div> -->
        </div>
        <div class="review__slider">
            <?php
            // указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
            $videoReviewArgs = array(
                'post_type' => 'reviews',
                'posts_per_page' => 1,
                'meta_query' => [
                    [
                        'key' => 'review__video',
                        'value' => '',
                        'compare' => '!='
                    ]
                ]
            );
            $videoQuery = new WP_Query( $videoReviewArgs );
            if( $videoQuery->have_posts() ){
                while( $videoQuery->have_posts() ){
                    $videoQuery->the_post();
                    $video = SCF::get('review__video');
                    if ($video) {
                        ?>
                        <div class="review__videoWrap">
                            <div class="review__video js-youtube" id="<?php echo $video ?>">
                                <img src="<?php echo get_template_directory_uri() ?>/img/play.svg" alt="Play" class="video__play" data-video-id="<?php echo $video ?>">
                            </div>
                            <div class="review__name"><?php the_title(); ?></div>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                }
                wp_reset_postdata(); // сбрасываем переменную $post
            }

            ?><div class="review__list"><?php

                $reviewArgs = array(
                    'post_type' => 'reviews',
                    'posts_per_page' => 3,
                    'meta_query' => [ [
                        'key' => 'review__video',
                        'value' => '',
                        'compare' => '='
                    ] ],
                );
                $reviewQuery = new WP_Query( $reviewArgs );
                if( $reviewQuery->have_posts() ){
                    while( $reviewQuery->have_posts() ){
                        $reviewQuery->the_post();
                        ?>
                        <div class="review__item">
                            <div class="review__box">
                                <div class="review__user">
                                    <div class="review__photo"><?php echo wp_get_attachment_image( get_post_thumbnail_id()  , 'full' ) ?></div>
                                    <div class="review__name"><?php the_title(); ?></div>
                                </div>
                                <div class="review__text"><?php the_content(); ?></div>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata(); // сбрасываем переменную $post
                };
                ?>
                <div class="review__item">
                    <a href="#" class="btn btn_round btn_border">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- begin Modal videoReview -->
<div class="modal fade videoReview" id="videoReview">
    <div class="modal-dialog">
        <div class="modal-content">
            <a href="#" class="modal-close" data-dismiss="modal"></a>
            <div class="video__wrapper"></div>
        </div>
    </div>
</div>
<!-- end Modal videoReview -->
<!-- end review -->
