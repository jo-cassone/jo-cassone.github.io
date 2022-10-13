<div class="row g-0 position-relative mt-5">
<?php
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_per_page = -1; 
$args = array(
    'post_type' => 'featured',
    'orderby' => 'date',
    'order' => 'ASC',
    'paged' => $paged,
    'post_per_page' => $post_per_page
);
$wp_query = new WP_Query($args);

if(have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

    <div class="g-0 col-lg-4 col-sm-6 px-0 position-relative" style="width: 275px; left: 0px; top: 0px;">
        <div class="single-portfolio " style="width: 275px;">
            <div class="position-relative overflow-hidden">
                <?php smash_post_thumbnail(); ?>
                <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                    <div class="portfolio-content">
                        <div class="portfolio-icon">
                            <a href="#">
                                <i class="fa-solid fa-magnifying-glass-plus"></i>
                            </a>
                        </div>
                        <div class="portfolio-icon">
                            <a href="#">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

<?php endwhile; else : ?>
    <p class="text-center mb-0">Oops!, Lo sentimos, no hay contenido que mostrar</p>
<?php endif;
wp_reset_query();
$wp_query = $temp ?>
</div>
