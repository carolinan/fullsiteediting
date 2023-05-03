<?php
$fdrSearch = $search;
$fdrSubject = $subject;
$fdrReplace = $replace;
$yo = "";
$dirIllustrated = $dir;

$checkSolidusDir = preg_match_all('@[^\w:]?\\\+[\w*|\d*|\-*|_*|\.*]+@',$dirIllustrated,$matches);

if(isset($checkSolidusDir)) {
	$manyMatches = count($matches);
	$yo .= "Tested Positive for &#8220;&#92;&#8221; x $manyMatches in $dirIllustrated.<br />";
	$yo .= "<p class=\"showMatches\">";

	for($mm=0;$mm < $manyMatches;$mm++){
		foreach($matches[$mm] as $mKey => $mVal){
			$yo .= "matches[$mm][$mKey]: <span style=\"color:#F00;\">$mVal</span><br /> \n";
		}
	}
	$yo .= "</p>";


}
else {
	$yo .= 'did not detect a reverse solidus in $dir!<br />';
	// $fdrSearch = str_replace('/','\\',$fdrSearch);
}

$dirIllustrated = str_replace('\\','/',$dirIllustrated);

$checkWinPathSolidus = preg_match_all('@/+[\w*|\d*|\-*|_*|\.*]+@',$dirIllustrated,$matches);
if($checkWinPathSolidus){
	$manyMatches = count($matches);
	$yo .= "Tested Positive for &#8220;&#47;&#8221; x $manyMatches in $dirIllustrated.<br />";
		$yo .= "<p class=\"showMatches\">";

	for($mm=0;$mm < $manyMatches;$mm++){
		foreach($matches[$mm] as $mKey => $mVal){
			$yo .= "matches[$mm][$mKey]: <span style=\"color:#F00;\">$mVal</span><br /> \n";
		}
	}
	$yo .= "</p>";

}

$footDirReminder = $yo.'$fdrSearch = '.$fdrSearch.'<br />
	'.
	'$fdrSubject = '.$fdrSubject.'<br />
	'.
	'$fdrReplace = '.$fdrReplace.'<br />';
?>
