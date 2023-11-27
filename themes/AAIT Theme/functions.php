<?php 

// ===================================== CREATE MENU ========================================  

function mytheme_register_nav_menu(){
  register_nav_menus( array(
      'main_menu' => __( 'main_menu', 'text_domain' ),
      'footer_menu' => __( 'footer_menu', 'text_domain' ),
      'footer_menu_2' => __( 'footer_menu_2', 'text_domain' ),
      'footer_menu_3' => __( 'footer_menu_3', 'text_domain' ),
      'footer_menu_4' => __( 'footer_menu_4', 'text_domain' ),
  ) );
}


add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );

// ===============================CREATE THEME GENERAL SETTING ===============================

if( function_exists('acf_add_options_page') ) {

acf_add_options_page(array(
'page_title' => 'Theme General Settings',
'menu_title' => 'اعدادات الموقع',
'menu_slug' => 'theme-general-settings',
'capability' => 'edit_posts',
'redirect' => false
));
}

add_filter('show_admin_bar', '__return_false');



// ====================================ADD SERVICES POST TYPE ======================================

function news(){
  $values = array(
      'public' => true,
      'labels' => array(
          'name' => ' الاخبار  ',
          'singular_name' => ' الاخبار',
          'add_new' => 'اضف خبر جديد',
          'add_new_item' => 'اضف خبر جديد',
          'edit_item' => 'تعديل الخبر '
      ),
      'menu_icon' => 'dashicons-admin-generic',
  );

  register_post_type('news', $values);
  add_post_type_support( 'news', 'thumbnail' );
}

add_action('init', 'news');


// ====================================ADD PROJECTS POST TYPE ======================================

// function services(){
//   $values = array(
//       'public' => true,
//       'labels' => array(
//           'name' => '  خدماتنا ',
//           'singular_name' => '  خدماتنا ',
//           'add_new' => 'اضف خدمة جديده',
//           'add_new_item' => 'اضف خدمة جديده',
//           'edit_item' => 'تعديل الخدمة '
//       )
//   );

//   register_post_type('services', $values);
//   add_post_type_support( 'services', 'thumbnail' );
// }

// add_action('init', 'services');


// =================== Add new taxonomy, make it hierarchical like categories================
// function services_tax() {

//   //first do the translations part for GUI

//     $labels = array(
//       'name' => _x( 'اقسام الخدمات', 'taxonomy general name' ),
//       'singular_name' => _x( 'اقسام الخدمات', 'taxonomy singular name' ),
//       'search_items' =>  __( 'بحث عن الاقسام' ),
//       'all_items' => __( 'كل الاقسام' ),
//       'parent_item' => __( 'Parent Subject' ),
//       'parent_item_colon' => __( 'Parent Subject:' ),
//       'edit_item' => __( 'تعديل القسم' ), 
//       'update_item' => __( 'تحديث القسم' ),
//       'add_new_item' => __( 'اضف قسم جديده' ),
//       'new_item_name' => __( 'اسم القسم' ),
//       'menu_name' => __( 'انواع الاقسام' ),
//     );   

//   // Now register the taxonomy
//     register_taxonomy('services_tax',array('services'), array(
//       'hierarchical' => true,
//       'labels' => $labels,
//       'show_ui' => true,
//       'show_in_rest' => true,
//       'show_admin_column' => true,
//       'query_var' => true,
//       'rewrite' => array( 'slug' => 'services_tax' ),
//     ));
// }
// add_action( 'init', 'services_tax', 0 );

// ====================================ADD PROJECTS POST TYPE ======================================

// function social_responsbility(){
//   $values = array(
//       'public' => true,
//       'labels' => array(
//           'name' => ' المسؤلية المجتمعية',
//           'singular_name' => 'المسؤلية المجتمعية ',
//           'add_new' => 'اضف تقرير جديد',
//           'add_new_item' => 'اضف تقرير جديد',
//           'edit_item' => 'تعديل التقرير '
//       )
//   );

