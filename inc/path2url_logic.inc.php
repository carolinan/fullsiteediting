<?php
error_reporting(E_ALL);
$transForm = '							<!--	^	.contentInner	^	-->
<div class="contentInner">
	<h3 id="wpFormHeader">Windows &amp; Linux Path to URL Conversion Tool:</h3>
	<h4 id="winPathUPC">path2url by @ajaxStardust</h4>
	<h5>Filename: <code class="code">[ '.$patharray["basename"].' ]</code></h5>
		';

if(empty($_GET)){
	if(isset($_SESSION['winpath'])){
		$phpWinpath = $_SESSION['winpath'];
	}
	else{
	$phpWinpath='';
	}
$transForm .= '<p>Enter a Windows path (i.e. C:&#92;SomePath&#92;Here.php) to the file
	of your choice into the form below, and it will be converted into a viable
	URL for browsing.</p>
	<form id="transForm" action="'.$_SERVER['PHP_SELF'].'" method="get">
		<input type="text" id="winpath" name="winpath" value="'.$phpWinpath.'" /><br />
		<input type="hidden" id="wpGo" name="wpGo" value="1" /><br />
		<input type="submit" id="wpSubmit" name="wpSubmit" value="Convert Path!" /><br />
	</form>
	</div>
	<!--	$	.contentInner	$	-->
	';
}

print $transForm;

/** @var _GET[winpath]
 * 		the User-submitted URL
**/

