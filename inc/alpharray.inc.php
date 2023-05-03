<?php

echo "-- ".$count." FILES FOUND --";
print '<dl id="alpharrayTest" class="floatRt">';
$zz = 0;
foreach($alphaNumArray as $alphaKeyOut => $alphaValOut){

	if($alphaValOut	!== ''){
		print '<dt>'.$alphaKeyOut.' - [<span class="toggler" onclick="showHide('."'aplhaDd'".')">toggle</span>]</dt>';
		$alphaKeyCount[$zz] = $alphaKeyOut;
		if(is_array($alphaNumArray[$alphaKeyOut])){
			print '<dd id="alphaDd_'.$zz.'" class="displaynone">because is_array($alphaNumArray[$alphaKeyOut])):<br />'."\n";
			print '<ul>';
			foreach($alphaNumArray[$alphaKeyOut] as $alphaListOut){
					print '<li>'.$alphaListOut.'</li>';
			}
			print '</ul>';
				// END
				//	IS_ARRAY
			print '</dd>
				<!-- END ISARRAY DIV -->';
		}
		else{
			// BEGIN
			//	NOT_ARRAY
			print '<dd><p class="singleItem">because <span class="bold red">!is_array(&#8220;&#8221;)</span><br />'.$alphaValOut.'</p></dd>';
		}
	}
	print '<div class="multipurpose_monospace">LOOPING POINT: $alphaKeyOut is: '.$alphaKeyOut.
			' and COUNT is: '.$zz.'<br /></div>'."\n";
	$zz++;
}
print '</dl>';
	print "</div> \n";

?>