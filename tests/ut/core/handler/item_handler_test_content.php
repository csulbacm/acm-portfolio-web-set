<?php

use \Core\ItemHandler as ItemHandler;
use Tester\Tester as Tester;

$tester = new Tester("Item Handler Test with Content");

try {
	$i = ItemHandler::getItem(dirname(__FILE__) . '/section/test_post_content');

	if($i->getTitle() != 'Test Title') 
		$tester->fail('Titles don\'t match');
	
	if($i->getDate() != 'Feb 10 2012') 
		 $tester->fail('Dates don\'t match');

	if($i->getContent() === NULL)
		$tester->fail('Content doens\'t work');

	if ($tester->isPerfect()) { $tester->pass(); }
} catch (\Exception $e) {
	$tester->fail('Exception caught: ' . $e->getMessage());
}

?>