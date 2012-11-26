<?php

$siteRoot = 'http://'. $_SERVER['HTTP_HOST'];

if(dirname($_SERVER['SCRIPT_NAME']) !== '/') {
	$siteRoot = $siteRoot . dirname($_SERVER['SCRIPT_NAME']) . '/';
} else {
	$siteRoot = $siteRoot . '/';
}


define('REWRITE', true);

define('INCPATH', dirname(__FILE__));
define('FILEROOT', dirname(dirname(__FILE__)) ); 
define('DATAPATH', FILEROOT . "/data/");

define('SITEROOT', $siteRoot);

define('IMAGESDIR', SITEROOT . 'static/global/img/');
define('CSSDIR',    SITEROOT . 'static/global/css/');
define('JSDIR',    SITEROOT . 'static/global/js/');

define('IMAGESFILEDIR', FILEROOT . '/static/global/img/');
define('CSSFILEDIR',    FILEROOT . '/static/global/css/');
define('DATAFILEDIR',   FILEROOT . '/data/');
define("APPROOT", FILEROOT . "/app/");

define("TEMPLATEROOT", FILEROOT . "/template/");
define("CROOT", APPROOT . "/controller");