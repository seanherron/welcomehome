<!doctype html>
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="description" content="A collection of memories and thoughts on crews from the International Space Station">
	    <meta name="author" content="Sean Herron">

		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
	
	 <!-- Le styles -->
			<!--[if ! lte IE 6]><!-->
				<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles.css">
				<link href='http://fonts.googleapis.com/css?family=Loved+by+the+King' rel='stylesheet' type='text/css'>
			<!--<![endif]-->
		<!--[if lte IE 6]>
			<link rel="stylesheet" href="http://universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
		<![endif]-->
	
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.0.6.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.6.2.min.js"><\/script>')</script>

	<?php wp_head(); ?>
	<?php roots_head(); ?>

	<script defer src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
</head>

<body <?php $page_slug = $post->post_name; body_class($page_slug); ?>>

	<?php roots_wrap_before(); ?>
	<div id="wrap" class="container" role="document">
	<?php roots_header_before(); ?>
		<header id="banner" class="<?php global $roots_options; echo $roots_options['container_class']; ?>" role="banner">
			<?php roots_header_inside(); ?>
			<div class="container">
	
				<a id="logo" href="<?php echo home_url(); ?>/">
					<img src="<?php echo get_header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="<?php bloginfo('name'); ?>">
				</a>
				
				<?php if ($roots_options['clean_menu']) { ?>
					<nav id="nav-main" role="navigation">
						<?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new roots_nav_walker())); ?>
					</nav>
					<?php 					
						$utility_nav = wp_get_nav_menu_object('Utility Navigation');
						$utility_nav_term_id = (int) $utility_nav->term_id;
						$menu_items = wp_get_nav_menu_items($utility_nav_term_id);					
						if ($menu_items || !empty($menu_items)) {
					?>
					<nav id="nav-utility">
						<?php wp_nav_menu(array('theme_location' => 'utility_navigation', 'walker' => new roots_nav_walker())); ?>
					</nav>
					<?php } ?>		
				<?php } else { ?>
					<nav id="nav-main" role="navigation">
						<?php wp_nav_menu(array('theme_location' => 'primary_navigation')); ?>
					</nav>
					<?php 					
						$utility_nav = wp_get_nav_menu_object('Utility Navigation');
						$utility_nav_term_id = (int) $utility_nav->term_id;
						$menu_items = wp_get_nav_menu_items($utility_nav_term_id);					
						if ($menu_items || !empty($menu_items)) {
					?>
					<nav id="nav-utility">
						<?php wp_nav_menu(array('theme_location' => 'utility_navigation')); ?>
					</nav>
					<?php } ?>								
				<?php } ?>
			
			</div>
		</header>
	<?php roots_header_after(); ?>