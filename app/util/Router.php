<?php

/* \class Router
 * \brief Handles URL routing
 * \author David Nuon <david@davidnuon.com>
 */

namespace Util;

class Router extends JsonMap {
	protected $pages;

	function __construct($json) {
		parent::__construct($json);
		$this->parseJSON();
	}

	// Checks to see if the path exists in the map
	public function hasPath($path) {
		if(!isset($this->pages[$path[0]])) {
			return false;
		} else {
			return true;
		}
	}

	private function parseJSON() {
		$this->pages = $this->jsonArray["pages"];
	}

	public function getArray () {
		return $this->pages;
	}

}