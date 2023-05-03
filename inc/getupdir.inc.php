<?php

$subject = $dir;
$replace = '';
$dir = str_replace($search, $replace, $subject);
$footDirReminder .= "<br /> \n";
$footDirReminder .= "<strong class=\"red\">Note:</strong> <code>\$dir</code> isn't used for printing the navList, <em>until</em> it is finally altered using <code>str_replace()</code>, as in the expression: \n";
$footDirReminder .= '<code class="showMatches">$dir = str_replace(<strong class="blue">$search</strong>, <span class="green">$replace</span>, <strong class="red">$subject</strong>);</code><br />'." \n".
	'or...<br />
	'.
	"$dir".' = str_replace(\''.
	"$search" .	 '\', \''.
	"$replace" . '\', \''.
	"$subject" . '\');</p>'." \n";
$footDirReminder .= "\n<br />Therefore...<p class=\"showMatches\">\$dir results in:<br />".$dir."<br />\n";
// SUBStitute FOR DOCHEAD.INC.PHP IF/WHEN NEEDED
if(empty($parseUrl)){
	$parseUrl = parse_url($pathinfo['dirname'], PHP_URL_PATH);
	$bodyid=rtrim(".",$parseUrl) ? empty($bodyid) : $bodyid = $bodyid;

}

$goUp["subject"] = $parseUrl;
$goUp["replace"] = '';
$goUp["search"] = "@^([\w\-\. ]*)+[/]?@";

$goUp["result"] = preg_replace($goUp["search"], $goUp["replace"], $goUp["subject"]);
$goUp["url"] = str_replace($goUp["result"], '', $parseUrl);

?>
