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

define( 'ABSOLUTELOCATION', dirname($_SERVER['SCRIPT_NAME']));
$abspath = ABSOLUTELOCATION;

if(defined("XRO")){
	$xro = XRO;
}
else {
	$xro = '';
}
$abspath = ABSOLUTELOCATION."/".$xro;
$rootCss = FALSE;
/* for future impletation of CSS control - useless idea really */

require $xro.'class/class-urlchopper.php';

$testPath = $_SERVER['SCRIPT_NAME']; 

$urlChopper = new urlChopper;

$chopThis = $urlChopper->chopUrl($testPath);
/* what is the point of creating the _chopThis variable? */

$c_subject = $urlChopper->chop_subject;
$c_replace = $urlChopper->chop_replace;
$c_search = $urlChopper->chop_search;
$c_result = $urlChopper->chop_result;
$c_url = $urlChopper->chop_url;
$c_trim = $urlChopper->chop_trim;
/* what is the point of doubling this data? 
 * E.g. _chopTHis = urlChopper->chopUrl already has the desired string! */


// TRY A DIFFERENT METHOD OF THE urlChopper CLASS 2021.11.11
// $printResults = $urlChopper->printResults($c_replace,$c_result,$c_search,$c_subject,$c_trim,$c_url,$chopThis); 

$pi=pathinfo($testPath);

$pathInfoBasename = $pi['basename'];
$pathInfoDirname = $pi['dirname'];
$pathInfoExtension = $pi['extension'];
$pathinfoFilename = $pi['filename'];

$bodyid = $pathinfoFilename;
/* is the prev foreach loop necessary to get to "pathinfo(filename)"?  
 * e.g. is "index" when filename is "index.php"
 *  */


if(isset($_SERVER['SERVER_NAME'])){
    $serverName = $_SERVER['SERVER_NAME'];
}
else{
    $serverName = 'localhost';
}
$serverUrl = 'http://' . $serverName;
$abspath = $serverUrl.$abspath;
$currentUrlPath = $serverUrl.$c_url;
/* note THE SAME INFO is avail in the following variables:
 * $abspath
 * $c_url
 * $pathinfoDirname
 * $pi[dirname]
 * $urlChopper->chop_url
 * ABSOLUTELOCATION
 */
if(!preg_match("@^.*/$@",$currentUrlPath)){
    $currentUrlPath = $currentUrlPath.'/';
}

$solidusCount = substr_count($currentUrlPath,"/");
if(is_int($solidusCount)) {
    $solidusDepth = ($solidusCount - 3);
}
 
$depthString = '';
for($sd = 0;$sd < $solidusDepth;$sd++){
    $depthString .= "../";
}

if(!defined('CSS')) {
    if($rootCss==TRUE){
		if(file_exists($xro.$depthString.'css/style.css')){
               	define('CSS', $xro.'css/style.css');
                define('CSSPATH', $xro.'css/');
                /* we dont need the $depthString offset for the defined vars */
        }
    }
    else{
		if(file_exists($xro.'css/style.css')){
			define('CSS',$xro.'css/style.css');
			define('CSSPATH',$xro.'css/');
        }
    }
}

/**
* TODO - figure a way to determine whether depthstring is required or harmful
*  = str_replace($depthString, '', substr($depthString, 1, 2));
**/

//  = $depthString;

if(file_exists($xro."favicon.ico")){
	$favicon = $xro."favicon.ico";
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

    foreach($defaultIconArray as $thisIconName) {
        foreach($iconExtnsArray as $thisIconExtn) {
            $testFavicon = $thisIconName . "." . $thisIconExtn;
            if(file_exists($testFavicon)){
                $favicon = $testFavicon;
                $favtype = "image/" . $thisIconExtn;
            }
        }
    }
    if ( empty($favicon) ) {
		$favicon = $xro."favicon.ico";
        $favtype = "image/ico";
    }
}


/** @logic ( iframe src=??? )
 *    :if   HTTP_REQUEST param "path2url" exists then src=urlpatchcheck.phtml
 *    :else test for match on various common web dir index filenames
 * ~~~~~~~~~~~~~~~~~~~~~~~~~~
 *  @var defaultIframe string:
 *      assign a value for iframe src attribute
**/

