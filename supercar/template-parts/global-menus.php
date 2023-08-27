<?php

$social_footer = get_field('social_footer', 'options');
$phone_footer = get_field('phone_footer', 'options');
$menu_global_right = get_field('menu_global_right', 'options');
$menu_global_left = get_field('menu_global_left', 'options');

?>

<div class="o-off-canvas o-off-canvas--menu js-off-canvas js-off-canvas--menu">
        <div class="o-menu__overlay"></div>
        <div class="o-off-canvas__inner-container js-off-canvas__inner">
            <div class="o-menu">
                <div class="o-menu__inner">
                    <div class="grid-container">
                        <div class="grid-x grid-padding-x align-justify">
                            <div class="cell small-12 medium-auto">
                                <div class="o-menu__primary">
                                    <nav class="c-nav c-nav--primary">
                                        <ul class="c-nav__list">
											<?= $menu_global_right; ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="cell small-12 medium-4">
                                <div class="o-menu__ancillary-content">
                                    <div class="o-menu__secondary">
                                        <h4 class="o-menu__small-title">
                                            Other Links </h4>
                                        <nav class="c-nav c-nav--secondary">
                                            <ul class="c-nav__list">
												<?= $menu_global_left; ?>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="o-menu__contact js-menu__contact">
                                        <a href="tel:<?= $phone_footer; ?>" target="_self">
                                            Call <?= $phone_footer; ?> </a>
                                    </div>
                                    <div class="o-menu__social js-menu__social">
                                        <span class="o-menu__label">
                                            Connect
                                        </span>
                                        <ul class="c-social-list">
                                            <?= $social_footer;?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>