<?php
// @filename ./inc/footer.inc.php
//
if(defined("XRO")){
	$xro = XRO;
}
else {
	$xro = '';
}
require $xro.'inc/backlinks.inc.php';

if(isset($_SERVER['SERVER_NAME'])){
	$serverName = $_SERVER['SERVER_NAME'];
}
else{
	$serverName = 'localhost';
}
$footRoot = "http://".$serverName;
$footFile = $footRoot.$_SERVER['PHP_SELF'];
$footParse = parse_url($footRoot);
foreach($footParse as $fPkey => $fPval){
	if($fPkey == "host"){
		$footPath = $fPval;
		break;
	}
	else {
		$footPath = $fPval;
	}
}
$footDir = __FILE__;
$footReplace = '';
$footHost = str_replace($footFile, $footReplace, $footRoot);
 
?>

	<div id="footer" class="container">	<!-- 	^	#footer 	^	-->
		

				<?php print $backlinksHtml; ?>

	<div class="vertMid">						<!--	^	.vertMid	^	-->
		<p id="toTop" class="floatRt">
			<a class="intraNav" href="#header">
				<img src="css/arrow-up.gif" alt="jump to top" />[ Top ]
			</a>
		</p>
		<p id="searchrec">Search privately: <a 
			href="https://duckduckgo.com/goodies" 
			title="Search privately">Duck-Duck-Go for it!</a></p>
			
	</div>										<!--	$	.vertMid	$	-->

	</div>
						<!-- 	$	#footer 	$	-->
