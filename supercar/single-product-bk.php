<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header();
$current_product_id = get_the_ID();
$product = wc_get_product(get_the_ID());
// Retrieve the "_price" custom field value
$price = $product->get_price();
$title = $product->get_name();

$overview_content = get_field('overview_content');
$content_option = get_field('content_option');
$parameter_option = get_field('parameter_option');
$link_pdf = get_field('link_pdf');

$enquire = get_field('enquire');
$disable_reserve_online = get_field('disable_reserve_online');
$disable_request_video = get_field('disable_request_video');
$disable_finance_calculator = get_field('disable_finance_calculator');
?>
	<div class="scroller js-scroller">
		<main role="main">
			<div class="utl-clearfix">
                <div class="vehicle__slider">
                    <div class="c-coverflow js-coverflow js-lightbox">
                        <div class="grid-container">
                            <div class="grid-x">
                                <div class="cell">
                                    <ul class="c-gallery-nav js-coverflow wow fadeInUp" data-wow-delay="0.3s">
                                        <?php
										$exterior = get_field('exterior');
										$interior = get_field('interior');
										if( !empty($exterior)) {
											?>
                                            <li class="c-gallery-nav__li">
                                                <a href="#" data-section-link="exterior"
                                                   class="ei c-gallery-nav__link js-coverflow__link is-active">
                                                    Exterior </a>
                                            </li>
											<?php
										}
										if( !empty($interior)) {
											?>
                                            <li class="c-gallery-nav__li">
                                                <a href="#" data-section-link="interior" class="ei c-gallery-nav__link js-coverflow__link ">
                                                    Interior </a>
                                            </li>
											<?php
										}
                                        ?>

                                        <?php
										$video = get_field('link_video');
										if( !empty($video)) {
										    ?>
                                            <li class="c-gallery-nav__li">
                                                <a href="<?php echo $video; ?>" data-lity class="c-gallery-nav__link" data-open="vehicle-video">
                                                    Video </a>
                                            </li>
                                            <?php
                                        }
                                        ?>

                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="c-coverflow__slider-container">
							<?php

							if ( isset($exterior) && isset($interior)) {
							    $countEx = count($exterior);
							    $countIn = count($interior);
							    ?>
                                <div class="swiper-container single-slider wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="swiper-wrapper" data-exterior="<?php echo $countEx / 2; ?>" data-interior="<?php echo $countEx + $countIn / 2; ?>">
										<?php

										foreach ( $exterior as $value ) {
											?>
                                            <div class="swiper-slide" data-slide="exterior">
                                                <a href="<?php echo $value["url"]; ?>">
                                                    <img alt="<?php echo $value["title"];?>"
                                                         src="<?php echo $value["url"]; ?>" />
                                                </a>
                                            </div>
											<?php
										}

										foreach ( $interior as $values ) {
											?>
                                            <div class="swiper-slide" data-slide="interior">
                                                <a href="<?php echo $values["url"]; ?>">
                                                    <img alt="<?php echo $values["title"];?>"
                                                         src="<?php echo $values["url"]; ?>" />
                                                </a>
                                            </div>
											<?php
										}
										?>

                                    </div>
                                    <div class="btn-pre-next">
                                        <div class="swiper-button-next btn">
                                            <svg width="17" height="13" viewBox="0 0 17 13" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                        d="M6.975 12.025L8.05 10.975L3.85 6.775L17 6.775L17 5.275L3.85 5.275L8.075 1.05L7 5.56363e-07L0.975001 6.025L6.975 12.025Z"
                                                        fill="#F9F9F9" />
                                            </svg>

                                        </div>
                                        <div class="swiper-button-prev btn">
                                            <svg width="17" height="13" viewBox="0 0 17 13" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                        d="M10.025 12.025L8.95 10.975L13.15 6.775L-3.76936e-07 6.775L-2.93481e-07 5.275L13.15 5.275L8.925 1.05L10 5.56363e-07L16.025 6.025L10.025 12.025Z"
                                                        fill="#F9F9F9" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <?php
                            }
							?>

                        </div>
                    </div>
                </div>
				<div class="o-flexible-content o-flexible-content--spaced-below">
					<div class="js-sticky-bar c-sticky-bar">
						<div class="vehicle__details js-sticky-bar__inner c-sticky-bar__inner">
							<div class="grid-container">
								<div class="grid-x grid-margin-x vehicle__details-grid-container">
									<div class="cell small-12 large-5">
										<h1 class="vehicle__title wow fadeInUp" data-wow-delay="0.3s">
											<?php echo $title; ?>
										</h1>
                                        <span class="vehicle__price">
