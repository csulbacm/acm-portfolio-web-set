<?php

namespace Core;

class Template 
{
	private $path = '';
	private $data = array();

	function __construct(argument) {}

	public function addKey($key, $value);
	public function hasKey($key);
	public function getValue($key);
}