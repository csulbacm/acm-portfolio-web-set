<?php

namespace Core;

class Page {
	private $controller = "";
	private $js     = array();
	private $css    = array();
	private $status = Status::okay;

	// Used to display the page on the site

	public function setController($controller) {
		$this->controller = $controller;

		if(!phpFileExists(CROOT, $controller)) {
			$this->status = Status::error;
		}
	} 

	public function render() {
		// include_once(//path);
		// Render the template and pass in the
		// global variable that has all the data
		// that will be passed in.
	}

	// Add assets to the page
	public function addCSS($external = false) {
        $css = array();

        foreach (func_get_args() as $arg) {
            if (gettype($arg) === 'array') {
              $css = array_merge($css, $arg);
            }
            else if (gettype($arg)== 'string') {
              array_push($css, $arg);
            }
        }

        $this->css = array_merge($this->css, $css);
	}

	public function addJS($external = false) {
        $js = array();

        foreach (func_get_args() as $arg) {
            if (gettype($arg) === 'array') {
              $js = array_merge($js, $arg);
            }
            else if (gettype($arg)== 'string') {
              array_push($js, $arg);
            }
        }
        $this->js = array_merge($this->js, $js);
	}


	// Check to see if the page is found
	public function isFound() {
		return ($this->status == Status::okay);
	}

	// Check to see if the page produces an error
	public function isError() {
		return ($this->status == Status::error);
	}
}