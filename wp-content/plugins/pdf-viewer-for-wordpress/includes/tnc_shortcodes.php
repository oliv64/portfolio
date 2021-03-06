<?php
function tnc_pdf_shortcode( $atts ) {
    //$shortcode_viewer_url = plugins_url()."/".WEB_DIR."/viewer-shortcode.php?file=";
    $tnc_get_sc_page_id = get_option( 'tnc_pdf_viewer_sc_page_id', false );
    $shortcode_viewer_url = get_permalink( $tnc_get_sc_page_id);
    $sc_page_one = parse_url($shortcode_viewer_url, PHP_URL_QUERY);
    if ($sc_page_one) {
        $shortcode_viewer_url_par = '&tnc_pvfw=';
    } else {
        $shortcode_viewer_url_par = '?tnc_pvfw=';
    }
      extract( shortcode_atts( array(
        'file'         => '',
        'width'        => '550',
        'height'       => '800',
        'download'     => 'true',
        'print'        => 'true',
        'fullscreen'   => 'true',
        'share'        => 'true',
        'zoom'         => 'true',
        'open'         => 'true',
        'logo'         => 'true',
        'pagenav'      => 'true',
        'find'         => 'true',
        'language'     => 'en-US',
        'page'         => '', // Added in 3.0
        'default_zoom' => 'auto', // Added in 3.0 // Fixed in 3.6
        'pagemode'     => '', // Added in 5.0
        'current_view' => 'true', // Added in 7.0
        'rotate'       => 'true', // Added in 7.0
        'handtool'     => 'true', // Added in 7.0
        'doc_prop'     => 'true', // Added in 7.0
        'toggle_menu'  => 'true', // Added in 7.0
      ), $atts ) );
      $get_fullscreen_text = get_option( 'fullscreen_text');
      if(!empty($get_fullscreen_text)){
        $fullscreen_text = get_option( 'fullscreen_text');
      } else{
        $fullscreen_text = "Fullscreen Mode";
      }

      switch ($download) {
        case 'true':
          $s_download = "1";
          break;

        case 'false':
          $s_download = "0";
          break;
      }

      switch ($print) {
        case 'true':
          $s_print = "1";
          break;

        case 'false':
          $s_print = "0";
          break;
      }

      switch ($fullscreen) {
        case 'true':
          $s_fullscreen = "1";
          break;

        case 'false':
          $s_fullscreen = "0";
          break;
      }

      switch ($zoom) {
        case 'true':
          $s_zoom = "1";
          break;

        case 'false':
          $s_zoom = "0";
          break;
      }

      switch ($share) {
        case 'true':
          $s_share = "1";
          break;

        case 'false':
          $s_share = "0";
          break;
      }

      switch ($open) {
        case 'true':
          $s_open = "1";
          break;

        case 'false':
          $s_open = "0";
          break;
      }

      switch ($logo) {
        case 'true':
          $s_logo = "1";
          break;

        case 'false':
          $s_logo = "0";
          break;
      }

      switch ($pagenav) {
        case 'true':
          $s_pagenav = "1";
          break;

        case 'false':
          $s_pagenav = "0";
          break;
      }

      switch ($find) {
        case 'true':
          $s_find = "1";
          break;

        case 'false':
          $s_find = "0";
          break;
      }

      switch ($current_view) {
        case 'true':
          $s_current_view = "1";
          break;

        case 'false':
          $s_current_view = "0";
          break;
      }

      switch ($rotate) {
        case 'true':
          $s_rotate = "1";
          break;

        case 'false':
          $s_rotate = "0";
          break;
      }

      switch ($handtool) {
        case 'true':
          $s_handtool = "1";
          break;

        case 'false':
          $s_handtool = "0";
          break;
      }

      switch ($doc_prop) {
        case 'true':
          $s_doc_prop = "1";
          break;

        case 'false':
          $s_doc_prop = "0";
          break;
      }

      switch ($toggle_menu) {
        case 'true':
          $s_toggle_menu = "1";
          break;

        case 'false':
          $s_toggle_menu = "0";
          break;
      }
  $generated_url = 'file='.$file.'&settings='.$s_download.$s_print.$s_zoom.$s_fullscreen.$s_share.$s_open.$s_logo.$s_pagenav.$s_find.$s_current_view.$s_rotate.$s_handtool.$s_doc_prop.$s_toggle_menu.'&lang='.$language;
  $additional_url = '#page='.$page.'&zoom='.$default_zoom.'&pagemode='.$pagemode;
  $encoded_url = base64_encode($generated_url);
  $final_url = $shortcode_viewer_url.$shortcode_viewer_url_par.$encoded_url.$additional_url;

  $output = '';
  if($fullscreen == "true"){
    $output .= '<a class="fullscreen-mode" href="'.$final_url.'" target="_blank">'.$fullscreen_text.'</a><br>';
  }
  $output .= '<iframe width="'.$width.'" height="'.$height.'" src="'.$final_url.'"></iframe>';
  return $output;
}

