<div class="row">
<?php
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_per_page = -1; 
$args = array(
    'post_type' => 'meet',
    'orderby' => 'date',
    'order' => 'ASC', //ASC = ascending order from lowest to highest values (1,2,3,4 for example.)
    'paged' => $paged,
    'post_per_page' => $post_per_page
);
$wp_query = new WP_Query($args);

if(have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    <div class="col-lg-4 col-sm-6">
        <div class="team-style mt-4">
            <div class="team-image">
                <?php smash_post_thumbnail(); ?>
            </div>
            <div class="team-content text-center">
                <div class="team-social">
                    <ul class="social">
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <h4 class="team-name"><a href="#"><?php echo get_the_title(); ?></a></h4>
                <p class="sub-title"><?php echo get_the_excerpt(); ?></p>
            </div>
        </div>
    </div>
<?php endwhile; else : ?>
    <p class="text-center mb-0">Oops!, Lo sentimos, no hay contenido que mostrar</p>
<?php endif;
wp_reset_query();
$wp_query = $temp ?>
</div>
