<?php
/*
*   Template Name: Aftersales
*/
get_header();

$hero_af_bg_image = get_field('hero_af_bg_image', get_the_ID());
$hero_af_heading = get_field('hero_af_heading', get_the_ID());
$list_tab = get_field('list_tab', get_the_ID());
$svmheading = get_field('svmheading', get_the_ID());
$svm_image_left = get_field('svm_image_left', get_the_ID());
$svm_image_right = get_field('svm_image_right', get_the_ID());
$svm_title = get_field('svm_title', get_the_ID());
$svm_button = get_field('svm_button', get_the_ID());
$svm_content = get_field('svm_content', get_the_ID());

$twa_image = get_field('twa_image', get_the_ID());
$twa_title = get_field('twa_title', get_the_ID());
$twa_button = get_field('twa_button', get_the_ID());
$twa_content = get_field('twa_content', get_the_ID());

$br_bg_image = get_field('br_bg_image', get_the_ID());
$br_title = get_field('br_title', get_the_ID());
$br_button = get_field('br_button', get_the_ID());
$br_content = get_field('br_content', get_the_ID());

$pp_image = get_field('pp_image', get_the_ID());
$pp_title = get_field('pp_title', get_the_ID());
$pp_button = get_field('pp_button', get_the_ID());
$pp_content = get_field('pp_content', get_the_ID());

$tfc_image = get_field('tfc_image', get_the_ID());
$tfc_title = get_field('tfc_title', get_the_ID());
$tfc_button = get_field('tfc_button', get_the_ID());
$tfc_content = get_field('tfc_content', get_the_ID());

$main_dealer_heading = get_field('main_dealer_heading', get_the_ID());
$list_main_dealer = get_field('list_main_dealer', get_the_ID());

$servicebody_heading = get_field('servicebody_heading', get_the_ID());
$list_services_bodyshop = get_field('list_services_bodyshop', get_the_ID());

?>
<div class="scroller js-scroller">
    <main role="main">
        <div class="utl-clearfix">
            <div id="" class="o-flexible-content o-flexible-content--flush">
                <div class="o-hero o-hero--fill o-hero--v-centered o-hero--x-centered js-parallax js-parallax-background">
                    <div class="o-hero__background js-parallax-background__bg" style="background-image: url(<?= $hero_af_bg_image ?>);"></div>
                    <div style="position: absolute; width: 100%; height: 100%; background-color: #000000; opacity: 0.3;" class="o-hero__overlay"></div>
                    <div class="grid-container">
                        <div class="grid-x align-center">
                            <div class="cell small-12 medium-10">
                                <div class="o-hero__inner js-parallax__element" data-parallax-y="-10">
                                    <div class="o-hero__heading">
                                        <h1 class="js-animate-text">
                                            <div class="js-animate-text__line"><?= $hero_af_heading ?></div>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-home-hero__snap-scroll ">
                            <a href="#servicing" class="c-control c-control--down js-scroll-to"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-container hero-footer-block">
                <div class="grid-container js-sticky-bar c-sticky-bar">
                    <div class="js-sticky-bar__inner c-sticky-bar__inner">
                        <div class="grid-container">
                            <div class="grid-x align-justify">
                                <div class="cell medium-6">
                                </div>
                                <div class="cell medium-5">
                                    <div class="o-cta-tabs">