add_shortcode( 'tnc-pdf-viewer-iframe', 'tnc_pdf_shortcode' );

// Link Shortcode
function tnc_pdf_link_shortcode( $atts ) {
  $tnc_get_sc_page_id = get_option( 'tnc_pdf_viewer_sc_page_id', false );
  $shortcode_viewer_url = get_permalink( $tnc_get_sc_page_id);
  $sc_page_one = parse_url($shortcode_viewer_url, PHP_URL_QUERY);
  if ($sc_page_one) {
      $shortcode_viewer_url_par = '&tnc_pvfw=';
  } else {
      $shortcode_viewer_url_par = '?tnc_pvfw=';
  }
  extract( shortcode_atts( array(
    'file'         => '',
    'text'         => 'Open PDF',
    'target'       => '_blank',
    'download'     => 'true',
    'print'        => 'true',
    'fullscreen'   => 'true',
    'share'        => 'true',
    'zoom'         => 'true',
    'open'         => 'true',
    'class'        => 'tnc_pdf',
    'logo'         => 'true',
    'pagenav'      => 'true',
    'find'         => 'true',
    'language'     => 'en-US',
    'page'         => '', // Added in 3.0
    'default_zoom' => 'auto', // Added in 3.0
    'pagemode'     => '', // Added in 5.0
    'current_view' => 'true', // Added in 7.0
    'rotate'       => 'true', // Added in 7.0
    'handtool'     => 'true', // Added in 7.0
    'doc_prop'     => 'true', // Added in 7.0
    'toggle_menu'  => 'true', // Added in 7.0
  ), $atts ) );

  switch ($download) {
    case 'true':
      $s_download = "1";
      break;

    case 'false':
      $s_download = "0";
      break;
  }

  switch ($print) {
    case 'true':
      $s_print = "1";
      break;

    case 'false':
      $s_print = "0";
      break;
  }

  switch ($fullscreen) {
    case 'true':
      $s_fullscreen = "1";
      break;

    case 'false':
      $s_fullscreen = "0";
      break;
  }

  switch ($zoom) {
    case 'true':
      $s_zoom = "1";
      break;

    case 'false':
      $s_zoom = "0";
      break;
  }

  switch ($share) {
    case 'true':
      $s_share = "1";
      break;

    case 'false':
      $s_share = "0";
      break;
  }

  switch ($open) {
    case 'true':
      $s_open = "1";
      break;

    case 'false':
      $s_open = "0";
      break;
  }

  switch ($logo) {
    case 'true':
      $s_logo = "1";
      break;

    case 'false':
      $s_logo = "0";
      break;
  }

  switch ($pagenav) {
    case 'true':
      $s_pagenav = "1";
      break;

    case 'false':
      $s_pagenav = "0";
      break;
  }

  switch ($find) {
    case 'true':
      $s_find = "1";
      break;

    case 'false':
      $s_find = "0";
      break;
  }

  switch ($current_view) {
    case 'true':
      $s_current_view = "1";
      break;

    case 'false':
      $s_current_view = "0";
      break;
  }

  switch ($rotate) {
    case 'true':
      $s_rotate = "1";
      break;

    case 'false':
      $s_rotate = "0";
      break;
  }

  switch ($handtool) {
    case 'true':
      $s_handtool = "1";
      break;

    case 'false':
      $s_handtool = "0";
      break;
  }

  switch ($doc_prop) {
    case 'true':
      $s_doc_prop = "1";
      break;

    case 'false':
      $s_doc_prop = "0";
      break;
  }

  switch ($toggle_menu) {
    case 'true':
      $s_toggle_menu = "1";
      break;

    case 'false':
      $s_toggle_menu = "0";
      break;
  }

  $generated_url = 'file='.$file.'&settings='.$s_download.$s_print.$s_zoom.$s_fullscreen.$s_share.$s_open.$s_logo.$s_pagenav.$s_find.$s_current_view.$s_rotate.$s_handtool.$s_doc_prop.$s_toggle_menu.'&lang='.$language;
  $additional_url = '#page='.$page.'&zoom='.$default_zoom.'&pagemode='.$pagemode;
  $encoded_url = base64_encode($generated_url);
  $final_url = $shortcode_viewer_url.$shortcode_viewer_url_par.$encoded_url.$additional_url;
  
  return '<a href="'.$final_url.'" class="'.$class.'" target="'.$target.'">'.$text.'</a>';
}
add_shortcode( 'tnc-pdf-viewer-link', 'tnc_pdf_link_shortcode' );

