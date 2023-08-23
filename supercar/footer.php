<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$logo = get_field('logo_top_footer', 'options');
$menu_footer = get_field('menu_footer', 'options');
$social_footer = get_field('social_footer', 'options');
$text_bottom_footer = get_field('text_bottom_footer', 'options');
$phone_footer = get_field('phone_footer', 'options');
?>

<footer class="o-footer js-footer o-footer--primary" style="z-index: 1; display: none;">
    <div class="o-footer__logo">
        <div class="c-logo c-logo--footer">
            <img alt="" data-src="<?= $logo['url']; ?>" class="lazyloaded" src="<?= $logo['url']; ?>">
        </div>
    </div>
    <div class="o-footer__top">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
				<?= $menu_footer; ?>
                <div class="cell small-12 medium-auto">
                    <div class="o-footer__trustpilot js-reviews-canvas" style="margin: auto; max-width: 145px; padding:0;">
                        <div class="o-footer__label">Our reviews</div>
                        <div class="c-trustpilot-stars"></div>
                    </div>
                    <div class="o-footer__social" style="margin: auto; width: fit-content; margin-bottom: .5rem;">
                        <div class="o-footer__label" style="width: fit-content;">Connect</div>
                        <ul class="c-social-list">
							<?= $social_footer; ?>
                        </ul>
                    </div>
                </div>
                <div class="cell small-12 show-for-small hide-for-medium">
                    <div class="o-menu__contact js-menu__contact">
                        <a href="tel:<?= $phone_footer; ?>" target="_self">
                            Call <?= $phone_footer; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        @media (max-width: 859px) {
            .o-footer__label {
                margin: auto;
            }
        }
        @media print, screen and (min-width: 40em) {
            .o-footer__logo img {
                width: 163px;
            }
        }
        .financial_disclosure {
            font-size: .8125rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .financial_disclosure.show {
            -webkit-line-clamp: 999;
        }

        .financial_disclosure_button {
            color: white;
            width: 100%;
            height: 1.5rem;
            cursor: pointer;
            font-size: .8125rem;
            text-decoration: underline;
        }
    </style>
    <div class="o-footer__bottom">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell small-12">
                    <div class="o-footer__footnote">
                        FINANCIAL DISCLOSURE<br>
                        <p class="financial_disclosure"><?= $text_bottom_footer; ?></p>
                        <button type="button" class="financial_disclosure_button"> Read more </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const financial_disclosure = document.querySelector('.financial_disclosure');
        const financial_disclosure_button = document.querySelector('.financial_disclosure_button');
        let is_financial_disclosure_shown = false;
        financial_disclosure_button.addEventListener('click', () => {
            financial_disclosure.classList.toggle('show');
            financial_disclosure_button.innerText = is_financial_disclosure_shown ? 'Read More' : 'Show less';
            is_financial_disclosure_shown = !is_financial_disclosure_shown;
        })
    </script>
</footer>

<?php wp_footer(); ?>

</body>

</html>