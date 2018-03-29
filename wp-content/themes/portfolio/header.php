<?php
/*
 * Header
 *
 * @package portfolio
 */
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="om-wrapper">
	<div class="om-row">



	<header class="om-nav">
		<div class="om-nav-content">


        <?php get_template_part('template-parts/content', 'nav'); ?>
		</div>
	</header>
