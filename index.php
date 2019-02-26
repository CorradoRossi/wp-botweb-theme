<?php get_header(); ?>

	<section id="main">
		<div class="container">
			<div id="content">

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>
	</div>
</section>

<!--?php get_sidebar(); ?-->

<?php get_footer(); ?>
