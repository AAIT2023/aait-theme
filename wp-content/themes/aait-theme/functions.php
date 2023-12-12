<?php
/***********************Start Osama*************************/
//theme support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

//to remove admin bar in site
add_filter('show_admin_bar', '__return_false');

// get the the role object
// add $cap capability to this role object
$role_object = get_role('editor');
$role_object->add_cap('edit_theme_options');

add_filter('auto_update_plugin', '__return_true');
add_filter('auto_update_theme', '__return_true');

//To Add Style And JS Files
function add_style_js()
{

    //Style Css
    wp_enqueue_style('all.min.css', get_template_directory_uri() . '/content/css/all.min.css', array(), false);
    wp_enqueue_style('bootstrap-grid.min.css', get_template_directory_uri() . '/content/css/bootstrap-grid.min.css', array(), false);
    wp_enqueue_style('owl.carousel.min.css', get_template_directory_uri() . '/content/css/owl.carousel.min.css', array(), false);
    wp_enqueue_style('fancybox.min.css', get_template_directory_uri() . '/content/css/fancybox.min.css', array(), false);
    wp_enqueue_style('animate.css', get_template_directory_uri() . '/content/css/animate.css', array(), false);
    wp_enqueue_style('style-css', get_template_directory_uri() . '/content/css/style.css', microtime());

    //JS
    wp_enqueue_script('jquerry.min.js', get_template_directory_uri() . '/content/js/jquerry.min.js', array(), false, true);
    wp_enqueue_script('owl.carousel.min.js', get_template_directory_uri() . '/content/js/owl.carousel.min.js', array(), false, true);
    wp_enqueue_script('wow.min.js', get_template_directory_uri() . '/content/js/wow.min.js', array(), false, true);
    //https://fancyapps.com/fancybox/getting-started/
    wp_enqueue_script('fancybox.umd.js', get_template_directory_uri() . '/content/js/fancybox.umd.js', array(), false, true);
    wp_enqueue_script('script.js', get_template_directory_uri() . '/content/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'add_style_js');

//Option Page
function option_page()
{
    $option = array(
        'page_title' => 'اعدادات الموقع',
        'menu_title' => __('اعدادات الموقع'),
        'menu_slug' => 'general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    );
    acf_add_options_page($option);
}
add_action('acf/init', 'option_page');

function mytheme_register_nav_menu()
{
    register_nav_menus(
        array(
            'main_menu' => __('main_menu', 'text_domain'),
            'other_links' => __('other_links', 'text_domain'),
            'other_links2' => __('other_links2', 'text_domain'),
            'other_links3' => __('other_links3', 'text_domain')
        ));
}
add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);


// FUNCTION TO CREATE POST TYPE 
function createPostType(
    string $namePostType, //  => (string)  Post Type Name
    array $arrayOptionPostType, //(array)  Post Type Labels

    bool $acceptTaxonomy = false, //(boolean) Set To True To Accept Taxonomy
    array $arrayOptionTaxonomy = [] //(array)  Taxonomy Default Labels
) {
    $label = [
        'public' => true,
        'labels' => $arrayOptionPostType
    ];
    register_post_type($namePostType, $label);
    add_post_type_support($namePostType, 'thumbnail');

    if ($acceptTaxonomy) {
        if (empty($arrayOptionTaxonomy)) {
            $arrayOptionTaxonomy = [
                'name' => _x('الاقسام', 'taxonomy general name'),
                'singular_name' => _x('الاقسام', 'taxonomy singular name'),
                'search_items' => __('بحث عن الاقسام'),
                'all_items' => __('كل الاقسام'),
                'parent_item' => __('Parent Subject'),
                'parent_item_colon' => __('Parent Subject:'),
                'edit_item' => __('تعديل القسم'),
                'update_item' => __('تحديث القسم'),
                'add_new_item' => __('اضف قسم جديده'),
                'new_item_name' => __('اسم جديد للقسم'),
                'menu_name' => __('الاقسام'),
            ];
        }
        register_taxonomy("{$namePostType}_tax", array($namePostType), array(
            'hierarchical' => true,
            'labels' => $arrayOptionTaxonomy,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array('slug' => "{$namePostType}_tax"),
        )
        );
    }
}


/*
  //EXAMPLE TO CREATE POST TYPE ONLY  WITHOUT TAXONOMY 
*/
// createPostType(
//     'services',  // TYPE YOUR POST TYPE NAME HERE 
//     [
//         'name' => 'الخدمات', // TYPE YOUR POST TYPE NAME HERE IN ARABIC 
//         'singular_name' => 'الخدمات',
//         'add_new' => 'اضف خدمة جديده',
//         'add_new_item' => 'اضف خدمة جديده',
//         'edit_item' => 'تعديل الخدمة',

//     ]
// );


//EXAMPLE TO CREATE POST TYPE WITH TAXONOMY 
// createPostType(
//     'services',
//     [
//         'name' => 'الخدمات',
//         'singular_name' => 'الخدمات',
//         'add_new' => 'اضف خدمة جديده',
//         'add_new_item' => 'اضف خدمة جديده',
//         'edit_item' => 'تعديل الخدمة'
//     ],
//     true, //SET TO TRUE TO ACTIVATE TAXONOMY 
// );


// createPostType(
//     'services', // TYPE YOUR POST TYPE NAME HERE 
//     [
//         'name' => 'الخدمات',
//         'singular_name' => 'الخدمات',
//         'add_new' => 'اضف خدمة جديده',
//         'add_new_item' => 'اضف خدمة جديده',
//         'edit_item' => 'تعديل الخدمة'
//     ],
//     true,
//     [
//         'name' => _x('اقسام الخدمات', 'taxonomy general name'),
//         'singular_name' => _x('اقسام الخدمات', 'taxonomy singular name'),
//         'search_items' => __('بحث عن اقسام الخدمات'),
//         'all_items' => __('كل الاقسام'),
//         'parent_item' => __('Parent Subject'),
//         'parent_item_colon' => __('Parent Subject:'),
//         'edit_item' => __('تعديل القسم'),
//         'update_item' => __('تحديث القسم'),
//         'add_new_item' => __('اضف قسم جديده'),
//         'new_item_name' => __('اسم جديد للقسم'),
//         'menu_name' => __('الاقسام'),
//     ]
// );



// to add post type in contact form 7
function dynamic_field_values_jop($tag, $unused)
{

    if ($tag['name'] != 'type_car')
        return $tag;

    $args = array(
        'numberposts' => -1,
        'post_type' => 'type_car',
        'orderby' => 'title',
        'order' => 'ASC',
    );

    $custom_posts = get_posts($args);

    if (!$custom_posts)
        return $tag;

    foreach ($custom_posts as $custom_post) {

        $tag['raw_values'][] = $custom_post->post_title;
        $tag['values'][] = $custom_post->post_title;
        $tag['labels'][] = $custom_post->post_title;

    }

    return $tag;

}
add_filter('wpcf7_form_tag', 'dynamic_field_values_jop', 10, 2);

//to echo lang
function lang_in($ar, $en)
{
    if (ICL_LANGUAGE_CODE == 'ar') {
        echo $ar;
    } elseif (ICL_LANGUAGE_CODE == 'en') {
        echo $en;
    }
}
//to return lang
function lang_in_return($ar, $en)
{
    if (ICL_LANGUAGE_CODE == 'ar') {
        return $ar;
    } elseif (ICL_LANGUAGE_CODE == 'en') {
        return $en;
    }
}

//filter function
/**
 * (string) $mainPostType 
 * The name of the post type you want to filter based on
 * 
 * (int) $postsPerPage number of posts per page Default -1 [show all]
 * 
 * (array) $search = [
 * [
 * 'typeSearch' => ['p' OR 't'] p for post type , t for taxonomy
 * 'namePostTax' => name post type OR name taxonomy
 * 'nameField' => 'name in input' //exmple name="input"
 * 
 *  // note: If typeSearch is equal to p, the nameField must be the same as the field name in acf
 * ],
 * etc
 * ]
 * 
 * @return array [$args, $langFilter] 
 * $args Put inside the wp_query
 * $langFilter echo inside the form 
 */
function filterWordpress(string $mainPostType, int $postsPerPage = -1, array $search = [])
{
    //lang en and ar 
    // echo $langFilter inside form tag
    if (ICL_LANGUAGE_CODE == 'en') {
        $langFilter = "<input type='hidden' name='lang' value='en'>";
    } elseif (ICL_LANGUAGE_CODE == 'ar') {
        $langFilter = "<input type='hidden' name='lang' value='ar'>";
    }
    $errors = new WP_Error();
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = [
        'post_type' => $mainPostType,
        'order' => 'ASC',
        'posts_per_page' => $postsPerPage,
    ];
    if ($postsPerPage != -1) {
        $args['paged'] = $paged;
    }
    foreach ($search as $value) {

        //typeSearch
        if (isset($value['typeSearch']) && str_contains($value['typeSearch'], 'p') || str_contains($value['typeSearch'], 't')) {
            $typeSearch = $value['typeSearch'];
        } else {
            $errors->add(500, "(typeSearch) not valid");
        }
        //namePostTax
        if (isset($value['namePostTax'])) {
            $namePostTax = $value['namePostTax'];
            if ($typeSearch == 'p' && !post_type_exists($namePostTax)) {
                $errors->add(500, "(namePostTax) is not post type");
            } elseif ($typeSearch == 't' && !taxonomy_exists($namePostTax)) {
                $errors->add(500, "(namePostTax) is not taxonomy");
            }
        } else {
            $errors->add(500, "(namePostTax) is null");
        }
        //nameField
        if (isset($value['nameField'])) {
            $nameField = $value['nameField'];
        } else {
            $errors->add(500, "(nameField) is null");
        }
        //value
        if (isset($_GET[$nameField]) && !empty($_GET[$nameField])) {
            $value = $_GET[$nameField];
        } else {
            $value = null;
        }

        //process
        if ($errors->get_error_message()) {
            wp_die($errors->get_error_message());
        } else {
            if ($value) {
                if ($typeSearch == 't') {
                    if (!isset($args['tax_query'])) {
                        $args['tax_query'] = [
                            'relation' => 'AND',
                            [
                                'taxonomy' => $namePostTax,
                                'field' => 'term_id',
                                'terms' => $value,
                            ]
                        ];
                    } else {
                        $args['tax_query'][] = [
                            'taxonomy' => $namePostTax,
                            'field' => 'term_id',
                            'terms' => $value,
                        ];
                    }
                } elseif ($typeSearch == 'p') {
                    if (!isset($args['meta_query'])) {
                        $args['meta_query'] = [
                            'relation' => 'AND',
                            [
                                'key' => $nameField,
                                'value' => $value,
                                'compare' => 'IN',
                            ]
                        ];
                    } else {
                        $args['meta_query'][] = [
                            'key' => $nameField,
                            'value' => $value,
                            'compare' => 'IN',
                        ];
                    }
                }
            }
        }
    }

    return [$args, $langFilter];
}