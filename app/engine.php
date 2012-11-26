<?php
	// Bootstrap and getting this set up
	include_once('bootstrap.php');
	include_once(APPROOT . "helper.php");
	
	// Include all of the classes
	rx_includeAll(APPROOT . '/util/base/');
	rx_includeAll(APPROOT . '/util/');
	rx_includeAll(APPROOT . '/model/');
	rx_includeAll(APPROOT . '/core/');
	rx_includeAll(APPROOT . '/core/handler/');
	rx_includeAll(APPROOT . '/core/template/');

	use \Template\Template as Template;
	use \Util\Router as Router;
	use \Core\Page as Page;

	global $router;
	global $templateData;
	global $pageData;

	// Craete the router that will validate the path
	// that will decide which page to display.

	$urlMap = file_get_contents(APPROOT . '/map.json');
	$router = new Router($urlMap);

?>