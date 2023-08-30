<?php
/*
*   Template Name: About
*/
get_header();
$ab_bg_image = get_field('ab_bg_image', get_the_ID());
$ab_heading = get_field('ab_heading', get_the_ID());
$text_introduction = get_field('text_introduction', get_the_ID());

$exac_image = get_field('exac_image', get_the_ID());
$exac_title = get_field('exac_title', get_the_ID());
$exac_desc = get_field('exac_desc', get_the_ID());

$st_image = get_field('st_image', get_the_ID());
$st_title = get_field('st_title', get_the_ID());
$st_desc = get_field('st_desc', get_the_ID());

$mtt_image = get_field('mtt_image', get_the_ID());
$mtt_title = get_field('mtt_title', get_the_ID());
$mtt_button = get_field('mtt_button', get_the_ID());
$mtt_content = get_field('mtt_content', get_the_ID());

$hc_image = get_field('hc_image', get_the_ID());
$hc_title = get_field('hc_title', get_the_ID());
$hc_description = get_field('hc_description', get_the_ID());
$hc_button = get_field('hc_button', get_the_ID());

$tu_bg_video = get_field('tu_bg_video', get_the_ID());
$tu_title_1 = get_field('tu_title_1', get_the_ID());
$tu_description = get_field('tu_description', get_the_ID());
$tu_title_2 = get_field('tu_title_2', get_the_ID());
$tu_title_3 = get_field('tu_title_3', get_the_ID());
$tu_video = get_field('tu_video', get_the_ID());
?>
<div class="scroller js-scroller">
    <main role="main">
        <div class="utl-clearfix">
            <div id="" class="o-flexible-content o-flexible-content--spaced-below">
                <div class="o-hero o-hero--fill o-hero--v-centered o-hero--x-centered js-parallax js-parallax-background">
                    <div class="o-hero__background js-parallax-background__bg" style="background-image: url('<?= $ab_bg_image ?>');"></div>
                    <div class="grid-container">
                        <div class="grid-x align-center">
                            <div class="cell small-12 medium-10">
                                <div class="o-hero__inner js-parallax__element" data-parallax-y="-10">
                                    <div class="o-hero__heading">
                                        <h1 class="js-animate-text">
                                            <div class="js-animate-text__line"><?= $ab_heading ?></div>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-home-hero__snap-scroll ">
                            <a href="#introduction" class="c-control c-control--down js-scroll-to"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="introduction" class="o-flexible-content o-featured-text o-flexible-content--spaced-below">
                <div class="grid-container">
                    <div class="grid-x align-center">
                        <div class="cell small-12 medium-10">
                            <div id="highlightText" class="o-featured-text__highlighted-copy js-split-text c-split-text">
                                <div class="c-split-text__text js-split-text__text">
                                    <?= $text_introduction ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="about-alexanders" class="o-flexible-content o-flexible-content--spaced-below">
                <div class="c-sbs-image-content js-parallax c-sbs-image-content--flipped">
                    <div class="grid-container container-wide">
                        <div class="grid-x align-middle">
                            <div class="cell small-12 medium-6 medium-order-2">
                                <div class="c-sbs-image-content__image js-animated__element_right">
                                    <img width="2048" height="1366" src="<?= $exac_image ?>" sizes="(max-width: 2048px) 100vw, 2048px">
                                </div>
                            </div>
                            <div class="cell small-12 medium-6 medium-order-1">
                                <div class="c-sbs-image-content__content">
                                    <div class="c-sbs-image-content__heading align-center">
                                        <h2 class="js-animate-text">
                                            <div class="js-animate-text__line"><span><?= $exac_title ?></span></div>
                                        </h2>
                                    </div>
                                    <div class="c-sbs-image-content__copy js-animated__element_left_copy spacing-vertical">
                                        <?= $exac_desc ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="" class="o-flexible-content o-flexible-content--spaced-below">
                <div class="c-sbs-image-content js-parallax c-sbs-image-content--normal">
                    <div class="grid-container container-wide">
                        <div class="grid-x align-middle">
                            <div class="cell small-12 medium-6 ">
                                <div class="c-sbs-image-content__image js-animated__element_left">
                                    <img width="2048" height="1366" src="<?= $st_image ?>" sizes="(max-width: 2048px) 100vw, 2048px">
                                </div>
                            </div>
                            <div class="cell small-12 medium-6 ">
                                <div class="c-sbs-image-content__content">
                                    <div class="c-sbs-image-content__heading align-center">
                                        <h2 class="js-animate-text">
                                            <div class="js-animate-text__line"><span><?= $st_title ?></span></div>

                                        </h2>
                                    </div>
                                    <div class="c-sbs-image-content__copy js-animated__element_right_copy spacing-vertical" style="opacity: 0.5; visibility: inherit; transform: translate(-50px, 0px); top: 112px;">
                                        <?= $st_desc ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="meet-the-team" class="o-flexible-content o-flexible-content--spaced-below">
                <div class="c-sbs-image-content js-parallax c-sbs-image-content--flipped">
                    <div class="grid-container container-narrow">
                        <div class="grid-x align-middle">
                            <div class="cell small-12 medium-6 medium-order-2">
                                <div class="c-sbs-image-content__image js-animated__element_right">
                                    <img width="2048" height="1366" src="<?= $mtt_image ?>" sizes="(max-width: 2048px) 100vw, 2048px">
                                </div>
                            </div>
                            <div class="cell small-12 medium-6 medium-order-1">
                                <div class="c-sbs-image-content__content">
                                    <div class="c-sbs-image-content__heading align-left">
                                        <h2 class="js-animate-text">
                                            <div class="js-animate-text__line"><span><?= $mtt_title ?> </span></div>
                                        </h2>
                                    </div>
                                    <div class="c-sbs-image-content__copy js-animated__element_left_copy">
                                        <?= $mtt_content ?>
                                        <?php if ($mtt_button) { ?>
                                            <div class="grid-x align-center js-animate-button">
                                                <a class="o-featured-text__cta c-button c-button--alpha  js-meet-the-team__open "><span><?= $mtt_button['title'] ?></span></a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="" class="o-flexible-content o-flexible-content--spaced-below">
                <div class="c-sbs-image-content js-parallax c-sbs-image-content--normal">
                    <div class="grid-container container-narrow">
                        <div class="grid-x align-middle">
                            <div class="cell small-12 medium-6 ">
                                <div class="c-sbs-image-content__image js-animated__element_left">
                                    <img width="2560" height="1810" src="<?= $hc_image ?>" sizes="(max-width: 2560px) 100vw, 2560px">
                                </div>
                            </div>
                            <div class="cell small-12 medium-6 ">
                                <div class="c-sbs-image-content__content">
                                    <div class="c-sbs-image-content__heading align-center">
                                        <h2 class="js-animate-text">
                                            <div class="js-animate-text__line"><span><?= $hc_title ?></span></div>

                                        </h2>
                                    </div>
                                    <div class="c-sbs-image-content__copy js-animated__element_right_copy spacing-vertical">
                                        <?= $hc_description ?>
                                        <?php if ($hc_button) { ?>
                                            <div class="grid-x align-center js-animate-button">
                                                <a href="<?= $hc_button['url'] ?>" target="<?= $hc_button['target'] ?>" class="o-featured-text__cta c-button c-button--alpha "><span><?= $hc_button['title'] ?></span></a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="unseen" class="o-flexible-content o-flexible-content--flush">
                <div class="o-about-experience js-about-experience">
                    <div class="grid-container">
                        <div class="grid-x">
                            <div class="cell small-12 medium-6 medium-offset-2 s-about-experience__col-left">
                                <div class="o-about-experience__content">
                                    <div class="o-about-experience__content-inner">
                                        <div class="o-about-experience__title js-about-experience__title">
                                            <div class="o-about-experience__title-line"><?= $tu_title_1 ?></div>
                                        </div>
                                        <div class="o-about-experience__content-container">
                                            <div class="o-about-experience__content-block o-about-experience__content-block--medium js-about-experience__content-block">
                                                <?php
                                                if ($tu_description) {
                                                    $arr_desc = explode(". ", $tu_description);
                                                    $count_w = count($arr_desc);
                                                    foreach ($arr_desc as $k => $word) {
                                                        $dot = ($k == count($arr_desc) - 1) ? '' : '.';
                                                ?>
                                                        <span class="o-about-experience__content-block-highlight js-about-experience__content-block-highlight"><?= $word . $dot ?></span>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <div class="o-about-experience__content-block o-about-experience__content-block--large js-about-experience__content-block">
                                                <?php
                                                if ($tu_title_2) {
                                                    $arr_tu_title_2 = explode("-", $tu_title_2);
                                                    $count_w = count($arr_tu_title_2);
                                                    foreach ($arr_tu_title_2 as $k => $word) {
                                                ?>
                                                        <span class="o-about-experience__content-block-highlight js-about-experience__content-block-highlight" style="display:block"><?= $word ?></span>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <div class="o-about-experience__content-block o-about-experience__content-block--large js-about-experience__content-block">
                                                <?php
                                                if ($tu_title_3) {
                                                    $arr_tu_title_3 = explode("-", $tu_title_3);
                                                    $count_w = count($arr_tu_title_3);
                                                    foreach ($arr_tu_title_3 as $k => $word) {
                                                ?>
                                                        <span class="o-about-experience__content-block-highlight js-about-experience__content-block-highlight"  style="display:block"><?= $word ?></span>
                                                <?php
                                                    }
                                                }
                                                ?>                                                
                                                <br>
                                                <span class="o-about-experience__content-block-highlight js-about-experience__content-block-highlight">
                                                    <div data-open="homeVideo" class="o-about-experience__play" aria-controls="homeVideo" aria-haspopup="dialog" tabindex="0">
                                                        <a><span>Play film</span></a>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="o-about-experience__video-container js-about-experience__video-container">
                        <video loop="" autoplay="" muted="" playsinline="">
                            <source src="<?= $tu_bg_video ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div data-open="homeVideo" class="js-about-experience__video-play-screen o-about-experience__video-play-screen js-cursor-play" aria-controls="homeVideo" aria-haspopup="dialog" tabindex="0"></div>
                </div>
            </section>
        </div>
    </main>
</div>
<div class="reveal-overlay">
    <div class="reveal large is-menu-open" id="homeVideo" data-reveal="iws39d-reveal" data-v-offset="0" data-animation-in="fade-in" data-animation-out="fade-out" role="dialog" aria-hidden="true" data-yeti-box="homeVideo" data-resize="homeVideo">
        <button class="close-button" data-close="" aria-label="Close modal" type="button">
            <span aria-hidden="true">×</span>
        </button>
        <div class="video-embed js-cursor-play">
            <div class="embed-container">
                <div class="controls">
                    <button class="pause control" type="button">
                        <i class="fal fa-pause"></i>
                    </button>
                    <button class="play control" type="button">
                        <i class="fal fa-play"></i>
                    </button>
                </div>
                <?= $tu_video ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();
