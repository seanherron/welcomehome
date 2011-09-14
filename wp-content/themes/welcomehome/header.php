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
				<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/styles.css">
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

	<div id="body-container" class="clearfix">
		<header id="title" class="clearfix">
			<h1><a href="/">Welcome Home</a></h1>
			<p>A collection of memories and thoughts for crews from the International Space Station</p>
		</header>