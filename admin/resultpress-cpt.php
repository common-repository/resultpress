<?php


add_action( 'init', 'rrf_results_cpt' );
function rrf_results_cpt() {
    register_post_type( 'rrf-result',
        array(
            'labels' => array(
                'name' => __( 'Results', 'resultpress' ),
                'singular_name' => __( 'Result', 'resultpress' )
            ),
            'supports' => array('title'),
            'menu_icon' => 'dashicons-analytics',
            'public' => false,
            'show_ui' => true,
        )
    );
    
    
    register_taxonomy(
        'rrf_result_cat',  
        'rrf-result',                  
        array(
            'hierarchical'          => true,
            'label'                 => 'Class',  
            'labels'                 => array(
                'name'      => __('Class', 'resultpress' ),
                'singular_name'      => __('Class', 'resultpress' ),
                'all_items'      => __('All classes', 'resultpress' ),
                'edit_item'      => __('Edit class', 'resultpress' ),
                'view_item'      => __('View class', 'resultpress' ),
                'update_item'      => __('Update class', 'resultpress' ),
                'add_new_item'      => __('Add new class', 'resultpress' ),
                'new_item_name'      => __('New class name', 'resultpress' ),
                'parent_item'      => __('Parent class', 'resultpress' ),
            ),  
            'public'             => true,
            'show_in_menu'             => false,
            'show_admin_column'     => true,
            'rewrite'               => array(
                'slug'              => 'result-exam-name', 
                'with_front'    => true 
                )
            )
    ); 
    
    
    register_taxonomy(
        'rrf_result_year',  
        'rrf-result',                  
        array(
            'hierarchical'          => true,
            'label'                 => 'Year',  
            'labels'                 => array(
                'name'      => __('Year', 'resultpress' ),
                'singular_name'      => __('Year', 'resultpress' ),
                'all_items'      => __('All years', 'resultpress' ),
                'edit_item'      => __('Edit year', 'resultpress' ),
                'view_item'      => __('View year', 'resultpress' ),
                'update_item'      => __('Update year', 'resultpress' ),
                'add_new_item'      => __('Add new year', 'resultpress' ),
                'new_item_name'      => __('New year name', 'resultpress' ),
                'parent_item'      => __('Parent year', 'resultpress' ),
            ),  
            'public'             => true,
            'show_in_menu'             => false,
            'show_admin_column'     => true,
            'rewrite'               => array(
                'slug'              => 'result-year', 
                'with_front'    => true 
                )
            )
    );    
}


