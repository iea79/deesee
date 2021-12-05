<?php
    $onTop = new WP_Query( [
        'posts_per_page' => 1,
        'post_type' => 'projects',
        'meta_query' => array(
            array(
                'key' => 'pseudosticky',
                'value' => "on",
                'compare' => '='
            )
        )
    ] );

    if ( $onTop->have_posts() ) {
        while ( $onTop->have_posts() ) {
            $onTop->the_post();
            // the_title();
            // the_meta();
            // $topMeta = get_post_meta($post->ID);
            $topMeta = SCF::gets();


            ?>
            <div class="blogTop">
                    <?php
                        if ($topMeta['first__video']):
                            ?>
                            <div class="blogTop__video">
                                <!-- <div class="video__wrapper js-youtube" id="<?php echo $topMeta['first__video']; ?>">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/play.svg" alt="Play" class="video__play" />
                                </div> -->
                                <div class="video__wrapper">
                					<video src="<?php echo wp_get_attachment_url($topMeta[ 'first__video' ]); ?>" autoplay muted loop preload="">
                				</div>
                            <?php
                        else:
                            ?>
                            <div class="blogTop__img">
                            <?php
                            echo wp_get_attachment_image($topMeta['first__img'],'full');
                        endif;
                    ?>
                </div>
                <div class="blogTop__content">
                    <div class="blogTop__title"><?php echo $topMeta['first__title']; ?></div>
                    <div class="blogTop__text"><?php echo $topMeta['first__text']; ?></div>
                    <div class="blogTop__link">
                        <a href="<?php echo get_the_permalink(); ?>" class="btn">viEw more</a>
                    </div>
                </div>
            </div>
            <?php
            // var_dump($topMeta);
        }
    }

    ?>
    <div class="archiveList">
        <h2 class="section__title">ALL <span style="color: red">WORKS</span></h2>
        <div class="projectsList">
            <?php
            $projects = new WP_Query( [
                'posts_per_page' => 8,
                'post_type' => 'projects',
                'meta_query' => array(
                    array(
                        'key' => 'pseudosticky',
                        'compare_key' => '!='
                    )
                )
            ] );

            if ( $projects->have_posts() ) {
                while ( $projects->have_posts() ) {
                    $projects->the_post();
                    // the_title();
                    $projMeta = SCF::gets();
                    // the_meta();

                    ?>
                    <div class="projectsList__item">
                        <div class="projectsList__media">
                        <?php
                        if ($projMeta['first__video']):
                            ?>
                            <div class="video__wrapper">
                                <video src="<?php echo wp_get_attachment_url($projMeta[ 'first__video' ]); ?>" autoplay muted loop preload=""></video>
                            </div>
                            <?php
                        else:
                            ?>
                            <a href="<?php echo get_the_permalink(); ?>">
                                <?php
                                    echo wp_get_attachment_image($projMeta['first__img'],'full');
                                 ?>
                            </a>
                            <?php
                        endif;
                        ?>
                        </div>
                        <div class="projectsList__name"><?php the_title(); ?></div>
                        <a href="<?php echo get_the_permalink(); ?>" class="projectsList__more">view More</a>
                    </div>
                    <!-- Вывода постов, функции цикла: the_title() и т.д. -->
                    <?php
                }
            }
            ?>
        </div>
    </div>
