<?php /* Template Name: services */ ?>
<?php get_header(); ?>
<div class="service-page padd-page">
  <!-- START SERVICES  -->
  <section class="services">
    <div class="container">
      <div class="head centered  wow fadeInUp">
        <h3><?php lang_in(' الخدمات ' , 'Services'); ?></h3>
        <div class="text"><?php the_field('services_brief_text' , 'option'); ?></div>
      </div>
      <ul class="wrapper">
        <?php 
              if(have_rows('services' , 'option')){ $i=1;
                while(have_rows('services' , 'option')){
                the_row(); ?>
        <li class="wow fadeInUp" data-wow-delay="<?php echo $z ?>s">
          <figure class="image-wrap">
            <img src="<?php the_sub_field('service_image' , 'option'); ?>" alt="">
          </figure>
          <div class="body">
            <h3><?php the_sub_field('service_name' , 'option'); ?></h3>
            <div class="text"><?php the_sub_field('service_text' , 'option'); ?></div>
          </div>
        </li>
        <?php  $i++;  }} ?>
      </ul>
    </div>
  </section>
  <!-- END SERVICES  -->
</div>

<?php get_footer(); ?>
