<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package portfolio
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function portfolio_body_classes( $classes ) {
    // Adds a class of hfeed to non-singular pages.
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }

    return $classes;
}
add_filter( 'body_class', 'portfolio_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function portfolio_pingback_header() {
    if ( is_singular() && pings_open() ) {
        echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
    }
}
add_action( 'wp_head', 'portfolio_pingback_header' );

/*  Thumbnail upscale
/* ------------------------------------ */
function alx_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){
    if ( !$crop ) return null; // let the wordpress default function handle this

    $aspect_ratio = $orig_w / $orig_h;
    $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

    $crop_w = round($new_w / $size_ratio);
    $crop_h = round($new_h / $size_ratio);

    $s_x = floor( ($orig_w - $crop_w) / 2 );
    $s_y = floor( ($orig_h - $crop_h) / 2 );

    return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
}
add_filter( 'image_resize_dimensions', 'alx_thumbnail_upscale', 10, 6 );

add_image_size( 'post-thumb', 312, 200, true );
//voir pdf a ajouter
function pdfshortcode($url) {
  
$pdf = do_shortcode('[tnc-pdf-viewer-iframe file="'. $url .'" width="100%" height="1000px" download="true" print="true" fullscreen="false" share="true" zoom="true" open="true" pagenav="true" logo="true" find="true" current_view="true" rotate="true" handtool="true" doc_prop="true" toggle_menu="true" language="fr" page="" default_zoom="auto" pagemode=""]');
echo $pdf;
}
