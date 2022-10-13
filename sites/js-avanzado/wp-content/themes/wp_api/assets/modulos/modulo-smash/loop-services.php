<div class="row justify-content-center">
<?php
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_per_page = -1; 
$args = array(
    'post_type' => 'services',
    'orderby' => 'date',
    'order' => 'ASC',
    'paged' => $paged,
    'post_per_page' => $post_per_page
);
$wp_query = new WP_Query($args);

if(have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

    <div class="col-lg-4 col-md-7 col-sm-9">
        <div class="single-features mt-5" style="width: 350px; height: 311px;">
            <div class="features-title-icon d-flex justify-content-between">
                <h4 class="features-title"><a href="#"><?php echo get_the_title(); ?></a></h4>
                <div class="features-icon"><?php smash_post_thumbnail(); ?></div>
            </div>
            <div class="features-content">
                <p class="text"><?php echo get_the_excerpt(); ?></p>
                <a class="features-btn" href="<?php the_permalink(); ?>" class="card-link"> LEARN MORE</a>
            </div>
        </div>
    </div>

<?php endwhile; else : ?>
    <p class="text-center mb-0">Oops!, Lo sentimos, no hay contenido que mostrar</p>
<?php endif;
wp_reset_query();
$wp_query = $temp ?>
</div>