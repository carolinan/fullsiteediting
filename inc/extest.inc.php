<?php
// DETERMINE FILE TYPE BASED ON THE FOLLOWING LOGIC:

// CONSIDER: FOR TESTING FILE EXTENSIONS,
// WHAT IS BETTER: A SWITCH, OR AN IF- ELSEIF?

 
if (ereg("cfml", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"nav ".$extension."\"><strong style=\"color:steelblue\">CFML&nbsp;:&nbsp;</strong>";
}
elseif (ereg("png", $extension)) {
	$extnArr[$count]['item'][$count]="png";
	$extnArr[$count]['item'] = "<li class=\"nav ".$extension."\"><strong style=\"color:indianred\">PNG&nbsp;:&nbsp;</strong>";
}
elseif (ereg("gif", $extension)) {
	$extnArr[$count]['item'][$count]="gif";
	$extnArr[$count]['item'] = "<li class=\"nav ".$extension."\"><strong style=\"color:coral\">GIF&nbsp;:&nbsp;</strong>";

}
elseif (ereg("jpg", $extension)) {
	$extnArr[$count]['item'][$count]="jpg";
	$extnArr[$count]['item'] = "<li class=\"nav ".$extension."\"><strong style=\"color:darkorange\">JPG&nbsp;:&nbsp;</strong>";
}
elseif (ereg("bmp", $extension)) {
	$extnArr[$count]['item'][$count]="bmp";
	$extnArr[$count]['item'] = "<li class=\"nav ".$extension."\"><strong style=\"color:darkorange\">BMP&nbsp;:&nbsp;</strong>";
}
elseif (ereg("ico", $extension)) {
	$extnArr[$count]['item'][$count]="ico";
	$extnArr[$count]['item'] = "<li class=\"nav ".$extension."\"><strong style=\"color:violet\">ICO&nbsp;:&nbsp;</strong>";
}
elseif (ereg("psd", $extension)) {
	$extnArr[$count]['item'][$count]="psd";
	$extnArr[$count]['item'] = "<li class=\"nav ".$extension."\"><strong style=\"color:mediumblue\">PSD&nbsp;:&nbsp;</strong>";
}
elseif (ereg("gz", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"zipicon\">";
}
elseif (ereg("rar", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"zipicon\">";
}
elseif (ereg("zip", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"zipicon\">";
}
elseif (ereg("apf", $extension) || ereg("pnproj",$extension) || ereg("pnps",$extension) || ereg("pnpg",$extension) || ereg("kpf",$extension)) {
	$extnArr[$count]['item'] = "<li class=\"proj-in-nav\">";
}
elseif (ereg("ppg", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"proj-in-nav\">";
}
elseif (ereg("css", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"cssicon\">";
}
elseif (ereg("js", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"jsicon\">";
}
elseif (ereg("xml", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"xmlicon\">";
}
elseif (ereg("php", $extension)) {
	if(preg_match("/^".$bodyid."\.php$/", $basename)){
		$extnArr[$count]['item'] = "<li id=\"".$bodyid."Nav\" class=\"phpicon\">";
}
 
	   	else{
		$extnArr[$count]['item'] = "<li class=\"phpicon\">";
	}	
 
}
elseif (ereg("phtml", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"phpicon\">";
}
elseif (ereg("html", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"htmlicon\">";
}
elseif (ereg("htm", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"htmlicon\">";
}
elseif (ereg("pdf", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"pdficon\">";
}
elseif (ereg("txt", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"txticon\">";
}
elseif (ereg("db", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"nav ".$extension."\">";
}
elseif (ereg("exe", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"exeicon\">";
}
elseif (ereg("swf", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"swficon\">";
}
elseif (ereg("bak", $extension)) {
	$extnArr[$count]['item'] = "<li class=\"bakicon\">";
}
/*
	else {
	$extnArr[$count]['item'] = "<li class=\"nav_".$extension."\"><strong style=\"color:red\">".$extension.":&nbsp;</strong>";
} 	
*/


if(!isset($extnArr[$count]['item']) && !is_dir($filename)) {
	
if(isset($switchMode)){
unset($switchMode);	
}
	switch ($extension){
		case 'inc':
			$extnArr[$count]['item'] = '<li class="nav_'.$extension.'"><strong>INC&#160;:&#160;</strong>';
			
$switchMode =1;
		break;
		case 'DS_Store':
			$extnArr[$count]['item'] = "<li class=\"hiddenitem\">";
			
$switchMode =1;
		break;
		case 'com':
			$extnArr[$count]['item'] = "<li class=\"netcomicon\">";
			
$switchMode =1;
		break;
		case 'project':
			$extnArr[$count]['item'] = '<li class="project">';
			
$switchMode =1;
		break;
		case 'ini':
			$extnArr[$count]['item'][$count]="ini";
			$extnArr[$count]['item'] = '<li class="nav '.$extension.'">';
			
$switchMode =1;
			break;  
	
		default:
			$extnArr[$count]['item'] = '<li class="nav '.$extension.'">uK <strong>'.$extension.'&#160;:&#160;</strong>';
			
$switchMode =1;
	}
}



?>
