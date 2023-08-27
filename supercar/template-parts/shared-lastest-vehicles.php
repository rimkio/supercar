<?php
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 10,
        'post_status'    => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $i = 0;
        while ($query->have_posts()) {
            $query->the_post();
            $title = get_the_title();
            $product = wc_get_product(get_the_ID());
            // Retrieve the "_price" custom field value
            $price = $product->get_price();
            $image = get_the_post_thumbnail(get_the_ID(), 'full');
            $count = $i + 1;
            ?>
            <div class="swiper-slide" data-swiper-slide-index="<?= $count; ?>" role="group" aria-label="<?= $count; ?> / 10" style="width: 414px; margin-right: 40px;">
                <div class="c-posts-slider__slide">
                    <a href="<?php echo the_permalink(); ?>" class="c-vehicle c-vehicle--listed js-static--listed js-cursor-more js-tilt" style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                        <div class="c-vehicle__image">
                            <?php echo $image; ?>

                        </div>
                        <div class="c-vehicle__detail">
                            <div class="grid-container full">
                                <div class="grid grid-x align-justify">
                                    <div class="cell small-7">
                                        <h5 class="c-vehicle__heading">
                                            <?php echo $title; ?> </h5>
                                    </div>
                                    <div class="cell small-5">
                                                            <span class="c-vehicle__price">
                                                                $ <?php echo $price; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata();
    }
?>