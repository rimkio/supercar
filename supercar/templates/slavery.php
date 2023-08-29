<?php
/*
*   Template Name: Slavery and Human Trafficking Statement
*/
get_header();

?>
	<div class="scroller js-scroller" data-scrollbar="true" tabindex="-1"
		 style="overflow: hidden; outline: none; padding-bottom: 455px;">
		<div class="scroll-content">
			<main role="main">
				<div class="utl-clearfix">
					<div class="grid-container">
						<div class="grid-x align-center">
							<div class="cell small-12 medium-8 s-wysiwyg">
								<h1><?= get_the_title(); ?></h1>
								<p>Download the PDF <a style="text-decoration: underline;"
													   href="/wp-content/uploads/2023/07/aston-martin-vantage-roadster-v12-limited-edition.pdf">here</a>.
								</p>
							</div>
						</div>
					</div>
				</div>
			</main>
			<?php get_template_part('template-parts/global', 'signup'); ?>
		</div>
	</div>
<?php get_footer();
