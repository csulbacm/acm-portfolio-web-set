<?php

namespace Core;
use Util\FileList as FileList;
use Model\Container\Section as Section;
class PortfolioHandler {
	protected $sections = array();
	protected $path     = '';

	function __construct ($path) {
		$this->scanSections();
	}
	public function getSection() {
			
	}
	private function scanSections() {
		$dirObject = FileList($path);
		try {
			foreach ($dirObject->getDirList() as $dir) {
				// Get dir representation of the current section/
				// Get config file for section
				$s = new Section($title, $dir);
			}
		} catch(\Exception $e) {
			throw new \Exception('');
		}
	}
	private function sectionExists() {}
	private function validateFiles() {}
}