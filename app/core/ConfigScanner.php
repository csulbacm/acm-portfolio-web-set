<?php

namespace Core;

class ConfigScanner
{
	protected $fileContent;
	protected $filePath;
	protected $config = array();

	function __construct($filePath) 
	{
		$this->filePath = $filePath;
		// Read the file here.
		$this->makeConfig();
	}

	public static function fromString($fileContent)
	{
		$me = new self('');
		$me->fileContent = $fileContent;
		$me->makeConfig();
		
		return $me;
	}

	public function getConfig() 
	{
		return $this->config;
	}
	
	public function getValue($key) 
	{
		if(!$this->hasKey($key)) return false;

		return $this->config[$key];
	}

	private function makeConfig()    
	{
		$this->config = parse_ini_string($this->fileContent);
	}

	private function hasKey($key)  
	{
		return array_key_exists($key, $this->config);
	}
}