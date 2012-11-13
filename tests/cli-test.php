<?php
	define("FILEROOT", dirname(dirname(__FILE__)));
	define("APPROOT", FILEROOT . "/app/");

    include_once "./inc/tester.php"; 
	include_once APPROOT . "helper.php";

	rx_includeAll(APPROOT . '/util/base/');
	rx_includeAll(APPROOT . '/util/');
	rx_includeAll(APPROOT . '/model/');
	rx_includeAll(APPROOT . '/core/');
	rx_includeAll(APPROOT . '/core/handler/');
	rx_includeAll(APPROOT . '/core/template/');

	rx_includeAll(dirname(__FILE__) . '/ut/');
	rx_includeAll(dirname(__FILE__) . '/ut/core/handler/');
	rx_includeAll(dirname(__FILE__) . '/ut/core/template/');
	rx_includeAll(dirname(__FILE__) . '/ut/core/config/');
	rx_includeAll(dirname(__FILE__) . '/ut/model/');
	rx_includeAll(dirname(__FILE__) . '/ut/util/');
	rx_includeAll(dirname(__FILE__) . '/ut/util/base/');

	use Tester\Tester as Tester;
?>

<?php foreach (Tester::getMessages() as $m):?>
	<?php Tester::print_message($m, false); ?>
<?php endforeach ?>