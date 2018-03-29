<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<article>
	<header>
		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div>
			<?php portfolio_posted_on(); ?>
		</div>
		<?php endif; ?>
	</header>

	<div>
		<?php the_excerpt(); ?>
	</div>

	<footer>
		<?php portfolio_entry_footer(); ?>
	</footer>
</article>
