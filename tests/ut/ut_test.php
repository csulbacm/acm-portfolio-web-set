<?php

use Tester\Tester as Tester;

$ut_Tester = new Tester("Testing"); 
$ut_Tester->pass('it works!');
$ut_Tester->fail('This should fail.');

?>
