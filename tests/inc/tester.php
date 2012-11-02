<?php
	
	namespace Tester;


	class Tester
	{
		private static $messages;
		private static $allPass;

		protected $selfPerfect = true;
		protected $selfMessages = array();
		protected $testName = '';

		function __construct($testName)
		{		
			$this->testName = $testName;
		}

		static public function getMessages() 
		{
			return self::$messages;
		}

		static public function init() 
		{
			self::$messages = array();
			self::$allPass = true;
		}


		public function header($desc)
		{
			array_push(self::$messages, array(2, "PASS", $msg . ' ' . $desc));
			array_push($this->selfMessages, array(2, "PASS", $msg . ' ' . $desc));

		}

		public function isPerfect() 
		{
			return $this->selfPerfect;
		}

		public function fail($msg, $desc) 
		{
			self::$allPass = false;
			$this->selfPerfect = false;
			array_push(self::$messages, array(0, "FAIL", $msg . ' ' . $desc));
			array_push($this->selfMessages, array(0, "FAIL", $msg . ' ' . $desc));

		}

		public function pass($msg, $desc) 
		{
			array_push(self::$messages, array(1, "PASS", $msg . ' ' . $desc));
			array_push($this->selfMessages, array(1, "PASS", $msg . ' ' . $desc));
		}

		public static function getTestPass() 
		{
			return self::$allPass;
		}

		public static function print_message($message_array) 
		{
			$class = array("fail", "pass", "header");
			$class = $class[$message_array[0]];

			if(count($message_array) !== 3) return;
			

			echo '<li class="' . $class . '">';
			echo '<h2>' . $message_array[1] . '</h2>';
			echo '<p>' . $message_array[2] . '</p>';
			echo '</li>';
		}

	}

	Tester::init();
?>