if(isset($_GET['winpath'])) {
	$htmlConcat .= '<div><p>[<span id="urlPathTrigger" class="trigger" onclick="showHidePlus(\'urlPathContainer\',\'urlPathTrigger\')"> toggle </span>] detail view</p></div>
		<div id="urlPathContainer" class="target keyTerms">
		<h4>WinPath Transformation Details</h4>
		<ul class="larger">
		<li><em>path2url</em> transformed the submitted system <em>path</em> into several smaller strings, each representing one of the containers which make up the path (i.e. each folder name along the path was extracted to a single string).</li>
		<li>The individual container names are derived by PHP <code>preg_match()</code> when &#x201c; &#x2f; &#x201d; (a <em>slash</em>  character) is matched along the path.</li>
		<li>With each consecutive match, the resulting character strings, naturally corresponding to each container, are stored in an array.</li>
		</ul>
		<p>The array, key/value pairs representing each portion of <code>?winpath=</code> is listed with a brief explanation which details whether it was used to build the http URL, or discarded.</p>
		<p><strong>Trivial Note:</strong> Each array index-key is equal to the number of
		slashes	preceding the path sub-section, as stored in that key&#x27;s
		value, respectively.</p>
		<p>Also, some additional processing info is hidden in the HTML source. If you&#x27;re using a Mozilla browser, try selecting from <em class="red">result: http://_..._</em> to the following <em class="red">key[x]</em>, then right-click, and choose "View <em>Selection</em> Source"</p>';

	$winPath = $_GET['winpath'];
	$origPath = $winPath;
 	$depthLevel = preg_match_all('@[\\]+[\w*|\d*|\-*|_*,\'\"\`\(\[\{!\@#$%\:\;^&\*\=\+\}\]\)`|\.*|\s*]+@', $winPath, $matches ) ;

	$x = $depthLevel;
$cloneOfMatches = $matches;
	$matchArray = array();
	for($j=0;$j<$x;$j++){
		if(isset($cloneOfMatches[0][$j]))	{
			$matchArray[$j] = $matches[0][$j];
			$matchArray[$j] = preg_replace('@(\x5c)@', '/', $matchArray[$j]);
		}
	}



	$winpath = 'http://localhost';
$oneLess=$x-1;
$ref=99;

for($i=0; $i < $depthLevel; $i++)	{
	$matchTest=$matches[0] ? !is_array($matches[0]) : $matches[0][0] ;
	$switchVal = $matchArray[$i];

	if(isset($matchArray[0])) {
		$dynaRootTest = preg_match('@file:@i', $matchArray[0]);
		// still testing how to best guess for known paths here...
		if($dynaRootTest){
			$dynaRootDepth = 3;
		}
		else{
			$dynaRootDepth = 2;
		}

	}
	else {
			$dynaRootDepth = 2;
	}

/** @TODO
*		PROVIDE A WAY FOR USERS TO INTERACT WITH THE MATCHING PROCESS
*			1.) USERS COULD SUGGEST A FOLDER STRUCTURE BEFORE EXECUTION.
*				e.g. "Q: Where is your server DOCUMENT_ROOT?"
*						A: /home/linuxuser/public_html
*						A: C:\Apache\htdocs\wwwroot
*						etc.
*			2.) AS / IF ATYPICAL FOLDERS ARE DETECTED, BREAK REGULAR PROCESS
*				THEN PROMPT USER FOR A BEST RECOMMENDED TRANSLATION INTO THE http:// URL	**/

	if($i <= $dynaRootDepth) {

		if(preg_match('@file@i',$switchVal,$segMatch)){
			$test{$i} = __LINE__;
			$winpath = $winpath;
			$htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
			$htmlConcat .= '<br /><span class="serif">It looks like you&#x27;re browsing the filesystem. I&#x27;m going to exclude <code>'.$switchVal.'</code> as I build the <code>http://</code> url, but it may fail anyway.</span>';
			$htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$winpath.'</span> &#x2026;</span>
				';
		}
		elseif(preg_match('@apache[\d\.]+$@i',$switchVal,$segMatch)){
			$test{$i} = __LINE__;
			$winpath = $winpath;
			$htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
			$htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
			$htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$winpath.'</span> &#x2026;</span>
				';

		}
		elseif(preg_match('@^\w{1}:$@i',$switchVal,$segMatch)){
			$winpath = $winpath;
			$test{$i}= __LINE__;
			$htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
			$htmlConcat .= '<br /><span class="serif">This looks like an MS O/S <em>Drive Letter</em>. I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
			$htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$winpath.'</span> &#x2026;</span>
				';
		}
		elseif(preg_match('@htdocs@i',$switchVal,$segMatch)){
			$test{$i} = __LINE__;
			$winpath = $winpath;
			$htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
			$htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
			$htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$winpath.'</span> &#x2026;</span>
				';
		}
		elseif(preg_match('@public_html@i',$switchVal,$segMatch)){
			$test{$i} = __LINE__;
			$winpath = $winpath;
			$htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
			$htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
			$htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$winpath.'</span> &#x2026;</span>
				';
		}
		elseif(preg_match('@html@i',$switchVal,$segMatch)){
			$test{$i} = __LINE__;
			$winpath = $winpath;
			$htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
			$htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
			$htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$winpath.'</span> &#x2026;</span>
				';
		}
		elseif(preg_match('@var$@i',$switchVal,$segMatch)){
			$test{$i} = __LINE__;
			$winpath = $winpath;
			$htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
			$htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
			$htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$winpath.'</span> &#x2026;</span>
				';

		}
		elseif(preg_match('@usr$@i',$switchVal,$segMatch)){
			$test{$i} = __LINE__;
			$winpath = $winpath;
			$htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
			$htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
			$htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$winpath.'</span> &#x2026;</span>
				';

		}
		elseif(preg_match('@www$@i',$switchVal,$segMatch)){
			$test{$i} = __LINE__;
			$winpath = $winpath;
			$htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
			$htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
			$htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$winpath.'</span> &#x2026;</span>
				';

		}
		elseif(preg_match('@inetpub$@i',$switchVal,$segMatch)){
			$test{$i} = __LINE__;
			$winpath = $winpath;
			$htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
			$htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
			$htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$winpath.'</span> &#x2026;</span>
				';

		}
		elseif(preg_match('@wwwroot$@i',$switchVal,$segMatch)){
			$test{$i} = __LINE__;
			$winpath = $winpath;
			$htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
			$htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
			$htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$winpath.'</span> &#x2026;</span>
				';

		}
		elseif(preg_match('@webroot$@i',$switchVal,$segMatch)){
			$test{$i} = __LINE__;
			$winpath = $winpath;
			$htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
			$htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
			$htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$winpath.'</span> &#x2026;</span>
				';

		}
		elseif(($i < 1) && preg_match('@[\w_\-]+@i',$switchVal,$segMatch)) {
			$test{$i} = __LINE__;
			$winpath = $winpath;
			$htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
			$htmlConcat .= '<br /><span class="serif">I <em>think</em> this is a Linux User directory. Using my best guess, I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
			$htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$winpath.'</span> &#x2026;</span>
				';
		}
//		else {
//			$test{$i} = __LINE__;
//			$htmlConcat .= '<br /><br /><img src="'.$xro.'css/stop.gif" alt="ERROR!" /> key['.$i.']:<br />
//				Not sure of the cause of this ERROR, yet, but I do know <code>$test{'.$i.'}</code> hit here!
//				<br />This chunk of the path, assigned to <code>$switchVal</code>: '.$switchVal.'<br />
//				<em>Now</em>, what does that tell you?<br />
//				';
//			if(is_array($segMatch)){
//				$htmlConcat .= '<code>$segMatch</code> is an <em>array</em>, at the following values
//					<br />';
//				foreach($segMatch as $segmentNow){
//					$htmlConcat .= '<code>$segMatch</code> : '.$segmentNow.'<br />';
//				}
//				$htmlConcat .= '<pre>print_r of segmatch
//					';
//					print_r($segMatch);
//				$htmlConcat .= '</pre>
//					<br />';
//			}
//			else {
//				$htmlConcat .= '<code>$segMatch</code> is NOT an array, and has value of '.$segMatch.'
//				<br />';
//			}
//		}
	}

	else{
		$test{$i} = __LINE__;
		$winpath .= '/'.$switchVal;
		$htmlConcat .= '<br /><img src="'.$xro.'css/check_green.png" alt="Valid!" /> key['.$i.']: <span class="urlPathNoMatch">'.$switchVal.'</span> was used to build the HTTP URL.';
		$htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$winpath.'</span> &#x2026;</span>
				';
	}

	if($i< $oneLess && preg_match('@(http://)@i',$matchTest)){
		$winpath .= $matches[0];
	}

	if(isset($segMatch) && is_array($segMatch)){
		$smLen = count($segMatch);
		for($s=0;$s<$smLen;$s++){
			unset($segMatch[$s]);
		}
		// unset($setMatch);
	}
	elseif(!empty($segMatch)){
		unset($segMatch);
	}
	if(isset($test{$i})){
		$htmlConcat .= '<br /><span class="hidden">$test{'.$i.'} happened at _line_'.$test{$i}.'_ in '.__FILE__.'</span>'."\n";
	}
}

    if($winpath == FALSE){
		$winpath = ' no matches';
 	}
}

