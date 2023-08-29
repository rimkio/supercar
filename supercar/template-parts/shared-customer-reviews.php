<?php

$args = array(
    'post_type' => 'customer-reviews',
    'post_status' => 'publish',
    'posts_per_page' => 6,

);
$the_query = new WP_Query($args);
?>
<div id="reviews" class="c-trustpilot-slider js-trustpilot-slider">
    <div class="grid-container">
        <div class="grid-x align-middle">
            <div class="cell small-shrink">
                <div class="c-trustpilot-slider__sub-title">
                    <div class="c-sub-title c-sub-title--line"> CUSTOMER REVIEWS </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid-container full">
        <div class="grid-x">
            <div class="cell small-12">
                <div id="reviewsCanvasAPIs" class="c-trustpilot-slider__slider-container">
                    <div class="swiper-container js-trustpilot-slider__slider_api">
                        <div class="swiper-wrapper">
                            <?php
                            if ($the_query->have_posts()) {
                                while ($the_query->have_posts()) {
                                    $the_query->the_post();
                            ?>
                                    <div class="swiper-slide">
                                        <a data-id="64d24f8aaeef1bf602525d0b" class="c-trustpilot-slider__slide js-review-single">
                                            <h2 class="c-trustpilot-slider__heading">
                                                <?= get_the_content() ?>
                                            </h2>

                                            <span class="c-trustpilot-slider__author">
                                                <?= get_the_title() ?>
                                            </span>

                                            <span class="c-trustpilot-slider__date">
                                                <?= get_the_date('dS F') ?>
                                            </span>

                                            <span class="c-trustpilot-slider__rating">
                                                <span class="c-trustpilot-stars-container" style="width:100%">
                                                    <span class="c-trustpilot-stars"></span>
                                                </span>
                                            </span>
                                        </a>
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
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>