<?php

function meet_register() {

    $labels = array(
        'name' => _x('meet', 'post type general name'),
        'singular_name' => _x('meet', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'meet item'),
        'add_new_item' => __('Agregar nuevo post'),
        'edit_item' => __('Editar post'),
        'new_item' => __('Nuevo post'),
        'view_item' => __('Ver el post'),
        'search_items' => __('Buscar meet'),
        'not_found' =>  __('No se encontro meet'),
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
        'menu_icon'  => 'dashicons-groups',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'excerpt', 'thumbnail', 'editor'),
        'taxonomies'  => array( 'page-meet ' ),
        'rewrite' => array('slug' => 'meet', 'with_front' => FALSE)
      ); 
    
    register_post_type( 'meet' , $args );
    }
    
    add_action('init', 'meet_register');
    
    
    /*Categorias personalizadas para meet*/
    function page_meet() {
    
    register_taxonomy(
        'page-meet',
        'meet',
        array(
            'label' => __( 'page meet' ),
            'rewrite' => array( 'slug' => 'page-meet' ),
            'hierarchical' => true,
             // Allow automatic creation of taxonomy columns on associated post-types table?
             'show_admin_column'   => true,
             // Show in quick edit panel?
             'show_in_quick_edit'  => true,
        )
    );
    }
    add_action( 'init', 'page_meet' );