<div id="pricing" class="row justify-content-center">
<?php
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_per_page = -1; 
$args = array(
    'post_type' => 'pricing',
    'orderby' => 'date',
    'order' => 'ASC',
    'paged' => $paged,
    'post_per_page' => $post_per_page
);
$wp_query = new WP_Query($args);

if(have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

    <div class="col-lg-4 col-md-7 col-sm-9">
        <div class="card pricing-style mt-5" style="width:350px;">
            <div class="card-body text-center">
                <span class="price-img"><?php smash_post_thumbnail(); ?></span>
                <div class="pricing-header text-center">
                    <h5 class="sub-title"><?php echo get_the_title(); ?></h5>
                    <p class="month"><span class="price"><?php echo the_field('plan_price'); ?></span>/month</p>
                </div>
                <div class="pricing-list">
                    <ul>
                        <li><?php echo the_field('pricing_list_1'); ?></li>
                        <li><?php echo the_field('pricing_list_2') ?></li>
                    </ul>
                </div>
                <div class="pricing-btn text-center">
                    <a class="main-btn rounded-one" href="#">GET STARTED</a>
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