/* Shortlink Shortcode */

function tnc_pdf_shortlink_shortcode( $atts ) {
$link_target = get_option('tnc_link_target', '_blank');
$tnc_get_viewer_page_id = get_option( 'tnc_pdf_viewer_page_id', false );
  $shortcode_viewer_url = get_permalink( $tnc_get_viewer_page_id);
  $sc_viewer_one = parse_url($shortcode_viewer_url, PHP_URL_QUERY);
  if ($sc_viewer_one) {
      $shortcode_viewer_url_par = '&tnc_pvfw=';
  } else {
      $shortcode_viewer_url_par = '?tnc_pvfw=';
  }
  extract( shortcode_atts( array(
    'file'         => '',
    'text'         => 'Open PDF',
    'target'       => '_blank', // Deprecated on Version 4.0 // Added Back in 5.0
    'class'        => 'tnc_pdf',
    'language'     => 'en-US',
    'page'         => '', // Added in 3.0
    'default_zoom' => 'auto', // Added in 3.0
    'pagemode'     => '', // Added in 5.0
  ), $atts ) );
  $generated_url = 'file='.$file.'&lang='.$language;
  $additional_url = '#page='.$page.'&zoom='.$default_zoom.'&pagemode='.$pagemode;
  $encoded_url = base64_encode($generated_url);
  $final_url = $shortcode_viewer_url.$shortcode_viewer_url_par.$encoded_url.$additional_url;
return '<a href="'.$final_url.'" class="'.$class.'" target="'.$target.'">'.$text.'</a>';
}
add_shortcode( 'tnc-pdf-viewer-shortlink', 'tnc_pdf_shortlink_shortcode' );

