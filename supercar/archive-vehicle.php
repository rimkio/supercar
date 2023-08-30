<?php



get_header();

$make = isset($_GET['make']) ? $_GET['make'] : '';

$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : '';





?>

	<div class="used-c">

		<div class="vehicle-archive">

			<div class="grid-container">

				<div class="grid-x">

					<div class="cell small-12">

						<div class="vehicle-archive__head">

							<h1>Our Cars</h1>

						</div>

						<div class="vehicle-archive__filter">

							<div class="grid-container full">

								<div class="grid-x align-center">

									<div class="cell vehicle-archive__search-container">

										<form action="" method="get" class="vehicle-archive__search-form">

											<input id="jsInputType" type="search" class="vehicle-archive__search js-car-selector__search_placeholder js-car-selector__search_archive" name="search" placeholder="Search our cars" value="" autocomplete="off">

											<input type="hidden" name="orderby" value="highest-first">

										</form>

									</div>

								</div>

							</div>

							<div class="grid-container full">

								<div class="grid-x align-center">

									<div class="cell small-12 large-4 medium-5">

										<div class="grid-container full">

											<div class="grid-x grid-padding-x">

												<div class="cell small-6 medium-6">

													<div class="c-dropdown hight-low">

                                                    <span class="c-dropdown__label">

                                                        All makes

                                                    </span>

														<div data-archive="/used-cars/" data-value="" class="js-dropdown__archive-filter c-dropdown__results" data-filter="make">

															<a data-option="make" data-filter="all-makes" class="">

																All makes

															</a>

															<?php

															$taxonomy = 'product_cat';  // Replace with the slug of your taxonomy



															$terms = get_terms(array(

																'taxonomy' => $taxonomy,

																'hide_empty' => false,

															));

															usort($terms, function($a, $b) {

																return strcasecmp($a->name, $b->name);  // Case-insensitive string comparison

															});

															if (!empty($terms)) {

																foreach ($terms as $term) {

																	$term_slug = $term->slug;

																	$term_title = $term->name;

																	?>

																	<a class="" data-option="make"

																	   data-filter="<?php echo $term_slug;?>"><?php echo $term_title;?></a>

																	<?php

																}

															}



															?>

														</div>

													</div>

												</div>

												<div class="cell small-6 medium-6">

													<div class="c-dropdown">

                                                    <span class="c-dropdown__label">

                                                        Highest price first

                                                    </span>

														<div class="js-dropdown__archive-filter c-dropdown__results">

															<a data-option="orderby" data-filter="highest-first" class="">

																Highest price first

															</a>

															<a data-option="orderby" data-filter="lowest-first" class="">

																Lowest price first

															</a>

															<a data-option="orderby" data-filter="latest" class="">

																Latest first

															</a>

															<a data-option="orderby" data-filter="oldest" class="">

																Oldest first

															</a>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>

								</div>

							</div>

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

						<div class="js-archive js-archive-initial">

							<div class="vehicle-archive__grid vehicle-archive__grid--four js-archive-wrapper">

								<?php

								$args = array(

									'post_type' => 'product',

									'posts_per_page' => -1,

									'meta_query' => array(

										array(

											'key' => '_stock_status',

											'value' => 'outofstock',

											'compare' => 'NOT LIKE', // Exclude out of stock products

										),

									),

								);



								if ( !empty($make) ) {

									$make = str_replace('.', '', $make);

									$category = get_term_by('slug', $make, $taxonomy);

									$args = array(

										'post_type' => 'product',

										'posts_per_page' => -1, // Display all products in the category

										'tax_query' => array(

											array(

												'taxonomy' => $taxonomy,

												'field' => 'term_id',

												'terms' => $category->term_id, // Term ID of the category

											),

										),

										'meta_query' => array(

											array(

												'key' => '_stock_status',

												'value' => 'outofstock',

												'compare' => 'NOT LIKE', // Exclude out of stock products

											),

										),

									);

									if ( $orderby == 'highest-first' ) {

										$args = array(

											'post_type' => 'product',

											'posts_per_page' => -1,

											'orderby' => 'meta_value_num',

											'meta_key' => '_price',

											'order' => 'DESC',

											'tax_query' => array(

												array(

													'taxonomy' => $taxonomy,

													'field' => 'term_id',

													'terms' => $category->term_id, // Term ID of the category

												),

											),

											'meta_query' => array(

												array(

													'key' => '_stock_status',

													'value' => 'outofstock',

													'compare' => 'NOT LIKE', // Exclude out of stock products

												),

											),

										);

									} elseif ( $orderby == 'lowest-first' ) {

										$args = array(

											'post_type' => 'product',

											'posts_per_page' => -1,

											'orderby' => 'meta_value_num',

											'meta_key' => '_price',

											'order' => 'ASC',

											'tax_query' => array(

												array(

													'taxonomy' => $taxonomy,

													'field' => 'term_id',

													'terms' => $category->term_id, // Term ID of the category

												),

											),

											'meta_query' => array(

												array(

													'key' => '_stock_status',

													'value' => 'outofstock',

													'compare' => 'NOT LIKE', // Exclude out of stock products

												),

											),

										);

									} elseif ( $orderby == 'latest' ) {

										$args = array(

											'post_type' => 'product',

											'posts_per_page' => -1,

											'orderby' => 'date',

											'order' => 'DESC',

											'tax_query' => array(

												array(

													'taxonomy' => $taxonomy,

													'field' => 'term_id',

													'terms' => $category->term_id, // Term ID of the category

												),

											),

											'meta_query' => array(

												array(

													'key' => '_stock_status',

													'value' => 'outofstock',

													'compare' => 'NOT LIKE', // Exclude out of stock products

												),

											),

										);

									} elseif ( $orderby == 'oldest' ) {

										$args = array(

											'post_type' => 'product',

											'posts_per_page' => -1,

											'orderby' => 'date',

											'order' => 'ASC',

											'tax_query' => array(

												array(

													'taxonomy' => $taxonomy,

													'field' => 'term_id',

													'terms' => $category->term_id, // Term ID of the category

												),

											),

											'meta_query' => array(

												array(

													'key' => '_stock_status',

													'value' => 'outofstock',

													'compare' => 'NOT LIKE', // Exclude out of stock products

												),

											),

										);

									}

								}



								if ( !empty($_GET['search']) ) {

									$args = array(

										'post_type' => 'product',  // Specify the post type as 'vehicle'

										'posts_per_page' => -1,    // Retrieve all posts

										's' => isset($_GET['search']) ? $_GET['search'] : '',

										'orderby' => 'date',

										'order' => 'DESC',

										'meta_query' => array(

											array(

												'key' => '_stock_status',

												'value' => 'outofstock',

												'compare' => 'NOT LIKE', // Exclude out of stock products

											),

										),

									);

								}



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



										?>

										<div class="grid-item <?php echo $category_slug; ?>" data-column="" data-category="<?php echo $category_slug; ?>" data-name="<?php echo $title; ?>">

											<a href="<?php echo the_permalink(); ?>" class="c-vehicle c-vehicle--listed js-static--listed js-cursor-more js-tilt">

                                        <span class="c-vehicle__image display-block" data-large="<?php echo $thumbnail; ?>" data-small="<?php echo $thumbnail; ?>">

                                            <img alt="<?php echo $title; ?>" data-src="<?php echo $thumbnail; ?>" class=" lazyloaded" src="<?php echo $thumbnail; ?>">

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

                                                            $<?php echo $price; ?> </span>

                                                    </span>

                                                    <p class="price" style="display:none;"><?php echo $price; ?></p>

                                                        <p class="time" style="display:none;"><?php echo intval(strtotime($post_date)); ?></p>

                                                </span>

                                            </span>

                                        </span>

											</a>

										</div>

										<?php

									}

									wp_reset_postdata();

								} else {

									echo 'No vehicles found.';

								}

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

