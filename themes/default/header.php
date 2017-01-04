<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">


<!--		<title>The Calm Website Template | Blog :: w3layouts</title>-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<!--		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />-->




<!--		<link rel="stylesheet" href="--><?php //echo theme_url('/css/reset.css'); ?><!--">-->
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
<!--		<link rel="stylesheet" href="--><?php //echo theme_url('/css/small.css'); ?><!--" media="(max-width: 400px)">-->

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>

	    <meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo page_title(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo page_description(); ?>">

		<?php if (customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body class="<?php echo body_class(); ?>">

	<div class="header_bg">
		<div class="wrap">
			<div class="header">
				<div class="logo">
					<h1>
						<a href="index.html"><img src="<?php echo theme_url('/img/logo.png'); ?>" alt="" /></a>
					</h1>
				</div>
				<div class="h_right">
					<ul class="menu">
						<li><a href="index.html">home</a></li>
						<li><a href="about.html">about</a></li>
						<li><a href="portfolio.html">portfolio</a></li>
						<li class="active"><a href="blog.html">blog</a></li>
						<li><a href="contact.html">contact</a></li>
					</ul>
					<div id="sb-search" class="sb-search">
						<form id="search" action="<?php echo search_url(); ?>" method="post">
							<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="term" id="search">
							<input class="sb-search-submit" id="whatSearch" name="whatSearch" value="all" type="submit" value="">
							<span class="sb-icon-search"></span>
						</form>
					</div>
					<script src="<?php echo theme_url('/js/classie.js'); ?>"></script>
					<script src="<?php echo theme_url('/js/uisearch.js'); ?>"></script>
					<script>
						new UISearch( document.getElementById( 'sb-search' ) );
					</script>
					<!-- start smart_nav * -->
					<nav class="nav">
						<ul class="nav-list">
							<li class="nav-item"><a href="index.html">Home</a></li>
							<li class="nav-item"><a href="about.html">About</a></li>
							<li class="nav-item"><a href="portfolio.html">Portfolio</a></li>
							<li class="nav-item"><a href="blog.html">Blog</a></li>
							<li class="nav-item"><a href="contact.html">Contact</a></li>
							<div class="clear"></div>
						</ul>
					</nav>
					<script type="text/javascript" src="<?php echo theme_url('/js/responsive.menu.js'); ?>"></script>
					<!-- end smart_nav * -->
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="slider_bg">
		<div class="wrap">
			<div class="slider">
				<h2>blog</h2>
				<h3>What we Think, latest news</h3>
			</div>
		</div>
	</div>