// Raw Link Shortcode (Added in 5.0)
function tnc_pdf_raw_link_shortcode( $atts ) {
  $tnc_get_sc_page_id = get_option( 'tnc_pdf_viewer_sc_page_id', false );
  $shortcode_viewer_url = get_permalink( $tnc_get_sc_page_id);
  $sc_page_one = parse_url($shortcode_viewer_url, PHP_URL_QUERY);
  if ($sc_page_one) {
      $shortcode_viewer_url_par = '&tnc_pvfw=';
  } else {
      $shortcode_viewer_url_par = '?tnc_pvfw=';
  }
  extract( shortcode_atts( array(
    'file'         => '',
    'download'     => 'true',
    'print'        => 'true',
    'fullscreen'   => 'true',
    'share'        => 'true',
    'zoom'         => 'true',
    'open'         => 'true',
    'logo'         => 'true',
    'pagenav'      => 'true',
    'find'         => 'true',
    'language'     => 'en-US',
    'page'         => '', // Added in 3.0
    'default_zoom' => 'auto', // Added in 3.0
    'pagemode'     => '', // Added in 5.0
    'current_view' => 'true', // Added in 7.0
    'rotate'       => 'true', // Added in 7.0
    'handtool'     => 'true', // Added in 7.0
    'doc_prop'     => 'true', // Added in 7.0
    'toggle_menu'  => 'true', // Added in 7.0
  ), $atts ) );

  switch ($download) {
    case 'true':
      $s_download = "1";
      break;

    case 'false':
      $s_download = "0";
      break;
  }

  switch ($print) {
    case 'true':
      $s_print = "1";
      break;

    case 'false':
      $s_print = "0";
      break;
  }

  switch ($fullscreen) {
    case 'true':
      $s_fullscreen = "1";
      break;

    case 'false':
      $s_fullscreen = "0";
      break;
  }

  switch ($zoom) {
    case 'true':
      $s_zoom = "1";
      break;

    case 'false':
      $s_zoom = "0";
      break;
  }

  switch ($share) {
    case 'true':
      $s_share = "1";
      break;

    case 'false':
      $s_share = "0";
      break;
  }

  switch ($open) {
    case 'true':
      $s_open = "1";
      break;

    case 'false':
      $s_open = "0";
      break;
  }

  switch ($logo) {
    case 'true':
      $s_logo = "1";
      break;

    case 'false':
      $s_logo = "0";
      break;
  }

  switch ($pagenav) {
    case 'true':
      $s_pagenav = "1";
      break;

    case 'false':
      $s_pagenav = "0";
      break;
  }

  switch ($find) {
    case 'true':
      $s_find = "1";
      break;

    case 'false':
      $s_find = "0";
      break;
  }

  switch ($current_view) {
    case 'true':
      $s_current_view = "1";
      break;

    case 'false':
      $s_current_view = "0";
      break;
  }

  switch ($rotate) {
    case 'true':
      $s_rotate = "1";
      break;

    case 'false':
      $s_rotate = "0";
      break;
  }

  switch ($handtool) {
    case 'true':
      $s_handtool = "1";
      break;

    case 'false':
      $s_handtool = "0";
      break;
  }

  switch ($doc_prop) {
    case 'true':
      $s_doc_prop = "1";
      break;

    case 'false':
      $s_doc_prop = "0";
      break;
  }

  switch ($toggle_menu) {
    case 'true':
      $s_toggle_menu = "1";
      break;

    case 'false':
      $s_toggle_menu = "0";
      break;
  }

  $generated_url = 'file='.$file.'&settings='.$s_download.$s_print.$s_zoom.$s_fullscreen.$s_share.$s_open.$s_logo.$s_pagenav.$s_find.$s_current_view.$s_rotate.$s_handtool.$s_doc_prop.$s_toggle_menu.'&lang='.$language;
  $additional_url = '#page='.$page.'&zoom='.$default_zoom.'&pagemode='.$pagemode;
  $encoded_url = base64_encode($generated_url);
  $final_url = $shortcode_viewer_url.$shortcode_viewer_url_par.$encoded_url.$additional_url;

return $final_url;
}
add_shortcode( 'tnc-pdf-viewer-raw-link', 'tnc_pdf_raw_link_shortcode' );

