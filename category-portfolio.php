<?php get_template_part('inc/header-category','portfolio') ?>

    <?php _e( 'Categoria: ', 'qusq' ); ?><?php single_cat_title(); ?>

   
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
    <?php endwhile; endif; ?>
    <?php get_template_part( 'inc/nav', 'below' ); ?>


<?php get_footer(); ?>