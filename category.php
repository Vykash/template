<?php get_template_part('inc/header-category') ?>


<?php _e( 'Category Archives: ', 'qusq' ); ?><?php single_cat_title(); ?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_title(); ?>
    <?php endwhile; endif; ?>
    
<?php get_sidebar(); ?>
<?php get_footer(); ?>