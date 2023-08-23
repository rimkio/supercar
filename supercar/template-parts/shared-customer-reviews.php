<div id="" class="c-trustpilot-slider js-trustpilot-slider section-review">
    <div class="grid-container">
        <div class="grid-x align-middle">
            <div class="cell small-shrink">
                <div class="c-trustpilot-slider__sub-title">
                    <h2 class="js-animate-text"><span>CUSTOMER REVIEWS</span></h2>
                </div>
                <div class="wrapper__reviews">
                    <?php
                    $args = array(
                        'post_type' => 'customer-reviews',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,

                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            $avatar = get_field('avatar', get_the_ID());
                            $rating = get_field('rating_stars', get_the_ID());
                    ?>
                            <div class="item-review">
                                <img src="<?= $avatar ?>" alt="<?= get_the_title() ?>">
                                <h3><?= get_the_title() ?></h3>
                                <?php  reviews_rating_star($rating) ?>
                                <p><?= get_the_content() ?></p>
                            </div>
                    <?php
                        }
                    } else {
                        esc_html_e('Sorry, no posts matched your criteria.');
                    }
                    // Restore original Post Data.
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>