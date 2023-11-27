<?php get_header();
$id_term=get_queried_object()->term_id;
$term=get_term($id_term); ?>
<div class="custom-page tax-page padd-page">
  <div class="container">
    <div class="head centered">
      <h3>
        <?php
          if (is_rtl()) {
            echo lang_in_return('  انتظر مجموعة من افضل', ' Wait for a group of the best ') . " " . $term->name . " " . lang_in_return(' قريبا ', ' Soon ');
          } else {
            echo $term->name . " " . lang_in_return(' أخبار', ' news'); } ?>
      </h3>
    </div>
    <div class="news-wrapper">
      <?php $array_in=array('post_type'=> 'services',
                'order'=> 'ASC',
                'posts_per_page'=>8,
                'paged'=> $paged,
                'tax_query'=> array(array('taxonomy'=> 'services_tax',
                    'field'=> 'term_id',
                    'terms'=> $id_term),
                ),
              );
              $query=new WP_Query($array_in);

              if($query->have_posts()) {
                $i=.1;

                while($query->have_posts()) {
                  $query->the_post();
                  ?>
      <div class="item">
        <figure class="image-wrap">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        </figure>
        <div class="body">
          <div class="heaad">
            <h3><?php the_title(); ?></h3>
            <div class="date"><?php echo get_the_date(); ?></div>
          </div>
          <div class="text"><?php the_content(); ?></div>
        </div>
        <a href="<?php the_permalink(); ?>" class="overlay"></a>
      </div>
      <?php $i+=.1;}} else {?>
      <figure class="image-wrap check-posts">
        <img src="<?php the_field('tax_image_null' , 'option'); ?> " alt="">
      </figure>
      <?php } ?>
    </div>
  </div>
</div>
<?php get_footer();?>
