<?php
/*
Template Name: Get in touch template
Template Post Type: page
*/
get_header();

breadcrumbs();
?>
<div class="pageGetTouch">
    <div class="container_center">
        <div class="pageGetTouch__header">
            <h1 class="page__title">Get <br><span style="color: red">in touch</span></h1>
            <div class="section__sub"><?php the_content(); ?></div>
        </div>
        <div class="pageGetTouch__form">
            <div class="pageGetTouch__thumb">
                <?php the_post_thumbnail(); ?>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="308" title="Page get in touch"]' ); ?>
        </div>
    </div>
</div>
<?php
get_footer();