$ <?php echo $price; ?> </span>
									</div>
									<div class="cell small-12 large-7">
										<ul class="vehicle__tabs grid-x wow fadeInUp" data-wow-delay="0.5s">
                                            <?php
                                                if (!isset($enquire[0])) {
                                                    ?>
                                                    <li class="vehicle__tab small-6 medium-auto">
                                                        <a data-car="<?php echo $title; ?>" href="#" class="vehicle__tab-link js-vehicle-enquiry">
                                                            Enquire </a>
                                                    </li>
                                                    <?php
                                                }

                                                if (!isset($disable_reserve_online[0])) {
                                                    ?>
                                                    <li class="vehicle__tab small-6 medium-auto">
                                                        <div id="ReserveVehicle">
                                                            <span class="vehicle__tab-link holding-text">
                                                            <a href="#" class="vehicle__tab-link holding-text">
                                                            Reserve Online </a>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <?php
                                                }

                                                if (!isset($disable_request_video[0])) {
                                                    ?>
                                                    <li class="vehicle__tab small-6 medium-auto">
                                                        <a data-car="<?php echo $title; ?>" href="#" class="vehicle__tab-link js-request-video">
                                                            Request Video  </a>
                                                    </li>
                                                    <?php
                                                }

                                                if (!isset($disable_finance_calculator[0])) {
                                                    ?>
                                                    <li class="vehicle__tab small-6 medium-auto">
                                                        <a class="vehicle__tab-link js-scroll-to" href="#financecalculator">
                                                            Finance Calculator </a>
                                                    </li>
                                                    <?php
                                                }

                                                if ( !empty($link_pdf)) {
                                                    ?>
                                                    <li class="vehicle__tab small-6 medium-auto">
                                                        <a class="vehicle__tab-link js-print" href="#" target="_blank">
                                                            <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12.7077 4V1.25H5.29102V4H4.04102V0H13.9577V4H12.7077ZM14.3952 7.22917C14.5618 7.22917 14.7077 7.16667 14.8327 7.04167C14.9577 6.91667 15.0202 6.77083 15.0202 6.60417C15.0202 6.4375 14.9577 6.29167 14.8327 6.16667C14.7077 6.04167 14.5618 5.97917 14.3952 5.97917C14.2285 5.97917 14.0827 6.04167 13.9577 6.16667C13.8327 6.29167 13.7702 6.4375 13.7702 6.60417C13.7702 6.77083 13.8327 6.91667 13.9577 7.04167C14.0827 7.16667 14.2285 7.22917 14.3952 7.22917ZM12.7077 13.75V9.75H5.29102V13.75H12.7077ZM13.9577 15H4.04102V11.3333H0.666016V6.20833C0.666016 5.58264 0.877821 5.05816 1.30143 4.6349C1.72504 4.21163 2.24935 4 2.87435 4H15.1243C15.75 4 16.2745 4.21163 16.6978 4.6349C17.121 5.05816 17.3327 5.58264 17.3327 6.20833V11.3333H13.9577V15ZM16.0827 10.0833V6.20385C16.0827 5.92906 15.9908 5.70139 15.8072 5.52083C15.6235 5.34028 15.3959 5.25 15.1243 5.25H2.87435C2.60282 5.25 2.37522 5.34184 2.19154 5.52552C2.00786 5.7092 1.91602 5.93681 1.91602 6.20833V10.0833H4.04102V8.5H13.9577V10.0833H16.0827Z" fill="#E8E8E8"/>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                    <?php
                                                }
                                            ?>
                                            <li class="vehicle__tab small-6 medium-auto js-share-social">
												<a class="vehicle__tab-link" href="#">
                                                    <svg width="18" height="9" viewBox="0 0 18 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.37435 8.66658H4.83268C3.6799 8.66658 2.69727 8.26033 1.88477 7.44783C1.07227 6.63533 0.666016 5.6527 0.666016 4.49992C0.666016 3.34714 1.07227 2.3645 1.88477 1.552C2.69727 0.739502 3.6799 0.333252 4.83268 0.333252H8.37435V1.58325H4.83268C4.0225 1.58325 3.33384 1.86634 2.7667 2.43252C2.19958 2.99869 1.91602 3.68619 1.91602 4.49502C1.91602 5.30384 2.19958 5.99297 2.7667 6.56242C3.33384 7.13186 4.0225 7.41658 4.83268 7.41658H8.37435V8.66658ZM5.77018 5.12492V3.87492H12.2285V5.12492H5.77018ZM9.62435 8.66658V7.41658H13.166C13.9762 7.41658 14.6649 7.13349 15.232 6.56731C15.7991 6.00115 16.0827 5.31365 16.0827 4.50481C16.0827 3.69599 15.7991 3.00686 15.232 2.43742C14.6649 1.86797 13.9762 1.58325 13.166 1.58325H9.62435V0.333252H13.166C14.3188 0.333252 15.3014 0.739502 16.1139 1.552C16.9264 2.3645 17.3327 3.34714 17.3327 4.49992C17.3327 5.6527 16.9264 6.63533 16.1139 7.44783C15.3014 8.26033 14.3188 8.66658 13.166 8.66658H9.62435Z" fill="#E8E8E8"/>
                                                    </svg>
                                                </a>
                                                <div class="share-reveal">
                                                    <ul class="c-social-list">
                                                        <li class="c-social-list__item">
                                                            <a href="https://www.instagram.com/" target="_blank" rel="noopener">
                                                                <img src="/wp-content/uploads/2023/06/Instagram-Negative.svg" alt="instagram">
                                                            </a>
                                                        </li>
                                                        <li class="c-social-list__item">
                                                            <a href="https://www.facebook.com/" target="_blank" rel="noopener">
                                                                <img src="/wp-content/uploads/2023/06/Facebook-Negative.svg" alt="facebook">
                                                            </a>
                                                        </li>
                                                        <li class="c-social-list__item">
                                                            <a href="https://twitter.com/" target="_blank" rel="noopener">
                                                                <img src="/wp-content/uploads/2023/06/Twitter-Negative.svg" alt="twitter">
                                                            </a>
                                                        </li>
                                                        <li class="c-social-list__item">
                                                            <a href="https://www.youtube.com/" target="_blank" rel="noopener">
                                                                <img src="/wp-content/uploads/2023/06/YouTube-Negative.svg" alt="youtube">
                                                            </a>
                                                        </li>
                                                        <li class="c-social-list__item">
                                                            <a href="https://www.linkedin.com/" target="_blank" rel="noopener">
                                                                <img src="/wp-content/uploads/2023/06/LinkedIn-Negative.svg" alt="linkedin">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="o-flexible-content o-flexible-content--spaced-flush ss-detail">
					<div class="grid-container">
						<div class="grid-x">
							<div class="cell small-12 medium-auto">
								<div class="vehicle__data">
									<div class="grid-container full">
										<div class="grid-x align-justify wow fadeInUp" data-wow-delay="0.3s">
                                            <?php
                                            if ( isset($parameter_option)) {
												foreach ( $parameter_option as $val ) {
													?>
                                                    <div class="cell  small-6  medium-auto">
                                                        <div class="vehicle__data-col ">
                                                            <h4 class="vehicle__heading"><?php echo $val['content_parameter'];?></h4>
                                                            <span class="vehicle__sub-title"><?php echo $val['title_parameter'];?></span>
                                                        </div>
                                                    </div>
													<?php
												}
                                            }
                                            ?>
										</div>
									</div>
								</div>
                                <?php
                                if(!empty($overview_content)) {
                                    ?>
                                    <div class="vehicle__overview wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="grid-container full">
                                            <div class="grid-x">
                                                <div class="cell small-12 large-3">
                                                    <div class="vehicle__sub-heading">
                                                        Overview </div>
                                                </div>
                                                <div class="cell small-12 large-auto">
                                                    <div class="vehicle__overview-copy">
                                                        <?php echo $overview_content; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>

								<div class="vehicle__features js-tabs">
									<div class="grid-container full">
										<div class="grid-x">
											<div class="cell small-12 large-3">
												<ul class="vehicle__feature-tabs wow fadeInUp" data-wow-delay="0.3s">
                                                    <?php
                                                    if ( isset($content_option)) {
														$count = 0;
														foreach ( $content_option as $val ) {
															$count++;
															?>
                                                            <li>
                                                                <a class="vehicle__tab-title vehicle__sub-heading js-tab-title active" href="#" data-tab="<?php echo 'tab-' . $count;?>">
																	<?php echo $val['title_option'];?></a>
                                                            </li>
															<?php
														}
                                                    }

                                                    ?>
												</ul>
											</div>
											<div class="cell small-12 large-auto">
												<div class="vehicle__tab-content wow fadeInUp" data-wow-delay="0.5s">
													<?php
                                                    if ( isset($content_option)) {
														$count = 0;
														foreach ( $content_option as $val ) {
															$count++;
															?>
                                                            <div class="vehicle__tab-panel js-tab-panel" data-content="<?php echo 'tab-' . $count;?>">
                                                                <div class="vehicle__feature-title vehicle__sub-heading">
																	<?php echo $val['title_option'];?></div>
                                                                <div class="grid-x grid-margin-x">
																	<?php echo $val['content_option'];?>
                                                                </div>
                                                            </div>
															<?php
														}
                                                    }

													?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vehicle__features js-accordion">
									<div class="grid-container full">
										<div class="grid-x">
											<div class="cell small-12  large-3">
												<div class="vehicle__feature-tabs wow fadeInUp" data-wow-delay="0.3s">
													<?php
                                                    if ( isset($content_option)) {
														$count = 0;
														foreach ( $content_option as $val ) {
															$count++;
															?>
                                                            <div>
                                                                <a class="vehicle__tab-title vehicle__sub-heading js-accordion-title" href="#" data-tab="<?php echo 'tab-' . $count;?>">
																	<?php echo $val['title_option'];?> <i class="far fa-chevron-down"></i>
                                                                </a>
                                                                <div class="vehicle__tab-panel js-accordion-panel" data-content="<?php echo 'tab-' . $count;?>">
                                                                    <div class="vehicle__feature-title vehicle__sub-heading">
																		<?php echo $val['title_option'];?> </div>
																	<?php echo $val['content_option'];?>
                                                                </div>
                                                            </div>
															<?php
														}
                                                    }
													?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="o-flexible-content o-flexible-content--flush ss-sell-sales">
					<div class="grid-container-full">
						<div class="row">
							<div class="col col-1 wow fadeInUp" data-wow-delay="0.3s">
								<div style="background: url('/wp-content/uploads/2023/06/F03C2AE7-ECF1-4AE9-B9A9-34869F4EFBE7-scaled.jpg')">
									<div class="item">
										<h3>SELL YOUR CARS</h3>
										<a href="#"><img src="/wp-content/uploads/2023/06/arrow-2-1.svg" alt="arrow"/></a>
									</div>
								</div>
							</div>
							<div class="col col-2 wow fadeInUp" data-wow-delay="0.3s">
								<div style="background: url('/wp-content/uploads/2023/06/EA0AEA7D-CEDB-4207-B03F-42D77B161D4D-scaled.jpg')">
									<div class="item">
										<h3>AFTER SALES</h3>
										<a href="#"><img src="/wp-content/uploads/2023/06/arrow-2-1.svg" alt="arrow"/></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="" class="section-slider">
					<div class="grid-container-full">
						<div class="row">
							<h2 class="wow fadeInUp" data-wow-delay="0.3s">LASTEST VEHICLES</h2>
							<div class="wrraper__slider wow fadeInUp" data-wow-delay="0.5s">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<?php
										ob_start();
										$args = array(
											'post_type'      => 'product',
											'posts_per_page' => 10,
											'post_status'    => 'publish',
											'orderby' 		 => 'date',
											'order' 		 => 'DESC',
											'post__not_in'   => array($current_product_id)
										);

										$query = new WP_Query($args);

										if ($query->have_posts()) {
											while ($query->have_posts()) {
												$query->the_post();
												$title = get_the_title();
												$product_id = get_the_ID();
												$product = wc_get_product(get_the_ID());
												// Retrieve the "_price" custom field value
												$price = $product->get_price();
												$image = get_the_post_thumbnail($product_id, 'large');
												$thumbnail_id = get_post_thumbnail_id($product_id);
												$thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full')[0];

												?>
												<div class="swiper-slide">
													<a href="<?php echo the_permalink(); ?>">
														<img src="<?php echo $thumbnail_url; ?>" alt="car"/>
														<div class="gr-t-p">
															<h3><?php echo $title; ?></h3>
															<h4>$ <?php echo $price; ?></h4>

														</div>
													</a>
												</div>
												<?php
											}
											wp_reset_postdata();

										}
										?>
									</div>
									<div class="btn-pre-next">
										<div class="swiper-button-prev btn">
                                            <svg width="17" height="13" viewBox="0 0 17 13" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                        d="M6.975 12.025L8.05 10.975L3.85 6.775L17 6.775L17 5.275L3.85 5.275L8.075 1.05L7 5.56363e-07L0.975001 6.025L6.975 12.025Z"
                                                        fill="#F9F9F9" />
                                            </svg>
										</div>
										<div class="swiper-button-next btn">
                                            <svg width="17" height="13" viewBox="0 0 17 13" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                        d="M10.025 12.025L8.95 10.975L13.15 6.775L-3.76936e-07 6.775L-2.93481e-07 5.275L13.15 5.275L8.925 1.05L10 5.56363e-07L16.025 6.025L10.025 12.025Z"
                                                        fill="#F9F9F9" />
                                            </svg>

										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php get_template_part('template-parts/shared', 'customer-reviews'); ?>
			</div>
		</main>
	</div>
<?php
get_footer();