<!--                                        --><?php
//                                        if ($list_tab) {
//                                            echo '<ul class="vehicle__tabs">';
//                                            foreach ($list_tab as $tab) {
//                                                $label = $tab['label'];
//                                                $href = $tab['href'];
//                                        ?>
<!--                                                <li class="vehicle__tab">-->
<!--                                                    <a class="vehicle__tab-link js-contact-canvas" href="--><?//= $href ?><!--">--><?//= $label ?><!--</a>-->
<!--                                                </li>-->
<!--                                        --><?php
//                                            }
//                                            echo '</ul>';
//                                        } ?>

                                        <ul class="vehicle__tabs">
                                            <li class="vehicle__tab">
                                                <a class="vehicle__tab-link js-contact-canvas" href="?enquiry=Aftersales">Book now</a>
                                            </li>
                                            <li class="vehicle__tab">
                                                <a href="#" class="vehicle__tab-link js-vehicle-enquiry-canvas">
                                                    Enquire </a>
                                            </li>
                                            <li class="vehicle__tab">
                                                <a class="vehicle__tab-link " href="/contact/">Call now</a>
                                            </li>
                                        </ul>
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
                                        <h3 class="js-split-text c-split-text">
                                            <span class="js-split-text__text c-split-text__text">
                                                <?= $svmheading ?>
                                            </span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="servicing" class="o-flexible-content o-flexible-content--spaced-below">
                <div class="c-images-copy js-parallax">
                    <div class="c-images-copy__images-container">
                        <div class="grid-container">
                            <div class="grid-x align-justify align-bottom">
                                <div class="cell small-12 medium-4">
                                    <div data-parallax-y="20" class="c-images-copy__image js-parallax__element">
                                        <img class="utl-transition-cp" src="<?= $svm_image_left ?>" alt="">
                                    </div>
                                </div>
                                <div class="cell small-12 medium-6">
                                    <div data-parallax-y="-20" class="c-images-copy__image show-for-medium js-animated__element_right">
                                        <img class="utl-transition-cp" src="<?= $svm_image_right ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-parallax-y="-20" class="c-images-copy__content-container js-parallax__element">
                        <div class="grid-container">
                            <div class="grid-x">
                                <div class="cell small-12 medium-6">
                                    <div class="c-images-copy__content js-animated__element_right_copy">
                                        <div class="c-images-copy__heading c-title-push">
                                            <h2 class="js-animate-text">
                                                <div class="js-animate-text__line"><span><?= $svm_title ?></span> </div>
                                            </h2>
                                        </div>
                                        <div class="c-images-copy__copy">
                                            <?= $svm_content ?>
                                            <?php if ($svm_button) { ?>
                                                <div class="grid-x align-center js-animate-button">
                                                    <a href="<?= $svm_button['url'] ?>" class="o-featured-text__cta c-button c-button--alpha  js-contact-canvas "><span><?= $svm_button['title'] ?></span></a>
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
            <div id="tyres-wheel-alignment" class="o-flexible-content o-flexible-content--spaced-below">
                <div class="c-sbs-image-content js-parallax c-sbs-image-content--normal">
                    <div class="grid-container container-narrow">
                        <div class="grid-x align-middle">
                            <div class="cell small-12 medium-6 ">
                                <div class="c-sbs-image-content__image js-animated__element_left">
                                    <img width="2048" height="1366" src="<?= $twa_image ?>" alt="" />
                                </div>
                            </div>
                            <div class="cell small-12 medium-6 ">
                                <div class="c-sbs-image-content__content">
                                    <div class="c-sbs-image-content__heading align-right">
                                        <h2 class="js-animate-text">
                                            <div class="js-animate-text__line"><?= $twa_title ?></div>
                                        </h2>
                                    </div>
                                    <div class="c-sbs-image-content__copy js-animated__element_right_copy spacing-vertical">
                                        <?= $twa_content ?>
                                        <?php if ($twa_button) { ?>
                                            <div class="grid-x align-center js-animate-button">
                                                <a href="<?= $twa_button['url'] ?>" target="" class="o-featured-text__cta c-button c-button--alpha  js-contact-canvas "><span><?= $twa_button['title'] ?></span></a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bodyshop" class="o-flexible-content o-flexible-content--spaced-below">
                <div class="o-hero o-hero--fill o-hero--v-centered o-hero--x-centered js-parallax js-parallax-background">
                    <div class="o-hero__background js-parallax-background__bg" style="background-image: url('<?= $br_bg_image ?>');"></div>
                    <div style="position: absolute; width: 100%; height: 100%; background-color: #666666; opacity: 0.3;" class="o-hero__overlay"></div>
                    <div class="grid-container">
                        <div class="grid-x align-center">
                            <div class="cell small-12 medium-10">
                                <div class="o-hero__inner js-parallax__element" data-parallax-y="-10">
                                    <div class="o-hero__heading">
                                        <h2 class="js-animate-text">
                                            <div class="js-animate-text__line"><span><?= $br_title ?></span> </div>
                                        </h2>
                                    </div>
                                    <div class="o-hero__copy">
                                        <p><?= $br_content ?></p>
                                    </div>
                                    <?php if ($br_button) { ?>
                                        <div class="o-hero__cta">
                                            <a class="c-button--alpha js-contact-canvas" href="<?= $br_button['url'] ?>">
                                                <span><?= $br_button['title'] ?></span>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="detailing" class="o-flexible-content o-flexible-content--spaced-below">
                <div class="c-sbs-image-content js-parallax c-sbs-image-content--flipped">
                    <div class="grid-container container-narrow">
                        <div class="grid-x align-middle">
                            <div class="cell small-12 medium-6 medium-order-2">
                                <div class="c-sbs-image-content__image js-animated__element_right">
                                    <img width="" height="" src="<?= $pp_image ?>" class=" utl-transition-cp" alt="" />
                                </div>
                            </div>
                            <div class="cell small-12 medium-6 medium-order-1">
                                <div class="c-sbs-image-content__content">
                                    <div class="c-sbs-image-content__heading align-left">
                                        <h2 class="js-animate-text">
                                            <div class="js-animate-text__line"><?= $pp_title ?></div>

                                        </h2>
                                    </div>
                                    <div class="c-sbs-image-content__copy js-animated__element_left_copy">
                                        <?= $pp_content ?>
                                        <?php if ($pp_button) { ?>
                                            <div class="grid-x align-center js-animate-button">
                                                <a href="<?= $pp_button['url'] ?>" target="" class="o-featured-text__cta c-button c-button--alpha  js-contact-canvas "><span><?= $pp_button['title'] ?>/span></a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="" class="o-flexible-content o-flexible-content--flush">
                <div class="o-hero o-hero--fill o-hero--v-centered o-hero--x-centered js-parallax js-parallax-background">
                    <div class="o-hero__background js-parallax-background__bg" style="background-image: url('<?= $tfc_image ?>');"></div>
                    <div style="position: absolute; width: 100%; height: 100%; background-color: #4f4f4f; opacity: 0.3;" class="o-hero__overlay"></div>
                    <div class="grid-container">
                        <div class="grid-x align-center">
                            <div class="cell small-12 medium-10">
                                <div class="o-hero__inner js-parallax__element" data-parallax-y="-10">
                                    <div class="o-hero__heading">
                                        <h2 class="js-animate-text">
                                            <div class="js-animate-text__line"><?= $tfc_title ?></div>
                                        </h2>
                                    </div>
                                    <?php if ($pp_button) { ?>
                                        <div class="o-hero__cta">
                                            <a class="c-button--alpha js-contact-canvas" href="<?= $tfc_button['url'] ?>" target="_self">
                                                <span> <?= $tfc_button['title'] ?> </span>
                                            </a>
                                        </div>
                                    <?php } ?>
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
                                            <div class="js-animate-text__line"><?= $main_dealer_heading ?></div>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="" class="o-flexible-content o-flexible-content--spaced-below">
                <div class="o-featured o-featured--accordion js-feature-accordion">
                    <div class="grid-container">
                        <div class="grid-x align-center accordion-contain">
                            <?php
                            foreach ($list_main_dealer as $k => $item) {
                                $key = rand(0, 100);
                                $image = $item['image'];
                                $title = $item['title'];
                                $information = $item['information'];
                                if ($information) {
                                    $gr_background_image = $information['background_image'];
                                    $gr_title = $information['title'];
                                    $gr_content = $information['content'];
                                }
                            ?>
                                <div data-content-id="<?= $key ?>" class="accordion-content" style="background-image: url('<?= $gr_background_image ?>');">
                                    <a class="c-control c-control--close js-close-acc" data-close="<?= $key ?>"></a>
                                    <div class="inner-content small-12 large-4">
                                        <h3 class="o-featured__title title"> <?= $gr_title ?> </h3>
                                        <div class="copy"><?= $gr_content ?></div>
                                    </div>
                                </div>
                                <div class="cell small-12 large-4">
                                    <a data-id="<?= $key ?>" class="accordion-inner  js-cursor-more js-open-acc" style="background-image: url(<?= $image ?>);">
                                        <h3 class="o-featured__title title"><?= $title ?> </h3>
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
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
                                            <div class="js-animate-text__line"><?= $servicebody_heading ?></div>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="" class="o-flexible-content o-flexible-content--spaced-below">
                <div class="o-featured o-featured--accordion js-feature-accordion">
                    <div class="grid-container">
                        <div class="grid-x align-center accordion-contain">
                            <?php
                            foreach ($list_services_bodyshop as $k => $item) {
                                $i = rand(100, 200);
                                $image = $item['image'];
                                $title = $item['title'];
                                $information = $item['information'];
                                if ($information) {
                                    $gr_background_image = $information['background_image'];
                                    $gr_title = $information['title'];
                                    $gr_content = $information['content'];
                                }
                            ?>
                                <div data-content-id="<?= $i ?>" class="accordion-content" style="background-image: url('<?= $gr_background_image ?>');">
                                    <a class="c-control c-control--close js-close-acc" data-close="<?= $i ?>"></a>
                                    <div class="inner-content small-12 large-4">
                                        <h3 class="o-featured__title title"> <?= $gr_title ?> </h3>
                                        <div class="copy"><?= $gr_content ?></div>
                                    </div>
                                </div>
                                <div class="cell small-12 large-4">
                                    <a data-id="<?= $i ?>" class="accordion-inner  js-cursor-more js-open-acc" style="background-image: url(<?= $image ?>);">
                                        <h3 class="o-featured__title title"><?= $title ?> </h3>
                                    </a>
                                </div>
                            <?php
                            }
                            ?>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php get_template_part('template-parts/global', 'signup'); ?>
</div>
<?php get_template_part('template-parts/global', 'vehicle-enquiry'); ?>
<?php get_template_part('template-parts/global', 'workshop'); ?>

<?php get_footer();
