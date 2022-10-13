<div id="carousel" class="carousel slide col-12" data-bs-ride="carousel" >
    <ol class="carousel-indicators">
        <li data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
        <li data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></li>
        <li data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></li>
    </ol>
    <div class="carousel-inner">
        <?php 
		$active = true;
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 5; // -1 shows all posts
        $args = array(
            'post_type' => 'carousel',
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
        $wp_query = new WP_Query($args);

        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

            <div class="carousel-item <?php if ($active) { print("active"); }; ?>">
                    <div class="container bg-carousel text-black">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title"><?php echo get_the_title(); ?></h1>
                                    <p class="text"><?php echo get_the_excerpt(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $active = false; ?>
                        <div class="slider-image-box d-none d-lg-flex align-items-end">
                            <div class="slider-image">
                                <!--post thumbnail-->
                                <?php 
            					$image = get_field('img_carousel');
            					if( !empty( $image ) ): ?>
            					<img class="mt-4" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        					<?php endif; ?>
                            </div>
                        </div>  
            </div>
            <?php endwhile; ?>

        <?php endif;
        wp_reset_query();
        $wp_query = $temp ?>

    </div>
</div>