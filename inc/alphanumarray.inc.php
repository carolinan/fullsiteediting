<?php

/* @overview
*	filename:	./inc/alphanumarray.inc.php
*	package:	AnnieDeBrowsa™
*	since:	2009-0x-0x
*	purpose:	populate _alphaNumArray.
*		create function  addAlphaNum() for testing objects of a container, as in
	readdir(opendir("dirname")),  as used for creating an alphanumeric sorted 
	navigation menu.
*/

$alphaNum = '!#$%&\'()*+,-./0123456789:;<=>?@abcdefghijklmnopqrstuvwxyz[\]^_`ABCDEFGHIJKLMNOPQRSTUVWXYZ{|}~';
// $alphaNum = '4ABCDEFGHIJKLMNOPQRSTUVWXYZ';

$alphaNumArray = str_split($alphaNum); 

$alphaNumArray = array_fill_keys($alphaNumArray, []);



/**
 * foreach($alphaNumArray as &$unsetAlphaNumArray){
 *
 *  	$unsetAlphaNumArray = '';
 * }

COMMENTED 20220129 JS after phpbuilder.com Weedpacket advisory

 */

// $alnumParam is $alphaNumArray - that doesn't really make any sense as it is passed in nav.inc.php
// $stringPassed is $basename
function addAlphaNum($stringPassed, &$alnumParam, $thisDirObject){ 
	$firstChar = $stringPassed[0]; 
        $anPregSearch = ucfirst($firstChar); 
	$returnAlnumKeys = array_keys($alnumParam);
	$anPregSubject = implode("", $returnAlnumKeys);
	
	$anStrposResult = stripos($anPregSubject, $firstChar);
	
	if ($anStrposResult !== false) {
		foreach ($alnumParam as $anFuncKey => $anFuncVal) {
			if(ucfirst($firstChar) === ucfirst($anFuncKey)) {
				$alnumParam[ucfirst($firstChar)][] = $thisDirObject; 	
				break 1; 
			}		
		}
	}
	


/* if ($anStrposResult !== false) {
		$htmlArray[] = true; 
		foreach ($alnumParam as $anFuncKey => $anFuncVal) {
			if(ucfirst($firstChar) === ucfirst($anFuncKey)) {
				// $alnumParam[ucfirst($anFuncKey)][] = $thisDirObject; 
				// break 1;
				$alnumParam[ucfirst($anFuncKey)][$htmlArray] = $thisDirObject; 
				break 1;
			}
		}
	} */

	else{
		/* $alnumParam[$ucFirstChar][] = $thisDirObject; */
		// $alnumParam[$ucFirstChar][$htmlArray] = $thisDirObject;
	}
}

?>