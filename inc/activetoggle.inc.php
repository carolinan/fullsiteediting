<?php

print '<dl id="alpharrayTest">
	';
	foreach($alphaNumArray as $alphaNumKey => $alphaNumVal){
		$alphaKeyCount[] = $alphaNumKey;
		if(is_array($alphaNumVal)) {
			$ddPart = "\n".'<dt class="toggler" title="'.$alphaNumKey.'" id="dt'.$alphaNumKey.'">[ toggle ] '.$alphaNumKey.'</dt>'." \n ";
			$ddPart  .= '<dd title="'.$alphaNumKey.' contains multiple values as array" id="dd'.$alphaNumKey.'" class="target displayNone">'."\n";
			$ddPart .= '<ul>'."\n";

			foreach ($alphaNumVal as $avoKey => $avoItem) {
				$ddPart .= '<li>'.$avoItem.'</li>'."\n";
			}

			$ddPart .= "</ul> \n";
			$ddPart .= "</dd> \n".'<!-- END ISARRAY DIV -->'."\n";
			print $ddPart;
		}
		elseif(!is_array($alphaNumVal) && $alphaNumVal != '') {
			$ddPart = "\n".'<dt class="toggler" title="'.$alphaNumKey.'" id="dt'.$alphaNumKey.'">[ toggle ] '.$alphaNumKey.'</dt>'." \n ";
			$ddPart  .= '<dd title="'.$alphaNumKey.' contains one value as string" id="dd'.$alphaNumKey.'" class="target displayNone">'."\n";
			$ddPart .= '<ul>'."\n";			 
			$ddPart .= '<li>'.$alphaNumVal.'</li>'."\n";
			$ddPart .= "</ul> \n";
			$ddPart .= "</dd> \n".'<!-- END ISSTRING DD -->'."\n";
			print $ddPart;
			
		}
		else {
			$ddPart = "\n".'<dt class="toggler displayNone" title="'.$alphaNumKey.'" id="dt'.$alphaNumKey.'">[ No &#x201c;'.$alphaNumKey.'&#x201d;  items ]</dt>';

			$ddPart .= "\n";
			$ddPart .= '<dd title="'.$alphaNumKey.'" class="emptyItem displaynone" id="dd'.$alphaNumKey.'">'."\n";
			$ddPart .= $alphaNumVal."\n";
			$ddPart .= '</dd>'."\n";
			print $ddPart;
		}

	}
print '</dl>';

?>