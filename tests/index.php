<?php
	define("FILEROOT", dirname(dirname(__FILE__)));
	define("APPROOT", FILEROOT . "/app/");

	include_once APPROOT . "helper.php";
	rx_includeAll(APPROOT . '/util/base/');
	rx_includeAll(APPROOT . '/util/');
	rx_includeAll(APPROOT . '/model/');
	rx_includeAll(APPROOT . '/core/');
	rx_includeAll(APPROOT . '/core/handler/');
	rx_includeAll(APPROOT . '/core/template/');

	rx_includeAll(dirname(__FILE__) . '/ut/');
?>

<html>
	<head>
		<title>
			Does it work?
		</title>
		<style type="text/css">
		 body
		{
			background: #ddd;
		}

		div.note	
		{
			-webkit-transform:rotate(-1deg);
			margin:150px auto 0 auto;
			width:340px;
			padding: 30px;
			box-shadow:rgba(0,0,0, .2) 0px 7px 12px;
			border-radius: 15px;
			font-family:Arial, Helvetica, sans-serif;
			background: #fff;
			text-align: center;
			border:1px #ddd solid;
		}
		</style>	
	</head>
	<body>
		<div>
			<h1 style="font-weight:normal;">Yes, everything works.</h1>
			<p><small>Move on, nothing to see here.</small></p>	
		</div>
	</body>
</html>