if((isset($winpath) /* && isset($_GET['wpGo']) */) && $winpath != '') {

	$htmlConcat .= '</div>
		<p>The path2url  URL transformation script has successfully executed from <code>'.$patharray["basename"].'</code>. The source file, <code>'.$patharray["basename"].'</code> , exists in the server-side folder corresponding to the current HTTP location.</p>
		<p class="attn"><strong>'.$depthLevel.'</strong> separate strings were extracted on matching the delimeters in <span class="code red">'.$origPath.'</span>, the original path sent for processing. Each of the delimited sections are detailed further below.</p>
		<hr class="hidden" />
		<h4 class="blue">Resulting URL:</h4>
		<p>The submitted path has been formatted as an HTTP URL, and assigned to the <code>href</code> attribute of the anchor below. The <code>target</code> attribute is set to open the link in a new window. Click to proceed.</p>
		'.
			// THE PROCESSED URL FORMATTED AS HYPERLINK
		'<p><a class="winpathanchor" href="'.$winpath.'" target="winpath">'.$winpath.'</a></p>
		'.
		'<p class="antihead"><strong>Note:</strong> The HTTP URL has been created using basic <code>IF - THEN</code> flow control logic, where decisions about the result have been made based upon certain conditions known to be true of common system paths (including Linux, although the script title suggests otherwise).</p>
		<p><span class="bold red">Important:</span> If the resulting link is invalid, or does not point to the desired location, please examine the processing notes above ( <em class="serif">Toggle Details</em> ) and have a look at the source code. Keep in mind that the only files which can resolve to a valid, HTTP-served URL via <em>path2url </em> are files located <em>under</em> the Server <code>DOCUMENT_ROOT</code> (unless your server has a dramatically different behaviour from Apache or IIS)</p>
		<p> Please report feedback, recommendations, bug-fixes, etc., to the developer. Thank you for using <em class="smallcaps">@ajaxStardust path2url </em>!</p>
		';
	$htmlConcat .= '<p class="innerContent smallcaps">The delimited values found in <span class="code red">'.$origPath.'</span>, as used in creating the URL above, are as follows:</p>
	<pre>matches:&#160;';
		foreach($matches[0] as $htmKey => $htmVal){
			if($htmKey < 1) {
				$htmlConcat .= "[Parent Container&#xa0;@&#xa0;level($htmKey)]: $htmVal<br />\n";
			}
			else {
				$htmlConcat .= "[Child Container&#xa0;&#xa0;@&#xa0;level($htmKey)]: $htmVal<br />\n";
			}
		}
	$htmlConcat .= '</pre>
	';
	if(isset($_GET['winpath'])){
		$pathNow = $_GET['winpath'];
	}
	$htmlConcat .= '<p>If you wish to re-submit or modify the existing path, do it here:</p>
			<form id="transForm" action="'.$_SERVER['PHP_SELF'].'" method="get">
				<input type="text" id="winpath" name="winpath" value="'.$pathNow.'" size="50" /><br />
				<input type="hidden" id="wpGo" name="wpGo" value="1" /><br />
				<input type="submit" id="wpSubmit" name="wpSubmit" value="Convert Path!" /><br />
			</form>
			';
	$htmlConcat .= '<p>If you want to start over from the beginning, just click the <code>reset</code> button:</p>';
	$htmlConcat .= '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
				<input type="submit" value="reset" id="reloadForm" name="reloadForm" />
			</form>
			</div>	<!--	$	contentInner	$	-->
			';


	if(isset($count)){
		$htmlConcat .= "<p>Count : ".$count."</p>";
	}
}
elseif(isset($_GET['wpGo'])) {
	$htmlConcat .= '<h4 class="smallCaps smallcaps">Error!</h4>
		'.
		'<p>I&#39;m sorry, but your RegEx didn&#39;t do what you expected. '.
		'Please edit your PHP code.</p>
		';
}
elseif(count($_GET) == 0) {
	$htmlConcat .= '<h4 id="appReady01">FYI</h4>
		';
	$htmlConcat .= '<p>_GET is empty. The application is ready for your conversion data
		</p>
		';
}
else{
	$htmlConcat .= '<h4 id="appFail01" class="smallcaps red">Fail!</h4>
	';
	$htmlConcat .= '<p class="serif red">The application has returned nothing for <br />
	<code>&#x3c;FORM&#x3e;<br />
	&#x3cINPUT id=winpath&#x3e;<br />
	&#x3cINPUT id=wpGo&#x3e;<br />
	&#x3c;/FORM&#x3e;</code><br />
	The <span class="smallcaps">HTTP_REQUEST</span> received follows:</p>
	';

	$htmlConcat .= '<div id="printrPost">print_r($_POST)<br />
		';
		print_r($_POST);
	$htmlConcat .= '</div>';

	$htmlConcat .= '<div id="printrGet">print_r($_GET)<br />
		';
		print_r($_GET);
	$htmlConcat .= '</div>';

	$htmlConcat .= '<div id="printrRequest">print_r($_REQUEST)<br />
		';
		print_r($_REQUEST);
	$htmlConcat .= '</div>';

	if(isset($_GET['winpath'])){
	 session_start("PeeAaechPeaMeEyeDee1beU2PeePooPants");
		$_SESSION['winpath'] = $_GET['winpath'];
		$failedPath = $_GET['winpath'];
	}
	$htmlConcat .= '<p>Reset the form to convert another URL. (click the button)</p>';
	$htmlConcat .= '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
				<input type="submit" value="reset" id="reloadForm" name="reloadForm" />
			</form>
		<p>...or, we <em>could</em> go ahead and try this again, right now, Joe-joe:</p>
			<form id="transForm" action="'.$_SERVER['PHP_SELF'].'" method="get">
				<input type="text" id="winpath" name="winpath" value="'.$failedPath.'" /><br />
				<input type="hidden" id="wpGo" name="wpGo" value="1" /><br />
				<input type="submit" id="wpSubmit" name="wpSubmit" value="Convert Path!" /><br />
			</form>
			';
}
print $htmlConcat;
?>