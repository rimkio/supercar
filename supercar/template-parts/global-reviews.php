<?php
$args = array(
    'post_type' => 'customer-reviews',
    'post_status' => 'publish',
    'posts_per_page' => 6,

);
$the_query = new WP_Query($args);
?>
<div data-off-canvas="reviews" class="c-off-canvas js-off-canvas is-transition-overlap is-closed" aria-hidden="true">
    <div class="c-off-canvas__overlay js-off-canvas__overlay"></div>
    <div class="c-off-canvas__reviews ">
        <a href="#" class="c-off-canvas__close js-off-canvas__close-reviews">
            <div class="c-menu-toggle__inner">
                <span class="c-menu-toggle__line c-menu-toggle__line--short"></span>
                <span class="c-menu-toggle__line c-menu-toggle__line--long"></span>
            </div>
        </a>
        <div class="c-off-canvas__form js-off-canvas__scroller">
            <div class="c-off-canvas__logo show-for-small-only">
                <img alt="trustpilot logo" src="https://cdn.trustpilot.net/brand-assets/4.1.0/logo-white.svg">
            </div>
            <div class="c-off-canvas__heading">Excellent
                <div class="c-off-canvas__logo show-for-medium">
                    <img alt="trustpilot logo" src="https://cdn.trustpilot.net/brand-assets/4.1.0/logo-white.svg" />
                </div>
            </div>
            <div class="c-off-canvas__sub-container grid-x">
                <div class="c-off-canvas__stars-container cell small-6">
                    <div class="c-off-canvas__stars"></div>
                </div>
                <div class="c-off-canvas__all-reviews cell small-6">
                    <a href="https://www.trustpilot.com/" target="_blank">All Reviews</a>
                </div>
            </div>
            <div class="grid-x">
                <div class="cell small-6"><a href="#" class="button left" id="prev">Prev</a></div>
                <div class="cell small-6"><a href="#" class="button right" id="next">Next</a></div>
            </div>
            <div class="c-off-canvas__reviews-body">
                <?php
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                ?>
                        <div class="c-off-canvas__card">
                            <div class="grid-x">
                                <div class="c-off-canvas__meta cell small-12 cell medium-8">
                                    <div class="c-off-canvas__date"><span class="date"><?= get_the_title() ?></span>, <span class="name"> <?= get_the_date('dS F') ?></span></div>
                                    <div class="c-off-canvas__review"><?= get_the_content() ?></div>
                                </div>
                                <div class="cell small-12 medium-4">
                                    <div class="review-cell">
                                        <div class="review-container" style="width:100">
                                            <div class="c-off-canvas__stars"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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