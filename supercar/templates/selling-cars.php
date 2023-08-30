<?php
/*
*   Template Name: Selling Cars
*/
get_header();
$selling_title = get_field('selling_title', get_the_ID());
$selling_bg_image = get_field('selling_bg_image', get_the_ID());
$selling_ov_heading = get_field('selling_ov_heading', get_the_ID());
$selling_ov_button = get_field('selling_ov_button', get_the_ID());
$selling_ov_carousel = get_field('selling_ov_carousel', get_the_ID());
$selling_bro_bg_img = get_field('selling_bro_bg_img', get_the_ID());
$selling_bro_heading = get_field('selling_bro_heading', get_the_ID());
$selling_bro_desc = get_field('selling_bro_desc', get_the_ID());
$selling_bro_button = get_field('selling_bro_button', get_the_ID());
$selling_pax_heading = get_field('selling_pax_heading', get_the_ID());
$selling_pax_desc = get_field('selling_pax_desc', get_the_ID());
$selling_pax_button = get_field('selling_pax_button', get_the_ID());
$selling_enquire_bg_img = get_field('selling_enquire_bg_img', get_the_ID());
$selling_enquire_heading = get_field('selling_enquire_heading', get_the_ID());
$selling_enquire_button = get_field('selling_enquire_button', get_the_ID());
?>

