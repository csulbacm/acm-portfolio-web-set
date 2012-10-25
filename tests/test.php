<?php
	$messages = array();

	define("FILEROOT", dirname(dirname(__FILE__)));
	define("APPROOT", FILEROOT . "/app/");

	assert_options(ASSERT_ACTIVE, 1);
	assert_options(ASSERT_WARNING, 0);
	assert_options(ASSERT_QUIET_EVAL, 1);

	function fail($mesage, $desc) {
		global $messages;
		array_push($messages, array(1, "FAIL: " . $message, $desc));

	}

	function pass($mesage, $desc) {
		global $messages;
		array_push($messages, array(1, "PASS: " . $message, $desc));

	}


	function assert_handler($file, $line, $code, $desc = null)
	{
		fail(0, "Assertion failed at $file:$line: $code", $desc);
	}

	assert_options(ASSERT_CALLBACK, 'assert_handler');

	include_once APPROOT . "helper.php";
	rx_includeAll(APPROOT . '/util/base/');
	rx_includeAll(APPROOT . '/util/');
	rx_includeAll(APPROOT . '/model/');
	rx_includeAll(APPROOT . '/core/');
	rx_includeAll(APPROOT . '/core/handler/');
	rx_includeAll(APPROOT . '/core/template/');

	rx_includeAll(dirname(__FILE__) . '/ut/');
	rx_includeAll(dirname(__FILE__) . '/ut/core/handler');
	rx_includeAll(dirname(__FILE__) . '/ut/core/template');
	rx_includeAll(dirname(__FILE__) . '/ut/core/model');
	rx_includeAll(dirname(__FILE__) . '/ut/util');
	rx_includeAll(dirname(__FILE__) . '/ut/base');

	var_dump($messages);
?>

