<?php
add_action( 'admin_menu', 'tnc_pdf_menu' );
function tnc_pdf_menu() {
    add_menu_page('PDF Viewer for WordPress Options by ThemeNcode', 'ThemeNcode PDF Viewer', 'manage_options', 'themencode-pdf-viewer-options', 'tnc_pdf_viewer_main_menu', plugins_url( 'pdf-viewer-for-wordpress/images/pdf-menu-icon.png' ), 12);
    add_submenu_page( 'themencode-pdf-viewer-options', 'Customize Look - PDF Viewer for WordPress', 'Customize Look', 'manage_options', 'themencode-pdf-viewer-customize', 'tnc_pdf_viewer_customize_menu');
    add_submenu_page( 'themencode-pdf-viewer-options', 'Upload Files - PDF Viewer for WordPress', 'Upload PDF File', 'upload_files', 'themencode-pdf-viewer-upload-file', 'tnc_pdf_viewer_upload_menu');
    add_submenu_page( 'themencode-pdf-viewer-options', 'Import PDF File - PDF Viewer for WordPress', 'Import PDF File', 'upload_files', 'themencode-pdf-viewer-import-file', 'tnc_import_pdf_file');
    add_submenu_page( 'themencode-pdf-viewer-options', 'Generate Link - PDF Viewer for WordPress', 'Generate Direct Link', 'upload_files', 'themencode-pdf-viewer-link-generate', 'tnc_generate_direct_link');
    add_submenu_page( 'themencode-pdf-viewer-options', 'Addons - PDF Viewer for WordPress', 'Addons', 'upload_files', 'themencode-pdf-viewer-addons', 'tnc_pdf_viewer_addons');
}
function tnc_pdf_viewer_main_menu() {
    if ( !current_user_can( 'manage_options' ) )  {
    
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    
    }
    
    include dirname(__FILE__)."/options.php";
}
function tnc_pdf_viewer_customize_menu() {
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    include dirname(__FILE__)."/customize_colors.php";
}
function tnc_pdf_viewer_upload_menu() {
    if ( !current_user_can( 'upload_files' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    include dirname(__FILE__)."/upload_file.php";
}
function tnc_import_pdf_file(){
    if ( !current_user_can( 'upload_files' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    include dirname(__FILE__)."/import-pdf-file.php";
}
function tnc_generate_direct_link(){
    if ( !current_user_can( 'upload_files' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    include dirname(__FILE__)."/generate-direct-link.php";
}
function tnc_pdf_viewer_addons(){
    if ( !current_user_can( 'upload_files' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    include dirname(__FILE__)."/addons.php";
}
?>