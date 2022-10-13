<?php

function testimonials_register() {

    $labels = array(
        'name' => _x('testimonials', 'post type general name'),
        'singular_name' => _x('testimonials', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'testimonials item'),
        'add_new_item' => __('Agregar nuevo post'),
        'edit_item' => __('Editar post'),
        'new_item' => __('Nuevo post'),
        'view_item' => __('Ver el post'),
        'search_items' => __('Buscar testimonials'),
        'not_found' =>  __('No se encontro testimonials'),
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
        'menu_icon'  => 'dashicons-slides',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'excerpt', 'thumbnail', 'editor'),
        'taxonomies'  => array( 'page-testimonials ' ),
        'rewrite' => array('slug' => 'testimonials', 'with_front' => FALSE)
      ); 
    
    register_post_type( 'testimonials' , $args );
    }
    
    add_action('init', 'testimonials_register');
    
    
    /*Categorias personalizadas para testimonials*/
    function page_testimonials() {
    
    register_taxonomy(
        'page-testimonials',
        'testimonials',
        array(
            'label' => __( 'page testimonials' ),
            'rewrite' => array( 'slug' => 'page-testimonials' ),
            'hierarchical' => true,
             // Allow automatic creation of taxonomy columns on associated post-types table?
             'show_admin_column'   => true,
             // Show in quick edit panel?
             'show_in_quick_edit'  => true,
        )
    );
    }
    add_action( 'init', 'page_testimonials' );