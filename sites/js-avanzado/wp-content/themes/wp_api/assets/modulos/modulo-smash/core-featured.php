<?php

function featured_register() {

    $labels = array(
        'name' => _x('featured', 'post type general name'),
        'singular_name' => _x('featured', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'featured item'),
        'add_new_item' => __('Agregar nuevo post'),
        'edit_item' => __('Editar post'),
        'new_item' => __('Nuevo post'),
        'view_item' => __('Ver el post'),
        'search_items' => __('Buscar featured'),
        'not_found' =>  __('No se encontro featured'),
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
        'menu_icon'  => 'dashicons-format-gallery',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'excerpt', 'thumbnail', 'editor'),
        'taxonomies'  => array( 'page-featured ' ),
        'rewrite' => array('slug' => 'featured', 'with_front' => FALSE)
      ); 
    
    register_post_type( 'featured' , $args );
    }
    
    add_action('init', 'featured_register');
    
    
    /*Categorias personalizadas para featured*/
    function page_featured() {
    
    register_taxonomy(
        'page-featured',
        'featured',
        array(
            'label' => __( 'page featured' ),
            'rewrite' => array( 'slug' => 'page-featured' ),
            'hierarchical' => true,
             // Allow automatic creation of taxonomy columns on associated post-types table?
             'show_admin_column'   => true,
             // Show in quick edit panel?
             'show_in_quick_edit'  => true,
        )
    );
    }
    add_action( 'init', 'page_featured' );