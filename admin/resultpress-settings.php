<?php

class ResultPress_Setitngs_Page {
    
    //global $resultpress_option_page_array;

	private $key = 'resultpress_options';
    
	private $metabox_id = 'resultpress_option_metabox';
    
	protected $title = '';
    
	protected $options_page = '';
    
	private static $instance = null;
    
	private function __construct() {
		$this->title = __( 'ResultPress', 'resultpress' );
	}
    
	public static function get_instance() {
		if( is_null( self::$instance ) ) {
			self::$instance = new self();
			self::$instance->hooks();
		}
		return self::$instance;
	}
    
	public function hooks() {
		add_action( 'admin_init', array( $this, 'init' ) );
		add_action( 'admin_menu', array( $this, 'add_options_page' ) );
		add_action( 'cmb2_admin_init', array( $this, 'add_options_page_metabox' ) );
	}
    
	public function init() {
		register_setting( $this->key, $this->key );
	}
    
	public function add_options_page() {
        global $resultpress_option_page_array;
		$this->options_page = $resultpress_option_page_array = add_menu_page( 
            __('ResultPress Settings', 'resultpress'), 
            $this->title, 
            'manage_options', 
            $this->key, 
            array( $this, 'admin_page_display' ) 
        );
		add_action( "admin_print_styles-{$this->options_page}", array( 'CMB2_hookup', 'enqueue_cmb_css' ) );
	}
    
	public function admin_page_display() {
		?>
		
		<style>
            label[for="enable_captcha1"], label[for="enable_captcha2"], label[for="enable_captcha_refresh1"], label[for="enable_captcha_refresh2"] {display:none}
            .cmb2-id-enable-captcha ul.cmb2-radio-list li, .cmb2-id-enable-captcha-refresh ul.cmb2-radio-list li {
                display: inline-block;
            }
            .cmb2-id-enable-captcha ul.cmb2-radio-list input.labelauty + label, .cmb2-id-enable-captcha-refresh ul.cmb2-radio-list input.labelauty + label {
                display: block;
                font-size: 14px;
                padding: 8px;
            }  
            
            input.labelauty:checked + label[for=enable_captcha2], input.labelauty:checked + label[for=enable_captcha_refresh2] {
                background-color: #dd5044;
            } 
            
            input.labelauty:checked + label[for=enable_captcha2]:hover, input.labelauty:checked + label[for=enable_captcha_refresh2]:hover {
                background-color: #dd5044;opacity:.8
            }
            .cmb2-id-recaptcha-public-key, .cmb2-id-recaptcha-private-key, .cmb2-id-enable-captcha-refresh {display:none}
            .cmb2-id-recaptcha-public-key.show-cmb2-id-recaptcha-public-key, .cmb2-id-recaptcha-private-key.show-cmb2-id-recaptcha-private-key, .cmb2-id-enable-captcha-refresh.show-cmb2-id-enable-captcha-refresh {display:block}
        </style>
		
		<script>
            jQuery(document).ready(function($){
                $('#enabled_infoboxes').jRange({
                    from: 3,
                    to: 8,
                    step: 1,
                    format: '%s info boxes',
                    width: 500,
                    showLabels: true,
                    snap: true,
                    isRange : false,
                    showScale : false,
                });
                $('#enabled_subject').jRange({
                    from: 5,
                    to: 20,
                    step: 1,
                    format: '%s subjects',
                    width: 500,
                    showLabels: true,
                    snap: true,
                    isRange : false,
                    showScale : false,
                }); 
                
                $("#enable_captcha1, #enable_captcha_refresh1").attr("data-labelauty","<?php _e('Yes', 'resultpress'); ?>");
                $("#enable_captcha2, #enable_captcha_refresh2").attr("data-labelauty","<?php _e('No', 'resultpress'); ?>");
                    
                $("[name='enable_captcha'], [name='enable_captcha_refresh']").labelauty({ minimum_width: "80px" });
<?php
        
$captcha_enable_logic = '
    if($(this).val() == \'true\') {
        $(".cmb2-id-recaptcha-public-key").addClass("show-cmb2-id-recaptcha-public-key");
        $(".cmb2-id-recaptcha-private-key").addClass("show-cmb2-id-recaptcha-private-key");
        $(".cmb2-id-enable-captcha-refresh").addClass("show-cmb2-id-enable-captcha-refresh");
    } else {
        $(".cmb2-id-recaptcha-public-key").removeClass("show-cmb2-id-recaptcha-public-key");
        $(".cmb2-id-recaptcha-private-key").removeClass("show-cmb2-id-recaptcha-private-key");
        $(".cmb2-id-enable-captcha-refresh").removeClass("show-cmb2-id-enable-captcha-refresh");
    }
'; 
        
?>        
                
$('.cmb2-id-enable-captcha input[type=radio][name=enable_captcha]:checked').each(function(){
    <?php echo $captcha_enable_logic; ?>
});   
            
$(".cmb2-id-enable-captcha input[type=radio][name=enable_captcha]").change(function(){
    <?php echo $captcha_enable_logic; ?>
});                 
            });
        </script>
		
		<div class="wrap cmb2-options-page wug-option-page-area <?php echo $this->key; ?>">
			<h2>ResultPress Settings</h2>
            
			<?php cmb2_metabox_form( $this->metabox_id, $this->key ); ?>
		</div>
		<?php
	}
    
