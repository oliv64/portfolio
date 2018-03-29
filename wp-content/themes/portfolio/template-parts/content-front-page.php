<div class="row">
<?php
// WP_Query arguments
$args = array(
	'post_type'              => array( 'post' ),
	'post_status'            => array( 'publish' ),
	'nopaging'               => false,
	'order'                  => 'DESC',
	'orderby'                => 'date',
);

// The Query
$post_query = new WP_Query( $args );

// The Loop
if ( $post_query->have_posts() ) {
	while ( $post_query->have_posts() ) {
		$post_query->the_post(); ?>
    <div class="col-sm-12 col-md-4 col-lg-4 last-post">
      <article>
      	<header>
          <?php if ( has_post_thumbnail() ) : ?>
          <img src="<?= the_post_thumbnail_url('post-thumb');?>" alt="post image">
        <?php endif; ?>
      	</header>
        <section>
          <h2><?= the_title(); ?></h2>
          <?= the_category();?>
        </section>
    	   <footer>
          <a href="<?= the_permalink(); ?>">En Savoir plus</a>
        </footer>
      </article>
    </div>

  <?php
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata(); ?>
</div>
