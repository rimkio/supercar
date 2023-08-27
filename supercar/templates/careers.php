<?php
/*
*   Template Name: Careers
*/
get_header();

$careers_page_title = get_field('careers_page_title', get_the_ID());
$careers_bg_image = get_field('careers_bg_image', get_the_ID());
$careers_one_image = get_field('careers_one_image', get_the_ID());
$careers_one_title = get_field('careers_one_title', get_the_ID());
$careers_one_desc = get_field('careers_one_desc', get_the_ID());
$careers_two_title = get_field('careers_two_title', get_the_ID());
$careers_two_image = get_field('careers_two_image', get_the_ID());
$careers_two_desc = get_field('careers_two_desc', get_the_ID());
$careers_open_positions = get_field('careers_open_positions', get_the_ID());
?>
<div class="scroller js-scroller">
    <main role="main">
        <div class="utl-clearfix">
            <div id="" class="o-flexible-content o-flexible-content--spaced-below">
                <div class="o-hero o-hero--fill o-hero--v-centered o-hero--x-centered js-parallax js-parallax-background">
                    <div class="o-hero__background js-parallax-background__bg" style="background-image: url(<?= $careers_bg_image ?>);"></div>
                    <div class="o-hero__overlay"></div>
                    <div class="grid-container">
                        <div class="grid-x align-center">
                            <div class="cell small-12 medium-10">
                                <div class="o-hero__inner js-parallax__element" data-parallax-y="-10">
                                    <div class="o-hero__heading">
                                        <h2 class="js-animate-text">
                                            <div class="js-animate-text__line"><?= $careers_page_title ?> </div>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-home-hero__snap-scroll ">
                            <a href="#intro" class="c-control c-control--down js-scroll-to"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="intro" class="o-flexible-content o-flexible-content--spaced-below">
                <div class="c-sbs-image-content js-parallax c-sbs-image-content--normal">
                    <div class="grid-container container-narrow">
                        <div class="grid-x align-middle">
                            <div class="cell small-12 medium-6 ">
                                <div class="c-sbs-image-content__image js-animated__element_left">
                                    <img alt="" src="<?= $careers_one_image ?>" class="utl-transition-cp lazyloaded">
                                </div>
                            </div>
                            <div class="cell small-12 medium-6 ">
                                <div class="c-sbs-image-content__content">
                                    <div class="c-sbs-image-content__heading align-left">
                                        <h2 class="js-animate-text">
                                            <div class="js-animate-text__line"><?= $careers_one_title ?></div>
                                        </h2>
                                    </div>
                                    <div class="c-sbs-image-content__copy js-animated__element_right_copy spacing-vertical">
                                        <?= $careers_one_desc ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="" class="o-flexible-content o-flexible-content--flush">
                <div class="c-sbs-image-content js-parallax c-sbs-image-content--flipped">
                    <div class="grid-container container-narrow">
                        <div class="grid-x align-middle">
                            <div class="cell small-12 medium-6 medium-order-2">
                                <div class="c-sbs-image-content__image js-animated__element_right" style="opacity: 0.5; visibility: inherit; transform: translate(-150px, 0px);">
                                    <img alt="" src="<?= $careers_two_image ?>" class="utl-transition-cp lazyloaded">
                                </div>
                            </div>
                            <div class="cell small-12 medium-6 medium-order-1">
                                <div class="c-sbs-image-content__content">
                                    <div class="c-sbs-image-content__heading align-left">
                                        <h2 class="js-animate-text">
                                            <div class="js-animate-text__line"><?= $careers_two_title ?></div>
                                        </h2>
                                    </div>
                                    <div class="c-sbs-image-content__copy js-animated__element_left_copy spacing-vertical" style="opacity: 0.5; visibility: inherit; transform: translate(90px, 0px); top: 96px;">
                                        <?= $careers_two_desc ?>

                                        <div class="grid-x align-center js-animate-button">
                                            <a href="/contact/?enquiry=Careers" target="" class="o-featured-text__cta c-button c-button--alpha  js-contact-canvas "><span>Apply</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="" class="o-flexible-content o-flexible-content--flush">
                <div class="o-hero o-hero--intro">
                    <div class="grid-container">
                        <div class="grid-x align-center">
                            <div class="cell small-12 medium-10 large-8">
                                <div class="o-hero__inner js-parallax__element" data-parallax-y="-10">
                                    <div class="o-hero__heading">
                                        <h3 class="js-animate-text">
                                            <div class="js-animate-text__line">Current vacancies </div>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="" class="o-flexible-content ">
                <div class="c-faq-accordion s-foundation-accordion">
                    <div class="grid-container">
                        <div class="c-faq-accordion__inner">
                            <div class="grid-container full">
                                <div class="grid grid-x">
                                    <div class="cell small-12 large-3">
                                        <ul class="c-faq-accordion__tabs tabs" data-tabs="xdxv3w-tabs" id="faq-tabs" role="tablist">
                                            <li class="c-faq-accordion__category tabs-title is-active" role="presentation">
                                                <a href="#1" aria-selected="true" role="tab" aria-controls="1" id="1-label" tabindex="0">Open positions </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cell small-12 large-auto">
                                        <div class="c-faq-accordion__tabs-content" data-tabs-content="faq-tabs">
                                            <div class="c-faq-accordion__tab-panel tabs-panel s-foundation-tabs" id="1" role="tabpanel" aria-labelledby="1-label">
                                                <?php
                                                if ($careers_open_positions) {
                                                    echo '<ul class="c-faq-accordion__accordion accordion" data-accordion="q3ftru-accordion">';
                                                    foreach ($careers_open_positions as $key => $job) {
                                                        $job_title = $job['job_title'];
                                                        $job_description = $job['job_description'];
                                                        echo ' <li class="c-faq-accordion__question accordion-item" data-accordion-item="">';
                                                        echo '<a href="#" accordion-title="" class="c-faq-accordion__title accordion-title" aria-expanded="false" aria-controls="' . $key . '-accordion" id="' . $key . '-accordion-label">' . $job_title . '</a>';
                                                        echo '<div class="c-faq-accordion__answer accordion-content" data-tab-content="" role="region" aria-labelledby="' . $key . '-accordion-label" aria-hidden="true" id="' . $key . '-accordion" style="display: none;">';
                                                        echo $job_description;
                                                        echo '<p><a class="js-contact-canvas" href="/contact/?enquiry=Careers">Apply Here</a></p>';
                                                        echo '</div>';
                                                        echo '</li>';
                                                    }
                                                    echo '</ul>';
                                                }
                                                ?>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php get_template_part('template-parts/global', 'signup'); ?>
</div>

<?php get_footer();
