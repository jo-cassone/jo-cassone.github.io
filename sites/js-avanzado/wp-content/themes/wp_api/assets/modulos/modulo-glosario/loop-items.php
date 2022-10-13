<?php
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_per_page = -1; 
$args = array(
    'post_type' => 'items',
    'orderby' => 'date',
    'order' => 'ASC', //ASC = ascending order from lowest to highest values 
    'paged' => $paged,
    'post_per_page' => $post_per_page
);
$wp_query = new WP_Query($args);

if(have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		
		<div class="col-lg-3 col-md-4 col-sm-6">

		<div class="tarjetas <?php the_field('color_tarjeta') ?>">
		<a class="titulo-tarjeta" href="<?php the_permalink(); ?>"><?php the_title('<h2>','</h2>'); ?></a>
			<div class="icono-tarjeta"><a href="<?php the_permalink(); ?>"><?php the_field('icono'); ?></a></div>
			<div class="taxonomias"><?php echo get_the_term_list($post->ID, 'page-items', '<p>', ' ', '</p>') ?></div>
		</div>
		</div>
		
<?php endwhile; else : ?>
    <p class="text-center mb-0">Oops!, Lo sentimos, no hay contenido que mostrar</p>
<?php endif;
wp_reset_query();
$wp_query = $temp ?>