<?php

function pricing_register() {

    $labels = array(
        'name' => _x('pricing', 'post type general name'),
        'singular_name' => _x('pricing', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'pricing item'),
        'add_new_item' => __('Agregar nuevo post'),
        'edit_item' => __('Editar post'),
        'new_item' => __('Nuevo post'),
        'view_item' => __('Ver el post'),
        'search_items' => __('Buscar pricing'),
        'not_found' =>  __('No se encontro pricing'),
        'not_found_in_trash' => __('No se encontro en la basura'),
        'parent_item_colon' => ''
    );
    
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-admin-page',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'excerpt', 'thumbnail', 'editor'),
        'taxonomies'  => array( 'page-pricing ' ),
        'rewrite' => array('slug' => 'pricing', 'with_front' => FALSE)
      ); 
    
    register_post_type( 'pricing' , $args );
    }
    
    add_action('init', 'pricing_register');
    
    
    /*Categorias personalizadas para pricing*/
    function page_pricing() {
    
    register_taxonomy(
        'page-pricing',
        'pricing',
        array(
            'label' => __( 'page pricing' ),
            'rewrite' => array( 'slug' => 'page-pricing' ),
            'hierarchical' => true,
             // Allow automatic creation of taxonomy columns on associated post-types table?
             'show_admin_column'   => true,
             // Show in quick edit panel?
             'show_in_quick_edit'  => true,
        )
    );
    }
    add_action( 'init', 'page_pricing' );