<?php
get_header();
?>
<main class="main">
    <!-- begin successPage -->
    <section id="successPage" class="successPage section">
        <div class="container_center">
            <div class="successPage__content">
                <h1 class="successPage__title"><?php the_title(); ?></h1>
                <div class="successPage__text"><?php the_content(); ?></div>
            </div>
        </div>
        <div class="successPage__img">
            <?php echo the_post_thumbnail(); ?>
        </div>
    </section>
    <!-- end successPage -->
</main>
<?php
get_footer();
?>
