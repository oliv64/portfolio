<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package portfolio
 */


get_header();
?>

<main>

    <header>
        <h2><?= esc_html('Erreur 404 - Page non trouvée'); ?></h2>
    </header>
    <div>
        <?php get_template_part( 'template-parts/content', '404' ); ?>
    </div>
    <footer>

    </footer>
</main>

<?php
get_footer();
?>
