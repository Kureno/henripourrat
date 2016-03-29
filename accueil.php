<?php
/*
Template Name: Accueil
*/
?><?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Henri_Pourrat
 */

get_header(); ?>
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
    <p>Silly monkey.</p>

<?php endif; wp_reset_query(); ?>
<?php
get_sidebar();
get_footer();
