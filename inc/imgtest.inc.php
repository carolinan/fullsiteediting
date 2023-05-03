<?php 
	
	$pathtofile = $pathinfo['dirname'];
	$pathtofile = rtrim($pathtofile, ".");
	$newSubject = strrev($pathinfo['basename']);
	$newPattern = "@^([a-zA-Z0-9]{2,5}[.])?@";
	$newPreg = preg_match($newPattern, $newSubject, $match);
	$extnArr[$count]['item']['match'] = $match[0];
	
	if($onepageRtrim > ''){
	$nombreDelFile = $onepageRtrim;
	}
	else{
	$nombreDelFile = strrev($newSubject);
	}
	
	if(isset($extnArr[$count]['item'][$count]))
	{
	
	$strvExtn = strrev($extension).".";
	
	if($strvExtn==$match[0])
	{
	
		switch($strvExtn) {
			case "knl.":
				$extnArr[$count]['item'] .= $nombreDelFile."</li>";
				break;
			case "fig.":
				$extnArr[$count]['item'] .= "<a href=\"#\" onclick=\"popMeUp('".
				$pathtofile.$basename."')\">".$nombreDelFile."</a></li>";
			break;
			case "dsp.":
				$extnArr[$count]['item'] .= "<a href=\"#\" onclick=\"popMeUp('".
				$pathtofile.$basename."')\">".$nombreDelFile."</a></li>";
			break;
			case "gpj.":
				$extnArr[$count]['item'] .= "<a href=\"#\" onclick=\"popMeUp('".
				$pathtofile.$basename."')\">".$nombreDelFile."</a></li>";
			break;
			case "oci.":
				$extnArr[$count]['item'] .= "<a href=\"#\" onclick=\"popMeUp('".
				$pathtofile.$basename."')\">".$nombreDelFile."</a></li>";
			break;
			case "pmb.":
				$extnArr[$count]['item'] .= "<a href=\"#\" onclick=\"popMeUp('".
				$pathtofile.$basename."')\">".$nombreDelFile."</a></li>";
			break;
			case "gnp.":
				$extnArr[$count]['item'] .= "<a href=\"#\" onclick=\"popMeUp('".
				$pathtofile.$basename."')\">".$nombreDelFile."</a></li>";
			break; 
			default:
				$extnArr[$count]['item'] .= '<a href="'.$pathtofile.$basename.
				'" title="'.$basename.'">'.$nombreDelFile.'</a></li>';
				$extnArr[$count]['item'] .= " \n";
		}
	
	}
	
	}
	else{
	$extnArr[$count]['item'] .= "<a href=\"".$pathtofile.$basename."\">".
		$nombreDelFile."</a></li>";
	}
?>

