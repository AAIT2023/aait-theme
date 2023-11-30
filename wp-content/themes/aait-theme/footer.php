<div class="footer-bg-wrapper">
  <!-- START FOOTER  -->
  <footer class="footer" style="background-image:url('<?php the_field('footer_bg' , 'option'); ?>')">
    <div class="container">
      <div class="row row--edit">
        <div class="col-sm-12 col-md-12 col-lg-5">
          <div class="logo">
            <figure class="image-wrap">
              <img src="<?php the_field('logo' , 'option'); ?>" alt="">
            </figure>
            <div class="text"><?php the_field('footer_text' , 'option'); ?></div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-2">
          <div class="links">
            <?php wp_nav_menu( array('theme_location' => 'footer_menu', 'container' => false, 'items_wrap' => '<ul class="menu-links">%3$s</ul>',
                      ) ); ?>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-5">
          <div class="subscribe">
            <h3><?php lang_in('اشترك في البريد' , 'Subscribe to mail') ?></h3>
            <div class="form-wrapper">
              <?php echo do_shortcode('[contact-form-7 id="aea146c" title="اشترك في البريد"]') ?>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="overlay"></div>
    <?php wp_footer(); ?>
  </footer>
  <!-- END FOOTER  -->
  <!-- START COPYRIGHT  -->
  <div class="copyright">
    <div class="container">
      <div class="text"><?php the_field('copyright' , 'option'); ?></div>
      <div class="right">
        <a href="https://aait.sa/" target="_blank">
          <img class="footer-new-img" src="<?php bloginfo('stylesheet_directory')?>/content/images/awamer-logo.png ">
        </a>
        <div class="links-new">
          <a href="https://aait.sa/%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%A7%D9%84%D9%85%D9%88%D8%A7%D9%82%D8%B9"
            target="_blank">
            <?php 
                if(ICL_LANGUAGE_CODE == 'ar'){ ?>
            تصميم مواقع
            <?php } elseif (ICL_LANGUAGE_CODE == 'en'){  ?>
            Web Design <?php } ?>

          </a> /
          <a href="https://aait.sa/%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%AA%D8%B7%D8%A8%D9%8A%D9%82%D8%A7%D8%AA-%D8%A7%D9%84%D8%AC%D9%88%D8%A7%D9%84"
            target="_blank">
            <?php 
                if(ICL_LANGUAGE_CODE == 'ar'){ ?>
            تصميم تطبيقات
            <?php } elseif (ICL_LANGUAGE_CODE == 'en'){  ?>
            app design <?php } ?>

          </a> /
          <a href="https://aait.sa/%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D9%85%D8%AA%D8%AC%D8%B1-%D8%A7%D9%84%D9%83%D8%AA%D8%B1%D9%88%D9%86%D9%8A"
            target="_blank">
            <?php 
                if(ICL_LANGUAGE_CODE == 'ar'){ ?>
            تصميم متاجر
            <?php } elseif (ICL_LANGUAGE_CODE == 'en'){  ?>
            store design <?php } ?>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- END COPYRIGHT  -->
</div>


<script src="<?php bloginfo('stylesheet_directory')?>/content/js/jquerry.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory')?>/content/js/all.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory')?>/content/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory')?>/content/js/wow.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory')?>/content/js/lightgallery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory')?>/content/js/lg-thumbnail.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory')?>/content/js/lg-zoom.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory')?>/content/js/lg-thumbnail.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory')?>/content/js/lg-zoom.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory')?>/content/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>
