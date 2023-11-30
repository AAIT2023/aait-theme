<?php 
get_header();
$curentTerm = get_queried_object();
//(id) curent Term
$curentTermId = $curentTerm->term_id;
//(name) curent Term
$curentTermName = $curentTerm->name;
?>

<div class="">
    <div class="container">
        <div class="row">
            <?php 
            $args = array(
                'post_type' => 'postTypeName',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'taxonomyName',
                        'field' => 'term_id',
                        'terms' => $curentTermId
                    ),
                ),
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
                ?>
            <div>

            </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>