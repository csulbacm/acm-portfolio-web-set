<html>
	<head>
		<title>Desktop Main Page</title>
		<link rel="stylesheet" href="<?php get_theme_url(); ?>/shared/css/main.css">
		<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/desktop.css">
		<script src="../shared/js/jquery.js"></script>
	</head>
		<body class="main desktop" id="<?php get_page_slug(); ?>" >
		<div class="wrapper wrapper-over">		
		
			<!-- Over navigation -->
			<nav>
				<ul>
						<?php get_navigation(get_page_slug(FALSE)); ?>
				</ul>
			</nav>