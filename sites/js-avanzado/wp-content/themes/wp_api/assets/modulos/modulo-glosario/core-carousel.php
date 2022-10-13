<?php

function carousel_register() {

    $labels = array(
        'name' => _x('carousel', 'post type general name'),
        'singular_name' => _x('carousel', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'carousel item'),
        'add_new_item' => __('Agregar nuevo post'),
        'edit_item' => __('Editar post'),
        'new_item' => __('Nuevo post'),
        'view_item' => __('Ver el post'),
        'search_carousel' => __('Buscar carousel'),
        'not_found' =>  __('No se encontro carousel'),
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
        'taxonomies'  => array( 'category' ),
        'rewrite' => array('slug' => 'carousel', 'with_front' => FALSE)
      ); 
    
    register_post_type( 'carousel' , $args );
    }
    
    add_action('init', 'carousel_register');
    
    
    /*Categorias personalizadas para carousel*/
    function page_carousel() {
    
    register_taxonomy(
        'page-carousel',
        'carousel',
        array(
            'label' => __( 'page carousel' ),
            'rewrite' => array( 'slug' => 'page-carousel' ),
            'hierarchical' => true,
             // Allow automatic creation of taxonomy columns on associated post-types table?
             'show_admin_column'   => true,
             // Show in quick edit panel?
             'show_in_quick_edit'  => true,
        )
    );
    }
    add_action( 'init', 'page_carousel' );