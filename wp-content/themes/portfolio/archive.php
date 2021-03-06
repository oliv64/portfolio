<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

 get_header(); ?>

 <main class="om-main">
   <section class="om-main-content">

 		<?php while ( have_posts() ) : the_post();

 			get_template_part( 'template-parts/content', get_post_type() );

 			//the_post_navigation();

 		endwhile; ?>
 </section>
 </main>


 <?php
 //get_sidebar();
 get_footer();
