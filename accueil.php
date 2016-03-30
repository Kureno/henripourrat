<?php
/*
Template Name: Accueil
*/
?><?php

get_header(); ?>
<section id="accueil_actu">
    <?php query_posts('showposts=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
        echo $thumb['1']; ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php the_date(); ?>
        <?php the_content(); ?>
        <?php the_tags(); ?>

    <?php endwhile;?>
     <?php endif; wp_reset_query(); ?>
</section>
<?php
get_footer();
