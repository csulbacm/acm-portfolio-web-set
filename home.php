<html>
	<head>
		<title>Desktop Main Page</title>
		<link rel="stylesheet" href="../shared/css/main.css">
		<link rel="stylesheet" href="css/desktop.css">
		<script src="../shared/js/jquery.js"></script>
	</head>
	<body class="main desktop">
		<div class="wrapper wrapper-over">		
		
			<!-- Over navigation -->
			<nav>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Work</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</nav>
		
			<div class="wrapper wrapper-content">
				<!-- The Index Card -->
				<div class="card card-single" id="main-card">
					<div class="card-image-holder"></div>
					<hgroup>
						<h1>David Nuon</h1>
						<h2>Some person</h2>
					</hgroup>
				</div>						
			</div>
		</div>
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
	</body>
</html>