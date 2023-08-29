<?php
/*
*   Template Name: privacy
*/
get_header();

?>
	<div class="scroller js-scroller" data-scrollbar="true" tabindex="-1"
		 style="overflow: hidden; outline: none; padding-bottom: 580px;">
		<div class="scroll-content" style="transform: translate3d(0px, 0px, 0px);">
			<main role="main">
				<div class="utl-clearfix">
					<div class="grid-container">
						<div class="grid-x align-center">
							<div class="cell small-12 medium-8 s-wysiwyg">
								<?= the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</main>
			<?php get_template_part('template-parts/global', 'signup'); ?>
		</div>
	</div>
<?php get_footer();
