<?php

use \Core\ConfigScanner as ConfigScanner;

function p($m) { pass('Config Test: ' . $m);}
function f($m) { fail('Config Test: ' . $m);}
$perfect = true;

$test_ini_file = <<<INI
; last modified 1 April 2001 by John Doe
[owner]
name=John Doe
portfolio_name=The Lab
INI;

try {
	$configTest = ConfigScanner::fromString($test_ini_file);
	
	if($configTest->getValue('name') !== 'John Doe')
		f('Name Value Test (name)');

	if($configTest->getValue('portfolio_name') !== 'The Lab')
		f('Name Value Test (portfolio)');

	if($perfect) p('All works');
} catch (\Exception $e) {
	f('Exception caught');
 }