<?php
/*
	Template Name: Current Post
*/
?>
<?php get_header(); ?>

<section id="main">
	<div class="container">
		<div id="content">

	<article class="box post">

    <h1>1</h1>

    <header id="post-">


		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=1' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		
		<!--?php the_excerpt(); ?-->
    <?php the_content(); // Dynamic Content ?>

    </header>

    <!--div><!?php the_content(); // Dynamic Content ?></div-->
    <h4><span><a href="https://twitter.com/metastash"><i class="icon fab fa-twitter"></i></a><a href="https://facebook.com/bestoftheweb"<i class="icon fab fa-facebook"></i></a><a href="https://motorossi.me"><i class="icon fas fa-envelope"></i></a></span></h4>

		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</article>

</div>
</div>
</section>

<?php get_footer(); ?>
