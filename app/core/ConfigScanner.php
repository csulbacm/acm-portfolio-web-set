<?php

namespace Core;

class ConfigScanner
{
	private $fileContent;
	private $filePath;
	private $config = array();

	function __construct($filePath) 
	{
		$this->filePath = $filePath;
		$this->scanFile();
	}

	public function returnConfig() 
	{
		return $this->config;
	}
	
	public function getValue($key) 
	{
		if(!$this->hasKey($key)) return false;

		return $this->config[$key];
	}

	private function scanFile()    
	{
		$this->config = parse_ini_string($fileContent);
	}

	private function hasKey($key)  
	{
		return array_key_exists($key, $this->config);
	}
}