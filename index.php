<?php
/*!
 * \brief The index page for the site, handles url path.
 */

include_once("./app/engine.php");

global $router;
global $templateData;
global $pageData;

$pagePath = '';

// The paths of thte app is stored in the GET field
// page

if (isset ($_GET["page"])) {
    $pagePath = $_GET["page"];   
} else {
    $pagePath = 'index';
}

// We tokenize the path
$pagePath = explode('/', $pagePath);

// We validate the path and then we
// see if the path if valid
if($router->hasPath($pagePath)) {
	echo "This is okay.";
} else {
	throw404();
}