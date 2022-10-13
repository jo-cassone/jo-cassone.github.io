<?php

function about_register() {

    $labels = array(
        'name' => _x('about', 'post type general name'),
        'singular_name' => _x('about', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'about item'),
        'add_new_item' => __('Agregar nuevo post'),
        'edit_item' => __('Editar post'),
        'new_item' => __('Nuevo post'),
        'view_item' => __('Ver el post'),
        'search_items' => __('Buscar about'),
        'not_found' =>  __('No se encontro about'),
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
        'taxonomies'  => array( 'page-about ' ),
        'rewrite' => array('slug' => 'about', 'with_front' => FALSE)
      ); 
    
    register_post_type( 'about' , $args );
    }
    
    add_action('init', 'about_register');
    
    
    /*Categorias personalizadas para about*/
    function page_about() {
    
    register_taxonomy(
        'page-about',
        'about',
        array(
            'label' => __( 'page about' ),
            'rewrite' => array( 'slug' => 'page-about' ),
            'hierarchical' => true,
             // Allow automatic creation of taxonomy columns on associated post-types table?
             'show_admin_column'   => true,
             // Show in quick edit panel?
             'show_in_quick_edit'  => true,
        )
    );
    }
    add_action( 'init', 'page_about' );