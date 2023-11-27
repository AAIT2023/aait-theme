<!-- =============================================TEXT BREADCRUMP ===================================== -->
<?php /*

<!-- <div class="breadcrumpp">
  <div class="container">
    <ul class="wrapper">
      <li>
        <a href="<?php bloginfo('home') ?>">
<?php 
            if(ICL_LANGUAGE_CODE == 'ar'){ ?>
الرئيسية
<?php } elseif (ICL_LANGUAGE_CODE == 'en'){  ?>
Home <?php } ?>
</a>
</li>
<li><?php 
          if(ICL_LANGUAGE_CODE == 'ar'){ ?>
  /
  <?php } elseif (ICL_LANGUAGE_CODE == 'en'){  ?>
  \ <?php } ?></li>
<li><?php the_title() ;?></li>
</ul>
</div>
</div> -->

*/ ?>







<!-- ===========================================IMAGE BREADCRUMP=========================================== -->
<div class="breadcrumpp" style="background-image:url('<?php the_field('breadcrumpp_image' , 'option'); ?>')">
  <h3>
    <?php 
      $post = get_queried_object();
        $postType = get_post_type_object(get_post_type($post));
        if ($postType) {  
        if ( is_single()) {
    echo esc_html($postType->labels->singular_name); } }  ?>
    <?php if ( is_single()) {?>
    /
    <?php the_title(); ?>
    <?php } else{ the_title(); }?>

  </h3>
  <div class="overlay"></div>
</div>
