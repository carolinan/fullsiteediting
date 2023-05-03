<?php
/**	@overview resource.php.include [ ArrayObjectParser.inc.php ]
 * 	
*	!IMPORTANT: ensure that any non-preferred options are commented
*	(i.e. processing more than one option per filetype will affect the
*	browser view in an unpredictable manner)
* 
*	Main purpose is for CSS class designation, per file extension
*		(i.e. assign html icon to list-style-type of html files, hide dir name class, etc.)
*
*	Some processing instructions, below, have multiple options
*	Options which are not #DEFAULT# are deactivated in // COMMENTS //
*
* 	[	# HOW DO I CHOOSE AN OPTION WHICH IS NOT A DEFAULT? #	]
*
*	To enable a non-default option, 
*	[1] COMMENT the current, active block
*	[2] Uncomment an alternate option as desired from any provided
*
**/

// resume processing as included in [ nav.inc.php ] line ~94

$extension = strtolower($extension);

/* _dfnCount IS boolean (1 or 0)
    * IF [TRUE] THEN UNSET _dotfilename (see arrayobjectanchor.inc.php ~line 57)
    */
if(isset($dfnCount)) {
	unset($dotfilename);
}

/** @since 2010-04-17
*	@abstract
*		instead of former /idea/ of a dynamic-css class...
*		use this switch control to apply a standard naming convention to each
*		HTML class, per extension type
*	HOWEVER due to some special processing required
*		a few file extensions will be processed /before/ reaching the switch
*/

if($filename == '') {
	$dotfilename = $dirname.$extension;
	$childItems[$objNmbr] = '<li class="dotfilename">';
}
elseif (preg_match_all('/php/i', $extension, $pmAll)) {
	if (preg_match('/^' . $bodyid . '\.php$/', $basename)) {
		// DYNAMIC CSS FOR STYLING CURRENT TOP-LEVEL #NAVLIST > LI
		// SEE [ css/style.css.php ]
        $childItems[$objNmbr] = '<li id="' . $bodyid . 'Nav" class="phpicon">';
    }
	elseif (preg_match('/^xro\.php$/i', $basename)) {
		// deprecated [ XRO.php ]
		$childItems[$objNmbr] = '<li class="hiddenitem">';
    }
	else {
        $childItems[$objNmbr] = '<li class="phpicon">';
    }
}
elseif(preg_match_all('/kpf|komodoproject|clpprj|csprj|session|pnproj|pnprj|project|nppsession|buildpath|cpr|apf|ppg|pnps|prd/i', $extension, $pmAll)){
    $specialExtn[$objNmbr][$extension] = $extension;
	/* HANDLE _dotfilename files SUCH AS '.buildpath' OR '.project'
	 * 	SPECIAL TEST FOR _dotfilename LATER IN [ arrayobjectanchor.inc.php ] Line ~57 */
        $childItems[$objNmbr] = '<li class="projectfile">';

}
elseif (preg_match_all('/db|sqlite/i', $extension, $pmAll)) {
/* HANDLE non-image binary objects common to source-code containers, 
 * such as Thumbs.db or sqlite */
$childItems[$objNmbr] = '<li class="dbicon">';
	if($basename == 'Thumbs.db') {
		$childItems[$objNmbr] = '<li class="hiddenitem">';
	}
}
elseif (preg_match_all('/7z/i', $extension, $pmAll)) {
	$childItems[$objNmbr] = '<li class="sevenzipicon">';
}
else{
	// $swVal = array('ext' => $extension, 'fn' => $filename, 'bn' => $basename);
	$swMatch = preg_match_all('/\.\w+/i', $basename, $pmAll);
	$matchKey = (count($pmAll[0]) - 1);
	$swCase = ltrim($pmAll[0][$matchKey], '.');
	switch($extension){
		case $swCase :
			$pmAllCollector[$objNmbr] = $pmAll[0][$matchKey];
			//	$swVal['ext'] = $swCase;
			//	$specialExtn[$objNmbr][$extension] = $swCase;
			if($extension != 'some val we dont want to see'){
				$childItems[$objNmbr] = '<li class="nav ' . $extension . 'icon">';
			}
		break;
		default :

			$specialExtn[$objNmbr][$extension] = $extension;
			if($extension != 'some val we dont want to see'){
				$childItems[$objNmbr] = '<li class="nav ' . $extension . 'icon">';
			}
			$pmAllCollector[$objNmbr] = $pmAll[0];
	}
}

/* else {
	$specialExtn[$objNmbr][$extension] = $extension;
	$childItems[$objNmbr] = '<li class="unknown"><!-- '.
		$extension.' IS AN UNKNOWN TYPE @ AOP.INC.PHP:235 --> ';
} */

// @to line 95 ./nav.inc.php
?>