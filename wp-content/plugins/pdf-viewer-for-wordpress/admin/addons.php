<div class="wrap">
    <div id="poststuff">
        <div id="post-body">
            <?php screen_icon(); ?>
            <div class="tnc-pdf-column-left">
                <div class="postbox">
                    <h3>Available Addons for PDF viewer for WordPress</h3>
                    <div class="inside">
                        <p>
                            Developed by <a href="http://themencode.com" title="ThemeNcode" target="_blank"> ThemeNcode</a>
                        </p>
                    </div><!--/.inside--> 
                </div><!--/.postbox-->
                <div class="postbox">
                    <fieldset>
                        <h3>PDF Viewer for WordPress Visual Composer Addon</h3>
                        <div class="inside">
                            <a href="https://codecanyon.net/item/pdf-viewer-for-wordpress-visual-composer-addon/17334228?ref=ThemeNcode" target="_blank">
                                <img src="<?php echo plugins_url().'/'.PVFW_PLUGIN_DIR; ?>/images/pvfw_vc_addon.png" alt="PDF Viewer for WordPress Visual Composer Addon" class="addon-image" />
                            </a>

                            <di class="tnc-addon-bottom">
                                <a href="https://codecanyon.net/item/pdf-viewer-for-wordpress-visual-composer-addon/17334228?ref=ThemeNcode" target="_blank" class="button button-primary addon-buy-btn">More Details and Download</a>
                            </di>
                        </div><!--/.inside--> 
                    </fieldset>
                </div>

                <div class="postbox">
                    <fieldset>
                        <h3>Navigative PDF Viewer for WordPress Addon</h3>
                        <div class="inside">
                            <p>
                                This addon allows you to have a widget with pdf file links. When user clicks on any of these links, the file will be displayed on the same page content area with PDF Viewer for WordPress. It makes it easier to have many pdf's on same page with a easy to use navigation widget.
                            </p>
                            <a href="https://codecanyon.net/item/navigative-pdf-viewer-for-wordpress-adoon/19393796?ref=ThemeNcode" target="_blank">
                                <img src="<?php echo plugins_url().'/'.PVFW_PLUGIN_DIR; ?>/images/navigative-preview.png" alt="Navigative PDF Viewer for WordPress Addon" class="addon-image" />
                            </a>

                            <di class="tnc-addon-bottom">
                                <a href="https://codecanyon.net/item/navigative-pdf-viewer-for-wordpress-adoon/19393796?ref=ThemeNcode" target="_blank" class="button button-primary addon-buy-btn">More Details and Download</a>
                            </di>
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