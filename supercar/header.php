<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open();
	$phone_footer = get_field('phone_footer', 'options');
	$logo = get_field('logo_top_footer', 'options');
    ?>
    <header class="o-header o-header--home js-header">
        <div class="grid-container fluid">
            <div class="grid-x">
                <div class="cell small-12">
                    <div class="grid-container">
                        <div class="grid-x align-middle">
                            <div class="cell auto">
                                <div class="o-header__end">
                                    <a class="o-header__home-link" href="/">
                                        <div class="o-header__logos js-header__logos">
                                            <div class="o-header__large-logo">
                                                <img alt="" data-src="<?= $logo['url']; ?>" class=" ls-is-cached lazyloaded" src="<?= $logo['url']; ?>">
                                            </div>
                                            <div class="o-header__small-logo">
                                                <img alt="" data-src="<?= $logo['url']; ?>" class="lazyloaded" src="<?= $logo['url']; ?>">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="cell shrink">
                                <div class="o-header__car-dropdown js-header__dropdowns <?= (is_page_template('templates/sold.php') || is_page_template('templates/used-cars.php')) ? 'is-hidden' : '' ?>">
                                    <div class="c-car-selector js-car-selector js-cursor-link">
                                        <div class="c-car-selector__col c-car-selector__col--left js-car-selector__left-col">
                                            <a class="c-car-selector__link js-car-selector__left-link" href="/used-cars/">
                                                View all cars </a>
                                        </div>
                                        <div class="c-car-selector__col c-car-selector__col--right js-car-selector__right-col">
                                            <form action="/used-cars/" method="get" class="vehicle-archive__search-form">
                                                <input id="jsInputType" type="text" class="c-car-selector__search js-car-selector__search js-car-selector__search_placeholder" name="search" placeholder="Search" autocomplete="off">
                                                <input type="hidden" name="orderby" value="highest-first">
                                                <button type="submit"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cell auto">
                                <div class="o-header__end">
                                    <div class="o-header__call-icon show-for-small-only">
                                        <a class="c-call-icon" href="tel:<?= $phone_footer; ?>" target="_self">
                                            Call <?= $phone_footer; ?> </a>
                                    </div>
                                    <div class="o-header__toggle">
                                        <a href="#" class="c-menu-toggle js-menu-toggler">
                                            <div class="c-menu-toggle__inner">
                                                <span class="c-menu-toggle__line c-menu-toggle__line--short"></span>
                                                <span class="c-menu-toggle__line c-menu-toggle__line--long"></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="js-magnetic-cursor c-magnetic-cursor is-active">
        <div class="c-magnetic-cursor__inner js-magnetic-cursor__inner"></div>
    </div>

    <div class="js-off-canvas-overlay is-overlay-fixed"></div>

    <div class="o-loader js-loader">
        <div class="o-loader__logo js-loader__logo">
            <div class="o-loader__backer js-loader__backer"></div>
        </div>
    </div>

    <?php get_template_part('template-parts/global', 'reviews'); ?>
    <?php get_template_part('template-parts/global', 'meet-team'); ?>
    <?php get_template_part('template-parts/global', 'menus'); ?>
    <?php get_template_part('template-parts/global', 'contact'); ?>
    <?php get_template_part('template-parts/global', 'vehicle-enquiry'); ?>