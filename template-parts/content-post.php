<?php
    if ( !is_front_page() && is_home() ) { // is blog
        // echo "Blog";
        get_template_part( 'template-parts/archive', get_post_type() );

    } else {
    ?>
    <div class="container_center">
        <div class="post__header">
            <h1>
                <?php get_post_title(); ?>
            </h1>
        </div>
        <div class="post__body">
            <div class="post__content">
                <?php
                get_post_content();

                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( '< Previous', 'frondendie' ) . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-title">%title</span> <span class="nav-subtitle">' . esc_html__( 'Next >', 'frondendie' ) . '</span>',
                    )
                );

                // If comments are open or we have at least one comment, load up the comment template.
                // if ( comments_open() || get_comments_number() ) :
                //     comments_template();
                // endif;

                ?>
            </div>
            <div class="post__aside">
                <?php
                $termsPosts = get_the_terms( $post->ID, 'category' );

                if ( empty( $termsPosts ) ) $termsPosts = array();

                $term_list = wp_list_pluck( $termsPosts, 'slug' );

                $queryPosts = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                    'post__not_in' => array( $post->ID ),
                    'orderby' => 'rand',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => $term_list
                        )
                    )]
                );

                if ( $queryPosts->have_posts() ) {
                ?>
                <div class="postsRealted">
                    <div class="postsAside__title">related articles</div>
                    <?php
                    while ( $queryPosts->have_posts() ) {
                        $queryPosts->the_post();
                        // the_title();
                        $video = SCF::get( 'post__video_file' );
                        ?>
                        <div class="postsRealted__item">
                            <?php if ($video): ?>
                                <div class="postsRealted__video">
                                    <video src="<?php echo wp_get_attachment_url($video) ?>" autoplay loop controls></video>
                                </div>
                            <?php else: ?>
                                <a href="<?php the_permalink(); ?>" class="postsRealted__img">
                                    <?php
                                    the_post_thumbnail();
                                    ?>
                                </a>
                            <?php endif; ?>
                            <div class="postsRealted__name"><?php the_title(); ?></div>
                            <div class="postsRealted__text"><?php the_excerpt_max_charlength($post->ID, 100); ?></div>
                            <div class="postsRealted__more">
                                <a href="<?php the_permalink(); ?>">MORE</a>
                            </div>
                        </div>
                        <!-- Вывода постов, функции цикла: the_title() и т.д. -->
                        <?php
                    }

                    ?>
                </div>
                <?php
                }

                wp_reset_postdata();  // Сбрасываем $post

                // Related projects
                $terms = get_the_terms( $post->ID, 'category' );

                if ( empty( $terms ) ) $terms = array();

                $term_list = wp_list_pluck( $terms, 'slug' );

                $queryProject = new WP_Query([
                    'post_type' => 'projects',
                    'posts_per_page' => 2,
                    'post_status' => 'publish',
                    'post__not_in' => array( $post->ID ),
                    'orderby' => 'rand',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => $term_list
                        )
                    )]
                );
                if ( $queryProject->have_posts() ) {
                ?>
                <div class="postsRealted">
                    <div class="postsAside__title">Our work speaks for itself</div>
                    <?php
                    while ( $queryProject->have_posts() ) {
                        $queryProject->the_post();
                        ?>
                        <div class="postsRealted__item">
                            <a href="<?php the_permalink(); ?>" class="postsRealted__img postsRealted__img_lg"><?php the_post_thumbnail(); ?></a>
                            <div class="postsRealted__name"><?php the_title(); ?></div>
                            <div class="postsRealted__more">
                                <a href="<?php the_permalink(); ?>">MORE</a>
                            </div>
                        </div>
                        <!-- Вывода постов, функции цикла: the_title() и т.д. -->
                        <?php
                    }
                    ?>
                    <div class="postsAside__more">
                        <a href="/projects" class="btn btn_border">More works</a>
                    </div>
                </div>
                <?php
                }

                wp_reset_postdata();  // Сбрасываем $post
                ?>
                <div class="postsForm">
                    <?php echo do_shortcode( '[contact-form-7 id="257" title="Post page form"]' ); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
require get_template_directory() . '/inc/get-touch.php';
