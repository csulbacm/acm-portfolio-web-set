<?php include_once('inc/top.php'); ?>

		
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