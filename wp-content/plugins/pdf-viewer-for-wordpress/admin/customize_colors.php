<?php
$tnc_pvfw_look_on         = "pvfw_look_style";
$tnc_pvfw_theme_on        = "pvfw_active_theme";
$tnc_primary_color_on     = "pvfw_primary_color";
$tnc_secondary_color_on   = "pvfw_secondary_color";
$tnc_text_color_on        = "pvfw_text_color";
$tnc_icon_color_on        = "pvfw_icon_color";

if(isset($_POST["submit"])){ 
    $tnc_pvfw_look   = $_POST[$tnc_pvfw_look_on];
    update_option($tnc_pvfw_look_on, $tnc_pvfw_look);

    $tnc_pvfw_theme   = $_POST[$tnc_pvfw_theme_on];
    update_option($tnc_pvfw_theme_on, $tnc_pvfw_theme);

    $tnc_primary_color   = $_POST[$tnc_primary_color_on];
    update_option($tnc_primary_color_on, $tnc_primary_color);

    $tnc_secondary_color   = $_POST[$tnc_secondary_color_on];
    update_option($tnc_secondary_color_on, $tnc_secondary_color);

    $tnc_text_color   = $_POST[$tnc_text_color_on];
    update_option($tnc_text_color_on, $tnc_text_color);

    $tnc_icon_color   = $_POST[$tnc_icon_color_on];
    update_option($tnc_icon_color_on, $tnc_icon_color);
    
    echo '<div id="message" class="updated fade"><p>Options Updated</p></div>';
} else {
    $tnc_pvfw_look        = get_option($tnc_pvfw_look_on);
    $tnc_pvfw_theme       = get_option($tnc_pvfw_theme_on);
    $tnc_primary_color    = get_option($tnc_primary_color_on);
    $tnc_secondary_color  = get_option($tnc_secondary_color_on);
    $tnc_text_color       = get_option($tnc_text_color_on);
    $tnc_icon_color       = get_option($tnc_icon_color_on);
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
                    <h3>Customize Viewer Look - PDF viewer for WordPress</h3>
                    <div class="inside">
                        <p>
                            Developed by <a href="https://themencode.com/" title="ThemeNcode" target="_blank"> ThemeNcode</a>
                        </p>
                    </div><!--/.inside--> 
                </div><!--/.postbox-->
                <div class="postbox">
                    <fieldset>
                        <h3>Select how you want the viewer to look like</h3>
                        <div class="inside">
                            <p>PDF Viewer for WordPress 7.1 and newer versions comes with predefined themes & also an option for you to use custom colors. You must select the way you want to use from the first dropdown below. The next settings will take effect according to what you choose in the first dropdown.</p>
                            <form method="post" action="">
                                <strong>Do you want to use a Theme or use custom colors ? </strong><br><br />
                                <select name="<?php echo $tnc_pvfw_look_on; ?>" id="<?php echo $tnc_pvfw_look_on; ?>">
                                    <option value="">Select an option</option>
                                    <option value="select-theme" <?php if($tnc_pvfw_look == 'select-theme'){echo 'selected="selected"';} ?>>Theme</option>
                                    <option value="custom-color" <?php if($tnc_pvfw_look == 'custom-color'){echo 'selected="selected"';} ?>>Custom Color</option>
                                </select>
                                <br><br />

                                <strong>Select Theme (If you've chosen <em>Theme</em> on the previous option) </strong><br><br />
                                <select name="<?php echo $tnc_pvfw_theme_on; ?>" id="<?php echo $tnc_pvfw_theme_on; ?>">
                                    <option value="">Select an option</option>
                                    <option value="aqua-white" <?php if($tnc_pvfw_theme == 'aqua-white'){echo 'selected="selected"';} ?>>Aqua White</option>
                                    <option value="material-blue" <?php if($tnc_pvfw_theme == 'material-blue'){echo 'selected="selected"';} ?>>Material Blue</option>
                                    <option value="midnight-calm" <?php if($tnc_pvfw_theme == 'midnight-calm'){echo 'selected="selected"';} ?>>Midnight Calm</option>
                                </select>
                                <br><br />
                                
                                <h4>Color Options</h4>
                                <p>This part of settings applies only if you've selected <em>Custom Color</em> in the first dropdown</p>
                                <br><br />
                                <strong>Primary Color</strong><br><br />
                                
                                <input type="text" name="<?php echo $tnc_primary_color_on; ?>" value="<?php echo $tnc_primary_color; ?>" class="pvfw_primary_color" data-default-color="#FFFFFF" /><br><br />

                                <strong>Secondary Color</strong><br><br />
                                
                                <input type="text" name="<?php echo $tnc_secondary_color_on; ?>" value="<?php echo $tnc_secondary_color; ?>" class="pvfw_secondary_color" data-default-color="#dedede" /><br><br />

                                <strong>Text Color (Applied on Toolbar Only)</strong><br><br />
                                
                                <input type="text" name="<?php echo $tnc_text_color_on; ?>" value="<?php echo $tnc_text_color; ?>" class="pvfw_text_color" data-default-color="#232323" /><br><br />

                                <strong>Icon Style</strong><br><br />
                                
                               <select name="<?php echo $tnc_icon_color_on; ?>" id="<?php echo $tnc_icon_color; ?>">
                                    <option value="">Select an option</option>
                                    <option value="dark-icons" <?php if($tnc_icon_color == 'dark-icons'){echo 'selected="selected"';} ?>>Dark</option>
                                    <option value="light-icons" <?php if($tnc_icon_color == 'light-icons'){echo 'selected="selected"';} ?>>Light</option>
                                </select><br><br />
                                
                                <p><input type="submit" value="Save" class="button button-primary" name="submit" /></p>
                            </form>
                        </div><!--/.inside--> 
                    </fieldset>
                </div>
            </div> <!-- column left -->
            
            <div class="tnc-pdf-column-right">
                <div class="postbox">
                    <h3>Useful Resources</h3>
                    <div class="inside">
                        <ul>
                            <li><a href="http://goo.gl/v0B6gA">Codecanyon Plugin Page</a></li>
                            <li><a href="https://themencode.com/live-preview/pdf-viewer-for-wordpress/">Plugin Live Demo</a></li>
                            <li><a href="https://themencode.com/docs/pdf-viewer-for-wordpress/">Plugin Documentation</a></li>
                            <li><a href="http://youtube.com/channel/UC0mkhMK6fTx1BCovV6M_E4w">Video Documentations</a></li>
                            <li><a href="https://themencode.com/helpdesk/">HelpDesk</a></li>
                        </ul>
                    </div><!--/inside--> 
                </div><!--/.postbox-->

                <div class="postbox">
                    <h3>Latest updates from ThemeNcode</h3>
                    <div class="inside">
                        <iframe src="https://themencode.com/updates/" frameborder="0" width="325" height="400"></iframe>
                    </div><!--/.inside--> 
                </div>
                <!--/.postbox other_plugins -->
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