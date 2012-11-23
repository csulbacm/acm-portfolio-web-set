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
			array_push(self::$messages, array(2, "PASS", $this->testName . ' ' . $desc));
			array_push($this->selfMessages, array(2, "PASS", $this->testName . ' ' . $desc));

		}

		public function isPerfect() 
		{
			return $this->selfPerfect;
		}

		public function fail($msg = NULL) 
		{
			$msg = $msg == NULL ? ' ' : $msg + ' : ';
			self::$allPass = false;
			$this->selfPerfect = false;
			array_push(self::$messages, array(0, "FAIL", $this->testName . $msg . $msg));
			array_push($this->selfMessages, array(0, "FAIL", $this->testName . $msg . $msg));
		}

		public function pass($msg = NULL) 
		{
			$msg = $msg == NULL ? ' ' : $msg + ' : ';
			array_push(self::$messages, array(1, "PASS", $this->testName . $msg . $msg));
			array_push($this->selfMessages, array(1, "PASS", $this->testName . $msg . $msg));
		}

		public static function getTestPass() 
		{
			return self::$allPass;
		}

		public static function print_message($message_array, $printHTML = true) 
		{
			$class = array("fail", "pass", "header");
			$class = $class[$message_array[0]];

			if(count($message_array) !== 3) return;
			if($printHTML) echo self::print_html($message_array, $class);
			else echo self::print_text($message_array);
		}

		private static function print_html($message_array, $class)
		{
			$out = "";
			$out .= '<li class="' . $class . '">';
			$out .= '<h2>' . $message_array[1] . '</h2>';
			$out .= '<p>' . $message_array[2] . '</p>';
			$out .= '</li>';

			return $out;
		}


		private static function print_text($message_array)
		{
			$out = "";
			$out .= $message_array[1] . ': ';
			$out .= $message_array[2] . "\n";

			return $out;
		}
	}

	Tester::init();
?>