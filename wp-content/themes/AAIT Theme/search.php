<?php get_header(); ?>

<section class="search-page grid-section padd-page">
  <div class="container">
    <div class="wrapper grid-wrapper">
      <?php
		  if ( have_posts() ) : ?>

      <?php
			while ( have_posts() ) : the_post();
      ?>
      <div class="box wow fadeInUp" data-wow-delay="<?php echo $i ?>s">
        <div class="image-wrap">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="">
          <a href="<?php the_permalink(); ?>" class="overlay"></a>
        </div>
        <h4><?php the_title(); ?></h4>
        <div class="text">
          <?php the_content(); ?>
        </div>

      </div>
      <?php 
      	endwhile;
		    else :
        ?>
      <?php 
				  if(ICL_LANGUAGE_CODE == 'ar'){
				  	?>
      <h1 style="text-align:center; margin:30px 0">
        لا يوجد نتائج بحث
      </h1>

      <?php 
					} elseif (ICL_LANGUAGE_CODE == 'en'){ 
					?>

      <h1 style="text-align:center; margin:30px 0">
        Sorry ,, No Result Found
      </h1>
      <?php
				}
				?>
      <?php 
	    	endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
