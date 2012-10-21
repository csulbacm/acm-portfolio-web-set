<?php

namespace Model\Container;

class Section
{
	protected $title = '';
	protected $items = array();

	function __construct($title)
	{	
		$this->title = $title;
	}

	public function addItem($item)
	{
		if($extraContent instanceof ExtraContent) 
		{
			array_push($this->items, $item);
		} 
	}
}

class HeroSection extends Section
{
	protected $image = NULL;
	protected $desc  = NULL;

	function __construct($title, $image = NULL)
	{
		parent::__construct($title);
		$this->image = $image;
	}
}