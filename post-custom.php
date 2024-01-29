<?php
/*
Template Name: Post custom
Template Post Type: post
*/
get_header();
// breadcrumbs();
?>
<script>
document.documentElement.classList.add('smooth');
console.log(document.documentElement.classList);
</script>
<!-- Begin container_center -->
<!-- <div class="container_center"> -->
    <!-- <div class="post__header">
        <h1 class="post__title"><?php echo the_title(); ?></h1>
    </div> -->
    <?php the_content(); ?>
<!-- </div> -->
<!-- End container_center -->
<?php
get_footer();
?>
