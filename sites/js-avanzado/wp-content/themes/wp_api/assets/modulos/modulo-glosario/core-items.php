<?php

function items_register() {

    $labels = array(
        'name' => _x('items', 'post type general name'),
        'singular_name' => _x('items', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'items item'),
        'add_new_item' => __('Agregar nuevo post'),
        'edit_item' => __('Editar post'),
        'new_item' => __('Nuevo post'),
        'view_item' => __('Ver el post'),
        'search_items' => __('Buscar items'),
        'not_found' =>  __('No se encontro items'),
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
        'menu_icon'  => 'dashicons-testimonial',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'excerpt', 'thumbnail', 'editor'),
        'taxonomies'  => array( 'page-items' ),
        'rewrite' => array('slug' => 'items', 'with_front' => FALSE)
      ); 
    
    register_post_type( 'items' , $args );
    }
    
    add_action('init', 'items_register');
    
    
    /*Categorias personalizadas para items*/
    function page_items() {
    
    register_taxonomy(
        'page-items',
        'items',
        array(
            'label' => __( 'Categorías' ),
            'rewrite' => array( 'slug' => 'page-items' ),
            'hierarchical' => true,
             // Allow automatic creation of taxonomy columns on associated post-types table
             'show_admin_column'   => true,
             // Show in quick edit panel
             'show_in_quick_edit'  => true,
        )
    );
    }
    add_action( 'init', 'page_items' );