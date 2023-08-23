<?php
get_header();
?>

<div class="scroller js-scroller">
	<main class="error-404" role="main">
		<div class="o-flexible-content o-flexible-content--flush">
			<div class="o-hero o-hero--fill o-hero--v-centered o-hero--x-centered js-parallax">
				<div class="grid-container">
					<div class="grid-x align-center">
						<div class="cell small-12 medium-8">
							<div class="o-hero__inner js-parallax__element" data-parallax-y="-10" >
								<div class="o-hero__heading">
									<h1>
										Page not found
									</h1>
									<p>We couldn't find what you were looking for.</p>
									<a href="/" class="c-button c-button--alpha"><span>Go Home</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php get_template_part('template-parts/global', 'signup'); ?>
</div>
<?php
get_footer();
