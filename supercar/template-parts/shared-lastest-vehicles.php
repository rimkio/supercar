<div id="" class="section-slider">
	<div class="grid-container-full">
		<div class="row">
			<h2 class="wow fadeInUp" data-wow-delay="0.3s">LASTEST VEHICLES</h2>
			<div class="wrraper__slider">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php
						$args = array(
							'post_type'      => 'product',
							'posts_per_page' => 10,
							'post_status'    => 'publish',
							'orderby' => 'date',
							'order' => 'DESC',
						);

						$query = new WP_Query($args);

						if ($query->have_posts()) {
							while ($query->have_posts()) {
								$query->the_post();
								$title = get_the_title();
								$product = wc_get_product(get_the_ID());
								// Retrieve the "_price" custom field value
								$price = $product->get_price();
								$image = get_the_post_thumbnail(get_the_ID(), 'full');
								?>
								<div class="swiper-slide wow fadeInUp" data-wow-delay="0.5s">
									<a href="<?php echo the_permalink(); ?>">
                                        <div class="img">
											<?php echo $image; ?>
                                        </div>
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
					<div class="btn-pre-next wow fadeInUp" data-wow-delay="0.7s">
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