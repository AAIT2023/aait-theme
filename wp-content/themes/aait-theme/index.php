<?php get_header();  ?>
<div class="home-page padd-page">

  <!-- START LOGO  -->
  <section class="logo-section">
    <div class="container">
      <figure class="image-wrap">
        <img src="<?php the_field('header_logo' , 'option'); ?>" alt="">
      </figure>
    </div>
  </section>
  <!-- END LOGO  -->
  <!-- START HEADER  -->
  <div class="header-wrapper">
    <header class="home-header ">
      <div class=" main-setion">
        <div class="item" style="background-image:url('<?php the_field('main_section_bg' , 'option')  ?>')">
          <div class="info">
            <h3><?php the_field('office_slogan' , 'option'); ?></h3>
            <div class="btns">
              <a href="<?php the_permalink(1439); ?>" class="btn main-btn">
                <?php lang_in('احجز موعد ' , 'book an appointment') ?>
              </a>
              <a href="<?php the_permalink(963); ?>" class="btn main-btn reversed">
                <?php lang_in(' طلب عرض مالي  ' , 'Request a financial offer  ') ?>
              </a>
            </div>
          </div>
          <div class="overlay"></div>
        </div>
      </div>
    </header>
    <!-- END HEADER  -->
  </div>
  <!-- START TRUST SECTION  -->
  <section class="trust">
    <div class="container">
      <div class="head">
        <h3><?php lang_in('  قد الثقة !'  , 'Have confidence') ?></h3>
        <div class="text"><?php the_field('trust_brief_text' , 'option'); ?></div>
      </div>
      <ul class="wrapper">
        <?php 
            if(have_rows('trust' , 'option')){ $i=1;
              while(have_rows('trust' , 'option')){
                the_row(); ?>
        <li>
          <figure class="image-wrap">
            <img src="<?php the_sub_field('trust_image' , 'option'); ?>" alt="">
          </figure>
        </li>

        <?php $i++;    }} ?>
      </ul>
    </div>
  </section>
  <!-- END TRUST SECTION  -->
  <!-- START ABOUT  -->
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col--edit">
          <div class="head">
            <h3><?php lang_in('نظرة عامة ' , 'Overview'); ?></h3>
          </div>
          <div class="text"><?php the_field('about_text' , 'option'); ?></div>
          <a href="<?php the_permalink(26); ?>" class="btn main-btn">
            <?php lang_in('مشاهدة المزيد' , 'Show More'); ?>
          </a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="before-wrap">
            <figure class="image-wrap">
              <img src="<?php the_field('about_image' , 'option'); ?>" alt="">
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END ABOUT  -->
  <!-- START GOAL SECTION  -->
  <section class="goal-section" style="background-image:url('<?php the_field('goals_sec_bg' , 'option')  ?>')">
    <div class="container cont--edit">
      <div class="head wow fadeInUp">
        <h3><?php lang_in('هدفنا ' , 'Our Goal'); ?></h3>
        <div class="text  wow fadeInUp" data-wow-delay="0.25s">
          <?php the_field('goal_brief_text' , 'option'); ?>
        </div>
      </div>
    </div>
    <div class="overlay"></div>
  </section>
  <!-- END GOAL SECTION  -->
  <!-- START WHY US  -->
  <section class="why-us">
    <div class="container">
      <div class="head wow fadeInUp centered">
        <h3><?php lang_in('لماذا نحن ' , 'Why us'); ?></h3>
      </div>
      <ul class="wrapper">
        <?php 
          if(have_rows('why_us_repater' , 'option')){ $i=1;
            while(have_rows('why_us_repater' , 'option')){
            the_row(); ?>
        <li>
          <figure class="image-wrap">
            <img src="<?php the_sub_field('why_us_repater_icon' , 'option'); ?>" alt="">
          </figure>
          <h4><?php the_sub_field('why_us_repater_title' , 'option'); ?></h4>
        </li>
        <?php $i++;    }} ?>
      </ul>
    </div>
  </section>
  <!-- END WHY US  -->
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
                  if($i > 3 ) break;
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
      <a href="<?php the_permalink(971); ?>" class="btn main-btn">
        <?php lang_in('مشاهدة المزيد' , 'Show more'); ?>
      </a>
    </div>
  </section>
  <!-- END SERVICES  -->
  <section class="Packages">
    <div class="container">
      <div class="head centered wow fadeInUp">
        <h3><?php lang_in('  الباقات ' , 'Packages'); ?></h3>
        <div class="text"><?php the_field('packages_brief_text', 'option'); ?></div>
      </div>
      <ul class="wrapper">
        <?php 
              if(have_rows('packages' , 'option')){ $i=1;
                while(have_rows('packages' , 'option')){
                  if($i > 3 ) break;
                the_row(); ?>
        <li class="wow fadeInUp" data-wow-delay="<?php echo $z ?>s">
          <h3><?php the_sub_field('package_name' , 'option'); ?></h3>
          <div class="body">
            <div class="text"><?php the_sub_field('package_text' , 'option'); ?></div>
          </div>

        </li>
        <?php $i++;    }} ?>
      </ul>
      <a href="<?php the_permalink(1551) ?>" class="btn main-btn">
        <?php lang_in('مشاهدة المزيد' , 'Show More'); ?>
      </a>
    </div>
  </section>
  <!-- START FIELDS  -->
  <section class="fields">
    <div class="container">
      <div class="head centered wow fadeInUp">
        <h3><?php lang_in('  المجالات  ' , 'Fields'); ?></h3>
        <div class="text"><?php the_field('fields_brief_text', 'option'); ?></div>
      </div>
      <ul class="wrapper">
        <?php 
          if(have_rows('fields' , 'option')){ $i=1;
            while(have_rows('fields' , 'option')){
              if($i > 4 ) break;
            the_row(); ?>
        <li>
          <figure class="image-wrap">
            <img src="<?php the_sub_field('fields_icon' , 'option'); ?>" alt="">
          </figure>
          <h4><?php the_sub_field('fields_name' , 'option'); ?></h4>
          <div class="text"><?php the_sub_field('fields_text' , 'option'); ?></div>
        </li>
        <?php $i++;    }} ?>
      </ul>
      <a href="<?php the_permalink(1553) ?>" class="btn main-btn">
        <?php lang_in('مشاهدة المزيد' ,'Show more') ?>
      </a>
    </div>
  </section>
  <!-- END FIELDS  -->
  <!-- START PARTNERS  -->
  <section class="team">
    <div class="container ">
      <div class="head centered wow fadeInUp">
        <h3><?php lang_in(' فريق العمل ' , ' Team'); ?></h3>
      </div>

      <div class="owl-carousel team-slider team-wrapper">
        <?php 
              if(have_rows('team' , 'option')){ 
                while(have_rows('team' , 'option')){
                the_row(); ?>
        <div class="item wow fadeInUp">
          <div class="info">
            <div class="before-wrap">
              <figure class="image-wrap">
                <img src="<?php the_sub_field('team_image' , 'option'); ?>" alt="">
              </figure>
            </div>
            <h4><?php the_sub_field('team_name' , 'option'); ?></h4>
            <h5><?php the_sub_field('team_position' , 'option'); ?></h5>
          </div>
        </div>
        <?php  }} ?>
      </div>
    </div>
  </section>
  <!-- END PARTNERS  -->
  <!-- START PARTNERS  -->
  <section class="team partners">
    <div class="container ">
      <div class="head centered wow fadeInUp">
        <h3><?php lang_in(' ابرز عملائنا ' , 'Our Customers'); ?></h3>
      </div>

      <div class="owl-carousel partners-slider">
        <?php 
              if(have_rows('customers' , 'option')){ 
                while(have_rows('customers' , 'option')){
                the_row(); ?>
        <div class="item wow fadeInUp">
          <div class="info">
            <figure class="image-wrap">
              <img src="<?php the_sub_field('customer_image' , 'option'); ?>" alt="">
            </figure>
          </div>
        </div>
        <?php  }} ?>
      </div>
    </div>
  </section>
  <!-- END PARTNERS  -->

  <!-- START CONATACT US SECTION  -->
  <section class="contact-section" id="contact">
    <div class="container">
      <div class="head centered wow fadeInUp">
        <h3><?php lang_in('تواصل معنا ' , 'Contact Us'); ?></h3>
      </div>
      <div class="map">
        <?php the_field('map' , 'option'); ?>
      </div>
      <div class="form-wrapper">
        <?php echo do_shortcode('[contact-form-7 id="74ec7a3" title="تواصل معنا"]') ?>
      </div>
      <ul class="contact-details">
        <li>
          <a href="">
            <div class="wrap"><i class="fa-solid fa-location-dot"></i></div>
            <h4><?php lang_in('العنوان ' , 'Address'); ?></h4>
            <div class="text"><?php the_field('adress' , 'option'); ?></div>
          </a>
        </li>
        <li>
          <a href="tel:<?php the_field('mobile' , 'option'); ?>">
            <div class="wrap">
              <i class="fa-solid fa-phone-volume"></i>
            </div>
            <h4><?php lang_in('الجوال' , 'Mobile'); ?></h4>
            <div class="text"><?php the_field('mobile' , 'option'); ?></div>
          </a>
        </li>
        <li>
          <a href="mailto:<?php the_field('email' , 'option'); ?>">
            <div class="wrap">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <h4><?php lang_in('البريد' , 'Email'); ?></h4>
            <div class="text"><?php the_field('email' , 'option'); ?></div>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <!-- END CONATACT US SECTION  -->
</div>
<?php get_footer(); ?>
