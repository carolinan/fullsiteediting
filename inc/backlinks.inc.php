<?php

$convert_toSpace = false;	// true if script should convert _ in folder names to spaces
$upperCaseWords = false;	// true if script should convert lowercase to initial caps
//$topLevelName = "HOME";		// name of home/root directory
$topLevelName = "http://".$_SERVER['SERVER_NAME'];		// name of home/root directory
$separator = " &gt; ";		// characters(s) to separate links in hierarchy (default is a > with 2 spaces on either side)

// find index page in directory...
function adbDirIndex($dir) {
	$index = '';
	@$dir_handle = opendir($dir);
	if ($dir_handle) {
		while ($file = readdir($dir_handle)) {
			$test = substr(strtolower($file), 0, 6);
			if ($test == 'index.') {
				$index = $file;
				break;
				}
			}
		}
	return $index;
	}

// make clean array (trim entries and remove blanks)...
function adbTrimArray($array) {
	$clean = array();
	for ($n=0; $n<count($array); $n++) {
		$entry = trim($array[$n]);
		if ($entry != '') $clean[] = $entry;
		}
	return $clean;
	}

// function to prep string folder names if needed...
function adbFixNames($string) {
	global $convert_toSpace;
	global $upperCaseWords;
	if ($convert_toSpace) $string = str_replace('_', ' ', $string);
	if ($upperCaseWords) $string = ucwords($string);
	return $string;
	}

if(isset($_SERVER))  {
	$server = $_SERVER ;
}
else {
	$server = $HTTP_SERVER_VARS;
}


if(isset($server['DOCUMENT_ROOT']))  {
	$htmlRoot = $server['DOCUMENT_ROOT'] ;
}
else {
	$htmlRoot = '';
}

if(isset($server['DOCUMENT_ROOT'])){
	$htmlRoot = $server['DOCUMENT_ROOT'];
}
else{
	$htmlRoot = '';
}

if ($htmlRoot == '') {
	if(isset($server['SITE_HTMLROOT']))  {
		$htmlRoot = $server['SITE_HTMLROOT'] ;
	}
	else {
		 $htmlRoot = '';
	}
}

if(isset($server['SCRIPT_FILENAME']))  {
	$pagePath = $server['SCRIPT_FILENAME'] ;
}
else {
	$pagePath = '';
}

if ($pagePath == '') {
	if(isset($server['SCRIPT_FILENAME']))  {
		$pagePath = $server['SCRIPT_FILENAME'] ;
	}
	else {
		 $pagePath = '';
	}
}

$httpPath = ($htmlRoot != '/') ? str_replace($htmlRoot, '', $pagePath) : $pathPath;

$dirArray = explode('/', $httpPath);
if (!is_dir($htmlRoot.$httpPath)) $dirArray = array_slice($dirArray, 0, count($dirArray) - 1);

$linkArray = array();
$thisDir = '';
if($htmlRoot == '')  {
	$baseDir = '' ;
}
else {
	$baseDir = $htmlRoot;
}

for ($n=0; $n<count($dirArray); $n++) {
	$thisDir .= $dirArray[$n].'/';
	$thisIndex = adbDirIndex($htmlRoot.$thisDir);
	if($n == 0)  {
	$thisText = $topLevelName ;
}
else {
	$thisText = adbFixNames($dirArray[$n]);
}

	$thisLink = ($thisIndex != '') ? '<a href="'.$thisDir.$thisIndex.'">'.$thisText.'</a>' : $thisText;
	if ($thisLink != '') $linkArray[] = $thisLink;
	}

if(count($linkArray) > 0)  {
	$results = implode($separator, $linkArray) ;
}
else {
	$results = '';
}

if ($results != '') $backlinksHtml = ('<div id="hanseltrail">H&#xe4;nsel trail:
'.$results.'
<hr class="clear clearboth clearBoth" />
</div>

		<!-- $	end hansel trail	$	-->');

?>
