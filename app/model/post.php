<?php

namespace Model\Basic;

class ExtraContent {}

class Item 
{
	protected $title = '';
	protected $date = '';
	
	function __construct($title, $date)
	{
		$this->title = $title;
		$this->date  = $date;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getDate() 
	{
		return $this->date;
	}
}

class Post extends Item
{
	protected $content = '';
	protected $extraContent = array();

	function __construct($title, $date, $content)
	{
		$this->content = $content;
		parent::__construct($title, $date);
	}

	public function getContent() 
	{
		return $this->content;
	}

	public function addExtraContent($name, $extraContent) 
	{
		if($extraContent instanceof ExtraContent)
		{
			$this->extraContent[$name] = $extraContent;
		}
	}
}
