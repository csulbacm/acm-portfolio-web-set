<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>

<html>
	<head>
  <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	<meta name="robots" content="index, follow">

  
		<link rel="stylesheet" href="<?php get_theme_url(); ?>/shared/css/main.css">
		<link rel="stylesheet" href="<?php get_theme_url(); ?>/css/desktop.css">
		<script src="<?php get_theme_url(); ?>/shared/js/jquery.js"></script>

		<script>
			$( function () {
				$("<select />").appendTo('nav');

					// Create default option "Go to..."
				$("<option />", {
				"selected": "selected",
				"value"   : "",
				"text"    : "Go to..."
				}).appendTo("nav select");

				// Populate dropdown with menu items
				$("nav a").each(function() {
				var el = $(this);
				$("<option />", {
					"value"   : el.attr("href"),
					"text"    : el.text()
					}).appendTo("nav select");
				});

				$("nav select").change(function() {
  					window.location = $(this).find("option:selected").val();
				});
			});


		</script>

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