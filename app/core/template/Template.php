<?php

namespace Core;
use Util\FileList as FileList;

class Template 
{
	private $path = '';
	private $data = array();
	private $isValid = false;

	function __construct($path) {
		if(file_exists(TEMPLATEROOT . $path . ".php")) {
			$this->isValid = true;
			$this->path = TEMPLATEROOT . $path . ".php";
		}
	}

	public function addValue($key, $value) 
	{
		$this->path[$key] = $value;
	}

	public function hasKey($key) 
	{
		return array_key_exists($key, $this->data);
	}	

	public function getValue($key) 
	{
		if(!$this->hasKey($key)) return false;

		return $this->data[$key];
	}

}