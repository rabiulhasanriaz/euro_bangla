<?php
/**
 * Popup Functions of the plugin.
 *
 * @package    Blossomthemes_Email_Newsletter
 * @subpackage Blossomthemes_Email_Newsletter/includes
 * @author    blossomthemes
 */
class Blossomthemes_Email_Newsletter_Popup_Functions {

	public function __construct() {
		
		add_action( 'wp_footer', array( $this, 'check_popup_display_settings' ) );
        add_action('display_newsletter_popup_action', array($this, 'display_newsletter_popup'));
	}

	function check_popup_display_settings()
	{

		$settings = get_option( 'blossomthemes_email_newsletter_settings', true );

		if( isset($settings['appearance']['enable-popup']) && $settings['appearance']['newsletter-id'] != '' ) 
		{

            if(isset($settings['appearance']['popup-page']['home']))
            {

                if(is_front_page() && !is_home())
                {

                    do_action('display_newsletter_popup_action');

                }

            }

            if(isset($settings['appearance']['popup-page']['blog']))
            {

                if(is_home() && is_front_page())
                {

                    do_action('display_newsletter_popup_action');

                }

            }

            if(isset($settings['appearance']['popup-page']['pages']))
            {

                if(is_page())
                {

                    do_action('display_newsletter_popup_action');

                }
            }

            if(isset($settings['appearance']['popup-page']['posts']))
            {
                if(isset($settings['appearance']['popup-page']['post-type']))
                {
                    $posts = $settings['appearance']['popup-page']['post-type'];

                    if(is_array($posts))
                    {
                        $post_types = array();

                        foreach ($posts as $post => $value) 
                        {
                            array_push($post_types, $post);
                        }  

                        if( is_singular( $post_types ) )
                        {
                            do_action( 'display_newsletter_popup_action' );

                        }                                            
                    }
                }
            }

            if(isset($settings['appearance']['popup-page']['archives']))
            {

                if(is_archive())
                {

                    do_action('display_newsletter_popup_action');

                }
            }
        }
         
	}

