<?php

// MODDED 2010-04-06























function chopUrl($urlString){

	$urlChopper = compact('subject','replace','search','result','url');
	$urlChopper["subject"] = $urlString;
	$urlChopper["replace"] = '';
	$urlChopper["search"] = '@^(.*(?=(/).*))@';
	$urlChopper["result"] = preg_replace($urlChopper["search"], $urlChopper["replace"], $urlChopper["subject"]);
	$urlChopper["url"] = str_ireplace($urlChopper["result"], $urlChopper["replace"], $urlChopper["subject"]);

	return preg_replace("/.*\//",'',$urlChopper["url"]);

}

$testPath = $_SERVER['SCRIPT_NAME'];
if($testPath){
	$testPathorNote = '<p>Data shown here is obtained via the PHP built-in function get_defined_vars(), and extracted using a foreach loop after the returned values are assigned to an array-type symbol/ variable. (i.e. <code>$definedVarNames = get_defined_vars();</code>)</p>'."\n".'<p><strong>Note:</strong> Html tags which are part of any PHP variable value are rendered as HTML (e.g. the variable shown below, [ $bodyidtxt ], contains the HTML heading tag, &#x3C;H1&#x3E;</p>
		<p><strong>See <em>getdefinedvarsorig.phtml</em></strong> for viewing those values which are hidden in this public view. (i.e. to view values more appropriate for <em>development-server</em> viewing)';
	$patharray = pathinfo($testPath);
	$thisdir_underscortrim = str_replace("_", " ", $patharray['dirname']);
	$curWorkDir = getcwd();
	$pathInfoDirname 	= $patharray['dirname'];
	$pathReplacement 	= '';
	$removePathPart = "@^(.*)+([^/]?)(?=".$patharray['basename'].")@";
	$pathFound 	= preg_replace($removePathPart, $pathReplacement, $pathInfoDirname);
	$pathNew 	= str_replace($pathFound, '', $pathInfoDirname);
	$currentDir = $pathNew;
	$parseUrl 	= parse_url($pathInfoDirname, PHP_URL_PATH);
	$parsed2Url = sscanf($parseUrl, "%s");
	$thispage 	= rtrim($patharray['basename'], $patharray['extension']);
	$thispage_rtrim = rtrim($thispage, '.');
	$bodyid 	= $thispage_rtrim;
	$replaced 	= str_replace("_", " ", $thispage_rtrim);
	$bodyUcWords = ucwords($replaced);
	$bodyidtxt = '<h1 id="dbrowone">'.$bodyUcWords.'</h1>';
	if(isset($_SERVER['SERVER_NAME'])){
		$serverName = $_SERVER['SERVER_NAME'];
	}
	else{
		$serverName = 'localhost';
	}
	$serverUrl = 'http://' . $serverName;
	$currentUrlPath = $serverUrl.$currentDir;
	if(!preg_match("@^.*[/]$@",$currentUrlPath)){
   		$currentUrlPath = $currentUrlPath.'/';
	}
	// 	echo $currentUrlPath;
}

$container = chopUrl($_SERVER['PHP_SELF']);

if(!isset($xro)) {
	$xro = '';
}

// #@@@@@@@@@@@@@@@@@@@@@@@@ CSS FILE DEFINE

if(!defined('CSS')){
	// ENTER HERE ANY SPECIAL CSS FILE WHICH YOU MAY WISH TO ASSIGN
	if(file_exists($xro.'css/localscope.css')){
	    define('CSS',$xro.'css/localscope.css');
	}
	else{
	    define('CSS',$xro.'css/style.css');
	}
}


?>
