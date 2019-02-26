<?php get_header(); ?>

<section id="main">
	<div class="container">
		<div id="content">

	<article class="box post">
	<!-- section -->

	<h1>1</h1>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<header id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<!--h2>
				<a href="<!?php the_permalink(); ?>" title="<!?php the_title(); ?>"><!?php the_title(); ?></a>
			</h2-->
			<!-- /post title -->
		</header>
			<!-- post details -->
			<!--span class="date"><!?php the_time('F j, Y'); ?> <!?php the_time('g:i a'); ?></span>
			<span class="author"><!?php _e( 'Published by', 'BOTWeb' ); ?> <!?php the_author_posts_link(); ?></span>
			<span class="comments"><!?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'BOTWeb' ), __( '1 Comment', 'BOTWeb' ), __( '% Comments', 'BOTWeb' )); ?></span>
			<! /post details -->

			<div><?php the_content(); // Dynamic Content ?></div>
			<h4><span><a href="https://twitter.com/metastash"><i class="icon fab fa-twitter"></i></a><a href="https://facebook.com/bestoftheweb"<i class="icon fab fa-facebook"></i></a><a href="https://motorossi.me"><i class="icon fas fa-envelope"></i></a></span></h4>

			<!--?php the_tags( __( 'Tags: ', 'BOTWeb' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><!?php _e( 'Categorised in: ', 'BOTWeb' ); the_category(', '); // Separated by commas ?></p>

			<p><!?php _e( 'This post was written by ', 'BOTWeb' ); the_author(); ?></p>

			<!?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<!?php comments_template(); ?>

		<! /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<!--section>

			<h1><!?php _e( 'Sorry, nothing to display.', 'BOTWeb' ); ?></h1>

		<!/section-->
		<!-- /article -->

	<?php endif; ?>

</article>
	<!-- /section -->

</div>
</div>
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