    function display_newsletter_popup()
    {
        $obj = new Blossomthemes_Email_Newsletter_Functions;
        $settings = get_option( 'blossomthemes_email_newsletter_settings', true );
        $id = $settings['appearance']['newsletter-id'];
        $rrsb_bg='';
        $rrsb_font = '';
        $icon = isset( $settings['appearance']['icon'] ) ? $settings['appearance']['icon'] : '';
        $blossomthemes_email_newsletter_setting = get_post_meta( $id, 'blossomthemes_email_newsletter_setting', true );
        $rrsb_option = ! empty( $blossomthemes_email_newsletter_setting['appearance']['newsletter-bg-option'] ) ? sanitize_text_field( $blossomthemes_email_newsletter_setting['appearance']['newsletter-bg-option'] ) : 'bg-color';
        if( $rrsb_option == 'image' )
        {
            $overlay = isset( $blossomthemes_email_newsletter_setting['appearance']['overlay'] ) &&  $blossomthemes_email_newsletter_setting['appearance']['overlay'] == '1' ? ' has-overlay' : ' no-overlay';
            if( isset( $blossomthemes_email_newsletter_setting['appearance']['bg']) &&  $blossomthemes_email_newsletter_setting['appearance']['bg']!='' )
            {
                $attachment_id = $blossomthemes_email_newsletter_setting['appearance']['bg'];
                $newsletter_bio_img_size = apply_filters('bt_newsletter_img_size','full');
                $image_array   = wp_get_attachment_image_src( $attachment_id, $newsletter_bio_img_size );
                $rrsb_bg = 'url('.$image_array[0].') no-repeat';
            }
        }
        else{
            if( isset( $blossomthemes_email_newsletter_setting['appearance']['bgcolor'] ) &&  $blossomthemes_email_newsletter_setting['appearance']['bgcolor']!='' )
            {
               $rrsb_bg = ! empty( $blossomthemes_email_newsletter_setting['appearance']['bgcolor'] ) ? sanitize_text_field( $blossomthemes_email_newsletter_setting['appearance']['bgcolor'] ) : apply_filters('bt_newsletter_bg_color','#ffffff'); 
            }
            elseif( isset( $settings['appearance']['bgcolor'] ) &&  $settings['appearance']['bgcolor']!='' )
            {
               $rrsb_bg = ! empty( $settings['appearance']['bgcolor'] ) ? sanitize_text_field( $settings['appearance']['bgcolor'] ) : apply_filters('bt_newsletter_bg_color','#ffffff'); 
            }
        }
        
        if( isset( $blossomthemes_email_newsletter_setting['appearance']['fontcolor'] ) &&  $blossomthemes_email_newsletter_setting['appearance']['fontcolor']!='' )
        {
           $rrsb_font = ! empty( $blossomthemes_email_newsletter_setting['appearance']['fontcolor'] ) ? sanitize_text_field( $blossomthemes_email_newsletter_setting['appearance']['fontcolor'] ) : apply_filters('bt_newsletter_font_color_setting','#ffffff'); 
        }
        elseif( isset( $settings['appearance']['fontcolor'] ) &&  $settings['appearance']['fontcolor']!='' )
        {
           $rrsb_font = ! empty( $settings['appearance']['fontcolor'] ) ? sanitize_text_field( $settings['appearance']['fontcolor'] ) : apply_filters('bt_newsletter_font_color_setting','#ffffff'); 
        }

            ob_start();
            ?>
            <div class="blossom-newsletter-popup-active">
                <div class="blossomthemes-email-newsletter-wrapper<?php if(isset($blossomthemes_email_newsletter_setting['appearance']['newsletter-bg-option']) && $blossomthemes_email_newsletter_setting['appearance']['newsletter-bg-option'] == 'image'){ echo ' bg-img'; }?>" id="popup-<?php echo esc_attr($id);?>" style="background: <?php echo esc_attr($rrsb_bg);?>; color: <?php echo esc_attr($rrsb_font);?>;">

                    <?php 
                    if( isset( $icon ) && $icon!='' )
                    {
                        $icon_img_size = apply_filters( 'bten_icon_header_img_size', 'full' );
                        ?>
                        <div class="img-holder">
                            <?php echo wp_get_attachment_image( $icon, $icon_img_size );?> 
                        </div>
                        <?php
                    } ?>

                    <div class="bten-popup-text-wraper<?php if(isset($rrsb_option) && $rrsb_option == 'image'){ echo  $overlay; }?>">
                        <div class="text-holder" >
                            <?php if( get_the_title( $id ) ) { $title = get_the_title( $id ); echo '<h3>'.esc_attr($title).'</h3>'; }?>
                            <?php
                            if( isset($blossomthemes_email_newsletter_setting['appearance']['note']) && $blossomthemes_email_newsletter_setting['appearance']['note']!='' )
                            {
                                $note = $blossomthemes_email_newsletter_setting['appearance']['note'];
                                echo '<span>'.esc_attr($note).'</span>';
                            }
                            ?>
                        </div>
                        <form id="blossomthemes-email-newsletter-popup-<?php echo esc_attr($id);?>" class="blossomthemes-email-newsletter-window-popup-<?php echo esc_attr($id);?>">
                            <?php
                            $val = isset($blossomthemes_email_newsletter_setting['field']['select']) ? esc_attr($blossomthemes_email_newsletter_setting['field']['select']):'email';
                            if( $val=='email' )
                            { 
                                ?>
                                <input type="text" name="subscribe-email" class="subscribe-email-popup-<?php echo esc_attr($id);?>" value="" placeholder="<?php echo isset($blossomthemes_email_newsletter_setting['field']['email_placeholder']) ? esc_attr($blossomthemes_email_newsletter_setting['field']['email_placeholder']):'Your Email';?>">
                            <?php
                            }
                            else{ ?>
                                <input type="text" name="subscribe-fname" required="required" class="subscribe-fname-popup-<?php echo esc_attr($id);?>" value="" placeholder="<?php echo isset($blossomthemes_email_newsletter_setting['field']['first_name_placeholder']) ? esc_attr($blossomthemes_email_newsletter_setting['field']['first_name_placeholder']):'Your Name';?>">
                                <input type="text" name="subscribe-email" required="required" class="subscribe-email-popup-<?php echo esc_attr($id);?>" value="" placeholder="<?php echo isset($blossomthemes_email_newsletter_setting['field']['email_placeholder']) ? esc_attr($blossomthemes_email_newsletter_setting['field']['email_placeholder']):'Your Email';?>">
                            <?php
                            }
                            if( isset( $blossomthemes_email_newsletter_setting['appearance']['gdpr'] ) && $blossomthemes_email_newsletter_setting['appearance']['gdpr'] == '1' )
                            {
                            ?>
                            <label for="subscribe-confirmation-popup-<?php echo esc_attr($id);?>">
                                <div class="subscribe-inner-wrap">
                                    <input type="checkbox" class="subscribe-confirmation-popup-<?php echo esc_attr($id);?>" name="subscribe-confirmation" id="subscribe-confirmation-popup-<?php echo esc_attr($id);?>" required/><span class="check-mark"></span>
                                    <span class="text">
                                        <?php
                                        $gdprmsg = isset($settings['gdpr-msg']) ? $settings['gdpr-msg']: 'By checking this, you agree to our Privacy Policy.';
                                        echo wp_kses_post($gdprmsg)
                                        ?>
                                    </span>
                                </div>
                            </label>
                            <?php
                            }
                            ?>
                            <div id="popup-loader-<?php echo esc_attr($id);?>" style="display: none">
                                <div class="table">
                                    <div class="table-row">
                                        <div class="table-cell">
                                            <img src="<?php echo BLOSSOMTHEMES_EMAIL_NEWSLETTER_FILE_URL.'/public/css/loader.gif';?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="subscribe-submit" class="subscribe-submit-popup-<?php echo esc_attr($id);?>" value="<?php echo isset($blossomthemes_email_newsletter_setting['field']['submit_label']) ? esc_attr($blossomthemes_email_newsletter_setting['field']['submit_label']):'Subscribe';?>">
                        </form>
                        <div class="bten-response" id="bten-response-popup-<?php echo esc_attr($id);?>"><span></span></div>
                        <div id="mask-popup-<?php echo esc_attr($id);?>"></div>
                    </div>
                    <span class="bten-del-icon"><i class="fas fa-times"></i></span>
                </div>
            </div>
            <?php
            global $post;
                $style = '<style>
                    #mask-popup-'.$id.' {
                      position: fixed;
                      width: 100%;
                      height: 100%;
                      left: 0;
                      top: 0;
                      z-index: 9000;
                      background-color: #000;
                      display: none;
                    }