//   register_post_type('social_responsbility', $values);
//   add_post_type_support( 'social_responsbility', 'thumbnail' );
// }

// add_action('init', 'social_responsbility');

// ====================================ADD careers POST TYPE ======================================

// function career(){
//   $values = array(
//       'public' => true,
//       'labels' => array(
//           'name' => ' الوظائف',
//           'singular_name' => 'الوظائف  ',
//           'add_new' => 'اضف وظيفة جديد',
//           'add_new_item' => 'اضف وظيفة جديد',
//           'edit_item' => 'تعديل الوظيفة '
//       )
//   );

//   register_post_type('career', $values);
//   add_post_type_support( 'career', 'thumbnail' );
// }

// add_action('init', 'career');


// =================== Add new taxonomy, make it hierarchical like categories================
// function hotel_tax() {

//   //first do the translations part for GUI

//     $labels = array(
//       'name' => _x( 'اقسام الفندق', 'taxonomy general name' ),
//       'singular_name' => _x( 'اقسام الفندق', 'taxonomy singular name' ),
//       'search_items' =>  __( 'بحث عن الاقسام' ),
//       'all_items' => __( 'كل الاقسام' ),
//       'parent_item' => __( 'Parent Subject' ),
//       'parent_item_colon' => __( 'Parent Subject:' ),
//       'edit_item' => __( 'تعديل القسم' ), 
//       'update_item' => __( 'تحديث القسم' ),
//       'add_new_item' => __( 'اضف قسم جديده' ),
//       'new_item_name' => __( 'اسم القسم' ),
//       'menu_name' => __( 'انواع الاقسام' ),
//     );   

//   // Now register the taxonomy
//     register_taxonomy('hotel_tax',array('hotel'), array(
//       'hierarchical' => true,
//       'labels' => $labels,
//       'show_ui' => true,
//       'show_in_rest' => true,
//       'show_admin_column' => true,
//       'query_var' => true,
//       'rewrite' => array( 'slug' => 'hotel_tax' ),
//     ));
// }
// add_action( 'init', 'hotel_tax', 0 );

// ====================================ADD PROJECTS POST TYPE ======================================

// function football(){
//   $values = array(
//       'public' => true,
//       'labels' => array(
//           'name' => 'كرة القدم',
//           'singular_name' => 'كرة القدم  ',
//           'add_new' => 'اضف فريق جديد',
//           'add_new_item' => 'اضف فريق جديد',
//           'edit_item' => 'تعديل الفريق '
//       )
//   );

//   register_post_type('football', $values);
//   add_post_type_support( 'football', 'thumbnail' );
// }

// add_action('init', 'football');


// =================== Add new taxonomy, make it hierarchical like categories================
// function news_tax() {

//   //first do the translations part for GUI

//     $labels = array(
//       'name' => _x( 'اقسام الاخبار', 'taxonomy general name' ),
//       'singular_name' => _x( 'اقسام الاخبار', 'taxonomy singular name' ),
//       'search_items' =>  __( 'بحث عن الاقسام' ),
//       'all_items' => __( 'كل الاقسام' ),
//       'parent_item' => __( 'Parent Subject' ),
//       'parent_item_colon' => __( 'Parent Subject:' ),
//       'edit_item' => __( 'تعديل القسم' ), 
//       'update_item' => __( 'تحديث القسم' ),
//       'add_new_item' => __( 'اضف قسم جديده' ),
//       'new_item_name' => __( 'اسم القسم' ),
//       'menu_name' => __( 'انواع الاقسام' ),
//     );   

//   // Now register the taxonomy
//     register_taxonomy('news_tax',array('news'), array(
//       'hierarchical' => true,
//       'labels' => $labels,
//       'show_ui' => true,
//       'show_in_rest' => true,
//       'show_admin_column' => true,
//       'query_var' => true,
//       'rewrite' => array( 'slug' => 'news_tax' ),
//     ));
// }
// add_action( 'init', 'news_tax', 0 );




