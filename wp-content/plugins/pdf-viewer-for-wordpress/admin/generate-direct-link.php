<?php
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
                    <h3>Generate Direct Link - PDF viewer for WordPress</h3>
                    <div class="inside">
                        <p>
                            Developed by <a href="http://themencode.com" title="ThemeNcode" target="_blank"> ThemeNcode</a>
                        </p>
                    </div><!--/.inside--> 
                </div><!--/.postbox-->
                <div class="postbox">
                    <fieldset>
                        <h3>Select options to create link</h3>
                        <div class="inside">
                            <form name="shortcode_generator" method="POST">
                                <strong>Upload PDF file or put link below</strong><br><br />
                                <a href="#" class="tnc_quick_upload button button-primary">Upload PDF File</a> <br><br />
                                <strong>Or</strong> <br><br />
                                <input id="fileurl" class="uploaded_file_url" type="text" name="tnc_pdf_file" value="" onclick="this.select();" /><br><br />
                                <div class="tnc-3col">
                                    <strong>Download</strong><br><br />
                                    <select name="download" id="download">
                                        <option value="1">Show</option>
                                        <option value="0">Hide</option>
                                    </select> <br><br />

                                    <strong>Share</strong><br><br />
                                    <select name="share" id="share">
                                        <option value="1">Show</option>
                                        <option value="0">Hide</option>
                                    </select> <br><br />

                                    <strong>Logo</strong><br><br />
                                    <select name="logo" id="logo">
                                        <option value="1">Show</option>
                                        <option value="0">Hide</option>
                                    </select><br><br />

                                    <strong>Default Zoom</strong><br><br />
                                    <select name="default_zoom" id="default_zoom">
                                        <option value="auto">Auto</option>
                                        <option value="page-fit">Page Fit</option>
                                        <option value="page-width">Page Width</option>
                                        <option value="page-height">Page Height</option>
                                        <option value="75">75%</option>
                                        <option value="100">100%</option>
                                        <option value="150">150%</option>
                                        <option value="200">200%</option>
                                    </select> <br><br />
                                </div>
                                <div class="tnc-3col">
                                    <strong>Print</strong><br><br />
                                    <select name="print" id="print">
                                        <option value="1">Show</option>
                                        <option value="0">Hide</option>
                                    </select><br><br />

                                    <strong>Zoom</strong><br><br />
                                    <select name="zoom" id="zoom">
                                        <option value="1">Show</option>
                                        <option value="0">Hide</option>
                                    </select> <br><br />

                                    <strong>Pagenav</strong><br><br />
                                    <select name="pagenav" id="pagenav">
                                        <option value="1">Show</option>
                                        <option value="0">Hide</option>
                                    </select><br><br />

                                    <strong>Page Mode</strong><br><br />
                                    <select name="pagemode" id="pagemode">
                                        <option value="">Default</option>
                                        <option value="thumbs">Thumbnails</option>
                                        <option value="bookmarks">Bookmarks</option>
                                    </select> <br><br />
                                </div>
                                <div class="tnc-3col">
                                    <strong>Fullscreen</strong><br><br />
                                    <select name="fullscreen" id="fullscreen">
                                        <option value="1">Show</option>
                                        <option value="0">Hide</option>
                                    </select><br><br />

                                    <strong>Open</strong><br><br />
                                    <select name="open" id="open">
                                        <option value="1">Show</option>
                                        <option value="0">Hide</option>
                                    </select><br><br />

                                    <strong>Find</strong><br><br />
                                    <select name="find" id="find">
                                        <option value="1">Show</option>
                                        <option value="0">Hide</option>
                                    </select> <br><br />

                                    <strong>Viewer Language</strong><br><br />
                                    <select name="language" id="select-language" class="language">
                                        <option value="en-US" selected">en-US</option>
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

                                <strong>Jump to page</strong><br><br />
                                <input type="text" name="page" class="page" value="" placeholder="Jump to page" /><br><br />

                                
                                
                                <p><input type="submit" value="Generate Link" class="button button-primary" name="submit" /></p>
                            </form>

                            <?php 
                                // if(isset(['shortcode_generator'])){
                                    function generate_shortcode(){
                                    $tnc_get_sc_page_id = get_option( 'tnc_pdf_viewer_sc_page_id', false );
                                    $shortcode_viewer_url = get_permalink( $tnc_get_sc_page_id);
                                    $sc_page_one = parse_url($shortcode_viewer_url, PHP_URL_QUERY);
                                    if ($sc_page_one) {
                                      $shortcode_viewer_url .= '&tnc_pvfw=';
                                    } else {
                                      $shortcode_viewer_url .= '?tnc_pvfw=';
                                    }
                                        $file           = $_REQUEST['tnc_pdf_file'];
                                        $download       = $_REQUEST['download'];
                                        $print          = $_REQUEST['print'];
                                        $fullscreen     = $_REQUEST['fullscreen'];
                                        $share          = $_REQUEST['share'];
                                        $zoom           = $_REQUEST['zoom'];
                                        $open           = $_REQUEST['open'];
                                        $logo           = $_REQUEST['logo'];
                                        $pagenav        = $_REQUEST['pagenav'];
                                        $find           = $_REQUEST['find'];
                                        $page           = $_REQUEST['page'];
                                        $language       = $_REQUEST['language'];
                                        $pagemode       = $_REQUEST['pagemode'];
                                        $default_zoom   = $_REQUEST['default_zoom'];
                                        $generated_url = 'file='.$file.'&settings='.$s_download.$s_print.$s_zoom.$s_fullscreen.$s_share.$s_open.$s_logo.$s_pagenav.$s_find.'&lang='.$language;
                                        $additional_url = '#page='.$page.'&zoom='.$default_zoom.'&pagemode='.$pagemode;
                                        $encoded_url = base64_encode($generated_url);
                                        $final_url = $shortcode_viewer_url.$shortcode_viewer_url_par.$encoded_url.$additional_url;

                                        $output .= $final_url;
                                        
                                        return $output;
                                    }
                                ?>
                                            <!-- <div id="output" class="row well result"></div> -->
                                        <?php if(isset($_POST['submit'])){ ?>
                                            <strong>Copy Link below and use it anywhere on the web to send users to this page</strong><br><br />
                                            <textarea name="output" id="result" cols="30" rows="5" class="form-control tnc-view-link" onclick="this.select();" ><?php echo generate_shortcode(); ?></textarea>

                                        <?php } ?>
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

    function copyInstr() {
        document.getElementById("fileurl").select();
    }
    jQuery(document).ready(function(jQuery){
        jQuery('.tnc_quick_upload').click(function(e) {
            e.preventDefault();
            var pdf_uploader = wp.media({
                title: 'Upload File',
                button: {
                    text: 'Get Link'
                },
                multiple: false  // Set this to true to allow multiple files to be selected
            })
            .on('select', function() {
                var attachment = pdf_uploader.state().get('selection').first().toJSON();
                jQuery('.uploaded_file_url').val(attachment.url);
            })
            .open();
        });
    });
</script>