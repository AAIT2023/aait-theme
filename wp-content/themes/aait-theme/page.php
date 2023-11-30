<?php get_header(); ?>

<div class="another-pages padd-page">
  <div class="container">
    <h3><?php the_title(); ?></h3>

    <?php 
      if(the_post_thumbnail_url()){
    ?>
    <div class="image-wrap">
      <img src="<?php the_post_thumbnail_url(); ?>">
    </div>
    <?php
  }
  ?>

    <div class="text">
      <?php the_content(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
