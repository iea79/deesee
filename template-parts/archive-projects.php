<?php
    // $onTop = new WP_Query( [
    //     'posts_per_page' => 1,
    //     'post_type' => 'projects',
    //     'meta_query' => array(
    //         array(
    //             'key' => 'pseudosticky',
    //             'value' => "on",
    //             'compare' => '='
    //         )
    //     )
    // ] );

    // if ( $onTop->have_posts() ) {
        // while ( $onTop->have_posts() ) {
        //     $onTop->the_post();
        //     // the_title();
        //     // the_meta();
        //     // $topMeta = get_post_meta($post->ID);
        //     $topMeta = SCF::gets();
        //
        //
        //     ?>
            <!-- <div class="blogTop"> -->
                <?php
                    // if ($topMeta['first__video']):
                        ?>
                        <!-- <div class="blogTop__video">
                            <div class="video__wrapper">
            					<video src="<?php echo wp_get_attachment_url($topMeta[ 'first__video' ]); ?>" autoplay muted loop preload="">
            				</div>
        				</div> -->
                        <?php
                    // elseif($topMeta['first__img']):
                        ?>
                        <!-- <div class="blogTop__img"> -->
                            <?php
                            // echo wp_get_attachment_image($topMeta['first__img'],'full');
                            ?>
                        <!-- </div> -->
                        <?php
                    // endif;
                ?>
                <!-- <div class="blogTop__content">
                    <div class="blogTop__title"><?php echo $topMeta['first__title']; ?></div>
                    <div class="blogTop__text"><?php echo $topMeta['first__text']; ?></div>
                    <div class="blogTop__link">
                        <a href="<?php echo get_the_permalink(); ?>" class="btn">view more</a>
                    </div>
                </div>
            </div> -->
            <?php
            // var_dump($topMeta);
        // }
    // }

    ?>
    <!-- <div class="archiveList"> -->
        <div class="archiveList__head">
            <!-- <h2 class="section__title">ALL <span style="color: #DDC181">WORKS</span></h2> -->
            <div class="archiveList__cats">
                <a href="#" class="archiveList__cat active" data-cat="webdev">Website development</a>
                <a href="#" class="archiveList__cat" data-cat="seo">SEO Cases</a>
            </div>
        </div>
        <div class="projectsList">
            <?php
            $projects = new WP_Query( [
                'posts_per_page' => 8,
                'post_type' => 'projects',
                // 'meta_query' => array(
                //     array(
                //         'key' => 'pseudosticky',
                //         'compare_key' => '!='
                //     )
                // )
            ] );


            if ( $projects->have_posts() ) {
                while ( $projects->have_posts() ) {
                    $projects->the_post();
                    // the_title();
                    $projMeta = SCF::gets();

                    $catClass = 'webdev active';

                    if (in_category( 'seo' )) {
                        $catClass = 'seo';
                    }
                    ?>
                    <div class="projectsList__item <?php echo $catClass ?>">
                        <a class="projectsList__media" href="<?php echo get_the_permalink(); ?>">
                        <?php
                        // if ($projMeta['first__video']):
                            ?>
                            <!-- <div class="video__wrapper">
                                <video src="<?php echo wp_get_attachment_url($projMeta[ 'first__video' ]); ?>" autoplay muted loop preload=""></video>
                            </div> -->
                            <?php
                        // else:
                            ?>
                            <div  class="projectsList__pic">
                                <?php
                                    // echo wp_get_attachment_image($projMeta['first__img'],'full');
                                    the_post_thumbnail( 'full' );
                                 ?>
                                <div class="projectsList__overlay"></div>
                            </div>
                            <?php
                        // endif;
                        ?>
                        </a>
                        <div class="projectsList__name"><?php the_title(); ?></div>
                        <a href="<?php echo get_the_permalink(); ?>" class="projectsList__more">view More</a>
                    </div>
                    <!-- Вывода постов, функции цикла: the_title() и т.д. -->
                    <?php
                }
            }
            ?>
        </div>
    <!-- </div> -->
