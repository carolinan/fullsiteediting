<?php

/*
** USE THIS FILE (I.E. INCLUDE IT)
** FOR DISPLAYING THE CURRENT VALUES OF
** ALL IF($PROCESS) LOCAL SCOPE VARIABLES
*/

$localScope = array();

$localScope[] = '<ul id="localScope" style="list-style-type:upper-roman;">
	';
$localScope[] = '<li>
	'.
	'	<ul style="list-style-type:lower-latin;">
	'.
	'		<li class="listheaditem">$patharray:</li>
	';

	foreach($patharray as $paKey => $paVal){
		$localScope[] = '<li><span class="keyStyle">'.$paKey.':</span> <span class="sansSerif">'.$paVal.'</span></li>
			';
	}

$localScope[] =  '</ul>
</li>
';

$localScope[] = '<li>
	'.
	'	<ul style="list-style-type:lower-latin;">
	'.
	'		<li class="listheaditem">$testPrint:</li>
';
	$i = 0;
	foreach($testPrint as $tpKey => $tpVal){
		if($i==0){

		$localScope[] = '<li class="resetListCount"><span class="keyStyle">'.$tpKey.':</span> <span class="sansSerif">'.$tpVal.'</span></li>
			';
		}
		else{
		$localScope[] = '<li><span class="keyStyle">'.$tpKey.':</span> <span class="sansSerif">'.$tpVal.'</span></li>
			';
		}
	$i++;
	}

$localScope[] =  '</ul>
</li>
';

$localScope[] = '<li><span class="keyStyle">$thisdir_underscortrim:</span> <span class="sansSerif">'.$thisdir_underscortrim.'</span></li>
	';

$localScope[] = '<li><span class="keyStyle">$curWorkDir:</span> <span class="sansSerif">'.$curWorkDir.'</span></li>
	';

$localScope[] = '<li><span class="keyStyle">$subject:</span> <span class="sansSerif">'.$subject.'</span></li>
	';

$localScope[] = '<li><span class="keyStyle">$replace:</span> <span class="sansSerif">'.$replace.'</span></li>
	';
$localScope[] = '<li><span class="keyStyle">$removeThis:</span> <span class="sansSerif">'.$removeThis.'</span></li>
	';
$localScope[] = '<li><span class="keyStyle">$pathFound:</span> <span class="sansSerif">'.$pathFound.'</li>
	';

$localScope[] = '<li><span class="keyStyle">$pathNew:</span> <span class="sansSerif">'.$pathNew.'</span></li>
	';
$localScope[] = '<li><span class="keyStyle">$currentDir:</span> <span class="sansSerif">'.$currentDir.'</span></li>
	';

$localScope[] = '<li><span class="keyStyle">$parseUrl:</span> <span class="sansSerif">'.$parseUrl.'</span></li>
	';

$localScope[] = '<li>
	'.
	'	<ul style="list-style-type:lower-latin;">
	'.
	'		<li class="listheaditem">$parsed2Url:</li>
';
	foreach($parsed2Url as $paKey => $paVal){
		$localScope[] = '<li><span class="keyStyle">'.$paKey.':</span> <span class="sansSerif">'.$paVal.'</span></li>
			';
	}

$localScope[] =  '</ul>
</li>
';

$localScope[] = '<li><span class="keyStyle">$thispage:</span> <span class="sansSerif">'.$thispage.'</span></li>
	';
$localScope[] = '<li><span class="keyStyle">$thispage_rtrim:</span> <span class="sansSerif">'.$thispage_rtrim.'</span></li>
	';

$localScope[] = '<li><span class="keyStyle">$bodyid:</span> '.$bodyid .'</li>
	';
$localScope[] = '<li><span class="keyStyle">$replaced:</span> <span class="sansSerif">'.$replaced.'</span></li>
	';

$localScope[] = '<li><span class="keyStyle">$bodyUcWords:</span> <span class="sansSerif">'.$bodyUcWords.'</span></li>
	';
$localScope[] = '<li><span class="keyStyle">$bodyidtxt:</span> <span class="sansSerif">'.$bodyidtxt.'</span></li>
	';

$localScope[] = '<li><span class="keyStyle">$serverName:</span> <span class="sansSerif">'.$serverName.'</span></li>
	';
$localScope[] = '<li><span class="keyStyle">$serverUrl:</span> <span class="sansSerif">'.$serverUrl.'</span></li>
	';

$localScope[] = '<li><span class="keyStyle">$currentUrlPath:</span> '. $currentUrlPath .'</li>
	';
$localScope[] = '<li class="sansSerif">XRO: '. $xro .'</li>
	';
$localScope[] = '<li>
	'.
	'	<ul style="list-style-type:lower-latin;">
	'.
	'		<li class="listheaditem">$goUp array():</li>
';
	foreach($goUp as $guKey => $guVal){
		$localScope[] = '<li><span class="keyStyle">'.$guKey.':</span> <span class="sansSerif">'.$guVal.'</span></li>
			';
	}

$localScope[] =  '</ul>
</li>
';
$localScope[] = '</ul>
	';

// END LOCALSCOPE ARRAY FOR PRINTING LOCAL VARIABLE INFO
?>