$defaultIframe = "";
if(isset($_GET['path2url'])){
	$defaultIframe = $xro.'./path2url.phtml?path2url='.$_GET['path2url'];
}
else{
/*
    **  @var defaultFrameArray array
    **      array of strings containing various common web directory index filenames
    **  #NOTE# Add any file names here you wish to load by default. The further
    **  toward the end of the array (i.e. currently, default.html), the greater
    **  the priority.
    */
    $defaultFrameArray = array(
		$xro."default.phtml",
		$xro."Overview.html",
		$xro."Overview.htm",
		$xro."default.htm",
		$xro."toc.html",
		$xro."toc.htm",
		$xro."index.htm",
		$xro."index.html",
		$xro."readme.txt",
		$xro."readme.md",
		$xro."default.html",
		$xro."db_admin.phtml",
		$xro."graphic_design.php",
		$xro."path2url.phtml",
		$xro."p2u2.phtml",
    );

    foreach($defaultFrameArray as $thisIframe){
        if(file_exists($thisIframe)) {
            $defaultIframe = $thisIframe;
        }
    }
}

$frameInfo = pathinfo($defaultIframe);
$frameTitle = $frameInfo['filename'];
/* create the string for the iFrame title */

/* END PHP and begin HTML for document head */
?>

<!DOCTYPE html>
<html lang="en" >
<head>
<title><?php print $chopThis."/".$c_trim; ?></title>

<meta charset="UTF-8">
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" 
      type="text/css"
      href="css/emeyereset.css"
      media="all">
<link rel="stylesheet"
      type="text/css"
      href="<?php print CSS; ?>"
      media="screen">
      
<link rel="icon"
      type="<?php print $favtype; ?>"
      href="<?php print $favicon; ?>">
<link rel="shortcut icon"
      type="<?php print $favtype; ?>"
      href="<?php print $favicon; ?>">
      
<link id="unlockFrame"
      rel="stylesheet" 
	  type="text/css"
	  href="<?php print $xro ?>css/unlockframe.css"
      media="screen">
      
<script 
	type="text/javascript"
	src="<?php print $xro ?>js/showme-hideme.js">
</script>
<script 
	type="text/javascript"
	src="<?php print $xro ?>js/accessories.js">
</script>
<script 
	type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
</script>
    <!-- Google Analytics 2022.07.24 -->
    <!-- script async src="https://www.googletagmanager.com/gtag/js?id=G-SE954SRMG8"></script -->
    <script>
/*      window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-SE954SRMG8'); */
    </script>
    <!-- Google Adsense -->
    <!-- script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2612637898892107" crossorigin="anonymous"></script -->
    <!-- Bootstrap Css v5 -->
    <!-- link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet" -->
    <link rel="stylesheet" 
      href="<?php print CSS; ?>"
      media="screen">
<?php

/*
 * there is no _javaScriptAlert variable, but we might keep the idea
 */
if(isset($javaScriptAlert)){
    if(is_array($javaScriptAlert)){
        foreach($javaScriptAlert as $jsaKey => $jsaVal){
            print $jsaVal;
        }
    }
    else{
        print $javaScriptAlert;
    }
}
require $xro.'css/style.css.php';

?>
</head>

<body id="<?php print $bodyid; ?>">
    <figure id="cssBox_Target" class="target displaynone"><!-- ^ cssBoxContainer ^ -->
      <img src="<?php print $xro ?>css/css-box_novicenotes-dot-net_transp.png" alt="CSS Box-model illustration" id="cssBoxImg">
    </figure>
          <!-- $ cssBoxContainer $ -->
    <div id="pagewidth"><!-- ^ id=pagewidth -->


<div id="header" title="<?php 
    print $c_trim.' of '.$chopThis; 
?> Header"><!--     ^   Begin Dynamic and SVG styled Header  ^   -->
<object id="svgtitle" class="floatleft transparentback" title="Documents of <?php print $chopThis; ?> container"
        data="css/masthead.php" type="image/svg+xml">
</object>
</div><!-- $ END Dynamic and SVG HTML node ID#header $ -->

<div id="wrapper" class="unfloat"><!-- ^ id=wrapper ^ -->
<div class="content" id="cookieData"></div>
<!-- div class="content" id="docLinks" style="z-index:9999 !important;"></div -->