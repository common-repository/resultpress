<?php
/*
Plugin Name: ResultPress
Plugin URI: http://resultpress.xyz/
Description: This plugin student result system in your wordpress site. 
Author: Rasel Ahmed
Author URI: http://resultpress.xyz
Version: 1.1
Text Domain: resultpress
Domain Path: /languages
*/

// Translate direction
function resultpress_textdomain_register() {
    load_plugin_textdomain( 'resultpress', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'resultpress_textdomain_register' );


// Loading all files
function resultpress_files() {
    global $options;
    $public = resultpress_get_option('recaptcha_public_key');
    $private = resultpress_get_option('recaptcha_private_key');
    
    wp_enqueue_style('resultpress', plugin_dir_url( __FILE__ ) .'assets/css/resultpress.css');
    
    wp_enqueue_script( 'resultpress-niceselect-js', plugin_dir_url( __FILE__ ) . 'assets/js/jquery.nice-select.min.js', array(), '20120206', true );
    
    if(resultpress_get_option('enable_captcha') == 'true' && $public && $private) {
        wp_enqueue_script( 'resultpress-recaptcha-js', '//www.google.com/recaptcha/api.js', array(), '20120206', true );
    }
}
add_action('wp_enqueue_scripts', 'resultpress_files');

// Registering resultpress custom post and taxonomy
include_once('admin/resultpress-cpt.php');

// ResultPress custom post edit screen customize
function resultpress_custom_admin_script() {
    global $post_type;
    if( 'rrf-result' == $post_type ) {
        
        wp_enqueue_style('resultpress-admin', plugin_dir_url( __FILE__ ) .'assets/css/resultpress-admin.css');
        wp_enqueue_script('resultpress-admin-js', plugin_dir_url( __FILE__ ) .'assets/js/resultpress-admin.js');
    }
}
add_action( 'admin_print_scripts-post-new.php', 'resultpress_custom_admin_script', 11 );
add_action( 'admin_print_scripts-post.php', 'resultpress_custom_admin_script', 11 );


// Including CMB2
require_once('libs/cmb2/init.php');

// Register gallery metabox fields
require_once('admin/resultpress-metabox.php');

// ResultPress settings
require_once('admin/resultpress-settings.php');

// ResultPress search function
function result_press_search() {
    if ( ! isset( $_POST['search'] ) )
        exit;

    query_posts(
        array(
            'posts_per_page' => 1,
            'no_found_rows' => true,
            'post_type' => 'rrf-result',
            'meta_key' => 'roll',
            'meta_value' => wp_unslash( ( string ) $_POST['search'] ),
            'rrf_result_year' => wp_unslash( ( string ) $_POST['result_year'] ),
        )
    );

    include_once( 'templates/marksheet-theme-1.php' );
    exit;
}

add_action( 'wp_ajax_nopriv_result_press_search', 'result_press_search', 100 );
add_action( 'wp_ajax_result_press_search',        'result_press_search', 100 );

// Registering resultpress shortcode
function resultpress_shortcode( $atts, $content = null  ) {
    
    global $options;
 
    extract( shortcode_atts( array(
        'years' => '',
        'classes' => ''
    ), $atts ) );
    
    $classes_array = explode(",",$classes);
    $years_array = explode(",",$years);
    
    $public = resultpress_get_option('recaptcha_public_key');
    $private = resultpress_get_option('recaptcha_private_key');
    $reset = resultpress_get_option('enable_captcha_refresh');
    
    $validating_text = __('Validating ...', 'resultpress');
    $searching_text = __('Searching result ...', 'resultpress');
    $strange_text = __('Something strange happened! Please try again.', 'resultpress');
    $bot_text = __('You\'re a bot!', 'resultpress');
    $fillcaptcha_text = __('Please fill the captcha!', 'resultpress');
    $search_form_button_text = __('Search', 'resultpress');
    $search_form_input_text = __('Roll no', 'resultpress');
    
    $resultpress = '
        <script>
            jQuery(document).ready(function($){
                $(".resultpress-row select").niceSelect();
                $(".resultpress-preloader-text").hide();
            
            
                $( "#searchform" ).on( "submit", function ( ev ) {
                    ev.preventDefault();';
    
    $resultpress .= '
                    $( "#resultpress-result-info" ).empty();
                    $(".resultpress-preloader-text").show();';
    
    if(resultpress_get_option('enable_captcha') == 'true' && $public && $private) {
    $resultpress .= '                
                    $(".resultpress-preloader-text i.icomoon").show();
                    $(".rp-waiting-text").empty();
                    $(".rp-waiting-text").append("'.$validating_text.'");
                    $(".resultpress-preloader-text").css("color", "black");
                    
                    
                    if ($("#g-recaptcha-response").val()) {
                        $.ajax({
                            type: \'POST\',
                            url: "'.plugin_dir_url( __FILE__ ).'libs/recaptcha/human-verify.php", 
                            dataType: \'html\',
                            async: true,
                            data: {
                                captchaResponse: $("#g-recaptcha-response").val()
                            },
                            success: function (data) {
                                if(data == "1") {
                                
                                    $(".rp-waiting-text").empty();
                                    $(".rp-waiting-text").append("'.$searching_text.'");
                                    $(".resultpress-preloader-text").css("color", "green");';
    }
    $resultpress .= '
                                    $.post(
                                        "'.admin_url( 'admin-ajax.php' ).'",
                                        {
                                            action: "result_press_search",
                                            search: $( "#s" ).val(),
                                            result_year: $( "#resultpress_year" ).val(),
                                            result_exam: $( "#resultpress_exam" ).val(),
                                        },
                                        function ( response ) {
                                            $( "#resultpress-result-info" ).append( response ).delay(500).fadeIn();
                                            $(".resultpress-preloader-text").hide();';
                            if($reset == 'true') {
                                $resultpress .='grecaptcha.reset();';
                            }
    $resultpress .='
                                        }
                                    );';
    if(resultpress_get_option('enable_captcha') == 'true' && $public && $private) {
    $resultpress .= '
                                } else {
                                    $(".rp-waiting-text").empty();
                                    $(".resultpress-preloader-text i.icomoon").hide();
                                    $(".rp-waiting-text").append("'.$strange_text.'");
                                    $(".resultpress-preloader-text").css("color", "red");
                                }

                            },
                            error: function (XMLHttpRequest, textStatus, errorThrown) {
                                $(".rp-waiting-text").empty();
                                $(".resultpress-preloader-text i.icomoon").hide();
                                $(".rp-waiting-text").append("'.$bot_text.'");
                                $(".resultpress-preloader-text").css("color", "red");
                            }
                        });
                    } else {
                        $(".rp-waiting-text").empty();
                        $(".resultpress-preloader-text i.icomoon").hide();
                        $(".rp-waiting-text").append("'.$fillcaptcha_text.'");
                        $(".resultpress-preloader-text").css("color", "red");
                    }';
    }
    $resultpress .= '    
                });        
            });    
        </script>    

        <div id="resultpress_wrap">
            <div id="resultpress_search_form-wrap">
                <div id="resultpress_search_form">
                    <form role="search" method="get" id="searchform"  >    
                    ';

                    if($classes) {
                    $resultpress .= '
                        <div class="resultpress-row">
                            <select id="resultpress_exam" name="resultpress_exam">';
                    foreach($classes_array as $exam) {
                    $resultpress .='<option value="'.$exam.'">'.$exam.'</option>';
                    }

                    $resultpress .='
                            </select> 
                        </div>
                    ';
                    }

                    if($years) {
                    $resultpress .= '
                        <div class="resultpress-row">
                            <select id="resultpress_year" name="resultpress_year">';
                    foreach($years_array as $year) {
                    $resultpress .='<option value="'.$year.'">'.$year.'</option>';
                    }

                    $resultpress .='
                            </select> 
                        </div>
                    ';
                    }

                    $resultpress .= '
                        <div class="resultpress-input-roll">
                            <input type="number" placeholder="'.$search_form_input_text.'" value="" name="s" id="s" required min="1"/>';
                    if(resultpress_get_option('enable_captcha') == 'true' && $public && $private) {
                    $resultpress .='
                            
                            <div class="rp-verify-human">
                                <div class="g-recaptcha" data-sitekey="'.$public.'"></div>
                            </div>';
                    }
    
                    if(resultpress_get_option('enable_captcha') == 'true' && $public && $private) {
                        $rp_loading_txt = __('Validating ...', 'resultpress');
                    } else {
                        $rp_loading_txt = __('Please wait ...', 'resultpress');
                    }
    
                    $resultpress .='
                            
                            <input type="submit" id="searchsubmit" value="'.$search_form_button_text.'" />
                        </div>
                    </form>
                </div>
            </div>
            
            <p style="display:none" class="resultpress-preloader-text"><i class="icomoon icomoon-spinner3 icomoon-rotate"></i> <span class="rp-waiting-text">'.$rp_loading_txt.'</span></p>

            <div id="resultpress-result-info"></div> 
        </div>  
    ';
 
    return $resultpress;
}   
add_shortcode('resultpress', 'resultpress_shortcode');