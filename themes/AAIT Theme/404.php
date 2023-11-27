<?php get_header(); ?>

<div class="page-404">
  <h1>
    4<span>0</span>4
  </h1>
  <h2>
    <?php 
	if(ICL_LANGUAGE_CODE == 'ar'){ ?>
    الصفحة التي تحاول الوصول لها غير موجودة !!
    <?php } elseif (ICL_LANGUAGE_CODE == 'en'){  ?>
    the page you requested could not found !! <?php } ?>
  </h2>
  <a href="<?php bloginfo('home'); ?>">
    <?php 
	if(ICL_LANGUAGE_CODE == 'ar'){ ?>
    اذهب الي الرئيسية
    <?php } elseif (ICL_LANGUAGE_CODE == 'en'){  ?>
    Go To Home Page <?php } ?>
  </a>
</div>
<style>
.page-404 {
  background-color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  /* gap: 40px; */
  flex-direction: column;
  padding: 50px 0;
  background: #f5f5f5;

}

h1 {
  color: #000;
  font-size: 240px;
}

span {
  color: #00b7ff;

}

h2 {
  color: #000;
  font-size: 1.25rem;
  margin-bottom: 40px;
  text-transform: capitalize;
}

.page-404>a {
  color: #ffff;
  font-weight: bold;
  /* text-decoration: underline; */
  font-size: 28px;
  background: #000;
  padding: 10px 20px;
}

</style>
<?php get_footer(); ?>
