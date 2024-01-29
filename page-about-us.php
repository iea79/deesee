<?php
/*
Template Name: About us page
Template Post Type: page
*/
get_header();

?>
<div class="lrBorder">
<?php

breadcrumbs();

?>


<!-- Begin container_center -->
<div class="container_center">
  <h1 class="page__title">
      <?php echo SCF::get( 'first__title' ); ?>
  </h1>
  <div class="teamList">
      <?php
          $teamTop = SCF::get('top_member');
          // var_dump($teamTop);

          foreach ($teamTop as $member) {
              $memberMeta = SCF::gets($member);
              // var_dump($memberMeta);
              ?>
              <div class="teamList__item">
                  <div class="teamList__photo">
                      <?php echo get_the_post_thumbnail($member, 'full') ?>
                  </div>
                  <div class="teamList__wrap">
                      <div class="teamList__name"><?php echo get_the_title($member); ?></div>
                      <div class="teamList__prof"><?php echo $memberMeta['team__prof']; ?></div>
                      <div class="teamList__text"><?php echo get_the_content(null, null, $member); ?></div>
                  </div>
              </div>
              <?php
          };

          $members = get_posts([
              'posts_per_page'  =>  -1,
              'post_type'       => 'teams',
              'exclude'         => $teamTop,
          ]);

          foreach ($members as $member) {
              setup_postdata( $member );
              // var_dump($member);

              $memberMeta = SCF::gets($member);
              // echo $member->ID;
              ?>
              <div class="teamList__item">
                  <div class="teamList__photo">
                      <?php echo get_the_post_thumbnail($member, 'full') ?>
                  </div>
                  <div class="teamList__wrap">
                      <div class="teamList__name"><?php echo get_the_title($member->ID); ?></div>
                      <div class="teamList__prof"><?php echo $memberMeta['team__prof']; ?></div>
                      <div class="teamList__text"><?php echo get_the_content(null, null, $member->ID); ?></div>
                  </div>
              </div>
              <?php
          }
          wp_reset_postdata();
      ?>
  </div>
</div>
<!-- End container_center -->

</div>

<?php
    $about_sections = SCF::get('about_sections');

    foreach ($about_sections as $item) {
        ?>
        <!-- begin aboutSection -->
        <section id="aboutSection" class="aboutSection section">
            <div class="aboutSection__bg">
                <?php echo wp_get_attachment_image($item['sections__img'],'full') ?>
            </div>
            <div class="container_center">
                <div class="aboutSection__content"><?php echo $item[ 'sections__text' ]; ?></div>
            </div>
        </section>
        <!-- end aboutSection -->
        <?php
    };
?>

<?php
require get_template_directory() . '/inc/get-touch.php';
get_footer();
