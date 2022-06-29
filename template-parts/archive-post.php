<?php
    $blog_id = 249;
    $top_post = SCF::get( 'blog_top_post', $blog_id )[0];
    $top_video = SCF::get( 'post__video_file', $top_post );
    // print_r($top_post);

?>
<div class="container_center">
    <h1 class="blog__title"><?php echo get_the_title($blog_id); ?></h1>
    <div class="blogTop">
        <div class="blogTop__img">
        <?php if ($top_video): ?>
            <video src="<?php echo wp_get_attachment_url($top_video) ?>" autoplay loop controls></video>
        <?php else: ?>
            <?php echo get_the_post_thumbnail($top_post); ?>
        <?php endif; ?>
        </div>
        <div class="blogTop__content">
            <div class="blogTop__title"><?php echo get_post_title($top_post); ?></div>
            <div class="blogTop__text"><?php echo the_excerpt_max_charlength($top_post, 400) ?></div>
            <div class="blogTop__link">
                <a href="<?php echo get_the_permalink($top_post); ?>" class="btn">Send</a>
            </div>
        </div>
    </div>
    <div class="archiveList">
        <!-- begin blogRelated -->
        <section id="blogRelated" class="blogRelated section">
            <h2 class="section__title">Related <span style="color: #DDC181">articles</span></h2>
            <div class="blogRelated__content">
                <?php
                $query = new WP_Query( [
                    'post_type' => 'post',
                    'post__not_in' => SCF::get( 'blog_top_post', $blog_id )
                ] );
                while ( $query->have_posts() ) :
                    $query->the_post();
                    $video = SCF::get( 'post__video_file' );
                    ?>
                    <div class="blogRelated__item">
                        <?php if ($video): ?>
                            <div class="blogRelated__img">
                                <video src="<?php echo wp_get_attachment_url($video) ?>" autoplay loop controls></video>
                            </div>
                        <?php else: ?>
                            <a class="blogRelated__img" href="<?php echo get_the_permalink(); ?>">
                                <?php
                                the_post_thumbnail();
                                ?>
                            </a>
                        <?php endif; ?>
                        <div class="blogRelated__name"><?php the_title(); ?></div>
                        <div class="blogRelated__text"><?php the_excerpt_max_charlength($post->ID, 150) ?></div>
                        <div class="blogRelated__more">
                            <a href="<?php the_permalink(); ?>">MORE</a>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </section>
        <!-- end blogRelated -->
    </div>
</div>
