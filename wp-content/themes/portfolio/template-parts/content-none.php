<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<section>
	<header>
		<h1><?php esc_html_e( 'Rien de trouvé', 'portfolio' ); ?></h1>
	</header>

	<div>
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>


		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'portfolio' ); ?></p>
			<?php
				get_search_form();

		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'portfolio' ); ?></p>
			<?php
				get_search_form();

		endif; ?>
	</div>
</section>