                    #popup-'.$id.' #dialog {
                      width: 750px;
                      height: 300px;
                      padding: 10px;
                      background-color: #ffffff;
                      font-family: "Segoe UI Light", sans-serif;
                      font-size: 15pt;
                    }

                    
                    #popup-loader-'.$id.' {
                        position: absolute;
                        top: 27%;
                        left: 0;
                        width: 100%;
                        height: 80%;
                        text-align: center;
                        font-size: 50px;
                    }

                    #popup-loader-'.$id.' .table{
                        display: table;
                        width: 100%;
                        height: 100%;
                    }

                    #popup-loader-'.$id.' .table-row{
                        display: table-row;
                    }

                    #popup-loader-'.$id.' .table-cell{
                        display: table-cell;
                        vertical-align: middle;
                    }
                </style>';
                echo $obj->bten_minify_css($style);
                // echo $style;

                $ajax =
                    '<script>
                    jQuery(document).ready(function() { 
                        jQuery(document).on("submit","form#blossomthemes-email-newsletter-popup-'.$id.'", function(e){
                        e.preventDefault();
                        jQuery(".subscribe-submit-popup-'.$id.'").attr("disabled", "disabled" );
                        var email = jQuery(".subscribe-email-popup-'.$id.'").val();
                        var fname = jQuery(".subscribe-fname-popup-'.$id.'").val();
                        var confirmation = jQuery(".subscribe-confirmation-popup-'.$id.'").val();
                        var sid = '.$id.';
                            jQuery.ajax({
                                type : "post",
                                dataType : "json",
                                url : bten_ajax_data.ajaxurl,
                                data : {action: "subscription_response", email : email, fname : fname, sid : sid, confirmation : confirmation},
                                beforeSend: function(){
                                    jQuery("#popup-loader-'.$id.'").fadeIn(500);
                                },
                                success: function(response){
                                    jQuery(".subscribe-submit-popup-'.$id.'").attr("disabled", "disabled" );';
                                $option = isset($settings['thankyou-option']) ? esc_attr($settings['thankyou-option']):'text';
                                $ajax .='if(response.type === "success") {';
                                if($option == 'text')
                                {
                                    $ajax .= 'jQuery("#bten-response-popup-'.$id.' span").html(response.message);jQuery("#bten-response-popup-'.$id.'").fadeIn("slow").delay("3000").fadeOut("3000",function(){
                                            jQuery(".subscribe-submit-popup-'.$id.'").removeAttr("disabled", "disabled" );
                                            jQuery("form#blossomthemes-email-newsletter-popup-'.$id.'").find("input[type=text]").val("");
                                            jQuery("form#blossomthemes-email-newsletter-popup-'.$id.'").find("input[type=checkbox]").prop("checked", false);
                                        });';
                                }
                                else{
                                    $selected_page = isset($settings['page'])?esc_attr($settings['page']):'';
                                    $url = get_permalink($selected_page);
                                    $ajax.= 'window.location.href = "'.$url.'"';
                                }

                                $ajax.='}
                                else{
                                    jQuery("#bten-response-popup-'.$id.' span").html(response.message);jQuery("#bten-response-popup-'.$id.'").fadeIn("slow").delay("3000").fadeOut("3000",function(){
                                            jQuery(".subscribe-submit-popup-'.$id.'").removeAttr("disabled", "disabled" );
                                            jQuery("form#blossomthemes-email-newsletter-popup-'.$id.'").find("input[type=text]").val("");
                                            jQuery("form#blossomthemes-email-newsletter-popup-'.$id.'").find("input[type=checkbox]").prop("checked", false); 

                                        });
                                    }
                                },
                                complete: function(){
                                    jQuery("#popup-loader-'.$id.'").fadeOut(500);             
                                } 
                            });  
                        });
                    });
                    </script>';

        echo $obj->bten_minify_js($ajax);

        //cookie expiry, default 1 day
        $expire = apply_filters( 'bten_popup_expiry', 1 );
        //popup delay time in milliseconds
        $delay = isset($settings['appearance']['poup_delay']) ? esc_attr($settings['appearance']['poup_delay']) : 60;
        $delay = $delay*1000;

        $popup = '<script>       
            jQuery(document).ready(function($) {
                
                $(window).load(function(){
                    //display popup if cookie does not exist
                    var popup = getCookie("bten_popup_disable");
                    if ( popup == "") {
                        setTimeout(function(){
                            $(".blossom-newsletter-popup-active").addClass("popup-open");
                        }, '.$delay.');
                    } 
                });                 

                $(".blossom-newsletter-popup-active, .blossom-newsletter-popup-active .bten-del-icon").click(function(){
                    $(".blossom-newsletter-popup-active").removeClass("popup-open");

                    //Set Cokkie 
                    setCookie( "bten_popup_disable", true, '.$expire.' );
                });

                $("#popup-'.$id.'").click(function(e){
                    e.stopPropagation();
                });

                function setCookie(cname, cvalue, exdays) {
                    var d = new Date();
                    d.setTime(d.getTime() + (exdays *24 * 60 * 60 * 1000));
                    var expires = "expires="+ d.toUTCString();
                    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
                }

                function getCookie(cname) {
                    var name = cname + "=";
                    var decodedCookie = decodeURIComponent(document.cookie);
                    var ca = decodedCookie.split(";");
                    for(var i = 0; i < ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) == " ") {
                            c = c.substring(1);
                        }
                        if (c.indexOf(name) == 0) {
                            return c.substring(name.length, c.length);
                        }
                    }
                    return "";
                }
            });
            </script>';  

        echo $obj->bten_minify_js( $popup );

        $output = ob_get_contents();
        ob_end_clean();
        echo $output;
    }
}
new Blossomthemes_Email_Newsletter_Popup_Functions;