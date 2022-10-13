<div class="container-fluid">
    <div class="row">
<?php
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_per_page = -1; 
$args = array(
    'post_type' => 'footer',
    'orderby' => 'date',
    'order' => 'ASC', //ASC = ascending order from lowest to highest values 
    'paged' => $paged,
    'post_per_page' => $post_per_page
);
$wp_query = new WP_Query($args);

if(have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

    

<?php endwhile; else : ?>
    <p class="text-center mb-0">Oops!, Lo sentimos, no hay contenido que mostrar</p>
<?php endif;
wp_reset_query();
$wp_query = $temp ?>
</div>
    </div>