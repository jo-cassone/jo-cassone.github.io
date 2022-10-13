<?php

function footer_register() {

    $labels = array(
        'name' => _x('footer', 'post type general name'),
        'singular_name' => _x('footer', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'footer item'),
        'add_new_item' => __('Agregar nuevo post'),
        'edit_item' => __('Editar post'),
        'new_item' => __('Nuevo post'),
        'view_item' => __('Ver el post'),
        'search_items' => __('Buscar footer'),
        'not_found' =>  __('No se encontro footer'),
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
        'menu_icon'  => 'dashicons-paperclip',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'excerpt', 'thumbnail', 'editor'),
        'taxonomies'  => array( 'page-footer ' ),
        'rewrite' => array('slug' => 'footer', 'with_front' => FALSE)
      ); 
    
    register_post_type( 'footer' , $args );
    }
    
    add_action('init', 'footer_register');
    
    
    /*Categorias personalizadas para footer*/
    function page_footer() {
    
    register_taxonomy(
        'page-footer',
        'footer',
        array(
            'label' => __( 'page footer' ),
            'rewrite' => array( 'slug' => 'page-footer' ),
            'hierarchical' => true,
             // Allow automatic creation of taxonomy columns on associated post-types table?
             'show_admin_column'   => true,
             // Show in quick edit panel?
             'show_in_quick_edit'  => true,
        )
    );
    }
    add_action( 'init', 'page_footer' );