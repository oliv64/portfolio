<?php
$sh_opt_name                = "auto_add_link";
$ss_opt_name                = "hide_share";
$print_opt_name             = "hide_print";
$download_opt_name          = "hide_download";
$open_opt_name              = "hide_open";
$zoom_opt_name              = "hide_zoom";
$fullscreen_opt_name        = "hide_fullscreen";
$logo_image_opt_name        = "logo_image";
$logo_display_opt_name      = "hide_logo";
$find_opt_name              = "hide_find";
$pagenav_opt_name           = "hide_pagenav";
$current_view_opt_name      = "hide_current_view";
$rotate_opt_name            = "hide_rotate";
$handtool_opt_name          = "hide_handtool";
$doc_prop_opt_name          = "hide_doc_prop";
$toggle_menu_opt_name       = "hide_toggle_menu";
$link_opt_name              = "tnc_link_target";
$tnc_pdf_custom_css         = "pdf_viewer_custom_css";
$auto_iframe_width_name     = "auto_iframe_width";
$auto_iframe_height_name    = "auto_iframe_height";
$analytics_opt_name         = "analytics_id";
$fs_text_opt_name           = "fullscreen_text";
$vpi_opt_name               = "tnc_pdf_viewer_page_id";
$vpi_sc_opt_name            = "tnc_pdf_viewer_sc_page_id";
$iframe_fix_opt_name        = "iframe_responsive_fix"; // Added in 5.4
$lang_opt_name              = "tnc_pdf_lang"; // Added in 6.1

