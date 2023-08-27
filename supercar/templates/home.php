<?php
/*
*   Template Name: Homepage
*/

get_header();

$link_video = get_field('link_video');
$title_h1 = get_field('title_h1');
$title_bottom = get_field('title_bottom');
$title_line_one = get_field('title_line_one');
$title_line_two = get_field('title_line_two');
$title_line_three = get_field('title_line_three');
$background_mobile = get_field('background_mobile');

$ss_2_text_top = get_field('ss_2_text_top');
$text_h2_1 = get_field('text_h2_1');
$text_h2_2 = get_field('text_h2_2');
$text_h2_3 = get_field('text_h2_3');
$ss_2_button = get_field('ss_2_button');
$ss_2_background = get_field('ss_2_background');

$ss_3_text_top = get_field('ss_3_text_top');
$ss_3_text_h2_1 = get_field('ss_3_text_h2_1');
$ss_3_text_h2_2 = get_field('ss_3_text_h2_2');
$ss_3_text_h2_3 = get_field('ss_3_text_h2_3');
$ss_3_button = get_field('ss_3_button_copy');
$ss_3_background = get_field('ss_3_background_copy');

$ss_4_text_top = get_field('ss_4_text_top');
$ss_4_text_h2_1 = get_field('ss_4_text_h2_1');
$ss_4_text_h2_2 = get_field('ss_4_text_h2_2');
$ss_4_text_h2_3 = get_field('ss_4_text_h2_3');
$ss_4_button = get_field('ss_4_button');
$image_col_1 = get_field('image_col_1');
$image_col_2 = get_field('image_col_2');
$ss_4_background = get_field('ss_4_background');

$ss_5_title_h2 = get_field('ss_5_title_h2');
$ss_5_button = get_field('ss_5_button');
$ss_5_background = get_field('ss_5_background');
?>


