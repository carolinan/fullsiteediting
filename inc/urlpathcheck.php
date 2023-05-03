<?php
error_reporting(E_ALL);

$winPathForm = '<!--	^	id:parchment	^	-->
<div class="parchment">
	<h3 id="wpFormHeader">Windows Path to URL Conversion Tool:</h3>
	<h4 id="winPathUPC">[ urlpathcheck.php ]</h4>
	<p>Enter a Windows path (i.e. C:&#92;SomePath&#92;Here.php) to the file
	of your choice into the form below, and it will be converted into a viable
	URL for browsing.</p>
	<form id="winPathForm" action="'.$_SERVER['PHP_SELF'].'" method="get">
		<input type="text" id="winpath" name="winpath" value="" /><br />
		<input type="hidden" id="wpGo" name="wpGo" value="1" /><br />
		<input type="submit" id="wpSubmit" name="wpSubmit" value="Convert Path!" /><br />
	</form>
	</div>
	<!--	$	id:parchment	$	-->
	';

if( isset($_GET['wpGo']) && ($_GET['wpGo'] == 1 || $_GET['wpGo'] == '1') ) {
	$winPath = $_GET['winpath'];
	$origPath = $winPath;
	$depthLevel = preg_match_all('@[\\]+[\w*|\d*|\-*|_*|\.*|\s*]+@', $winPath, $matches);

	$x = $depthLevel;

// TEMP UNREMOVED ----------- REMOVED ASSIGNMENT BY REFERENCE
//	$cloneOfMatches = &$matches;
//
$cloneOfMatches = $matches;
	$matchArray = array();
	for($j=0;$j<$x;$j++){
		// btw: no longer assinged value by reference (lines 38 - 42ish)
		if(isset($cloneOfMatches[0][$j]))	{
			$matchArray[$j] = $matches[0][$j];
				// $matchArray[$j] = str_replace('/\\','/', $matchArray[$j]);  // replaced with pregreplace
			$matchArray[$j] = preg_replace('@(\\\|/|/\\\)@', '/', $matchArray[$j]);
		}
	}

/*
	*
	* THE FOLLOWING FOR() LOOP CONTAINS THE PROCEDURE WHICH TESTS FOR DETECTION OF
	* _CERTAIN _KEY _STRINGS _SUCH _AS _HTDOCS, _PUBLIC_HTML, _VAR (OF .NIX SYSTEMS LIKE REDHAT), WWWROOT (OF IIS), ETC
	* HOWEVER THESE STRINGS SHOULD PERHAPS ONLY BE REMOVED IF THEY APPEAR _BEFORE_ A NON-KEY STRING.
	* FOR EXAMPLE: USING THE PATH: C:\MyTemp\Apache2.2\htdocs\QuantumFireball\216.246.60.113\adintera\public_html\index.php
	* THIS FILE://C:// URL_sCHEME WILL RETURN A BOGUS HTTP URL. BASED ON THE EXPLANATION, WHY DOES THE URL RETURN A FALSE
	* RESULT ? ? ?
	*
 */

	$win2url = 'http://localhost';
$oneLess=$x-1;
$ref=99;

for($i=0;$i<$depthLevel;$i++)	{
	$matchTest=$matches[0] ? !is_array($matches[0]) : $matches[0][0] ;
	$switchVal = $matchArray[$i]/* ? !is_array($matchArray[$i]) : $matchArray[0][$i] */;

	if(empty($segMatch) && preg_match('@^\w{1}$@i',$switchVal,$segMatch)){
		$win2url = $win2url;
		$test0=1;
		echo '<br />Matched '.$i.' <strong class="red">Match!</strong> @'.$segMatch[0].'@i in '.$switchVal."\n";
		echo '<br />_win2url now: '.$win2url."\n";

	}
	elseif($i <= '2'){
		if(empty($segMatch) && preg_match('@apache[\d\.]*$@i',$switchVal,$segMatch)){
			$test1 = 1;
			$win2url = $win2url;
			echo '<br /> loop '.$i.' <strong class="red">Match!</strong> @'.$segMatch[0].'@i in '.$switchVal."\n";
			echo '<br />_win2url now: '.$win2url."\n";

		}
		elseif(empty($segMatch) && preg_match('@htdocs@i',$switchVal,$segMatch)){
			$test2 = 1;
			$win2url = $win2url;
			echo '<br /> loop '.$i.' <strong class="red">Match!</strong> @'.$segMatch[0].'@i in '.$switchVal."\n";
			echo '<br />_win2url now: '.$win2url."\n";
		}
		elseif(empty($segMatch) && preg_match('@public_html@i',$switchVal,$segMatch)){
			$test3 = 1;
			$win2url = $win2url;
			echo '<br /> loop '.$i.' <strong class="red">Match!</strong> @'.$segMatch[0].'@i in '.$switchVal."\n";
			echo '<br />_win2url now: '.$win2url."\n";
		}
		elseif(empty($segMatch) && preg_match('@html@i',$switchVal,$segMatch)){
			$test6 = 1;
			$win2url = $win2url;
			echo '<br /> loop '.$i.' <strong class="red">Match!</strong> @'.$segMatch[0].'@i in '.$switchVal."\n";
			echo '<br />_win2url now: '.$win2url."\n";
		}
	}
	elseif(empty($segMatch) && preg_match('@var$@i',$switchVal,$segMatch)){
		$test4 = 1;
		$win2url = $win2url;
		echo '<br /> loop '.$i.' <strong class="red">Match!</strong> @'.$segMatch[0].'@i in '.$switchVal."\n";
		echo '<br />_win2url now: '.$win2url."\n";
	}
	elseif(empty($segMatch) && preg_match('@~.*@i',$switchVal,$segMatch)){
		$test5 = 1;
		$win2url = $win2url;
		echo '<br /> loop '.$i.' <strong class="red">Match!</strong> @'.$segMatch[0].'@i in '.$switchVal."\n";
		echo '<br />_win2url now: '.$win2url."\n";
	}

	else{
		$win2url .= '/'.$switchVal;
		echo '<br /> loop '.$i.' <strong>No</strong> Special <strong>Match</strong> in '.$switchVal.'. NOW APPEND CURRENT VAL, '.$switchVal.', to win2url.'."\n";
		echo '<br />_win2url now: '.$win2url."\n";
	}

	if($i< $oneLess && preg_match('@(http://)@i',$matchTest)){
		$win2url .= $matches[0];
	}

	if(isset($segMatch) && is_array($segMatch)){
		$smLen = count($segMatch);
		for($s=0;$s<$smLen;$s++){
			unset($segMatch[$s]);
		}
	}
	elseif(!empty($segMatch)){
		unset($segMatch);
	}
}

    if($win2url == FALSE){
		$win2url = ' no matches';


	}
	else{
		echo '<p>Would you like to convert a Windows Path to a URL?</p>';
	}
}
print $winPathForm;

if((isset($win2url) /* && isset($_GET['wpGo']) */) && $win2url != '') {

	print '<h4>Resulting URL:</h4>
		'.
		'<p>Your original path: '.$origPath.'</p>
		'.
		' <p>with secret as:&#160;'.$oneLess.'</p>
		'.
			// THE PROCESSED URL FORMATTED AS HYPERLINK
		'<p><a href="'.$win2url.'" target="win2url">'.$win2url.'</a></p>
		'.
		'<p>_x: '.$x.'</p>
		'.
		'<p>_i: '.$i.'</p>
		'.
		'<p>_depthLevel: '.$depthLevel.'</p>
		';
	print '<pre>matches:&#160;';
	print_r($matches[0]);
	print '</pre>
	';

	if(isset($count)){
		echo "<p>Count : ".$count."</p>";
	}
}
elseif(isset($_GET['wpGo'])) {
	print '<h4 class="smallCaps smallcaps">Error!</h4>
		'.
		'<p>I&#39;m sorry, but your RegEx didn&#39;t do what you expected. '.
		'Please edit your PHP code.</p>
		';
}
elseif(count($_GET) == 0) {
	echo '<h4 id="appReady01">FYI</h4>
		';
	echo '<p>_GET is empty. The application is ready for your conversion data
		</p>
		';
}
else{
	echo '<h4 id="appFail01" class="smallcaps red">Fail!</h4>
	';
	echo '<p class="serif red">The application has returned nothing for <br /><code>&#x3c;FORM&#x3e; <br />&#x3cINPUT id=wpGo&#x3e;<br />&#x3c;FORM&#x3e;</code> <br />and $win2url (the conversion you mean to process)</p>
	';
	echo '<p>The following is the value of $_GET:</p>
	';
	print_r($_GET);
}

?>
