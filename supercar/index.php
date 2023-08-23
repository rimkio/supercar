<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<div class="scroller js-scroller">
    <div class="post-archive">
        <div class="post-archive__top">
            <div class="post-archive__container">
                <div class="grid-x align-justify align-middle">
                    <div class="cell shrink">
                        <h1 class="post-archive__title">
                            NEWS </h1>
                    </div>

                </div>
            </div>
        </div>
        <div class="c-post-hero c-post-hero--detail" style="background-image: url('https://www.alexandersprestige.co.uk/app/uploads/2016/01/6.jpg')">
            <div class="c-post-hero__inner">
                <div class="grid-container c-post-hero__grid-container">
                    <div class="grid grid-x">
                        <div class="cell small-12 align-self-bottom">
                            <div class="c-post-hero__category">
                                News </div>
                            <div class="c-post-hero__featured-title">
                                <h2>
                                    ALEXANDERS NEWS </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="post-archive__posts">
            <div class="post-archive__container">
                <div class="grid-x">
                    <div class="cell small-12">
                        <div class="post-archive__grid">
                            <div class="post-archive__grid-cell">
                                <a href="https://www.alexandersprestige.co.uk/car-of-the-week-our-aston-martin-vantage-v12-roadster/" class="c-article c-article--listed js-cursor-more js-tilt" style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">
                                    <div class="c-article__image" style="background-image: url('https://www.alexandersprestige.co.uk/app/uploads/2023/08/DSC_7759.jpg')"></div>
                                    <div class="c-article__category">
                                    </div>
                                    <div class="c-article__title">
                                        Car of the week – Our Aston Martin Vantage V12 Roadster </div>
                                </a>
                            </div>
                            <div class="post-archive__grid-cell">
                                <a href="https://www.alexandersprestige.co.uk/car-of-the-week-our-porsche-911-gt3-pdk-991-2-2/" class="c-article c-article--listed js-cursor-more js-tilt" style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                                    <div class="c-article__image" style="background-image: url('https://www.alexandersprestige.co.uk/app/uploads/2023/08/DSC_7452-2.jpg')"></div>
                                    <div class="c-article__category">
                                    </div>
                                    <div class="c-article__title">
                                        Car Of The Week – Our Porsche 911 GT3 PDK (991.2) </div>
                                </a>
                            </div>
                            <div class="post-archive__grid-cell">
                                <a href="https://www.alexandersprestige.co.uk/car-of-the-week-our-honda-nsx/" class="c-article c-article--listed js-cursor-more js-tilt" style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                                    <div class="c-article__image" style="background-image: url('https://www.alexandersprestige.co.uk/app/uploads/2023/08/DSC_7310.jpg')"></div>
                                    <div class="c-article__category">
                                    </div>
                                    <div class="c-article__title">
                                        Car Of The Week – Our Honda NSX </div>
                                </a>
                            </div>
                            <div class="post-archive__grid-cell">
                                <a href="https://www.alexandersprestige.co.uk/car-of-the-week-our-porsche-911-turbo-s-992-2/" class="c-article c-article--listed js-cursor-more js-tilt" style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">
                                    <div class="c-article__image" style="background-image: url('https://www.alexandersprestige.co.uk/app/uploads/2023/07/DSC_7193-2.jpg')"></div>
                                    <div class="c-article__category">
                                    </div>
                                    <div class="c-article__title">
                                        Car Of The Week – Our Porsche 911 Turbo S (992) </div>
                                </a>
                            </div>
                            <div class="post-archive__grid-cell">
                                <a href="https://www.alexandersprestige.co.uk/supercar-driver-secret-meet/" class="c-article c-article--listed js-cursor-more js-tilt" style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                                    <div class="c-article__image" style="background-image: url('https://www.alexandersprestige.co.uk/app/uploads/2023/07/578A5559-Enhanced-NR.jpg')"></div>
                                    <div class="c-article__category">
                                    </div>
                                    <div class="c-article__title">
                                        The Supercar Driver Secret Meet </div>
                                </a>
                            </div>
                            <div class="post-archive__grid-cell">
                                <a href="https://www.alexandersprestige.co.uk/car-of-the-week-our-lamborghini-huracan-sto-2/" class="c-article c-article--listed js-cursor-more js-tilt" style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                                    <div class="c-article__image" style="background-image: url('https://www.alexandersprestige.co.uk/app/uploads/2023/07/DSC_6578.jpg')"></div>
                                    <div class="c-article__category">
                                    </div>
                                    <div class="c-article__title">
                                        CAR OF THE WEEK – Our Lamborghini Huracan STO </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/global', 'signup'); ?>
</div>
<?php
get_footer();
