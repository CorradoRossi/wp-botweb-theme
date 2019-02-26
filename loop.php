<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article class="box post" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

		<h3><?php the_time('M j'); ?></h3>
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

		<h4><span><a href="https://twitter.com/metastash"><i class="icon fab fa-twitter"></i></a><a href="https://facebook.com/bestoftheweb"<i class="icon fab fa-facebook"></i></a><a href="https://motorossi.me"><i class="icon fas fa-envelope"></i></a></span></h4>

		<hr>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article class="box post">
		<h2><?php _e( 'Sorry, nothing to display.', 'BOTWeb' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
