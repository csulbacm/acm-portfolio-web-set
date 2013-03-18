<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>

<html>
	<head>
  <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	<meta name="robots" content="index, follow">

  
		<link rel="stylesheet" href="<?php get_theme_url(); ?>/shared/css/main.css">
		<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/desktop.css">
		<script src="../shared/js/jquery.js"></script>

			<?php get_header(); ?>

	</head>
		<body class="main desktop" id="<?php get_page_slug(); ?>" >
		<div class="wrapper wrapper-over">		
		
			<!-- Over navigation -->
			<nav>
				<ul>
						<?php get_navigation(get_page_slug(FALSE)); ?>
				</ul>
			</nav>