<div class="scroller js-scroller" data-scrollbar="true">
    <main role="main">
        <div class="utl-clearfix">
            <div id="" class="o-flexible-content o-flexible-content--flush">
                <section class="c-home-hero js-home-hero js-parallax-background">
                    <div class="c-home-hero__video js-home-hero__video js-parallax-background__bg" style="background-position: 50% 280px;">
                        <video autoplay="" loop="" muted="" playsinline="">
                            <source src="<?= $link_video; ?>" type="video/mp4">
                        </video>
                        <div class="c-home-hero__video-overlay js-home-hero__video-overlay" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.6) 100%);"></div>
                    </div>
                    <div class="grid-container">
                        <div class="grid-x align-middle">
                            <div class="cell small-12">
                                <div class="c-home-hero__inner js-home-hero__inner">
                                    <div class="js-home-hero__message-one c-home-hero__start" style="opacity: 0; visibility: hidden;">
                                        <div class="c-home-hero__line c-home-hero__logo js-home-hero__logo">
                                            <img alt="" data-src="https://supercarsaustralia.au/wp-content/uploads/2023/06/logo-supercar.svg" class=" ls-is-cached lazyloaded" src="https://supercarsaustralia.au/wp-content/uploads/2023/06/logo-supercar.svg">
                                        </div>
                                        <h1 class="c-home-hero__line c-home-hero__title c-home-hero__title--one js-home-hero__title">
											<?= $title_bottom; ?> </h1>
                                    </div>
                                    <div class="js-home-hero__message-two c-home-hero__start" style="transform: translate3d(0px, -69.8109%, 0px); opacity: 0.6168; visibility: inherit;">
                                        <h2 class="c-home-hero__title c-home-hero__title--two js-home-hero__title-two">
                                            <span class="c-home-hero__line js-home-hero__title-line-one" style="transform: translate(0px, 50%); opacity: 0; visibility: hidden;">
                                                <?= $title_line_one; ?> </span>
                                            <span class="c-home-hero__line js-home-hero__title-line-two" style="transform: translate(0px, 50%); opacity: 0; visibility: hidden;">
                                                <?= $title_line_two; ?> </span>
                                            <span class="c-home-hero__line js-home-hero__title-line-three" style="transform: translate(0px, 50%); opacity: 0; visibility: hidden;">
                                                <?= $title_line_three; ?>  </span>
                                        </h2>
                                    </div>
                                    <div class="js-home-hero__play-video c-home-hero__play-video" style="transform: translate(0px, -80%); opacity: 1; visibility: inherit;">
                                        <a class="js-cursor-play" data-open="homeVideo" aria-controls="homeVideo" aria-haspopup="dialog" tabindex="0">
                                            PLAY VIDEO </a>
                                    </div>

                                    <div class="c-home-hero__snap-scroll">
                                        <a href="#intro" class="c-control c-control--down js-scroll-to"></a>
                                    </div>
                                    <div class="cell shrink show-for-small-only">
                                        <div class="car-dropdown-mobile">
                                            <div class="c-car-selector js-car-selector js-cursor-link">
                                                <div class="c-car-selector__col c-car-selector__col--left js-car-selector__left-col">
                                                    <a class="c-car-selector__link js-car-selector__left-link" href="/used-cars/">
                                                        View all cars </a>
                                                </div>
                                                <div class="c-car-selector__col c-car-selector__col--right js-car-selector__right-col">
                                                    <form action="/used-cars/" method="get" class="vehicle-archive__search-form">
                                                        <input type="text" class="c-car-selector__search js-car-selector__search js-car-selector__search_placeholder" name="search" placeholder="Search" autocomplete="off">
                                                        <button type="submit"></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="" class="o-flexible-content o-flexible-content--flush">
                <div class="o-hero o-hero--v-centered o-hero--fill js-parallax js-parallax-background" id="intro">
                    <div class="o-hero__background js-parallax-background__bg" style="background-image: url('<?php echo $ss_2_background['url']?>'); background-position: 50% 280px;"></div>
                    <div class="grid-container">
                        <div class="grid-x ">
                            <div class="cell small-12 medium-6">
                                <div class="o-hero__inner js-parallax__element" data-parallax-y="-40" style="transform: translate(0%, -40%); opacity: 1; visibility: inherit;">
                                    <div class="o-hero__sub-title">
                                        <h5 class="c-sub-title">
											<?= $ss_2_text_top; ?> </h5>
                                    </div>
                                    <div class="o-hero__heading">
                                        <h2 class="js-animate-text" style="">
                                            <div class="js-animate-text__line" style="display: block; text-align: start; position: relative; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><span><?= $text_h2_1; ?> </span></div>
                                            <div class="js-animate-text__line" style="display: block; text-align: start; position: relative; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><span><?= $text_h2_2; ?></span></div>
                                            <div class="js-animate-text__line" style="display: block; text-align: start; position: relative; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><span><?= $text_h2_3; ?></span> </div>
                                        </h2>
                                    </div>
									<?php
									if ( isset($ss_2_button) && !empty($ss_2_button)) {
										?>
                                        <div class="o-hero__cta js-animate-button">
                                            <a class="c-button--alpha btn" href="<?php echo $ss_2_button["url"]; ?>" target="_self">
                                                <span><?php echo $ss_2_button["title"]; ?></span>
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
            </div>
            <div id="" class="o-flexible-content o-flexible-content--flush">
                <div class="o-hero o-hero--v-centered o-hero--fill js-parallax js-parallax-background" id="intro">
                    <div class="o-hero__background js-parallax-background__bg" style="background-image: url('<?php echo $ss_3_background['url']?>'); background-position: 50% 280px;"></div>
                    <div class="grid-container">
                        <div class="grid-x align-right">
                            <div class="cell small-12 medium-6">
                                <div class="o-hero__inner js-parallax__element" data-parallax-y="-40" style="transform: translate(0%, -40%); opacity: 1; visibility: inherit;">
                                    <div class="o-hero__sub-title">
                                        <h5 class="c-sub-title">
											<?= $ss_3_text_top; ?> </h5>
                                    </div>
                                    <div class="o-hero__heading">
                                        <h2 class="js-animate-text" style="">
                                            <div class="js-animate-text__line" style="display: block; text-align: start; position: relative; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><span><?= $ss_3_text_h2_1; ?></span></div>
                                            <div class="js-animate-text__line" style="display: block; text-align: start; position: relative; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><span><?= $ss_3_text_h2_2; ?></span></div>
                                            <div class="js-animate-text__line" style="display: block; text-align: start; position: relative; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><span><?= $ss_3_text_h2_3; ?></span> </div>
                                        </h2>
                                    </div>
									<?php
									if ( isset($ss_3_button) && !empty($ss_3_button)) {
										?>
                                        <div class="o-hero__cta js-animate-button">
                                            <a class="c-button--alpha btn" href="<?php echo $ss_3_button["url"]; ?>" target="_self">
                                                <span><?php echo $ss_3_button["title"]; ?></span>
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
            </div>
            <div id="" class="o-flexible-content o-flexible-content--flush">
                <div class="o-hero o-hero--fill o-hero--space-bottom o-hero--v-centered o-hero--x-centered js-parallax">
                    <div class="o-hero__background js-parallax-background__bg" style="background-image: url('<?php echo $ss_4_background['url']?>')"></div>
                    <div class="o-hero__container">
                        <div class="grid-container full">
                            <div class="grid-x align-center">
                                <div class="cell small-12 medium-12">
                                    <div class="o-hero__inner" style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                        <div class="o-hero__image o-hero__image--one js-animated__element_left" data-parallax-y="80" style="transform: translate(0%, -50%) translate3d(22.0849px, 0px, 0px);">
                                            <img alt="" data-src="<?= $image_col_1['url'];?>" class="utl-transition-cp lazyloaded" src="<?= $image_col_1['url'];?>">
                                        </div>
                                        <div class="o-hero__image o-hero__image--two js-animated__element_right" data-parallax-y="-20" style="opacity: 0.8896; visibility: inherit; transform: translate(0%, -50%) translate3d(36.9963px, 0px, 0px);">
                                            <img alt="" data-src="<?= $image_col_2['url'];?>" class="utl-transition-cp lazyloaded" src="<?= $image_col_2['url'];?>">
                                        </div>
                                        <div class="o-hero__sub-title">
                                            <h5 class="c-sub-title c-sub-title--line">
                                                <?= $ss_4_text_top; ?> </h5>
                                        </div>
                                        <div class="o-hero__heading">
                                            <h2 class="js-animate-text" style="">
                                                <div class="js-animate-text__line" style="display: block; text-align: center; position: relative; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><span><?= $ss_4_text_h2_1; ?></span></div>
                                                <div class="js-animate-text__line" style="display: block; text-align: center; position: relative; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><span><?= $ss_4_text_h2_2; ?> </span></div>
                                                <div class="js-animate-text__line" style="display: block; text-align: center; position: relative; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"><span><?= $ss_4_text_h2_3; ?></span> </div>
                                            </h2>
                                        </div>
										<?php
										if ( isset($ss_4_button) && !empty($ss_4_button)) {
											?>
                                            <div class="o-hero__cta js-animate-button">
                                                <a class="c-button--alpha btn" href="<?php echo $ss_4_button["url"]; ?>" target="_self">
                                                    <span><?php echo $ss_4_button["title"]; ?></span>
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
                </div>
            </div>
            <div id="" class="o-flexible-content o-flexible-content--flush">
                <div class="o-hero o-hero--fill o-hero--v-centered o-hero--x-centered js-parallax o-hero--half-height">
                    <div class="o-hero__background js-parallax-background__bg" style="background-image:  url('<?php echo $ss_5_background['url']?>')"></div>
                    <div style="position: absolute; width: 100%; height: 100%; background-color: #000000; opacity: 0.4;" class="o-hero__overlay"></div>
                    <div class="grid-container">
                        <div class="grid-x align-center">
                            <div class="cell small-12 medium-10">
                                <div class="o-hero__inner js-parallax__element" data-parallax-y="-10" style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                    <div class="o-hero__heading">
                                        <h2 class="js-animate-text" style="">
                                            <div class="js-animate-text__line" style="display: block; text-align: center; position: relative; transform: translate(0px, 50%); opacity: 0; visibility: hidden;"><span><?= $ss_5_title_h2;?></span> </div>
                                        </h2>
                                    </div>
									<?php
									if ( isset($ss_5_button) && !empty($ss_5_button)) {
										?>
                                        <div class="o-hero__cta js-animate-button" data-wow-delay="0.5s">
                                            <a class="c-button--alpha btn" href="<?php echo $ss_5_button["url"]; ?>" target="_self">
                                                <span><?php echo $ss_5_button["title"]; ?></span>
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
            </div>
            
            <?php get_template_part('template-parts/shared', 'customer-reviews'); ?>

            <div id="" class="o-flexible-content o-flexible-content--flush">
                <div class="c-posts-slider js-posts-slider js-parallax">
                    <div class="c-posts-slider__inner">
                        <div class="c-posts-slider__cover"></div>
                        <div class="c-posts-slider__backer js-parallax__element" data-parallax-y="-45" style="transform: translate(0px, 0px);"></div>
                        <div class="c-posts-slider__top">
                            <div class="grid-container">
                                <div class="grid grid-x align-justify">
                                    <div class="cell shrink">
                                        <div class="c-posts-slider__title js-animate-fade" style="transform: translate(0px, 50%); opacity: 0; visibility: hidden;">
                                            <h2>
                                                Latest Vehicles </h2>
                                        </div>
                                    </div>
                                    <div class="cell small-auto medium-shrink">
                                        <div class="grid-container full">
                                            <div class="grid grid-x align-middle">
                                                <div class="cell shrink">
                                                    <a class="c-posts-slider__label" href="/used-cars/">
                                                        View all
                                                    </a>
                                                </div>
                                                <div class="cell auto">
                                                    <ul class="c-posts-slider__controls">
                                                        <li>
                                                            <a class="c-control c-control--left js-posts-slider__prev" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="c-control c-control--right js-posts-slider__next" href="#"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-posts-slider__bottom">
                            <div class="grid-container full">
                                <div class="grid grid-x">
                                    <div class="cell small-12">
                                        <div class="c-posts-slider__slider-container">
                                            <div class="swiper-container js-posts-slider__slider swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                                <div class="swiper-wrapper" id="swiper-wrapper-7234f6c963efa8a8" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-1816px, 0px, 0px);">

													<?php get_template_part('template-parts/shared', 'lastest-vehicles'); ?>

                                                </div>
                                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
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

<?php
get_footer();
