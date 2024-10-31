<?php
global $options;


// Registering resultpress metaboxes
add_action( 'cmb2_admin_init', 'result_press_register_metabox' );
function result_press_register_metabox() {
	$result_press_metabox = new_cmb2_box( array(
		'id'            => 'result_press_metabox_id',
		'title'         => __( 'Detailed info', 'resultpress' ),
		'object_types'  => array( 'rrf-result', )
	) );
    
    $result_press_metabox->add_field( array(
        'id'          => 'info_label_1',
        'type'        => 'text',
        'default'        => __('Father\'s Name', 'resultpress' ),
        'name'        => __('Info 1 Name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_object',
        'desc'        => __('Type info 1 label here.', 'resultpress' ),
    ) );
    
    $result_press_metabox->add_field( array(
        'id'          => 'info_value_1',
        'type'        => 'text',
        'name'        => __('Info 1 Value', 'resultpress' ),
        'desc'        => __('Type info 1 value here.', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_object',
    ) );
    
    $result_press_metabox->add_field( array(
        'id'          => 'info_label_2',
        'type'        => 'text',
        'default'        => __('Mother\'s Name', 'resultpress' ),
        'name'        => __('Info 2 Name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_object',
        'desc'        => __('Type info 2 label here.', 'resultpress' ),
    ) );
    
    $result_press_metabox->add_field( array(
        'id'          => 'info_value_2',
        'type'        => 'text',
        'name'        => __('Info 2 Value', 'resultpress' ),
        'desc'        => __('Type info 2 value here.', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_object',
    ) );
    
    $result_press_metabox->add_field( array(
        'id'          => 'info_label_3',
        'type'        => 'text',
        'default'        => __('Student type', 'resultpress' ),
        'name'        => __('Info 3 Name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_object',
        'desc'        => __('Type info 3 label here.', 'resultpress' ),
    ) );
    
    $result_press_metabox->add_field( array(
        'id'          => 'info_value_3',
        'type'        => 'text',
        'name'        => __('Info 3 Value', 'resultpress' ),
        'default'        => __('Regular', 'resultpress' ),
        'desc'        => __('Type info 3 value here.', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_object',
    ) );
    
    if(resultpress_get_option('enabled_infoboxes') >= 4 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'info_label_4',
        'type'        => 'text',
        'default'        => __('Gender', 'resultpress' ),
        'name'        => __('Info 4 Name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_object',
        'desc'        => __('Type info 4 label here.', 'resultpress' ),
    ) );
    
    $result_press_metabox->add_field( array(
        'id'          => 'info_value_4',
        'type'        => 'text',
        'name'        => __('Info 4 Value', 'resultpress' ),
        'default'        => __('Male', 'resultpress' ),
        'desc'        => __('Type info 4 value here.', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_object',
    ) );
    }
    
    if(resultpress_get_option('enabled_infoboxes') >= 5 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'info_label_5',
        'type'        => 'text',
        'name'        => __('Info 5 Name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_object',
        'desc'        => __('Type info 5 label here.', 'resultpress' ),
    ) );
    
    $result_press_metabox->add_field( array(
        'id'          => 'info_value_5',
        'type'        => 'text',
        'name'        => __('Info 5 Value', 'resultpress' ),
        'desc'        => __('Type info 5 value here.', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_object',
    ) );
    }
    
    if(resultpress_get_option('enabled_infoboxes') >= 6 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'info_label_6',
        'type'        => 'text',
        'name'        => __('Info 6 Name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_object',
        'desc'        => __('Type info 6 label here.', 'resultpress' ),
    ) );
    
    $result_press_metabox->add_field( array(
        'id'          => 'info_value_6',
        'type'        => 'text',
        'name'        => __('Info 6 Value', 'resultpress' ),
        'desc'        => __('Type info 6 value here.', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_object',
    ) );
    }
    
    if(resultpress_get_option('enabled_infoboxes') >= 7 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'info_label_7',
        'type'        => 'text',
        'name'        => __('Info 7 Name', 'resultpress' ),
        'row_classes' => __('resultpress_cmb_half_object', 'resultpress' ),
        'desc'        => 'Type info 7 label here.',
    ) );
    
    $result_press_metabox->add_field( array(
        'id'          => 'info_value_7',
        'type'        => 'text',
        'name'        => __('Info 7 Value', 'resultpress' ),
        'desc'        => __('Type info 7 value here.', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_object',
    ) );
    }
    
    if(resultpress_get_option('enabled_infoboxes') >= 8 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'info_label_8',
        'type'        => 'text',
        'name'        => __('Info 8 Name', 'resultpress' ),
        'row_classes' => __('resultpress_cmb_half_object', 'resultpress' ),
        'desc'        => 'Type info 8 label here.',
    ) );
    
    $result_press_metabox->add_field( array(
        'id'          => 'info_value_8',
        'type'        => 'text',
        'name'        => __('Info 8 Value', 'resultpress' ),
        'desc'        => __('Type info 8 value here.', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_object',
    ) );
    }
    
    $result_press_metabox->add_field( array(
        'id'          => 'roll',
        'type'        => 'text',
        'name'        => __('Roll number', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_object',
        'desc'        => __('Student\'s roll number', 'resultpress' ),
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'registration',
        'type'        => 'text',
        'name'        => __('Registration number', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_object',
        'desc'        => __('Student\'s registration number', 'resultpress' ),
    ) );   
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_1',
        'type'        => 'text',
        'name'        => __('Subject name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject show_subject_label',
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_1',
        'type'        => 'text',
        'name'        => __('GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value show_subject_label',
    ) ); 
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_2',
        'type'        => 'text',
        'name'        => __('Subject 2 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_2',
        'type'        => 'text',
        'name'        => __('Subject 2\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_3',
        'type'        => 'text',
        'name'        => __('Subject 3 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_3',
        'type'        => 'text',
        'name'        => __('Subject 3\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_4',
        'type'        => 'text',
        'name'        => __('Subject 4 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_4',
        'type'        => 'text',
        'name'        => __('Subject 4\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_5',
        'type'        => 'text',
        'name'        => __('Subject 5 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_5',
        'type'        => 'text',
        'name'        => __('Subject 5\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    
    if(resultpress_get_option('enabled_subject') >= 6 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_6',
        'type'        => 'text',
        'name'        => __('Subject 6 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_6',
        'type'        => 'text',
        'name'        => __('Subject 6\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    }
    
    if(resultpress_get_option('enabled_subject') >= 7 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_7',
        'type'        => 'text',
        'name'        => __('Subject 7 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_7',
        'type'        => 'text',
        'name'        => __('Subject 7\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    }
    
    if(resultpress_get_option('enabled_subject') >= 8 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_8',
        'type'        => 'text',
        'name'        => __('Subject 8 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_8',
        'type'        => 'text',
        'name'        => __('Subject 8\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    }
    
    if(resultpress_get_option('enabled_subject') >= 9 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_9',
        'type'        => 'text',
        'name'        => __('Subject 9 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_9',
        'type'        => 'text',
        'name'        => __('Subject 9\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    }
    
    if(resultpress_get_option('enabled_subject') >= 10 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_10',
        'type'        => 'text',
        'name'        => __('Subject 10 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_10',
        'type'        => 'text',
        'name'        => __('Subject 10\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    }
    
    if(resultpress_get_option('enabled_subject') >= 11 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_11',
        'type'        => 'text',
        'name'        => __('Subject 11 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_11',
        'type'        => 'text',
        'name'        => __('Subject 11\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    }
    
    if(resultpress_get_option('enabled_subject') >= 12 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_12',
        'type'        => 'text',
        'name'        => __('Subject 12 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_12',
        'type'        => 'text',
        'name'        => __('Subject 12\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    }
    
    if(resultpress_get_option('enabled_subject') >= 13 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_13',
        'type'        => 'text',
        'name'        => __('Subject 13 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_13',
        'type'        => 'text',
        'name'        => __('Subject 13\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    }
    
    if(resultpress_get_option('enabled_subject') >= 14 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_14',
        'type'        => 'text',
        'name'        => __('Subject 14 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_14',
        'type'        => 'text',
        'name'        => __('Subject 14\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    }
    
    if(resultpress_get_option('enabled_subject') >= 15 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_15',
        'type'        => 'text',
        'name'        => __('Subject 15 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_15',
        'type'        => 'text',
        'name'        => __('Subject 15\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    }
    
    if(resultpress_get_option('enabled_subject') >= 16 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_16',
        'type'        => 'text',
        'name'        => __('Subject 16 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_16',
        'type'        => 'text',
        'name'        => __('Subject 16\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    }
    
    if(resultpress_get_option('enabled_subject') >= 17 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_17',
        'type'        => 'text',
        'name'        => __('Subject 17 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
        
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_17',
        'type'        => 'text',
        'name'        => __('Subject 17\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    }
        
    if(resultpress_get_option('enabled_subject') >= 18 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_18',
        'type'        => 'text',
        'name'        => __('Subject 18 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
    
    
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_18',
        'type'        => 'text',
        'name'        => __('Subject 18\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    }
    
    if(resultpress_get_option('enabled_subject') >= 19 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_19',
        'type'        => 'text',
        'name'        => __('Subject 19 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
        
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_19',
        'type'        => 'text',
        'name'        => __('Subject 19\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) ); 
    }
    
    if(resultpress_get_option('enabled_subject') >= 20 ) {
    $result_press_metabox->add_field( array(
        'id'          => 'subject_name_20',
        'type'        => 'text',
        'name'        => __('Subject 20 name', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject',
    ) );  
        
    $result_press_metabox->add_field( array(
        'id'          => 'subject_no_20',
        'type'        => 'text',
        'name'        => __('Subject 20\'s GPA or mark', 'resultpress' ),
        'row_classes' => 'resultpress_cmb_half_subject_value',
    ) );
    }
    
    $result_press_metabox->add_field( array(
        'id'          => 'total',
        'type'        => 'text',
        'name'        => __('Total mark or GPA', 'resultpress' ),
        'desc'        => __('Student\'s total mark or GPA', 'resultpress' ),
    ) ); 
        
};