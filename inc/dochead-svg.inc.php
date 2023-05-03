<?php

// MODDED 2009-05-26

$processSVG = $_SERVER['PHP_SELF'];
$patharraySVG = pathinfo($processSVG);
$subjectSVG 	= $patharraySVG['dirname'];

function chopUrl($urlString){

	$urlChopper = compact('subject','replace','search','result','url');
	$urlChopper["subject"] = $urlString;
	$urlChopper["replace"] = '';
	$urlChopper["search"] = '@^(.*(?=(/).*))@';
	$urlChopper["result"] = preg_replace($urlChopper["search"], $urlChopper["replace"], $urlChopper["subject"]);
	$urlChopper["url"] = str_ireplace($urlChopper["result"], $urlChopper["replace"], $urlChopper["subject"]);

	return preg_replace("/.*\//",'',$urlChopper["url"]);

}


$tspanConst = urlChopper($subjectSVG);

/**
*	@deprecated:
*		this entire section of code moved to masthead.php
*		therefore, dochead-svg.inc.php is no longer necessary to the application
*/

?>