	function add_options_page_metabox() {
		add_action( "cmb2_save_options-page_fields_{$this->metabox_id}", array( $this, 'settings_notices' ), 10, 2 );

		$resultpress = new_cmb2_box( array(
			'id'         => $this->metabox_id,
			'hookup'     => false,
			'cmb_styles' => false,
			'show_on'    => array(
				'key'   => 'options-page',
				'value' => array( $this->key, )
			),
		) );
        

		$resultpress->add_field( array(
			'name' => __( 'Enabled info box', 'resultpress' ),
			'desc' => __( 'Select how many info boxes you want to enable on each result item.', 'resultpress' ),
			'id'   => 'enabled_infoboxes',
			'type' => 'text',
			'default' => '4',
		) );

		$resultpress->add_field( array(
			'name' => __( 'Enabled subject', 'resultpress' ),
			'desc' => __( 'Select how many subjeccts you want to enable.', 'resultpress' ),
			'id'   => 'enabled_subject',
			'type' => 'text',
			'default' => '15',
		) );

		$resultpress->add_field( array(
			'name' => __( 'Enable Captcha?', 'resultpress' ),
			'desc' => __( 'If you want to enable captcha on result form, select yes.', 'resultpress' ),
			'id'   => 'enable_captcha',
			'type' => 'radio',
			'default' => 'false',
			'options' => array(
                'true' => 'Yes',
                'false' => 'No',
            ),
		) );
        
		$resultpress->add_field( array(
			'name' => __( 'ReCaptcha public key', 'resultpress' ),
			'desc' => __( 'Give your ReCaptcha public key here. Don\' have one? <a target="_blank" href="https://www.google.com/recaptcha/admin">Get it here.</a>', 'resultpress' ),
			'id'   => 'recaptcha_public_key',
			'type' => 'text',
		) ); 
        
		$resultpress->add_field( array(
			'name' => __( 'ReCaptcha secret key', 'resultpress' ),
			'desc' => __( 'Give your ReCaptcha secret key here.', 'resultpress' ),
			'id'   => 'recaptcha_private_key',
			'type' => 'text',
		) );  
        
		$resultpress->add_field( array(
			'name' => __( 'Captcha auto refresh?', 'resultpress' ),
			'desc' => __( 'If you want to enable each captcha solve for each result, select yes.', 'resultpress' ),
			'id'   => 'enable_captcha_refresh',
			'type' => 'radio',
			'default' => 'false',
			'options' => array(
                'true' => 'Yes',
                'false' => 'No',
            ),
		) );        

	}
    
	public function settings_notices( $object_id, $updated ) {
		if ( $object_id !== $this->key || empty( $updated ) ) {
			return;
		}

		add_settings_error( $this->key . '-notices', '', __( 'Settings updated.', 'resultpress' ), 'updated' );
		settings_errors( $this->key . '-notices' );
	}
    
	public function __get( $field ) {
		// Allowed fields to retrieve
		if ( in_array( $field, array( 'key', 'metabox_id', 'title', 'options_page' ), true ) ) {
			return $this->{$field};
		}

		throw new Exception( 'Invalid property: ' . $field );
	}

}

function resultpress_settings_page() {
	return ResultPress_Setitngs_Page::get_instance();
}

function resultpress_get_option( $key = '' ) {
	return cmb2_get_option( resultpress_settings_page()->key, $key );
}

resultpress_settings_page();

// Hiding menu from wp menu
function resultpress_remove_menus(){
    remove_menu_page( 'resultpress_options' );
}
add_action( 'admin_menu', 'resultpress_remove_menus' );

// Adding redirecting menu on gallery CPT
add_action('admin_menu', 'resultpress_custom_submenu_page');
function resultpress_custom_submenu_page() {
    add_submenu_page(
        'edit.php?post_type=rrf-result',
        __('ResultPress Settings', 'resultpress'),
        __('ResultPress Settings', 'resultpress'),
        'manage_options',
        'resultpress-settings',
        'resultpress_fake_page' );
}

// Set redirect function
function resultpress_fake_page() {
   ?>
   <p><?php __('Please wait ...', 'resultpress'); ?></p>
   <script>
       window.location.replace("admin.php?page=resultpress_options");
    </script>
   <?php
}


function resultpress_option_scripts($hook) {
 
	global $resultpress_option_page_array;
 
	if( $hook != $resultpress_option_page_array ) 
		return;
 
	wp_enqueue_script( 'bootstrap-switch-js', plugins_url( 'assets/js/jquery-labelauty.js' , dirname(__FILE__) ), array('jquery'), '1.0', false );
	wp_enqueue_script( 'rp-range-js', plugins_url( 'assets/js/jquery.range-min.js' , dirname(__FILE__) ), array('jquery'), '1.0', false );
	wp_enqueue_style( 'rp-range-css', plugins_url( 'assets/css/jquery.range.css' , dirname(__FILE__) ) );
	wp_enqueue_style( 'bootstrap-switch', plugins_url( 'assets/css/jquery-labelauty.css' , dirname(__FILE__) ) );
}
add_action('admin_enqueue_scripts', 'resultpress_option_scripts');