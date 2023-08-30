<?php
/*
*   Template Name: Category for Sale
*/
get_header();
$select_category = get_field('select_category');
if ( !isset( $select_category ) )
	return;
?>
	<div class="scroller js-scroller">
		<div class="post-type-archive-vehicle">
			<div class="vehicle-archive">
				<div class="grid-container">
					<div class="grid-x">
						<div class="cell small-12">
							<div class="vehicle-archive__head">
								<h1><?= $select_category[0]->name; ?> for sale</h1>
								<p class="des"><?= the_content(); ?></p>
							</div>

							<div class="sorter">
								<a class="square-collect active" data-state="active" data-sort="grid">
									<span class="square"></span>
									<span class="square"></span>
									<span class="square"></span>
									<span class="square"></span>
								</a>
								<a class="square-collect" data-sort="list">
									<span class="square"></span>
									<span class="square"></span>
								</a>
							</div>
							<div class="js-archive-sold" data-count="625">
								<div class="vehicle-archive__grid vehicle-archive__grid--four">
									<?php
									$args = array(
										'post_type' => 'product',
										'posts_per_page' => -1,
										'product_cat' => $select_category[0]->slug
									);

									$query = new WP_Query($args);

									if ($query->have_posts()) {
										while ($query->have_posts()) {
											$query->the_post();

											// Retrieve post title
											$title = get_the_title();

											// Retrieve post thumbnail URL
											$thumbnail = get_the_post_thumbnail_url();
											$product = wc_get_product(get_the_ID());
											// Retrieve the "_price" custom field value
											$price = $product->get_price();
											$categories = get_the_category(get_the_ID());
											$terms = get_the_terms($post_id, 'product_cat');
											$category_slug = $terms[0]->slug;
											$post_date = get_post_field('post_date', get_the_ID());
											$formatted_date = date('Y-m-d H:i:s', strtotime($post_date));
											$product_id = get_the_ID();
											$sale_price = get_post_meta($product_id, '_sale_price', true);
											$product_id = get_the_ID();
											$sale_price = get_post_meta($product_id, '_sale_price', true);

											if ($sale_price !== '') {
												?>

												<div class="grid-item <?php echo $category_slug; ?>" data-column=""
													 data-category="<?php echo $category_slug; ?>"
													 data-name="<?php echo $title; ?>">
													<a href="<?php echo the_permalink(); ?>"
													   class="c-vehicle c-vehicle--listed js-static--listed js-cursor-more js-tilt">
                                        <span class="c-vehicle__image display-block"
											  data-large="<?php echo $thumbnail; ?>"
											  data-small="<?php echo $thumbnail; ?>">
                                            <img alt="<?php echo $title; ?>" data-src="<?php echo $thumbnail; ?>"
												 class=" lazyloaded" src="<?php echo $thumbnail; ?>">
                                        </span>
														<span class="c-vehicle__detail ">
                                            <span class="grid-container full">
                                                <span class="grid grid-x align-justify">
                                                    <span class="cell small-7">
                                                        <h5 class="c-vehicle__heading">
                                                            <?php echo $title; ?> </h5>
                                                    </span>
                                                    <span class="cell small-5">
                                                        <span class="c-vehicle__price">
                                                            $ <?= $price; ?> </span>
                                                    </span>
                                                    <p class="price" style="display:none;"><?php echo $price; ?></p>
                                                        <p class="time"
														   style="display:none;"><?php echo intval(strtotime($post_date)); ?></p>
                                                </span>
                                            </span>
                                        </span>
													</a>
												</div>
												<?php
											}
										}
										wp_reset_postdata();
									} else {
										echo 'No vehicles found.';
									}
									?>
								</div>
							</div>
							<div class="used-manufacturer__container" style="padding-bottom: 80px;">
								<h2 class="used-manufacturer__title">We specialise in used <?= $select_category[0]->name; ?></h2>
								<div class="used-manufacturer__content">
									<?= get_field('bottom_description');?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part('template-parts/global', 'signup'); ?>
	</div>


<?php get_footer();
