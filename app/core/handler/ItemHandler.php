<?php

namespace Core;

use Util\FileList as FileList;
use Model\Post as Post;

class ItemHandler {

	static function getItem($postPath) 
	{
		$type = "";
		$dirObject = new FileList($postPath);
		$item = null;

		if(!$dirObject->hasFile('config.ini')) {
			throw new \Exception('File not found: config.ini');
		}
	}	

}