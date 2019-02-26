<?php get_header(); ?>

	<section id="main">
		<div class="container">
			<div id="content">

			<!-- article -->
			<article class="box post" id="post-404">

				<h1><?php _e( 'Woops--well this is awkward!', 'BOTWeb' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'BOTWeb' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</div>
	</div>
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
