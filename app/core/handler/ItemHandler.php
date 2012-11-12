<?php

namespace Core;

use Util\FileList as FileList;
use Model\Post as Post;

class ItemHandler {

	static function getItem($postPath) {
		$postPath  = "";

		$type = "";
		$dirObject = new FileList($this->postPath);
		$item = null;

		foreach ($this->dirObject->getFileList() as $file) {
			echo $file;
		}
	}	
}