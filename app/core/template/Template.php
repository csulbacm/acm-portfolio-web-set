<?php

namespace Core;

class Template 
{
	private $path = '';
	private $data = array();

	function __construct() {}

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