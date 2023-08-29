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
                        <h1 class="post-archive__title"> NEWS </h1>
                    </div>

                </div>
            </div>
        </div>
        <div class="c-post-hero c-post-hero--detail" style="background-image: url('https://www.alexandersprestige.co.uk/app/uploads/2016/01/6.jpg')">
            <div class="c-post-hero__inner">
                <div class="grid-container c-post-hero__grid-container">
                    <div class="grid grid-x">
                        <div class="cell small-12 align-self-bottom">
                            <div class="c-post-hero__category"> News </div>
                            <div class="c-post-hero__featured-title">
                                <h2> SUPPERCAR NEWS </h2>
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
                            <?php if (have_posts()) : ?>
                                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');  ?>
                                <div class="post-archive__grid-cell">
                                    <a href="<?= get_the_permalink() ?>" class="c-article c-article--listed js-cursor-more js-tilt">
                                        <div class="c-article__image" style="background-image: url('<?= $featured_img_url ?>')"></div>
                                        <div class="c-article__category"> </div>
                                        <div class="c-article__title"><?= get_the_title() ?></div>
                                    </a>
                                </div>
                            <?php else : ?>
                                <section class="no-results not-found">
                                    <header class="page-header">
                                        <h3 class="page-title"><?php esc_html_e('Nothing Found', ''); ?></h3>
                                    </header><!-- .page-header -->
                                </section><!-- .no-results -->
                            <?php
                            endif;
                            ?>
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
