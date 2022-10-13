<?php
/**
 * Mis funciones.
 */

function mis_estilos(){
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css','all');
	wp_register_style('mi-estilo',get_template_directory_uri().'/assets/library/css/mi-estilo.css','all');

	
    wp_enqueue_style('bootstrap');
	wp_enqueue_style('mi-estilo');

	
}
add_action('wp_enqueue_scripts','mis_estilos');

/**
 * Mis scripts.
 */

function mis_scripts(){
	if (!is_admin()){
		wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js',array('jquery'),'1',false);
		wp_register_script('cdn-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js',array('jquery'),'1',false);
		wp_register_script('mi-js', get_template_directory_uri().'/assets/library/js/mis-scripts.js',array('jquery'),'1',false);

		wp_enqueue_script('bootstrap-js', array('jquery'),true);
		wp_enqueue_script('cdn-jquery', array('jquery'),true);
		wp_enqueue_script('mi-js', array('jquery'),true);	
	}
}
add_action("wp_enqueue_scripts","mis_scripts",1);

/**
 * Soporte para insertar un extracto a una página en wordpress.
 */
add_post_type_support( 'page', 'excerpt' );

/**
 * Función de menús:
 */
function mi_menu_personalizado()
{
    $locations = array(
        'mi-menu' => __('mi-menu', 'mi-menu'),
    );
    register_nav_menus($locations);
}
add_action('init', 'mi_menu_personalizado');

/**
 * Zona de widgets
 */

function widget_menu_home(){
	register_sidebar(
		array(
			'name' => 'Menú Home',
			'id' => 'menu_home',
			'before_widget' => '<div class="col-12 col-md-6">',
			'after_widget' => '</div>',
			'before_title' => '<h5 class="entry-title">',
			'after_tittle' => '</h5>',
		)
	);
}

add_action('widgets_init', 'widget_menu_home');

function widget_categorias(){
	register_sidebar(
		array(
			'name' => 'categorias',
			'id' => 'categorias',
			'before_widget' => '<div class="categorias-area">',
			'after_widget' => '</div>',
			'before_title' => '<h5 class="entry-title">',
			'after_tittle' => '</h5>',
		)
	);
}

add_action('widgets_init', 'widget_categorias');

function widget_footer(){
	register_sidebar(
		array(
			'name' => 'Footer',
			'id' => 'footer',
			'before_widget' => '<div class="footer-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h5 class="entry-title">',
			'after_tittle' => '</h5>',
		)
	);
}

add_action('widgets_init', 'widget_footer');

/**
 * Función menú de widgets
 */
add_filter( 'use_widgets_block_editor', '__return_false' );
