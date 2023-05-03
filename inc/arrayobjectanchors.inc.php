<?php
/**
 *  @required_by .inc/nav.inc.php
 **/

/**
 * @OVERVIEW
 *
 *	String concatenation procedure to handle the current directory object.
 * 	Apply appropriate, per-object-type HTML to current object, $basename:
 *
 *		INSERT HTML:
 *			WHERE <A onclick loadIframe()> -- user view object in iFrame
 *			WHERE <A href> -- user browse object as new URL
 *			WHERE <A href is invalid filename> -- try cleanBasename function
 *		HTML COMMENTS <!-- 00 --> number IS SOURCE LINE FOR HTML "VIEW SOURCE"
**/
/*
 * @var basename, see  nav.inc.php, @line =~65: pathinfo()
 * @function cleanBasename see nav.inc.php, @Line=~21 require()
 */
$cleanThis = $basename; 
$cleanBasename = cleanBasename($cleanThis); 

/** 
 * 2022.02.02 JS - temp comment this "cleaner" with the %20 bit:
 * 
 * $cleanBasename = str_ireplace(" ", '%20', $cleanBasename);
 * 
 */

if (isset($childItems[$objNmbr])) {
	// THIS readdir() item _NOT_ A DIRECTORY  #see nav.inc.php, lines ~70,*,~100

	if (isset($specialExtn[$objNmbr][$extension])) {
	// HANDLE IMAGE OR SPECIAL FILETYPE
		if(isset($dotfilename)){
			$childItems[$objNmbr] .= '<a title="View ' . $dotfilename . ' in main iFrame" href="#mainFrameContainer" id="navAnchor_' . $dotfilename . '" onclick="loadIframe(\'' . $dotfilename . '\')"><!-- '.__LINE__.' -->'.$extension.'</a> ['.$dotfilename.' to iframe]</li>' . "\n";
		}
/* 
		elseif($extension == 'project'){
			$childItems[$objNmbr] .= '<a title="View ' . $cleanBasename . ' in main iFrame" href="#mainFrameContainer" id="navAnchor_' . $filename . '" onclick="loadIframe(\'' . $filename . '\')"><!-- '.__LINE__.' -->dot file</a> ['.$filename.' to iframe]</li>' . "\n";
		} 
*/
		else{
/* IF $specialExtn[$objNmbr] WAS SET IN [ arrayobjectparser.inc.php ]
 *   THE ANCHOR ATTRIBUTES for those filetypes ARE PROCESSED AT THIS LINE
*/		
			$childItems[$objNmbr] .= '<a href="#mainFrameContainer" id="navAnchor_' . $cleanBasename . '" title="' . $cleanBasename . '" onclick="loadIframe(\'' . $cleanBasename . '\')">' . $filename . '</a><!-- '.__LINE__.' -->[view '. $extension.']</li>' . "\n";
		}
	}
	else {
/* @logic NOT AN IMAGE
* i.e. PROBABLY TEXT/HTML */

		if ($thisObject_pathInfo['extension'] == 'php') {
/* 
 * EXTENSION IS .PHP :
 *   PHP FILES ARE _NOT_ SENT TO IFRAME BUT _TOP (as new page)
 *       hence the use of phtml for most Annie De Browsa extensions
 *   Developer is left with options for how a page should load
 *   by simply modifying the file extension from PHP or PHTML  
*/
			$childItems[$objNmbr] .= '<a href="' . $cleanBasename . '" title="' . $cleanBasename . '"><!-- '.__LINE__.' -->' . $filename . '</a> [top]</li>' . "\n";
		}
		else {
	// BASENAME INVALID FOR HTML ATTRIBUTES - FIXed WITH @cleanBasename func
			if ($cleanBasename != $basename) {
				// ACCORDING TO cleanBasename(), FILENAME IS "invalid" (e.g. contains spaces, or invalid chars)
				$childItems[$objNmbr] .= '<a title="Invalid Filename cleaned to ' . $cleanBasename . ' using HEX equivalents. This buggy JavaScript will likely not respond. sorry!" id="navAnchor_' . $cleanBasename . '"><!-- '.__LINE__.' -->' . $cleanBasename . '</a> [!badpath]</li>' . "\n";
			}
			// NOT .PHP BUT IS VALID FILENAME
			else {
/* 				if(isset($dotfilename)){
	// .DOTFILE AS IN Eclipse .buildpath AND Eclipse .project
					$childItems[$objNmbr] .= '<a title="View ' . $dotfilename. ' in main iFrame" href="#mainFrameContainer" id="navAnchor_' . $cleanBasename . '" onclick="loadIframe(\'' . $cleanBasename . '\')"><!-- '.__LINE__.' -->' . $dotfilename . '</a> ['.$extension.' to iframe]</li>' . "\n";
					$dfnCount = 1;
				}
				else{ */
	// PROBABLY A TYPICAL FILENAME AS HTML (or Phtml)
					$childItems[$objNmbr] .= '<a title="View ' . $cleanBasename . ' in main iFrame" href="#mainFrameContainer" id="navAnchor_' . $cleanBasename . '" onclick="loadIframe(\'' . $cleanBasename . '\')"><!-- '.__LINE__.' -->' . $filename . '</a> ['.$extension.' to iframe]</li>' . "\n";
	//			}
			}
		}
	}
}
else {
	// OBJECT IS A DIRECTORY
	$switchFilename = strtolower($cleanBasename);
	switch($switchFilename) {
			case "inc":
				$childItems[$objNmbr] = '<!-- li class="forbidden" title="' . $cleanBasename . '"><a href="' . $cleanBasename . '" title="' . $cleanBasename . '">' . $cleanBasename . '</a></li -->' . "\n";
				break;
			case "class":
				$childItems[$objNmbr] = '<!-- li class="forbidden" title="' . $cleanBasename . '"><a href="' . $cleanBasename . '" title="' . $cleanBasename . '">' . $cleanBasename . '</a></li -->' . "\n";
				break;
			case "error_log":
				$childItems[$objNmbr] = '<!-- li class="forbidden" title="' . $cleanBasename . '"><a href="' . $cleanBasename . '" title="' . $cleanBasename . '">' . $cleanBasename . '</a></li -->' . "\n";
				break;
			case "css":
				$childItems[$objNmbr] = '<!-- li class="forbidden" title="' . $cleanBasename . '"><a href="' . $cleanBasename . '" title="' . $cleanBasename . '">' . $cleanBasename . '</a></li -->' . "\n";
				break;
			case "js":
				$childItems[$objNmbr] = '<!-- li class="forbidden" title="' . $cleanBasename . '"><a href="' . $cleanBasename . '" title="' . $cleanBasename . '">' . $cleanBasename . '</a></li -->' . "\n";
				break;
			case '.settings':
				$childItems[$objNmbr] = '<!-- li class="hiddenitem" title="' . $cleanBasename . '"><a href="' . $cleanBasename . '" title="' . $cleanBasename . '">' . $cleanBasename . '</a></li -->' . "\n";
				break;
			case '.svn':
				$childItems[$objNmbr] = '<!-- li class="hiddenitem" title="' . $cleanBasename . '"><a href="' . $cleanBasename . '" title="' . $cleanBasename . '">' . $cleanBasename . '</a></li -->' . "\n";
				break;
			case '.buildpath':
				$childItems[$objNmbr] = '<!-- li class="hiddenitem" title="' . $cleanBasename . '"><a href="' . $cleanBasename . '" title="' . $cleanBasename . '">' . $cleanBasename . '</a></li -->' . "\n";
				break;
			case 'images':
				$childItems[$objNmbr] = '<li class="hiddenitem" title="' . $cleanBasename . '"><a href="' . $cleanBasename . '" title="' . $cleanBasename . '">' . $cleanBasename . '</a></li>' . "\n";
				break;
			case 'resources':
				$childItems[$objNmbr] = '<!-- li class="hiddenitem" title="' . $cleanBasename . '"><a href="' . $cleanBasename . '" title="' . $cleanBasename . '">' . $cleanBasename . '</a></li -->' . "\n";
				break;
			case 'htaccess':
			    $childItems[$objNmbr] = '';
			default :
					$childItems[$objNmbr] = '<li class="navnobull" title="' . $cleanBasename . '"><a href="' . $cleanBasename . '"><!-- '.__LINE__.' -->' . $cleanBasename . '</a></li>' . "\n";
		}

}

// back to [ nav.inc.php ] @ Line ~110
?>
