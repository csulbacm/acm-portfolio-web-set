<?php
/*!
* \page Helper functions 
*
* \author David Nuon <david@davidnuon.com> 
* \version 1.0
*/

//! Returns a boolean of whether a string begins with a substring.
/*! From http://snipplr.com/view.php?codeview&id=5939
*    \param $string    string
*    \param $subString string
* 	 \return boolean
*/

function stringBeginsWith($string, $subString) {
    return (strncmp($string, $subString, strlen($subString)) == 0);
}

//! Returns a boolean of whether a string ends with a substring.
/*! http://stackoverflow.com/questions/619610/whats-the-most-efficient-test-of-whether-a-php-string-ends-with-another-string
*    \param $string    string
*    \param $subString string
* 	 \return boolean
*/

function stringEndsWith($string, $subString) {
    $strlen = strlen($string);
    $testlen = strlen($subString);
    if ($testlen > $strlen) return false;
    return substr_compare($string, $subString, -$testlen) === 0;
}


//! Includes a php part for a page
/*!
*    \param $type string
*    \param $name string  
*/
function includePart($type, $name) {
	include(INCPATH .'/views/parts/' . $type . '/' . $name . '.php');
}

//!@{ Error Pages

//! Displays the 404 page and throws the 404 header
/*
 *     \param none
 *     \return none
 */

function throw404() {
    header("HTTP/1.0 404 Not Found");
    include_once(INCPATH .'/views/404.php');
}

//!}

//! Returns the HTML for the page.
/*!
* 
*     \param $tempalteName string 
*/
function renderView($tempalteName) {
    $viewPath = INCPATH .'/views/' . $tempalteName . '.php';
    if($tempalteName == "") {
        include_once(INCPATH .'/views/index.php');
    } else {
        if(file_exists($viewPath)) {
            include_once($viewPath);
        } else {
            throw404();
        }
    }
}

//! Includes all the php files in a given directory
/*!
 *
 *      \param   $dir string
 *      \returns none
 *
 */

function rx_includeAll($dir) {
    foreach (glob($dir . "/*.php") as $filename)
    {
        include_once $filename;
    }
}

