<?php

/**
* @depends
*   ./class/class-urlchopper.php
*   ./css/style.css.php
**/

/**
* add 45 secs to default of 30 = 75 secs if invoked
* set_time_limit(45);
*/ 

/**
* @TODO CSSPATH concept introduced here but never embellished
**/

/**
* TRUE OR FALSE?
* whether to pull css from the site root ./css folder
* or the css container most closely relative to this document
**/

// MODIFIED by JS 2013-11-14 14.42.24
// COPIED FROM dochead.inc.php 


if (!defined('ABSOLUTELOCATION')) {
    define('ABSOLUTELOCATION', rtrim(dirname(__FILE__),"inc"));
}
$abspath = ABSOLUTELOCATION;
$rootCss = FALSE;

require 'class/class-urlchopper.php';

$testPath = $_SERVER['SCRIPT_NAME'];

$urlChopper = new urlChopper;
$chopThis = $urlChopper->chopUrl($testPath);

$c_subject = $urlChopper->chop_subject;
$c_replace = $urlChopper->chop_replace;
$c_search = $urlChopper->chop_search;
$c_result = $urlChopper->chop_result;
$c_url = $urlChopper->chop_url;
$c_trim = $urlChopper->chop_trim;

$pi=pathinfo($testPath);

foreach($pi as $piKey => $piVal){
    switch($piKey){
        case 'basename' :
        $pathInfoBasename = $piVal;
        break;
        case 'dirname' :
        $pathInfoDirname = $piVal;
        break;
        case 'extension' :
        $pathInfoExtension = $piVal;
        break;
        case 'filename' :
        $pathinfoFilename = $piVal;
        break;
    }
}

$bodyid = $pathinfoFilename;



if(isset($_SERVER['SERVER_NAME'])){
    $serverName = $_SERVER['SERVER_NAME'];
}
else{
    $serverName = 'localhost';
}
$serverUrl = 'http://' . $serverName;
$currentUrlPath = $serverUrl.$c_url;
if(!preg_match("@^.*/$@",$currentUrlPath)){
    $currentUrlPath = $currentUrlPath.'/';
}

$solidusCount = substr_count($currentUrlPath,"/");
if(is_int($solidusCount)) {
    $solidusDepth = ($solidusCount - 3);
}
else {
    $solidusDepth = 0;
}
$depthString = '';
for($sd = 0;$sd < $solidusDepth;$sd++){
    $depthString .= "../";
}

if(!defined('CSS')) {
    if($rootCss==TRUE){
        if(file_exists($depthString.'css/style.css')){
                define('CSS', $depthString.'css/style.css');
                define('CSSPATH', $depthString.'css/');
        }
    }
    else{
        if(file_exists('css/style.css')){
            define('CSS','css/style.css');
            define('CSSPATH','css/');
        }
    }
}

/**
* TODO - figure a way to determine whether depthstring is required or harmful
* $xro = str_replace($depthString, '', substr($depthString, 1, 2));
**/

$xro = "./";

if(file_exists("favicon.ico")){
    $favicon = "favicon.ico";
    $favtype = "image/ico";
}
else {
    /*
    **  @var array $defaultIconArray
    **      guess the shortcut icon name (i.e. Favicon.ico )
    **      from an array of common names
    **  @var array $iconExtnsArray
    **      guess icon type from array of common image formats
    */

    $defaultIconArray = array("favicon", "siteicon", "icon", "shortcut");
    $iconExtnsArray = array("ico", "png", "bmp");

    foreach($defaultIconArray as $thisIconName){
        foreach($iconExtnsArray as $thisIconExtn){
            $testFavicon = $thisIconName . "." . $thisIconExtn;
            if(file_exists($testFavicon)){
                $favicon = $testFavicon;
                $favtype = "image/" . $thisIconExtn;
            }
        }
    }
    if ( empty($favicon) ) {
        $favicon = "favicon.ico";
        $favtype = "image/ico";
    }
}

$container = $urlChopper->chopUrl($_SERVER['PHP_SELF']);
$patharray = pathinfo($testPath);
//echo "<h1>var_dump(container, patharray)</h2>";
//echo "<br>".var_dump($container, $patharray)."</br>";
    
?>
