<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<article class="om-post-content">
	<header>
		<img class="om-photo-post" src="<?= the_post_thumbnail_url('post-thumb');?>">
	<div class="om-title-post">
		<div>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
</div>
</div>
		<div>
			<?php //portfolio_posted_on(); ?>
		</div>
		<?php
		endif; ?>
	</header>

    <?php the_content(); ?>

	<footer>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Voir le Pdf
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel"><?= the_title(); ?></h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body">
		<?php $url = get_field('ajouter_un_pdf')["url"]; ?>
		<a class="fullscreen-mode" href="<?= $url; ?>" target="_blank">Plein Ecran</a>
		<?php pdfshortcode($url); ?>
	</div>
</div>
</div>
</div>
	</footer>
</article>
