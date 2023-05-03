<?php
$alphaNum = '!"#$%&\'()*+,-./0123456789:;<=>?@abcdefghijklmnopqrstuvwxyz[\]^_`ABCDEFGHIJKLMNOPQRSTUVWXYZ{|}~';



/*
// SAME EFFECT USING PCRE REGEX:
$alphaNum = preg_split('#(?<=.)(?=.)#s', $alphaNum);
*/


$alphaNumArray = str_split($alphaNum); 
$alphaNumArray = array_flip($alphaNumArray);
foreach($alphaNumArray as &$unsetAlphaNumArray){
	$unsetAlphaNumArray = '';
}

// NOTE
// WAS PASSED BY REF...
// function addAlphaNum($stringPassed,&$alnumParam){

function addAlphaNum($stringPassed, &$alnumParam, $thisDirObject){
	$firstChar = substr($stringPassed,0,1);
	$returnAlnumKeys = array_keys($alnumParam);
	$anPregSearch = ucfirst($firstChar);
	if($anPregSearch == '.'){
		$anPregSearch = '\.';
	}
	$anPregSubject = implode("", $returnAlnumKeys);
	$anPregResult = preg_match_all('/'.$anPregSearch.'/',$anPregSubject,$anPMA);
	
	if($anPregResult){
		foreach($alnumParam as $anFuncKey => $anFuncVal){
			if($firstChar === $anFuncKey) { 
				$alnumParam[$anFuncKey][] = $thisDirObject; 
				break 1;
			}
		}
	}	
	else{
		// $thisLength = count($alnumParam);
		// $auBool = array_unshift($alnumParam, $firstChar);
		// $thisLength2 = count($alnumParam);
		$alnumParam[$firstChar][] = $thisDirObject;
	}
}
?>