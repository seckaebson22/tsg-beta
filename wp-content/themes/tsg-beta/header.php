<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link href="http://fonts.cdnfonts.com/css/british-castilla" rel="stylesheet">

		<!-- Header scripts (only essential) -->
		<!--[if lt IE 9]>
		  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script>
		  (function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
		</script>

		<?php wp_head(); ?>
	</head>
	<body>
	<!-- body_class('preloader-enabled'); ?>>
		 get_template_part('components/preloader'); ?> -->
		<div id="skip-to-content" class="screen-reader-text">
			<a href="#site-content"><?php _e('Skip to main content', 'xtheme'); ?></a>
		</div>

		<header id="site-header" class="header" role="banner" aria-label="Main Header">

				<a class="hamburger" href="#" title="Menu">
						<span class="line-1"></span>
						<span class="line-2"></span>
						<span class="line-3"></span>
				</a>



				<div class="header-inner">
						<div class="centering">
								<nav id="left-main-nav" class="main-navigation" role="navigation" aria-label="Main Navigation">
									<?php wp_nav_menu( array('theme_location'  => 'left-main', 'menu_class' => 'menu left-menu', 'container' => false) ); ?>
								</nav>

								<div class="logo">
										<a href="<?php echo site_url(); ?>" title="Back to Homepage">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo" onerror="this.src='<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" aria-label="Xanda Logo">
										</a>
								</div>

								<nav id="right-main-nav" class="main-navigation" role="navigation" aria-label="Main Navigation">
									<?php wp_nav_menu( array('theme_location'  => 'right-main', 'menu_class' => 'menu right-menu', 'container' => false) ); ?>
								</nav>
								<!-- <div class="language-switcher">
										<a href="#" class="active-language icon-right-arrow">ENG</a>
								</div> -->
								<div class="main-navigation mobile-menu">
									<?php wp_nav_menu( array('theme_location'  => 'left-main', 'menu_class' => 'menu left-menu', 'container' => false) ); ?>
									<?php wp_nav_menu( array('theme_location'  => 'right-main', 'menu_class' => 'menu right-menu', 'container' => false) ); ?>
									<!-- <div class="language-switcher">
											<a href="#" class="active-language icon-right-arrow">ENG</a>
									</div> -->
									<?php get_template_part('components/bookmarks'); ?>
								</div>
						</div>

				</div>

		</header>

		<main id="site-content" class="main" role="main" aria-label="Main Content">
			  <h1 class="screen-reader-text"><?php the_title(); ?></h1>
				<?php if (is_page() || is_home() || is_singular('post') && !is_front_page()): ?>
						<?php get_template_part('components/background-image'); ?>
				<?php endif; ?>

				<?php if (is_front_page()): ?>
					<?php get_template_part('components/hero'); ?>
				<?php endif; ?>
