<?php

function contact_register() {

    $labels = array(
        'name' => _x('contact', 'post type general name'),
        'singular_name' => _x('contact', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'contact item'),
        'add_new_item' => __('Agregar nuevo post'),
        'edit_item' => __('Editar post'),
        'new_item' => __('Nuevo post'),
        'view_item' => __('Ver el post'),
        'search_items' => __('Buscar contact'),
        'not_found' =>  __('No se encontro contact'),
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
        'menu_icon'  => 'dashicons-phone',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'excerpt', 'thumbnail', 'editor'),
        'taxonomies'  => array( 'page-contact ' ),
        'rewrite' => array('slug' => 'contact', 'with_front' => FALSE)
      ); 
    
    register_post_type( 'contact' , $args );
    }
    
    add_action('init', 'contact_register');
    
    
    /*Categorias personalizadas para contact*/
    function page_contact() {
    
    register_taxonomy(
        'page-contact',
        'contact',
        array(
            'label' => __( 'page contact' ),
            'rewrite' => array( 'slug' => 'page-contact' ),
            'hierarchical' => true,
             // Allow automatic creation of taxonomy columns on associated post-types table?
             'show_admin_column'   => true,
             // Show in quick edit panel?
             'show_in_quick_edit'  => true,
        )
    );
    }
    add_action( 'init', 'page_contact' );