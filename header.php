<!doctype html>
<html <?php language_attributes(); ?> class="">
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-58830864-5"></script>

		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-58830864-5');
		</script>

		<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/eb51c155832a6b0545c4101e1/4dd1a0697384fbd88e4637567.js");</script>

		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
				<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>

	<!-- Body -->

	<body <?php body_class(); ?> class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->

				<section id="header">
					<div class="container">
						<a href="<?php echo home_url(); ?>"><img id="lilgoozy" class="" src="<?php echo get_template_directory_uri(); ?>/img/b-o2.svg"></img></a>
						<h1 id="logo"><a href="<?php echo home_url(); ?>">Best Of The Web</a></h1>
						<p>THE FINEST LINKS CURATED DAILY. <a href="<?php echo home_url(); ?>">TELL YOUR GRANDMA</a></p>
						<div class="thedate">
							<p><?php echo current_time('l, M j, Y'); ?></p>
							<p>FNORD EDITION <span><a href="https://twitter.com/metastash"><i class="icon fab fa-twitter"></i></a><a href="https://facebook.com/bestoftheweb"<i class="icon fab fa-facebook"></i></a><a href="https://motorossi.me"><i class="icon fas fa-envelope"></i></a></span></p>
						</div>


						<!--hr-->

					<!-- Nav -->

						<nav id="nav">
							<!--?php BOTWeb_nav(); ?-->
							<ul>
								<li><a href="<?php echo home_url(); ?>/current"><span>the newsletter</span></a></li>
								<li><a href="<?php echo home_url(); ?>"><span>archive</span></a></li>
								<li><a href="<?php echo home_url(); ?>"><span>stories</span></a></li>
								<li><a href="<?php echo home_url(); ?>/the-top-list"><span>the best lists</span></a></li>
								<li><a href="<?php echo home_url(); ?>"><span>past winners</span></a></li>
								<li><a href="https://gmail.us20.list-manage.com/subscribe/post?u=eb51c155832a6b0545c4101e1&amp;id=4a59e96aa3"><span>subscribe</span></a></li>
							</ul>
							<hr>
						</nav>
					</div>
				</section>
