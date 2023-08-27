<?php
/*
*   Template Name: Contact
*/
get_header();

$contact_title = get_field('contact_title', get_the_ID());
$contact_button = get_field('contact_button', get_the_ID());
$contact_bg_image = get_field('contact_bg_image', get_the_ID());
$contact_address = get_field('contact_address', get_the_ID());
$link_map = get_field('link_map', get_the_ID());
$contact_phone = get_field('contact_phone', get_the_ID());
$monday = get_field('monday', get_the_ID());
$tuesday = get_field('tuesday', get_the_ID());
$wednesday = get_field('wednesday', get_the_ID());
$thursday = get_field('thursday', get_the_ID());
$friday = get_field('friday', get_the_ID());
$saturday = get_field('saturday', get_the_ID());
$sunday = get_field('sunday', get_the_ID());
$social_footer = get_field('social_footer', 'options');
?>
<div class="scroller js-scroller">
    <main role="main">
        <div class="utl-clearfix">
            <div id="" class="o-flexible-content o-flexible-content--flush">
                <div class="o-hero o-hero--fill o-hero--v-centered o-hero--x-centered js-parallax js-parallax-background">
                    <div class="o-hero__background js-parallax-background__bg" style="background-image: url(<?= $contact_bg_image ?>);"></div>
                    <div class="o-hero__overlay"></div>
                    <div class="grid-container">
                        <div class="grid-x align-center">
                            <div class="cell small-12 medium-10">
                                <div class="o-hero__inner js-parallax__element" data-parallax-y="-10">
                                    <div class="o-hero__heading">
                                        <h1 class="js-animate-text">
                                            <div class="js-animate-text__line"><?= $contact_title ?></div>
                                        </h1>
                                    </div>
                                    <?php if ($contact_button) { ?>
                                        <div class="o-hero__cta">
                                            <a class="c-button--alpha js-contact-canvas" href="<?= $contact_button['url'] ?>" target="<?= $contact_button['target'] ?>">
                                                <span><?= $contact_button['title'] ?></span>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="c-home-hero__snap-scroll ">
                            <a href="#address" class="c-control c-control--down js-scroll-to"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="address" class="o-contact">
                <div class="o-contact__left">
                    <div class="grid-container">
                        <div class="grid-x">
                            <div class="cell small-12 medium-6">
                                <div class="o-contact__location">
                                    <span><?= $contact_address ?></span>
                                    <span>
                                        <a rel="noopener" target="_blank" href="<?= $link_map ?>">
                                            DIRECTIONS <i class="fal fa-map-marker-alt"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="cell small-12 medium-6 grid-y align-justify">
                                <div class="cell o-contact__phone">
                                    <span>
                                        CALL US ON </span>
                                    <span>
                                        <a href="tel:<?= $contact_phone ?>"><?= $contact_phone ?></a>
                                    </span>
                                </div>
                                <div class="o-contact__email">
                                    <span> EMAIL US </span>
                                    <div class="o-contact__button">
                                        <a href="?enquiry=General" class="c-button c-button--alpha js-contact-canvas">
                                            <span> Enquire </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="cell o-contact__social">
                                    <span> FOLLOW </span>
                                    <ul class="c-social-list">
                                        <?= $social_footer ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="o-contact__right">
                    <div class="o-contact__opening-times">
                        <h4> OPENING TIMES </h4>
                        <ul class="c-opening-times">
                            <li class="c-opening-times__li">
                                <div class="c-opening-times__day"> Monday </div>
                                <span class="c-opening-times__range"><?=$monday?></span>
                            </li>
                            <li class="c-opening-times__li">
                                <div class="c-opening-times__day"> Tuesday </div>
                                <span class="c-opening-times__range"><?=$tuesday?></span>
                            </li>
                            <li class="c-opening-times__li">
                                <div class="c-opening-times__day"> Wednesday </div>
                                <span class="c-opening-times__range"><?=$wednesday?></span>
                            </li>
                            <li class="c-opening-times__li">
                                <div class="c-opening-times__day"> Thursday </div>
                                <span class="c-opening-times__range"><?=$thursday?></span>
                            </li>
                            <li class="c-opening-times__li">
                                <div class="c-opening-times__day"> Friday </div>
                                <span class="c-opening-times__range"><?=$friday?></span>
                            </li>
                            <li class="c-opening-times__li">
                                <div class="c-opening-times__day"> Saturday </div>
                                <span class="c-opening-times__range"><?=$saturday?></span>
                            </li>
                            <li class="c-opening-times__li">
                                <div class="c-opening-times__day"> Sunday </div>
                                <span class="c-opening-times__range"><?=$sunday?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php get_template_part('template-parts/global', 'signup'); ?>
</div>

<?php get_footer();