add_theme_support('title-tag');
add_theme_support('post-thumbnails');


//In function.php add this codes

add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );

function lang_in($ar, $en){
  if(ICL_LANGUAGE_CODE == 'ar'){
      echo $ar;
  } elseif (ICL_LANGUAGE_CODE == 'en'){
      echo $en;
  }
}

function lang_in_return($ar, $en){
  if(ICL_LANGUAGE_CODE == 'ar'){
      return $ar;
  } elseif (ICL_LANGUAGE_CODE == 'en'){
    return $en;
  }
}



/**
 * Dynamic Select List for Contact Form 7
 * @usage [select name taxonomy:{$taxonomy} ...]
 * 
 * @param Array $tag
 * 
 * @return Array $tag
 */
// function dynamic_select_list( $tag ) {

//   // Only run on select lists
//   if( 'select' !== $tag['type'] && ('select*' !== $tag['type']) ) {
//       return $tag;
//   } else if ( empty( $tag['options'] ) ) {
//       return $tag;
//   }

//   $term_args = array();

//   // Loop thorugh options to look for our custom options
//   foreach( $tag['options'] as $option ) {

//       $matches = explode( ':', $option );

//       if( ! empty( $matches ) ) {

//           switch( $matches[0] ) {

//               case 'taxonomy':
//                   $term_args['taxonomy'] = $matches[1];
//                   break;

//               case 'parent':
//                   $term_args['parent'] = intval( $matches[1] );
//                   break;

//           }
//       }

//   }

//   // Ensure we have a term arguments to work with
//   if( empty( $term_args ) ) {
//       return $tag;
//   }

//   // Merge dynamic arguments with static arguments
//   $term_args = array_merge( $term_args, array(
//       'hide_empty' => false,
//   ) );

//   $terms = get_terms( $term_args );

//   // Add terms to values
//   if( ! empty( $terms ) && ! is_wp_error( $term_args ) ) {

//       foreach( $terms as $term ) {

//           $tag['values'][] = $term->name;

//       }

//   }

//   return $tag;

// }
// add_filter( 'wpcf7_form_tag', 'dynamic_select_list', 10 );

// function dynamic_field_values_jop ( $tag, $unused ) {

//     if ( $tag['name'] != 'services_check' )
//         return $tag;

//     $args = array (
//         'numberposts'   => -1,
//         'post_type'     => 'services',
//         'orderby'       => 'title',
//         'order'         => 'ASC',
//     );

//     $custom_posts = get_posts($args);

//     if ( ! $custom_posts )
//         return $tag;

//     foreach ( $custom_posts as $custom_post ) {

//         $tag['raw_values'][] = $custom_post->post_title;
//         $tag['values'][] = $custom_post->post_title;
//         $tag['labels'][] = $custom_post->post_title;

//     }

//     return $tag;

// }

// add_filter( 'wpcf7_form_tag', 'dynamic_field_values_jop', 10, 2);



// // SEARCH IN CUSTOM POST TYPE 
// function template_chooser($template)   
// {    
//   global $wp_query;   
//   $post_type = get_query_var('post_type');   
//   if( $wp_query->is_search && $post_type == 'consaltants' )   
//   {
//     return locate_template('archive-search.php');  //  redirect to archive-search.php
//   }   
//   return $template;   
// }
// add_filter('template_include', 'template_chooser');    
function change_post_type_labels( $args, $post_type ) {
  if ( $post_type === 'post' ) {
    $post_type_name_en = 'News';
    $post_type_name_ar = 'الاخبار';
    
    $args['labels']['singular_name'] = function_exists( 'is_rtl' ) && is_rtl() ? $post_type_name_ar : $post_type_name_en;
  }
  return $args;
}
add_filter( 'register_post_type_args', 'change_post_type_labels', 10, 2 );




?>
