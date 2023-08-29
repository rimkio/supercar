<?php get_header();
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
$link_video = get_field('link_video');
if ( !empty($link_video) ) {
    ?>
    <div class="reveal-overlay"><div class="reveal large c-vehicle-modal js-vehicle-modal" id="vehicle-video" data-reveal="403osz-reveal" role="dialog" aria-hidden="true" data-yeti-box="vehicle-video" data-resize="vehicle-video">
            <div class="c-vehicle-modal__inner">
                <button class="c-vehicle-modal__close-button close-button js-vehicle-stop" data-close="" aria-label="Close modal" type="button">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="c-vehicle-modal__iframe js-vehicle-modal__iframe">
                    <iframe title="<?php echo $title; ?>" src="<?= $link_video; ?>" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"></iframe> </div>
            </div>
        </div>
    </div>
    <?php
}
?>

	<div class="scroller js-scroller">
		<div class="vehicle">
			<div class="vehicle__slider">
				<div class="c-coverflow js-coverflow js-lightbox">
					<div class="grid-container">
						<div class="grid-x">
							<div class="cell">
								<ul class="c-gallery-nav js-coverflow">
									<li class="c-gallery-nav__li">
										<a href="#" data-section-link="exterior" class="c-gallery-nav__link js-coverflow__link is-active">
											Exterior </a>
									</li>
									<li class="c-gallery-nav__li">
										<a href="#" data-section-link="interior" class="c-gallery-nav__link js-coverflow__link ">
											Interior </a>
									</li>
									<li class="c-gallery-nav__li">
										<a href="#" class="c-gallery-nav__link" data-open="vehicle-video" aria-controls="vehicle-video" aria-haspopup="dialog" tabindex="0">
											Video </a>
									</li>
								</ul>
								<div class="c-coverflow__slider-container">
                                    <?php
									$exterior = get_field('exterior');
									$interior = get_field('interior');
                                    if ( isset($exterior) && isset($interior)) {
										$countEx = count($exterior);
										$countIn = count($interior);

										?>
                                        <div class="swiper-container c-coverflow__slider js-coverflow__slider swiper-container-coverflow swiper-container-3d swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                            <div class="swiper-wrapper" id="swiper-wrapper-d6d17eeb8dd8d5b3"
                                                 aria-live="polite"
                                                 style="transition-duration: 0ms; transform: translate3d(-2102.86px, 0px, 0px);" data-exterior="<?php echo $countEx / 2; ?>" data-interior="<?php echo $countEx + $countIn / 2; ?>">
												<?php
                                                $total = $countEx + $countIn;
                                                $i = 0;

												foreach ( $exterior as $value ) {
												    $count = $i++;
													?>
                                                    <div class="swiper-slide js-coverflow__slide" data-post="<?= $current_product_id; ?>"
                                                         data-slide="exterior" data-slide-index="<?= $count; ?>" role="group"
                                                         aria-label="<?= $count; ?> / <?= $total; ?>">
                                                        <div class="c-coverflow__slide c-coverflow__slide--image js-cursor-more">
                                                            <div class="js-lightbox__element">
                                                            <img alt="<?php echo $value["title"];?>"
                                                                 src="<?php echo $value["url"]; ?>" data-src="<?php echo $value["url"]; ?>"/>
                                                            </div>
                                                        </div>
                                                    </div>
													<?php
												}

                                                $j = 1;
												foreach ( $interior as $values ) {
													$totalEx = $countEx + $count;
													$j++;
													?>
                                                    <div class="swiper-slide js-coverflow__slide js-cursor-more" data-slide="interior" data-post="<?= $current_product_id; ?>" data-slide-index="<?= ($count + $j - 1); ?>" role="group" aria-label="<?= $countEx + $count; ?> / <?= $total; ?>">
                                                        <div class="c-coverflow__slide c-coverflow__slide--image js-cursor-more">
                                                            <div class="js-lightbox__element">
                                                            <img alt="<?php echo $values["title"];?>"
                                                                 src="<?php echo $values["url"]; ?>" data-src="<?php echo $values["url"]; ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
													<?php
												}
												?>

                                            </div>
                                            <div class="c-coverflow__slider-controls mobile">
                                                <div class="c-control c-control--left js-coverflow__prev swiper-button-disabled"
                                                     tabindex="0" role="button" aria-label="Previous slide"
                                                     aria-controls="swiper-wrapper-d6d17eeb8dd8d5b3"
                                                     aria-disabled="false"></div>
                                                <div class="c-control c-control--right js-coverflow__next" tabindex="0"
                                                     role="button" aria-label="Next slide"
                                                     aria-controls="swiper-wrapper-d6d17eeb8dd8d5b3"
                                                     aria-disabled="false"></div>
                                            </div>
                                            <div class="c-coverflow__slider-controls desktop">
                                                <div class="c-link-container c-left-link js-coverflow__prev swiper-button-disabled"
                                                     tabindex="0" role="button" aria-label="Previous slide"
                                                     aria-controls="swiper-wrapper-d6d17eeb8dd8d5b3"
                                                     aria-disabled="false">
                                                    <div class="c-control c-control--left"></div>
                                                </div>
                                                <div class="c-link-container c-left-right js-coverflow__next"
                                                     tabindex="0" role="button" aria-label="Next slide"
                                                     aria-controls="swiper-wrapper-d6d17eeb8dd8d5b3"
                                                     aria-disabled="false">
                                                    <div class="c-control c-control--right"></div>
                                                </div>
                                            </div>
                                            <span class="swiper-notification" aria-live="assertive"
                                                  aria-atomic="true"></span>
                                        </div>
										<?php
									}
                                        ?>
								</div>
								<div class="c-coverflow__slider-footer">
									<div class="grid-container full">
										<div class="grid-x align-bottom align-justify">
											<div class="cell shrink">
												<div class="c-coverflow__slide-count">
												</div>
											</div>
											<div class="cell shrink">
												<a data-post="<?= $current_product_id; ?>" data-key="1" class="c-coverflow__open js-slide-footer js-lightbox__trigger_individual">
													GALLERY </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="o-flexible-content o-flexible-content--spaced-below">
				<div class="js-sticky-bar c-sticky-bar">

					<div class="vehicle__details js-sticky-bar__inner c-sticky-bar__inner" style="">
						<div class="grid-container">
							<div class="grid-x grid-margin-x vehicle__details-grid-container">
								<div class="cell small-12 large-5">
									<h1 class="vehicle__title">
										<?php echo $title; ?>
										<span class="vehicle__price">
                                        $ <?php echo $price; ?> </span>
									</h1>
									<a onclick="window.history.back()" class="vehicle__back">
										<i class="fal fa-long-arrow-left"></i>
									</a>
								</div>
								<div class="cell small-12 large-7">
									<ul class="vehicle__tabs grid-x">
                                        <?php
                                            if (!isset($enquire[0])) {
                                        ?>
                                            <li class="vehicle__tab small-6 medium-auto">
                                                <a data-car="<?= $title; ?>" href="#" class="vehicle__tab-link js-vehicle-enquiry-canvas">
                                                    Enquire </a>
                                            </li>
                                        <?php
                                            }
                                            if (!isset($disable_reserve_online[0])) {
                                        ?>
										<li class="vehicle__tab small-6 medium-auto">
											<div id="ReserveVehicle">
												<a id="cw-reserve-ReserveVehicle" class="cw-journey-launcher cw-reserve cw-vehicle-available cw-no-view-count" target="_blank" href="#" style="white-space: normal;"><span class="cw-text-content">Reserve Online</span><span class="cw-view-count"></span></a>
											</div>
										</li>
                                        <?php
                                        }
                                        if (!isset($disable_request_video[0])) {
                                         ?>
                                            <li class="vehicle__tab small-6 medium-auto">
                                                <a data-car="<?= $title; ?>" href="?enquiry=Video" class="vehicle__tab-link js-contact-canvas">
                                                    Request Video </a>
                                            </li>
                                            <?php
                                        }
										?>