if(isset($_POST["submit"])){
    if(isset($_POST[$sh_opt_name])){
        $auto_add           = $_POST[$sh_opt_name];
        update_option($sh_opt_name, $auto_add);
    }
    if(isset($_POST[$print_opt_name])){
        $show_print         = $_POST[$print_opt_name];
        update_option($print_opt_name, $show_print);
    } else {
        $show_print         = "off";
        update_option($print_opt_name, $show_print);
    }
    if(isset($_POST[$download_opt_name])){
        $show_download      = $_POST[$download_opt_name];
        update_option($download_opt_name, $show_download);
    } else {
        $show_download      = "off";
        update_option($download_opt_name, $show_download);
    }
    if(isset($_POST[$open_opt_name])){
        $show_open          = $_POST[$open_opt_name];
        update_option($open_opt_name, $show_open);
    } else {
        $show_open          = "off";
        update_option($open_opt_name, $show_open);
    }
    if(isset($_POST[$zoom_opt_name])){
        $show_zoom          = $_POST[$zoom_opt_name];
        update_option($zoom_opt_name, $show_zoom);
    } else {
        $show_zoom          = "off";
        update_option($zoom_opt_name, $show_zoom);
    }
    if(isset($_POST[$fullscreen_opt_name])){
        $show_full          = $_POST[$fullscreen_opt_name];
        update_option($fullscreen_opt_name, $show_full);
    } else {
        $show_full          = "off";
        update_option($fullscreen_opt_name, $show_full);
    }
    if(isset($_POST[$ss_opt_name])){
        $show_social        = $_POST[$ss_opt_name];
        update_option($ss_opt_name, $show_social);
    } else {
        $show_social        = "off";
        update_option($ss_opt_name, $show_social);
    }
    if(isset($_POST[$logo_image_opt_name])){
        $show_logo_image    = $_POST[$logo_image_opt_name];
        update_option($logo_image_opt_name, $show_logo_image);
    }
    if(isset($_POST[$logo_display_opt_name])){
        $show_logo          = $_POST[$logo_display_opt_name];
        update_option($logo_display_opt_name, $show_logo);
    } else {
        $show_logo          = "off";
        update_option($logo_display_opt_name, $show_logo);
    }
    if(isset($_POST[$find_opt_name])){
        $show_find          = $_POST[$find_opt_name];
        update_option($find_opt_name, $show_find);
    } else {
        $show_find          = "off";
        update_option($find_opt_name, $show_find);
    }
    if(isset($_POST[$pagenav_opt_name])){
        $show_pagenav       = $_POST[$pagenav_opt_name];
        update_option($pagenav_opt_name, $show_pagenav);
    } else {
        $show_pagenav       = "off";
        update_option($pagenav_opt_name, $show_pagenav);
    }
    // Added in 7.0
    if(isset($_POST[$current_view_opt_name])){
        $show_current_view       = $_POST[$current_view_opt_name];
        update_option($current_view_opt_name, $show_current_view);
    } else {
        $show_current_view       = "off";
        update_option($current_view_opt_name, $show_current_view);
    }

    if(isset($_POST[$rotate_opt_name])){
        $show_rotate       = $_POST[$rotate_opt_name];
        update_option($rotate_opt_name, $show_rotate);
    } else {
        $show_rotate       = "off";
        update_option($rotate_opt_name, $show_rotate);
    }

    if(isset($_POST[$handtool_opt_name])){
        $show_handtool       = $_POST[$handtool_opt_name];
        update_option($handtool_opt_name, $show_handtool);
    } else {
        $show_handtool       = "off";
        update_option($handtool_opt_name, $show_handtool);
    }

    if(isset($_POST[$doc_prop_opt_name])){
        $show_doc_prop       = $_POST[$doc_prop_opt_name];
        update_option($doc_prop_opt_name, $show_doc_prop);
    } else {
        $show_doc_prop       = "off";
        update_option($doc_prop_opt_name, $show_doc_prop);
    }

    if(isset($_POST[$toggle_menu_opt_name])){
        $show_toggle_menu       = $_POST[$toggle_menu_opt_name];
        update_option($toggle_menu_opt_name, $show_toggle_menu);
    } else {
        $show_toggle_menu       = "off";
        update_option($toggle_menu_opt_name, $show_toggle_menu);
    }

    // End Added in 7.0

    // Added in 5.4
    if(isset($_POST[$iframe_fix_opt_name])){
        $iframe_fix          = $_POST[$iframe_fix_opt_name];
        update_option($iframe_fix_opt_name, $iframe_fix);
    } else {
        $iframe_fix          = "off";
        update_option($iframe_fix_opt_name, $iframe_fix);
    }
    if(isset($_POST[$tnc_pdf_custom_css])){
        $custom_css         = $_POST[$tnc_pdf_custom_css];
        update_option($tnc_pdf_custom_css, $custom_css);
    }
    if(isset($_POST[$link_opt_name])){
        $link_target        = $_POST[$link_opt_name];
        update_option($link_opt_name, $link_target);
    }
    if(isset($_POST[$auto_iframe_width_name])){
        $auto_iframe_width  = $_POST[$auto_iframe_width_name];
        update_option($auto_iframe_width_name, $auto_iframe_width);
    }
    if(isset($_POST[$auto_iframe_height_name])){
        $auto_iframe_height = $_POST[$auto_iframe_height_name];
        update_option($auto_iframe_height_name, $auto_iframe_height);
    }
    if(isset($_POST[$analytics_opt_name])){
        $analytics_id       = $_POST[$analytics_opt_name];
        update_option($analytics_opt_name, $analytics_id);
    }
    if(isset($_POST[$fs_text_opt_name])){
        $fullscreen_text    = $_POST[$fs_text_opt_name];
        update_option($fs_text_opt_name, $fullscreen_text);
    }
    if(isset($_POST[$vpi_opt_name])){
        $vpi_value    = $_POST[$vpi_opt_name];
        update_option($vpi_opt_name, $vpi_value);
    }
    if(isset($_POST[$vpi_sc_opt_name])){
        $vpi_sc_value    = $_POST[$vpi_sc_opt_name];
        update_option($vpi_sc_opt_name, $vpi_sc_value);
    }
    if(isset($_POST[$lang_opt_name])){
        $lang_value    = $_POST[$lang_opt_name];
        update_option($lang_opt_name, $lang_value);
    }
    echo '<div id="message" class="updated fade"><p>PDF Viewer Options Updated</p></div>';
} else {
    $auto_add           = get_option($sh_opt_name);
    $show_social        = get_option($ss_opt_name);
    $show_print         = get_option($print_opt_name);
    $show_download      = get_option($download_opt_name);
    $show_open          = get_option($open_opt_name);
    $show_zoom          = get_option($zoom_opt_name);
    $show_full          = get_option($fullscreen_opt_name);
    $show_logo_image    = get_option($logo_image_opt_name);
    $show_logo          = get_option($logo_display_opt_name);
    $show_find          = get_option($find_opt_name);
    $show_pagenav       = get_option($pagenav_opt_name);
    $show_current_view  = get_option($current_view_opt_name);
    $show_rotate        = get_option($rotate_opt_name);
    $show_handtool      = get_option($handtool_opt_name);
    $show_doc_prop      = get_option($doc_prop_opt_name);
    $show_toggle_menu   = get_option($toggle_menu_opt_name);
    $iframe_fix         = get_option($iframe_fix_opt_name);
    $custom_css         = get_option($tnc_pdf_custom_css);
    $link_target        = get_option($link_opt_name);
    $auto_iframe_width  = get_option($auto_iframe_width_name);
    $auto_iframe_height = get_option($auto_iframe_height_name);
    $analytics_id       = get_option($analytics_opt_name);
    $fullscreen_text    = get_option($fs_text_opt_name);
    $vpi_value          = get_option($vpi_opt_name);
    $vpi_sc_value       = get_option($vpi_sc_opt_name);
    $lang_value         = get_option($lang_opt_name);
}

