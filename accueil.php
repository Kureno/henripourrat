<?php
/*
Template Name: Accueil
*/
?><?php

get_header(); ?>
<section id="accueil_actu">
    <?php query_posts('showposts=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p><?php the_date(); ?></p>
        <?php the_content(); ?>
        <p><?php the_tags(); ?></p>

    <?php endwhile;?>

        <p><?php next_posts_link(); ?></p>
        <p><?php previous_posts_link(); ?></p>

    <?php else : ?>

        <h1>Not Found</h1>

    <?php endif; wp_reset_query(); ?>
</section>
<?php
get_sidebar();
get_footer();