<!--										<li class="vehicle__tab small-6 medium-auto">-->
<!--											<a class="vehicle__tab-link js-scroll-to" href="#financecalculator">-->
<!--												Finance Calculator </a>-->
<!--										</li>-->
										<li class="vehicle__tab small-12 medium-auto">
											<ul class="vehicle__actions">
                                                <?php
                                                if ( !empty($link_pdf)) {
                                                ?>
                                                    <li class="vehicle__action">
                                                        <a class="vehicle__tab-link js-printpdf" href="#" data-id="<?= $current_product_id; ?>"><svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12.7077 4V1.25H5.29102V4H4.04102V0H13.9577V4H12.7077ZM14.3952 7.22917C14.5618 7.22917 14.7077 7.16667 14.8327 7.04167C14.9577 6.91667 15.0202 6.77083 15.0202 6.60417C15.0202 6.4375 14.9577 6.29167 14.8327 6.16667C14.7077 6.04167 14.5618 5.97917 14.3952 5.97917C14.2285 5.97917 14.0827 6.04167 13.9577 6.16667C13.8327 6.29167 13.7702 6.4375 13.7702 6.60417C13.7702 6.77083 13.8327 6.91667 13.9577 7.04167C14.0827 7.16667 14.2285 7.22917 14.3952 7.22917ZM12.7077 13.75V9.75H5.29102V13.75H12.7077ZM13.9577 15H4.04102V11.3333H0.666016V6.20833C0.666016 5.58264 0.877821 5.05816 1.30143 4.6349C1.72504 4.21163 2.24935 4 2.87435 4H15.1243C15.75 4 16.2745 4.21163 16.6978 4.6349C17.121 5.05816 17.3327 5.58264 17.3327 6.20833V11.3333H13.9577V15ZM16.0827 10.0833V6.20385C16.0827 5.92906 15.9908 5.70139 15.8072 5.52083C15.6235 5.34028 15.3959 5.25 15.1243 5.25H2.87435C2.60282 5.25 2.37522 5.34184 2.19154 5.52552C2.00786 5.7092 1.91602 5.93681 1.91602 6.20833V10.0833H4.04102V8.5H13.9577V10.0833H16.0827Z" fill="#E8E8E8"/>
                                                            </svg></a>
                                                    </li>
                                                <?php
                                                }
                                                ?>
												<li class="vehicle__action">
													<a class="vehicle__tab-link social" href="#"></a>
													<div class="share-reveal">
														<ul>
															<li class="email">
																<a target="_blank" href="#" title="<?= $title; ?>" rel=" nofollow">
																<i class="fas fa-envelope-square"></i>
																</a>
															</li>
															<li class="facebook">
																<a target="_blank" href="#" title="Facebook" rel="nofollow">
																	<i class="fab fa-facebook-square"></i>
																</a>
															</li>
															<li class="twitter">
																<a target="_blank" href="#" title="Twitter" rel="nofollow">
																	<i class="fab fa-twitter-square"></i>
																</a>
															</li>
															<li class="youtube">
																<a target="_blank" href="#" title="YouTube" rel="nofollow">
																	<i class="fab fa-youtube-square"></i>
																</a>
															</li>
															<li class="instagram">
																<a target="_blank" href="#" title="Instagram" rel="nofollow">
																	<i class="fab fa-instagram-square"></i>
																</a>
															</li>
														</ul>
													</div>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="o-flexible-content o-flexible-content--spaced-flush">
				<div class="grid-container">
					<div class="grid-x">
						<div class="cell small-12 medium-auto">
							<div class="vehicle__data">
								<div class="grid-container full">
									<div class="grid-x align-justify">
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
							<div class="vehicle__overview">
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
											<ul class="vehicle__feature-tabs">
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
<!--												<li>-->
<!--													<a class="vehicle__tab-title vehicle__sub-heading js-tab-title active" href="#" data-tab="optional">-->
<!--														Optional Features </a>-->
<!--												</li>-->
<!--												<li>-->
<!--													<a class="vehicle__tab-title vehicle__sub-heading js-tab-title" href="#" data-tab="standard">-->
<!--														Standard Features </a>-->
<!--												</li>-->
<!--												<li>-->
<!--													<a class="vehicle__tab-title vehicle__sub-heading js-tab-title" href="#" data-tab="preparation">-->
<!--														Preparation </a>-->
<!--												</li>-->
											</ul>
										</div>
										<div class="cell small-12 large-auto">
											<div class="vehicle__tab-content">
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
											<div class="vehicle__feature-tabs">
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
												<div>
													<a class="vehicle__tab-title vehicle__sub-heading js-accordion-title" href="#" data-tab="standard">
														Standard Features <i class="far fa-chevron-down"></i>
													</a>
													<div class="vehicle__tab-panel js-accordion-panel" data-content="standard" style="display: none;">
														<div class="vehicle__feature-title vehicle__sub-heading">
															Standard Features </div>
														<div class="vehicle__feature-list--column">
															<p>Limited slip differential</p>
															<p>Adaptive damping system with Skyhook</p>
															<p>Carbon ceramic brakes</p>
															<p>Carbon fibre clamshell bonnet with integrated horseshoe vent</p>
															<p>LED headlights and taillights</p>
															<p>Dynamic torque vectoring</p>
															<p>Dynamic stability control</p>
															<p>Heated seats</p>
															<p>Cruise control</p>
														</div>
														<div class="vehicle__feature-list--column">
															<p>360 camera</p>
															<p>Keyless entry</p>
															<p>Integrated satellite navigation system</p>
															<p>DAB radio</p>
															<p>iPod and iPhone integration and USB playback</p>
															<p>Heated rear screen</p>
															<p>Memory seats</p>
															<p>Auto parking (parallel and bay)</p>
															<p>Lightweight carpeted cabin</p>
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
				</div>
			</div>

			<div id="" class="o-flexible-content ">
				<div class="o-featured o-featured--posts">
					<div class="grid-container">
						<div class="grid-x align-center">
							<div class="cell small-12 medium-6">
								<a href="/sell-your-car/" class="o-featured__inner js-cursor-link">
									<div class="o-featured__image">
										<img src="/wp-content/uploads/2023/08/aftersales_rollsroyce1rr.jpg" alt="" />
										<div class="overlay">
											<div class="overlay-inner">
												<h3 class="o-featured__title">
													Sell Your Car </h3>
												<div class="c-control c-control--right"></div>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="cell small-12 medium-6">
								<a href="/aftersales/" class="o-featured__inner js-cursor-link">
									<div class="o-featured__image">
										<img alt="" src="/wp-content/uploads/2023/08/lambo_hero-768x768-1.png" />
										<div class="overlay">
											<div class="overlay-inner">
												<h3 class="o-featured__title">
													Aftersales </h3>
												<div class="c-control c-control--right"></div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
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
												<div class="swiper-wrapper" id="swiper-wrapper-dae165b9276a1107f" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-1792px, 0px, 0px);">
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
			<?php get_template_part('template-parts/shared', 'customer-reviews'); ?>
		</div>
		<script>
            const ReserveVehicle = document.querySelector('#ReserveVehicle');
            ReserveVehicle.addEventListener("click", () => {
                fbq('track', 'ReserveClick');
            })
		</script>
		<?php get_template_part('template-parts/global', 'signup'); ?>
	</div>
<?php get_footer(); ?>