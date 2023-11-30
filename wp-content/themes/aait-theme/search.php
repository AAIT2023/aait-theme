<?php get_header(); ?>

<div class="search-page">
    <div class="container">
        <div class="row">
            <?php 
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                ?>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>