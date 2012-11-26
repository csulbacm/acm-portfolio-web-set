<?php
/*!
* \page Helper functions 
*
* \author David Nuon <david@davidnuon.com> 
* \version 1.0
*/

//! Static class of values to store http errors
class Status {
    public static $okay = 200;
    public static $notfound = 404;
    public static $error = 500;
}


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

//! Check if a php file exists in a directory
/*   \param $root     string
*    \param $filename string
*    \return boolean
*/


function phpFileExists($root, $filename) {
    return file_exists($root . '/' . $filename . ".php");
}

//!@{ Error Pages

//! Displays the 404 page and throws the 404 header
/*
 *     \param none
 *     \return none
 */

function throw404() {
    header("HTTP/1.0 404 Not Found");
}


function rx_includeAll($dir) {
    foreach (glob($dir . "/*.php") as $filename)
    {
        include_once $filename;
    }
}

