<?php
get_header();
?>
<div class="scroller js-scroller">
	<main role="main">
		<div class="utl-clearfix">
			<div class="grid-container">
				<div class="grid-x align-center">
					<div class="cell small-12 medium-8 s-wysiwyg">
						<?php get_the_content() ?>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php get_template_part('template-parts/global', 'signup'); ?>
</div>
<?php
get_footer();