//media uploader
if(function_exists( 'wp_enqueue_media' )){
    wp_enqueue_media();
} else {
    wp_enqueue_style('thickbox');
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
}
?>
<div class="wrap">
<div id="poststuff">
    <div id="post-body">
        <?php screen_icon(); ?>
        <div class="tnc-pdf-column-left">
            <div class="postbox">
                <h3>PDF viewer for WordPress Options</h3>
                <div class="inside">
                    <p>Developed by <a href="http://themencode.com" title="ThemeNcode" target="_blank">ThemeNcode</a></p>
                </div> <!--/.inside--> 
            </div><!--/.postbox-->
            <div class="postbox">
                <fieldset>
                    <h3>General Settings</h3>
                    <div class="inside">
                        <form method="post" action="">
                            <strong>Automatic Display Options (Iframe/Link)</strong><br>
                            <span>If you enable any of these automatic options, the plugin will find all pdf links on your website frontend & replace with either viewer link or viewer iframe.</span><br><br />
                            
                            <select name="<?php echo $sh_opt_name; ?>" id="">
                                <option value="none" <?php if($auto_add == "auto_link"){ echo "selected='selected'";} ?>>Do nothing Automatically</option>
                                <option value="auto_iframe" <?php if($auto_add == "auto_iframe"){ echo "selected='selected'";} ?>>Automatic Iframe</option>
                                <option value="auto_link" <?php if($auto_add == "auto_link"){ echo "selected='selected'";} ?>>Automatic Link</option>
                            </select> <br><br />
                            
                            <strong>Logo Image</strong><br><br />
                            <img class="logo_image" src="<?php echo $show_logo_image ?>" /><br><br />
                            
                            <input class="header_logo_url" type="text" name="<?php echo $logo_image_opt_name; ?>" size="60" value="<?php echo $show_logo_image; ?>">
                            <a href="#" class="tnc_logo_upload button button-primary">Upload</a><br /><br /> 

                            <strong>Toolbars on Viewer</strong><br /><br />
                            <input type="checkbox" name="<?php echo $ss_opt_name; ?>" <?php if($show_social == "on"){echo "checked='checked'";} else { echo "";} ?>/> &nbsp;<span>Hide Social Share Buttons</span><br /><br />
                            <input type="checkbox" name="<?php echo $print_opt_name; ?>" <?php if($show_print == "on"){echo "checked='checked'";} else { echo "";} ?>/> &nbsp;<span>Hide Print Button</span><br /><br />
                            <input type="checkbox" name="<?php echo $download_opt_name; ?>" <?php if($show_download == "on"){echo "checked='checked'";} else { echo "";} ?> /> &nbsp;<span>Hide Download Button</span><br /><br />
                            <input type="checkbox" name="<?php echo $open_opt_name; ?>" <?php if($show_open == "on"){echo "checked='checked'";} else { echo "";} ?>/> &nbsp;<span>Hide Open Button</span><br /><br />
                            <input type="checkbox" name="<?php echo $zoom_opt_name; ?>" <?php if($show_zoom == "on"){echo "checked='checked'";} else { echo "";} ?>/> &nbsp;<span>Hide Zoom Option</span><br /><br />
                            <input type="checkbox" name="<?php echo $fullscreen_opt_name; ?>" <?php if($show_full == "on"){echo "checked='checked'";} else { echo "";} ?>/> &nbsp;<span>Hide FullScreen Button</span><br /><br />
                            <input type="checkbox" name="<?php echo $logo_display_opt_name; ?>" <?php if($show_logo == "on"){echo "checked='checked'";} else { echo "";} ?>/> &nbsp;<span>Hide Logo</span><br /><br />
                            <input type="checkbox" name="<?php echo $find_opt_name; ?>" <?php if($show_find == "on"){echo "checked='checked'";} else { echo "";} ?>/> &nbsp;<span>Hide Find Button</span><br /><br />
                            <input type="checkbox" name="<?php echo $pagenav_opt_name; ?>" <?php if($show_pagenav == "on"){echo "checked='checked'";} else { echo "";} ?>/> &nbsp;<span>Hide Page Navigation on Top</span><br><br />
                            
                            <input type="checkbox" name="<?php echo $current_view_opt_name; ?>" <?php if($show_current_view == "on"){echo "checked='checked'";} else { echo "";} ?>/> &nbsp;<span>Hide Current View Button</span><br><br />
                            <input type="checkbox" name="<?php echo $rotate_opt_name; ?>" <?php if($show_rotate == "on"){echo "checked='checked'";} else { echo "";} ?>/> &nbsp;<span>Hide Rotate Option</span><br><br />
                            <input type="checkbox" name="<?php echo $handtool_opt_name; ?>" <?php if($show_handtool == "on"){echo "checked='checked'";} else { echo "";} ?>/> &nbsp;<span>Hide Hand Tool</span><br><br />
                            <input type="checkbox" name="<?php echo $doc_prop_opt_name; ?>" <?php if($show_doc_prop == "on"){echo "checked='checked'";} else { echo "";} ?>/> &nbsp;<span>Hide Document Properties</span><br><br />
                            <input type="checkbox" name="<?php echo $toggle_menu_opt_name; ?>" <?php if($show_toggle_menu == "on"){echo "checked='checked'";} else { echo "";} ?>/> &nbsp;<span>Hide Top Right Toggle Menu Completly</span><br><br />

                            <strong>Default Language</strong><br>
                            <span>Applies to Autolink and AutoiFrame options</span><br><br />
                            
                            <select name="<?php echo $lang_opt_name; ?>" id="select-language" class="language">
                                <option value="<?php echo $lang_value; ?>" selected><?php echo $lang_value; ?></option>
                                <option value="en-US">en-US</option>
                                <option value="ach">ach</option>
                                <option value="af">af</option>
                                <option value="ak">ak</option>
                                <option value="an">an</option>
                                <option value="ar">ar</option>
                                <option value="as">as</option>
                                <option value="ast">ast</option>
                                <option value="az">az</option>
                                <option value="be">be</option>
                                <option value="bg">bg</option>
                                <option value="bn-BD">bn-BD</option>
                                <option value="bn-IN">bn-IN</option>
                                <option value="br">br</option>
                                <option value="bs">bs</option>
                                <option value="ca">ca</option>
                                <option value="cs">cs</option>
                                <option value="csb">csb</option>
                                <option value="cy">cy</option>
                                <option value="da">da</option>
                                <option value="de">de</option>
                                <option value="el">el</option>
                                <option value="en-GB">en-GB</option>
                                <option value="en-ZA">en-ZA</option>
                                <option value="eo">eo</option>
                                <option value="es-AR">es-AR</option>
                                <option value="es-CL">es-CL</option>
                                <option value="es-ES">es-ES</option>
                                <option value="es-MX">es-MX</option>
                                <option value="et">et</option>
                                <option value="eu">eu</option>
                                <option value="fa">fa</option>
                                <option value="ff">ff</option>
                                <option value="fi">fi</option>
                                <option value="fr">fr</option>
                                <option value="fy-NL">fy-NL</option>
                                <option value="ga-IE">ga-IE</option>
                                <option value="gd">gd</option>
                                <option value="gl">gl</option>
                                <option value="gu-IN">gu-IN</option>
                                <option value="he">he</option>
                                <option value="hi-IN">hi-IN</option>
                                <option value="hr">hr</option>
                                <option value="hu">hu</option>
                                <option value="hy-AM">hy-AM</option>
                                <option value="id">id</option>
                                <option value="is">is</option>
                                <option value="it">it</option>
                                <option value="ja">ja</option>
                                <option value="ka">ka</option>
                                <option value="kk">kk</option>
                                <option value="km">km</option>
                                <option value="kn">kn</option>
                                <option value="ko">ko</option>
                                <option value="ku">ku</option>
                                <option value="lg">lg</option>
                                <option value="lij">lij</option>
                                <option value="lt">lt</option>
                                <option value="lv">lv</option>
                                <option value="mai">mai</option>
                                <option value="mk">mk</option>
                                <option value="ml">ml</option>
                                <option value="mn">mn</option>
                                <option value="mr">mr</option>
                                <option value="ms">ms</option>
                                <option value="my">my</option>
                                <option value="nb-NO">nb-NO</option>
                                <option value="nl">nl</option>
                                <option value="nn-NO">nn-NO</option>
                                <option value="nso">nso</option>
                                <option value="oc">oc</option>
                                <option value="or">or</option>
                                <option value="pa-IN">pa-IN</option>
                                <option value="pl">pl</option>
                                <option value="pt-BR">pt-BR</option>
                                <option value="pt-PT">pt-PT</option>
                                <option value="rm">rm</option>
                                <option value="ro">ro</option>
                                <option value="ru">ru</option>
                                <option value="rw">rw</option>
                                <option value="sah">sah</option>
                                <option value="si">si</option>
                                <option value="sk">sk</option>
                                <option value="sl">sl</option>
                                <option value="son">son</option>
                                <option value="sq">sq</option>
                                <option value="sr">sr</option>
                                <option value="sv-SE">sv-SE</option>
                                <option value="sw">sw</option>
                                <option value="ta">ta</option>
                                <option value="ta-LK">ta-LK</option>
                                <option value="te">te</option>
                                <option value="th">th</option>
                                <option value="tl">tl</option>
                                <option value="tn">tn</option>
                                <option value="tr">tr</option>
                                <option value="uk">uk</option>
                                <option value="ur">ur</option>
                                <option value="vi">vi</option>
                                <option value="wo">wo</option>
                                <option value="xh">xh</option>
                                <option value="zh-CN">zh-CN</option>
                                <option value="zh-TW">zh-TW</option>
                                <option value="zu">zu</option>
                            </select> <br><br />
                    </div>
                </fieldset>
            </div>
            <div class="postbox">
                <fieldset>
                            <h3>Auto Link Settings <br><span style="font-size: 70%;">Only Applicable if you select Auto Link in Automatic Display Option.</span></h3>
                    <div class="inside">
                            <strong>Link Target</strong><br >_parent / _blank<br><br />
                            <input type="text" name="<?php echo $link_opt_name; ?>" size="70" value="<?php echo $link_target; ?>" /><br><br />
                    </div>
                </fieldset>
            </div>
            <div class="postbox">
                <fieldset>
                    
                            <h3>Auto Iframe Settings <br><span style="font-size: 70%;">Only Applicable if you select Auto Iframe in Automatic Display Option.</span></h3>
                    <div class="inside">
                            <strong>Iframe Width</strong> (Iframe Height in pixels. Ex: 500)<br><br />
                            <input type="text" name="<?php echo $auto_iframe_width_name; ?>" size="70" value="<?php echo $auto_iframe_width; ?>" /><br><br />

                            <strong>Iframe Height</strong> (Iframe Height in pixels. Ex: 800)<br ><br />
                            <input type="text" name="<?php echo $auto_iframe_height_name; ?>" size="70" value="<?php echo $auto_iframe_height; ?>" /><br><br />
                    </div>
                </fieldset>
            </div>
            <div class="postbox">
                <fieldset>
                            <h3>Miscellaneous Settings</h3>
                    <div class="inside">
                            

                            <strong>Fullscreen Link Text </strong> (Only applicable for iframe shortcode, the link that appears just above iframe)<br ><br />
                            <input type="text" name="<?php echo $fs_text_opt_name; ?>" size="70" value="<?php echo $fullscreen_text; ?>" /><br><br />
                            
                            <strong>Google Analytics Tracking Id </strong> For Example: UA-XXXXXXXX-X<br ><br />
                            <input type="text" name="<?php echo $analytics_opt_name; ?>" size="70" value="<?php echo $analytics_id; ?>" /><br />
                            
                            <h4>Enable/Disable iFrame Responsive Fix</h4>

                            <input type="checkbox" name="<?php echo $iframe_fix_opt_name; ?>" <?php if($iframe_fix == "on"){echo "checked='checked'";} else { echo "";} ?>/> &nbsp;<span>Disable Iframe Responsive Fix</span><br><br /> 

                            <strong>Custom Css</strong><br />
                            Put your custom css codes here. This css codes will be only used for viewer.<br><br />

                            <textarea name="<?php echo $tnc_pdf_custom_css; ?>" rows="10" cols="50" ><?php echo $custom_css; ?></textarea><br><br />
                    </div>
                </fieldset>
            </div>
            <div class="postbox">
                <fieldset>
                            <h3>Advanced Settings <br><span style="font-size: 70%;">Don't touch this section unless PDF Viewer doesn't work correctly.</span></h3>
                    <div class="inside">
                            <strong>ThemeNcode PDF Viewer Page</strong><br ><br />
                            <select name="<?php echo $vpi_opt_name ?>"> 
                                <option value="<?php echo $vpi_value ?>" selected="selected">
                                <?php echo get_the_title( $vpi_value ); ?></option> 
                                 <?php 
                                  $pages = get_pages(); 
                                  foreach ( $pages as $page ) {
                                    $option = '<option value="' . $page->ID . '">';
                                    $option .= $page->post_title;
                                    $option .= '</option>';
                                    echo $option;
                                  }
                                 ?>
                            </select><br><br />
                            
                            <strong>ThemeNcode PDF Viewer SC Page</strong><br ><br />
                            <select name="<?php echo $vpi_sc_opt_name ?>"> 
                                <option value="<?php echo $vpi_sc_value ?>" selected="selected">
                                <?php echo get_the_title( $vpi_sc_value ); ?></option> 
                                 <?php 
                                  $pages = get_pages(); 
                                  foreach ( $pages as $page ) {
                                    $option = '<option value="' . $page->ID . '">';
                                    $option .= $page->post_title;
                                    $option .= '</option>';
                                    echo $option;
                                  }
                                 ?>
                            </select><br><br />

                            <p><input type="submit" value="Save PDF Viewer Settings" class="button button-primary" name="submit" /></p>
                        </form>
                    </div><!--/.inside--> 
                </fieldset>
            </div>
        </div> <!-- tnc-column-left  -->
        
        <div class="tnc-pdf-column-right">
                <div class="postbox">
                    <h3>Useful Resources</h3>
                    <div class="inside">
                        <ul>
                            <li><a href="http://goo.gl/v0B6gA">Codecanyon Plugin Page</a></li>
                            <li><a href="https://themencode.com/live-preview/pdf-viewer-for-wordpress/">Plugin Live Demo</a></li>
                            <li><a href="https://themencode.com/docs/pdf-viewer-for-wordpress/">Plugin Documentation</a></li>
                            <li><a href="http://youtube.com/channel/UC0mkhMK6fTx1BCovV6M_E4w">Video Documentations</a></li>
                            <li><a href="https://themencode.com/helpdesk">HelpDesk</a></li>
                        </ul>
                    </div><!--/inside--> 
                </div><!--/.postbox-->

                <div class="postbox">
                    <h3>Latest updates from ThemeNcode</h3>
                    <div class="inside">
                        <iframe src="https://themencode.com/updates/" frameborder="0" width="325" height="400"></iframe>
                    </div><!--/.inside--> 
                </div><!--/.postbox other_plugins -->

                <!-- Subscribe -->
                <div class="postbox">
                    <h3>Stay Updated with Latest Products and News from ThemeNcode</h3>
                    <div class="inside">
                        <div class="newsletter newsletter-subscription">
                            <form method="post" action="https://themencode.com/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
                                <table cellspacing="0" cellpadding="3" border="0">
                                    <!-- first name -->
                                    <tr>
                                        <th>Name</th>
                                        <td>
                                            <input class="newsletter-firstname" type="text" name="nn" size="30"required></td>
                                    </tr>
                                    <!-- email -->
                                    <tr>
                                        <th>Email</th>
                                        <td align="left">
                                            <input class="newsletter-email" type="email" name="ne" size="30" required></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="newsletter-td-submit">
                                            <input class="newsletter-submit button button-primary" type="submit" value="Subscribe"/>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div><!--/.newsletter--> 
                    </div><!--/.inside --> 
                </div><!-- /.postbox Subscribe End -->
            </div> <!-- tnc-pdf-column-right -->
        </div> <!-- postbody -->
    </div><!--poststuff-->
</div><!--/.wrap-->
<style type="text/css">
    a{
        text-decoration: none;
    }
    #poststuff h3{
        border-bottom: 1px solid #f4f4f4;
    }
</style>
<script type="text/javascript">
    //<![CDATA[
    if (typeof newsletter_check !== "function") {
    window.newsletter_check = function (f) {
        var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
        if (!re.test(f.elements["ne"].value)) {
            alert("The email is not correct");
            return false;
        }
        if (f.elements["nn"] && (f.elements["nn"].value == "" || f.elements["nn"].value == f.elements["nn"].defaultValue)) {
            alert("The name is not correct");
            return false;
        }
        if (f.elements["ny"] && !f.elements["ny"].checked) {
            alert("You must accept the privacy statement");
            return false;
        }
        return true;
    }
    }
    //]]>
</script>