<div class="scroller js-scroller" data-scrollbar="true" tabindex="-1">
    <div class="scroll-content">
        <main role="main">
            <div class="utl-clearfix">
                <div id="" class="o-flexible-content o-flexible-content--flush">
                    <div class="o-hero o-hero--fill o-hero--v-centered o-hero--x-centered js-parallax js-parallax-background">
                        <div class="o-hero__background js-parallax-background__bg" style="background-image: url('<?= $selling_bg_image ?>');">
                        </div>
                        <div style="position: absolute; width: 100%; height: 100%; background-color: #000000; opacity: 0.25;" class="o-hero__overlay"></div>
                        <div class="grid-container">
                            <div class="grid-x align-center">
                                <div class="cell small-12 medium-10">
                                    <div class="o-hero__inner js-parallax__element" data-parallax-y="-10">
                                        <div class="o-hero__heading">
                                            <h1 class="js-animate-text">
                                                <div class="js-animate-text__line"><?= $selling_title ?></div>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-home-hero__snap-scroll ">
                                <a href="#overview" class="c-control c-control--down js-scroll-to"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="overview" class="o-flexible-content o-flexible-content--flush">
                    <div class="o-hero o-hero--fill o-hero--v-centered o-hero--x-centered js-parallax o-hero--half-height">
                        <div class="o-hero__background js-parallax-background__bg" style="background-image: url('')"> </div>
                        <div class="grid-container">
                            <div class="grid-x align-center">
                                <div class="cell small-12 medium-10">
                                    <div class="o-hero__inner js-parallax__element" data-parallax-y="-10">
                                        <div class="o-hero__heading">
                                            <h2 class="js-split-text c-split-text">
                                                <span class="js-split-text__text c-split-text__text">
                                                    <?= $selling_ov_heading ?>
                                                </span>
                                            </h2>
                                        </div>
                                        <?php if ($selling_ov_button) { ?>
                                            <div class="o-hero__cta">
                                                <a class="c-button--alpha js-contact-canvas" href="<?= $selling_ov_button['url'] ?>">
                                                    <span> <?= $selling_ov_button['title'] ?> </span>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="" class="o-flexible-content o-flexible-content--spaced-below">
                    <div class="c-content-slider js-content-slider js-parallax">
                        <div class="c-content-slider__slider-container">
                            <div class="swiper-container js-content-slider__slider swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-autoheight">
                                <?php
                                if ($selling_ov_carousel) {
                                    $total = count($selling_ov_carousel);
                                    $t_item = ($total < 10) ? '0' . $total : $total;
                                ?>
                                    <div class="swiper-wrapper" id="swiper-wrapper-98d7736f4b827892" aria-live="polite">
                                        <?php
                                        foreach ($selling_ov_carousel as $key => $carousel) {
                                            $item = ($key < 10) ? '0' . $key + 1 : $key + 1;
                                            $image_left = $carousel['image_left'];
                                            $image_right = $carousel['image_right'];
                                            $title = $carousel['title'];
                                            $content = $carousel['content'];
                                        ?>
                                            <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 3">
                                                <div class="c-content-slider__slide">
                                                    <div class="grid-container c-content-slider__container">
                                                        <div class="grid-x">
                                                            <div class="cell small-12 medium-4 large-shrink">
                                                                <div class="c-content-slider__image-one js-parallax__element js-animated__element" data-parallax-y="-30">
                                                                    <img alt="" src="<?= $image_left ?>" />
                                                                </div>
                                                            </div>
                                                            <div class="cell medium-5">
                                                                <div class="c-content-slider__content">
                                                                    <h3 class="c-content-slider__heading"> <?= $title ?></h3>
                                                                    <div class="c-content-slider__copy ">
                                                                        <p><?= $content ?></p>
                                                                    </div>
                                                                    <div class="c-content-slider__control">
                                                                        <a class="c-control c-control--left js-content-slider__prev"></a>
                                                                        <a class="c-control c-control--right js-content-slider__next"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cell medium-auto">
                                                                <div class="c-content-slider__counter">
                                                                    <span class="c-content-slider__slider-number c-content-slider__slider-number--left js-content-slider__counter"><?= $item ?></span>
                                                                    <span class="c-content-slider__slider-number c-content-slider__slider-number--right"><?= $t_item ?></span>
                                                                </div>
                                                                <div class="c-content-slider__image-two">
                                                                    <img alt="" src="<?= $image_right ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                <?php
                                }
                                ?>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="brokerage-part-ex" class="o-flexible-content ">
                    <div class="o-hero o-hero--tabbed js-parallax js-parallax-background s-foundation-tabs">
                        <div class="o-hero__background js-parallax-background__bg" style="background-image: url('<?= $selling_bro_bg_img ?>');">
                        </div>
                        <div class="o-hero__overlay"></div>
                        <ul class="o-hero__tabs tabs js-animate-text__line" data-tabs="nbr3uh-tabs" id="hero-tabs" role="tablist">
                            <li class="tabs-title is-active" role="presentation">
                                <a href="#tab-1" aria-selected="true" role="tab" aria-controls="tab-1" id="tab-1-label" tabindex="0">Brokerage </a>
                            </li>
                            <li class="tabs-title " role="presentation">
                                <a href="#tab-2" data-tabs-target="tab-2" role="tab" aria-controls="tab-2" aria-selected="false" id="tab-2-label" tabindex="-1">Part Exchange </a>
                            </li>
                        </ul>
                        <div class="o-hero__tab-content tabs-content" data-tabs-content="hero-tabs">
                            <div class="o-hero__panel tabs-panel is-active" id="tab-1" role="tabpanel" aria-labelledby="tab-1-label">
                                <div class="grid-container">
                                    <div class="grid-x">
                                        <div class="cell small-12 medium-6">
                                            <div class="o-hero__inner js-parallax__element" data-parallax-y="-40" data-mobile-parallax-y="-10">
                                                <div class="o-hero__heading">
                                                    <h2 class="js-animate-text">
                                                        <div class="js-animate-text__line"><?= $selling_bro_heading ?></div>
                                                    </h2>
                                                </div>
                                                <div class="o-hero__copy">
                                                    <p><?= $selling_bro_desc ?></p>
                                                </div>
                                                <?php if ($selling_bro_button) { ?>
                                                    <div class="o-hero__cta">
                                                        <a class="c-button--alpha js-contact-canvas" href="<?= $selling_bro_button['url'] ?>">
                                                            <span> <?= $selling_bro_button['title'] ?></span>
                                                        </a>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="o-hero__panel tabs-panel " id="tab-2" role="tabpanel" aria-labelledby="tab-2-label" aria-hidden="true">
                                <div class="grid-container">
                                    <div class="grid-x">
                                        <div class="cell small-12 medium-6">
                                            <div class="o-hero__inner js-parallax__element" data-parallax-y="-40" data-mobile-parallax-y="-10">
                                                <div class="o-hero__heading">
                                                    <h2 class="js-animate-text">
                                                        <div class="js-animate-text__line"><?= $selling_pax_heading ?></div>
                                                    </h2>
                                                </div>
                                                <div class="o-hero__copy">
                                                    <p><?= $selling_pax_desc ?></p>
                                                </div>
                                                <?php if ($selling_pax_button) { ?>
                                                    <div class="o-hero__cta">
                                                        <a class="c-button--alpha js-contact-canvas" href="<?= $selling_bro_button['url'] ?>">
                                                            <span> <?= $selling_pax_button['title'] ?></span>
                                                        </a>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php get_template_part('template-parts/shared', 'customer-reviews'); ?>

                <div id="enquire" class="o-flexible-content o-flexible-content--flush">
                    <div class="o-hero o-hero--fill o-hero--v-centered o-hero--x-centered js-parallax o-hero--half-height">
                        <div class="o-hero__background js-parallax-background__bg" style="background-image: url('<?= $selling_enquire_bg_img ?>')"></div>
                        <div class="o-hero__overlay"></div>
                        <div class="grid-container">
                            <div class="grid-x align-center">
                                <div class="cell small-12 medium-10">
                                    <div class="o-hero__inner js-parallax__element" data-parallax-y="-10">
                                        <div class="o-hero__heading">
                                            <h2 class="js-animate-text">
                                                <div class="js-animate-text__line"><?= $selling_enquire_heading ?></div>
                                            </h2>
                                        </div>
                                        <?php if ($selling_enquire_button) { ?>
                                            <div class="o-hero__cta">
                                                <a class="c-button--alpha js-contact-canvas" href="<?= $selling_enquire_button['url'] ?>">
                                                    <span><?= $selling_enquire_button['title'] ?></span>
                                                </a>
                                            </div>
                                        <?php } ?>
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

</div>
<?php get_template_part('template-parts/global', 'your-sell'); ?>
<?php get_footer();
