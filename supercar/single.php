<?php get_header(); ?>
<?php
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
$single_post_gallery = get_field('single_post_gallery', get_the_ID());

?>
<div class="scroller js-scroller">
    <main role="main">
        <div class="c-article c-article--single">
            <div class="c-article__meta">
                <div class="c-article__category"> News </div>
                <div class="c-article__date"> <?= get_the_date('d M, Y') ?></div>
                <div class="grid-container">
                    <div class="grid-x align-center">
                        <div class="cell small-10 medium-6 large-5">
                            <span class="c-article__title"> SUPPERCAR NEWS </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-post-hero " style="background-image: url('<?= $featured_img_url ?>')">
        </div>
        <article class="c-article__blog-content">
            <style>
                #text-content-container a {
                    text-decoration: underline;
                }
            </style>
            <div class="o-flexible-content o-flexible-content--spaced-below">
                <div class="s-blog">
                    <div class="grid-container grid-x align-center">
                        <div id="text-content-container" class="cell small-12 medium-9 large-8">
                            <h1><?= get_the_title() ?></h1>
                            <?= get_the_content() ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-flexible-content o-flexible-content--spaced-below">
                <div class="c-blog-slider js-blog-slider">
                    <div class="grid-container full grid-x">
                        <div class="cell small-12 align-center">
                            <div class="c-blog-slider__slider-container">
                                <div class="swiper-container js-blog-slider__slider swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-autoheight">
                                    <?php
                                    if ($single_post_gallery) : ?>
                                        <div class="swiper-wrapper" id="swiper-wrapper-6e9d40bac37b712e" aria-live="polite">
                                            <?php foreach ($single_post_gallery as $key => $image) : ?>
                                                <div class="swiper-slide" data-swiper-slide-index="<?= $key ?>" role="group" aria-label="9 / 10">
                                                    <div class="c-blog-slider__slide">
                                                        <img width="1080" height="1080" alt="" src="<?= $image ?>" />
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="c-blog-slider__control c-blog-slider__control--prev">
                                        <a href="#" class="c-control c-control--left js-blog-slider__prev"></a>
                                    </div>
                                    <div class="c-blog-slider__control c-blog-slider__control--next">
                                        <a href="#" class="c-control c-control--right js-blog-slider__next"></a>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <?php get_template_part('template-parts/global', 'signup'); ?>
</div>
<?php get_footer(); ?>