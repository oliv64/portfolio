<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

get_header(); ?>

    <main>
        <?php if( have_posts() ) : ?>
            <header>
                <h2><?php the_title(); ?></h2>
            </header>

            <?php while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', 'page' );
            endwhile; ?>

            <footer>
                <?php // pagination ?>
            </footer>
        <?php else :
            get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
    </main>

<?php
//get_sidebar();
get_footer();
