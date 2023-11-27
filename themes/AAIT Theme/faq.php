<?php /* Template Name: faq   */ ?>
<?php get_header(); ?>

<div class="faq-page padd-page">
  <div class="container">
    <div class="head centered wow fadeIn">
      <h3><?php lang_in('الاسئلة الشائعة' , 'FAQ'); ?></h3>
    </div>
    <div class="accordions">
      <?php 
      if(have_rows('faq' , 'option')){ $i=1;
        while(have_rows('faq' , 'option')){
        the_row(); ?>
      <div class="accordion <?= $i == 1 ? 'active' : "" ?>">
        <div class="heaad">
          <h3><?php the_sub_field('faq_question' , 'option') ?></h3>
        </div>
        <div class="accordion-body">
          <div class="text"><?php the_sub_field('faq_answer' , 'option') ?></div>
        </div>
      </div>

      <?php $i++;    }} ?>
    </div>

  </div>
</div>
<?php get_footer(); ?>
