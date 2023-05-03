<?php

/*
* URL Path ./inc/nav.inc.php
*/
if(defined("XRO")){
	$xro = XRO;
}
else {
	$xro = '';
}
// initialize counter
$objNmbr = 0;
// initialize goUp array():
$goUp = array("subject" => ' ', "replace" => ' ', "search" => ' ', "result" => ' ', "url" => ' ');
$nav_pathInfo = pathinfo($_SERVER['PHP_SELF']);
$filePathArray = pathinfo(__FILE__.$xro);
/* same as $pi from dochead.inc.php ! - no because other is via _SERVER[script_name] but 
 * remember - we are still going off of whatever file is loaded in the browser currently 
 * E.g. index.php
 * so why all of the different approaches to grabbing the same data? 
 * i.e. what is the most reliable way to obtain the info, and stick with it!
 **/

$childItems = array();
// $baseNameEQonePage = array();
$specialExtn = array();
/**
*	@todo fix pmAllCollector
* currently pmAllCollector records all extensions, including duplicates. we don't want duplicates.
*' 
* @var array pmAllCollector
*
**/

$pmAllCollector = array();
$myPathInfo = array("dirname","basename","extension","filename");
// set directory name
$dir = __FILE__;
// $dir = $filePathArray['dirname'];

require $xro.'inc/alphanumarray.inc.php';
require $xro.'inc/basenamecleaner.inc.php';

if(file_exists($xro.'inc\nav.inc.php')) {
	$search = '\inc\nav.inc.php';
}
elseif(file_exists($xro.'inc/nav.inc.php')) {
	$search = '/inc/nav.inc.php';
}
$subject = $dir;
$replace = '';
$dir = str_ireplace($search, $replace, $subject);

/**
 * this actually seems to work fairly well for determining the absolute directory path
 * 20220420 js
 * 
 */

if(empty($parseUrl)){
	$parseUrl = parse_url($nav_pathInfo['dirname'], PHP_URL_PATH);
	$bodyid=rtrim(".",$parseUrl) ? empty($bodyid) : $bodyid = $bodyid;
        
        /**
         * WHAT IS GOING ON HERE - $bodyid is boolean -> false here?
         * 20220420 js
         */

}
/* $goUp = array('subject','replace','search','result','url'); */

$goUp["subject"] = $parseUrl;
$goUp["replace"] = '';
$goUp["search"] = '@^(.*(?=(/).*))@';
$goUp["result"] = preg_replace($goUp["search"], $goUp["replace"], $goUp["subject"]);
$goUp["url"] = str_ireplace($goUp["result"], $goUp["replace"], $goUp["subject"]);
if(strlen($goUp["url"]) < 1) {
	$goUp["url"] = $serverUrl."/";
}

/* if (is_dir($dir)) {
	if ($dh0 = opendir($dir)) {
		while (($sortDir[] = readdir($dh0)) !== false) {
		    sort($sortDir);
		    }
  	}
} */

$concatSubdir = "/".$chopThis."/";
$conSubSearch = "\\";
$conSubReplace = "/";
$concatDirs = str_ireplace($conSubSearch, $conSubReplace, $dir.$concatSubdir);

if (is_dir($concatDirs)) {
    $dh = opendir($concatDirs);
}
else {
    $dh = opendir($dir);
}
	if ($dh) {

		while (($thisObject = readdir($dh)) !== false) {
			foreach($myPathInfo as $myKey => $myVal){
				if(isset(${$myVal})){
					unset(${$myVal});
				}
			}
			$thisObject_pathInfo = pathinfo($thisObject);

			foreach($thisObject_pathInfo as $pathKey => $pathVal) {
				${$pathKey} = $pathVal;
			}

			if($dirname == '.' && empty($thisObject_pathInfo['extension'])) {
				$dirname = $basename;
			}
			if($dirname=='.') {
				if($dirname.$extension==$basename){
					if(strlen($filename) < 1){
						// REACH THIS POINT? THEN MUST BE SIMILAR TO:
						// '.buildpath'
						// IN WHICH CASE WE can define list item as hiddenitem
						// HOW ABOUT THE FOLLOWING:

						if(isset($extension) && strlen($extension) < 1){
							unset($extension);
							$dirname = $basename;
						}
/* 						else{
							 // $dirname = $basename;
						} */
					}
				}
			}
			if (($basename != ".") && ($basename != "..")) {
				$objNmbr ++;
			    if( 
			    	!is_dir($thisObject) 
			    	&& (isset($extension) && strlen($extension) > 0) 
			    	&& ($extension != 'htaccess' && $extension != 'htpasswd') 
			    ) {
			// POPULATE THE ELUSIVE ALPHANUMARRY
					// continued in ./arrayobjectparser.inc.php
					require $xro.'inc/arrayobjectparser.inc.php';


				} // 	ENDIF- LARGEST CONTAINER CLOSED HERE

			require $xro.'inc/arrayobjectanchors.inc.php';
			addAlphaNum($basename,$alphaNumArray,$childItems[$objNmbr]);
			}

			 // 	ENDIF  ( pathinfo != "." or "..")

		}
		 	 // ENDWHILE
		closedir($dh);
	}
