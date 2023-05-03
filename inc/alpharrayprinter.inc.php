<?php

$alphArrayPrinter = array();
$alphArrayPrinter = "<div>## <strong>".$objNmbr." items</strong> in NAVLIST ##</div>";
$alphArrayPrinter = '<dl id="alpharrayTest" class="floatRt">';
$zz = 0;
foreach($alphaNumArray as $alphaKeyOut => $alphaValOut){

	if($alphaValOut	!== ''){
		$alphArrayPrinter = '<dt>'.$alphaKeyOut.' - [<span class="toggler" onclick="showHide('."'aplhaDd'".')">toggle</span>]</dt>';
		$alphaKeyCount[$zz] = $alphaKeyOut;
		if(is_array($alphaNumArray[$alphaKeyOut])){
			$alphArrayPrinter = '<dd id="alphaDd_'.$zz.'" class="displaynone">because is_array($alphaNumArray[$alphaKeyOut])):<br />'."\n";
			$alphArrayPrinter = '<ul>';
			foreach($alphaNumArray[$alphaKeyOut] as $alphaListOut){
					$alphArrayPrinter = '<li>'.$alphaListOut.'</li>';
			}
			$alphArrayPrinter = '</ul>';
				// END
				//	IS_ARRAY
			$alphArrayPrinter = '</dd>
				<!-- END ISARRAY DIV -->';
		}
		else{
			// BEGIN
			//	NOT_ARRAY
			$alphArrayPrinter = '<dd><p class="singleItem">because <span class="bold red">!is_array(&#8220;&#8221;)</span><br />'.$alphaValOut.'</p></dd>';
		}
	}
	$alphArrayPrinter = '<div class="multipurpose_monospace">LOOPING POINT: $alphaKeyOut is: '.$alphaKeyOut.
			' and COUNT is: '.$zz.'<br /></div>'."\n";
	$zz++;
}
$alphArrayPrinter = '</dl>';
	$alphArrayPrinter = "</div> \n";

?>