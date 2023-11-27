<?php get_header(); ?>

<!-- START SINGLE PAGE  -->
<div class="single-page padd-page ">
  <div class="container">
    <figure class="image-wrap post-image">
      <img src="<?php the_post_thumbnail_url() ?>" alt="">
    </figure>
    <div class="heaad">
      <h3><?php the_title() ?></h3>
      <div class="date"><?php echo get_the_date(); ?></div>
    </div>
    <div class="text"><?php the_content() ?></div>
  </div>
</div>

<?php get_footer(); ?>
