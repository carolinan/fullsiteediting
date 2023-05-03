
<?php
// MAKE AN ARRAY OF THE MULTIPLE FONT-FAMILIES:
if(isset($_GET['selected_font_name'])) {
	$htmlSelect_GETselectedFont=$_GET['selected_font_name'];
	$htmlDivId_DisplayFontTxt='#newfontfam';
	// $htmlSelect_GETselectedFont = $htmlSelect_GETselectedFont.$htmlDivId_DisplayFontTxt;
	$htmlProp_jsOnload = 'onload="location.href='.$_SERVER["PHP_SELF"].'?selected_font_name='.$htmlSelect_GETselectedFont.$htmlDivId_DisplayFontTxt.'"';
	$htmlInlineStyle_fontText = " style=\"color:#dFF;\" ";
} else {
	$htmlProp_jsOnload="";
}
/**
*	@var array _customfams
*		Keys are manually matched with values for purpose of use as
*		CSS classes such that corresponding Font Family names will use
*		array Key as CSS class value thereby styling appropriately
**/
$defaultFontsArray = array('liberSans'=>"Liberation Sans",
'liberSerif'=>"Liberation Serif",
'liberMono'=>"Liberation Mono",
'bitsVSans'=>"Bitstream Vera Sans",
'bitsVSerif'=>"Bitstream Vera Serif",
'bitsMono'=>"Bitstream Vera Sans Mono",
'dejaSans'=>"DejaVu Sans",
'dejaSansCond'=>"DejaVu Sans Condensed",
'dejaSansLight'=>"DejaVu Sans Light",
'dejaSansMono'=>"DejaVu Sans Mono",
'dejaSerif'=>"DejaVu Serif",
'dejaSerifCond'=>"DejaVu Serif Condensed",
'georgia'=>"Georgia",
'palatino'=>"Palatino",
'timesnewrom'=>"Times New Roman",
'arial'=>"Arial",
'arialblack'=>"Arial Black",
'impact'=>"Impact",
'lucida'=>"Lucida Sans Unicode",
'tahoma'=>"Tahoma",
'trebuchet'=>"Trebuchet MS",
'verdana'=>"Verdana",
'comicsans'=>"Comic Sans",
'couriernew'=>"Courier New",
'lucidacon'=>"Lucida Console",
'andalemon'=>"Andale Mono",
'symbol'=>"Symbol",
'webdings'=>"Webdings",
'wingdings'=>"Wingdings",
'fantasy'=>"Fantasy",
'exceptMSSerif'=>"MS Serif",
'exceptMSSans'=>"MS Sans-Serif");
asort($defaultFontsArray);
$htmlSelect_FontName = "<select  onchange=\"submit()\" name=\"selected_font_name\"> \n".
					"<option value=\"\"> -- Select New Font -- </option> \n";
foreach($defaultFontsArray as $fontsArrayKey_asSelectOptionValue => $fontsArrayValue_asSelectOptionDisplay) {
	$htmlSelect_FontName .= "<option value=\"".$fontsArrayKey_asSelectOptionValue."\">".$fontsArrayValue_asSelectOptionDisplay."</option> \n";
}
$htmlSelect_FontName .= "</select> \n";
if(empty($_GET['selected_font_name'])){
	if(isset($_POST['customfontentry'])){
		$httpRequest_fontIndex = $_POST['customfontentry'];
	}
	else{
		$httpRequest_fontIndex = "fantasy";	
	}
}
else
	{
$httpRequest_fontIndex = $_GET['selected_font_name'];
}
foreach($defaultFontsArray as $fontsArrayKey_asCssClass => $fontsArrayValue_asFontName)
		{
	if($fontsArrayKey_asCssClass==$httpRequest_fontIndex) {
	$httpRequest_ucfirstFontName = ucfirst($fontsArrayValue_asFontName);
	$htmlAnchor_displayDetails = "<a id=\"declarAnchor\" href=\"#".$fontsArrayKey_asCssClass."\">Details</a>";
	break;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
<head profile="http://WordPressCenter.net/profile.html">
<title>Windows and Mac Font Equivalents - Browser Panel</title>
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="content-type" content="application/xhtml+xml;charset=utf-8" />
<meta name="author" content="NoviceNotes&#x2122;" />
<meta name="description" content="Fonts common to all versions of Windows with Mac and Linux equivalents listed as a tool for creating web pages." />
<meta name="keywords" content="windows,mac,linux,fonts,common,similar,equivalent,standard,usual,typical,frequent" />
<!-- link rel="stylesheet" href="css/safefonts.css" type="text/css" media="screen" charset="UTF-8" -->
<!-- tempcss -->
<link rel="stylesheet" href="css/safefontstyle_cssToolbox_akelPadEdit.css" type="text/css" media="screen" charset="UTF-8" />
<link rel="shortcut icon" href="http://WordPressCenter.net/favicon.ico" />
<script type="text/javascript" src="js/thetoggler.js"></script>
<style type="text/css">
/*<![CDATA[*/


/*]]>*/
</style>
</head>

<?php

/* NEXT ITEM IS PRELUDE */
?>
