<?php

use \Core\ItemHandler as ItemHandler;
use Tester\Tester as Tester;

$tester = new Tester("Item Handler Test");

try {
	$i = ItemHandler::getItem(dirname(__FILE__));

	if ($tester->isPerfect()) { $tester->pass('PASS'); }
} catch (\Exception $e) {
	$tester->fail('Exception thrown');
}

?>