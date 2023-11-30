<?php get_header(); ?>

<div class="">
    <div class="container">
        <div class="">
            <img src="<?php the_post_thumbnail_url(); ?>">
        </div>
        <h3 class="">
            <?php the_title(); ?>
        </h3>
        <div class="">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>