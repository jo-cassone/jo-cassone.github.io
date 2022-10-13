<div class="testimonial-content-slider slick-slider">
<button class="carousel-control-prev slick-arrow d-block" type="button" data-bs-target="#carouselTestimonial" data-bs-slide="prev">
    <i class="fa-solid fa-left-long"></i>
    <span class="visually-hidden">Previous</span>
</button>
<div class="slick-list">
<div id="carouselTestimonial" class="carousel slide col-12" data-bs-ride="carousel" data-bs-touch="true">

<div class="carousel-inner">
    <?php 
    $active = true;
    $temp = $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $post_per_page = 5; // -1 shows all posts
    $args = array(
        'post_type' => 'testimonials',
        'orderby' => 'date',
        'order' => 'ASC',
        'paged' => $paged,
        'posts_per_page' => $post_per_page
    );
    $wp_query = new WP_Query($args);

    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="carousel-item single-testimonial <?php if ($active) { print("active"); }; ?>">
            <?php $active = false; ?>
            <div class="testimonial-text">
                <p class="text"><?php echo the_field('comentario'); ?></p>
            </div>
            <div class="testimonial-author d-sm-flex justify-content-between">
                <div class="author-info d-flex align-items-center">
                    <div class="author-image">
                        <?php smash_post_thumbnail(); ?>
                    </div>
                    <div class="author-name">
                        <h5 class="name"><?php echo get_the_title(); ?></h5>
                        <span class="sub-title"><?php echo get_the_excerpt(); ?></span>
                    </div>
                </div>
                <div class="author-review">
                    <ul class="star">
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <p class="review"><?php echo the_field('reviews'); ?></p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif;
    wp_reset_query();
    $wp_query = $temp ?>
</div>
</div>
</div>
<button class="carousel-control-next slick-arrow next d-block" type="button" data-bs-target="#carouselTestimonial" data-bs-slide="next">
    <i class="fa-solid fa-right-long"></i>
    <span class="visually-hidden">Next</span>
</button>
</div>