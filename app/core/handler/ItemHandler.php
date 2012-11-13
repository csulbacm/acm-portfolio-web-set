<?php

namespace Core;

use Util\FileList as FileList;
use Model\Basic\Post as Post;
use \Core\ConfigScanner as ConfigScanner;

class ItemHandler {
	static function getItem($postPath) 
	{
		$type = "";
		$dirObject = new FileList($postPath);
		$item = null;

		if(!$dirObject->hasFile('config.ini')) {
			throw new \Exception('File not found: config.ini');
		}

		$configFile = ConfigScanner::fromString($dirObject->getFileContent('config.ini'));
		if (!$configFile->hasKey('title')) throw new \Exception('Post has no title.');
		if (!$configFile->hasKey('date'))  throw new \Exception('Post has no date.');

		$title = $configFile->getValue('title');
		$date = $configFile->getValue('date');
		$content = '';

		if($dirObject->hasFile('content.txt')) {
			$content = $dirObject->getFileContent('content.txt');
		}

		return new Post($title, $date, $content);
	}	

}