// Image Shortcode
function tnc_pdf_image_shortcode( $atts, $content = "" ) {
  $tnc_get_sc_page_id = get_option( 'tnc_pdf_viewer_sc_page_id', false );
  $shortcode_viewer_url = get_permalink( $tnc_get_sc_page_id);
  $sc_page_one = parse_url($shortcode_viewer_url, PHP_URL_QUERY);
  if ($sc_page_one) {
      $shortcode_viewer_url_par = '&tnc_pvfw=';
  } else {
      $shortcode_viewer_url_par = '?tnc_pvfw=';
  }
 extract( shortcode_atts( array(
      'file'         => '',
      'target'       => '_blank',
      'download'     => 'true',
      'print'        => 'true',
      'fullscreen'   => 'true',
      'share'        => 'true',
      'zoom'         => 'true',
      'open'         => 'true',
      'class'        => 'tnc_pdf',
      'logo'         => 'true',
      'pagenav'      => 'true',
      'find'         => 'true',
      'language'     => 'en-US',
      'page'         => '', // Added in 3.0
      'default_zoom' => 'auto', // Added in 3.0
      'pagemode'     => '', // Added in 5.0
      'current_view' => 'true', // Added in 7.0
      'rotate'       => 'true', // Added in 7.0
      'handtool'     => 'true', // Added in 7.0
      'doc_prop'     => 'true', // Added in 7.0
      'toggle_menu'  => 'true', // Added in 7.0
 ), $atts ) );

  switch ($download) {
    case 'true':
      $s_download = "1";
      break;

    case 'false':
      $s_download = "0";
      break;
  }

  switch ($print) {
    case 'true':
      $s_print = "1";
      break;

    case 'false':
      $s_print = "0";
      break;
  }

  switch ($fullscreen) {
    case 'true':
      $s_fullscreen = "1";
      break;

    case 'false':
      $s_fullscreen = "0";
      break;
  }

  switch ($zoom) {
    case 'true':
      $s_zoom = "1";
      break;

    case 'false':
      $s_zoom = "0";
      break;
  }

  switch ($share) {
    case 'true':
      $s_share = "1";
      break;

    case 'false':
      $s_share = "0";
      break;
  }

  switch ($open) {
    case 'true':
      $s_open = "1";
      break;

    case 'false':
      $s_open = "0";
      break;
  }

  switch ($logo) {
    case 'true':
      $s_logo = "1";
      break;

    case 'false':
      $s_logo = "0";
      break;
  }

  switch ($pagenav) {
    case 'true':
      $s_pagenav = "1";
      break;

    case 'false':
      $s_pagenav = "0";
      break;
  }
  
  switch ($find) {
    case 'true':
      $s_find = "1";
      break;

    case 'false':
      $s_find = "0";
      break;
  }

  switch ($current_view) {
    case 'true':
      $s_current_view = "1";
      break;

    case 'false':
      $s_current_view = "0";
      break;
  }

  switch ($rotate) {
    case 'true':
      $s_rotate = "1";
      break;

    case 'false':
      $s_rotate = "0";
      break;
  }

  switch ($handtool) {
    case 'true':
      $s_handtool = "1";
      break;

    case 'false':
      $s_handtool = "0";
      break;
  }

  switch ($doc_prop) {
    case 'true':
      $s_doc_prop = "1";
      break;

    case 'false':
      $s_doc_prop = "0";
      break;
  }

  switch ($toggle_menu) {
    case 'true':
      $s_toggle_menu = "1";
      break;

    case 'false':
      $s_toggle_menu = "0";
      break;
  }

  $generated_url = 'file='.$file.'&settings='.$s_download.$s_print.$s_zoom.$s_fullscreen.$s_share.$s_open.$s_logo.$s_pagenav.$s_find.$s_current_view.$s_rotate.$s_handtool.$s_doc_prop.$s_toggle_menu.'&lang='.$language;
  $additional_url = '#page='.$page.'&zoom='.$default_zoom.'&pagemode='.$pagemode;
  $encoded_url = base64_encode($generated_url);
  $final_url = $shortcode_viewer_url.$shortcode_viewer_url_par.$encoded_url.$additional_url;

return '<a href="'.$final_url.'" class="'.$class.'" target="'.$target.'">'.$content.'</a>';
}
add_shortcode( 'tnc-pdf-viewer-image', 'tnc_pdf_image_shortcode' );
// PDF Viewer for WordPress. All Rights Reserved by ThemeNcode (ThemeNcode.com)