// comment 20220604 - dangling brace }

 $htmlPrint = array();

/* 	for($i=0;$i<=$objNmbr;$i++) {
		if(isset($childItems[$i])) {
			$htmlPrint[$i] = $childItems[$i];
		}
	} */

	$lc = 0;
	$htmlPrint[$lc] = "<div id=\"leftcol\"> \n <ul id=\"navlist\"> \n";
	if(isset($goUp["url"])){
		$htmlPrint[$lc] .= "<li id=\"goUpItem\" class=\"nav\"><a href=\""
			.$goUp["url"]."\">".$goUp["url"]."</a></li> \n";
	}

	$totalObjects = $objNmbr;
	foreach($alphaNumArray as $alphaNumKey => $alphaNumVal){
		$lc++;
		$htmlPrint[$lc] = '';

		if(is_array($alphaNumVal) && $alphaNumVal !== ''){
                    $toggleCount = count($alphaNumVal);
                    if($toggleCount != 0){
			$htmlPrint[$lc] .= '<li onclick="showHide(\'ul_'.$alphaNumKey.'\')" id="li_'.$alphaNumKey.'" class="toggler"><span style="font-weight:bold;">'.$alphaNumKey.'</span>:';

			if(is_array($alphaNumVal)){
				
				$htmlPrint[$lc] .= ' [ view '.$toggleCount.' ]';

// ############ ATTN 20220816 - THIS IS WHERE THE EMPTY LI is created. 
// ############ FIX TO MAKE NAV not include EMPTY ITEMS!

				$htmlPrint[$lc] .= '
<ul id="ul_'.$alphaNumKey.'" class="alphaNumChildList target">';
				foreach($alphaNumVal as $alphaNumSortedKey => $alphaNumSortedItem){
					if($alphaNumSortedItem != ''){
						$htmlPrint[$lc] .= $alphaNumSortedItem;
					}
				}
				$htmlPrint[$lc] .= '</ul>
				';
                                }
			}
                
			elseif(!is_array($alphaNumVal) && $alphaNumVal != '') {
			 $htmlPrint[$lc] .= ' string:';
				$htmlPrint[$lc] .= '<ul id="ul_'.$alphaNumKey.'" class="alphaNumChildList target">
					<li style="white-space:pre;">$['.$alphaNumKey.'] &#x3d;&gt; '.$alphaNumVal.'</li>
					</ul>
					';
			}
//			else{
//				$htmlPrint[$lc] .= ' <!-- line '.__LINE__.': -->&#x3d;&gt; '.$alphaNumVal;
//			}
			$htmlPrint[$lc] .= '';
		} /* WHY IS THERE no ELSE or ELSEIF here? - this doesn't make much sense */
		else {
		unset($htmlPrint[$lc]);
		}
	}
 	//$totalObjects = $lc;
	//$oneMore = $i++;
	$oneMore = $lc++;

	$htmlPrint[$oneMore] = '<li id="navTotal">Objects found: '.$totalObjects.'</li>
		<li id="adb_small_logo"><img 
		src="css/adb_logo_shadow.png" 
		style="width:100px;height:80px;" 
		class="floatLt" /></li>
		</ul>
		<!-- close navlist -->
		</div>
		<!-- close leftcol -->
		';
	ksort($htmlPrint);

?>
