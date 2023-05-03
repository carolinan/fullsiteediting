<?php
/*
 *		index.php
 *
 *		Developed by @ajaxStardust <ajaxStardust@gmail.com>
 *
 *		This program, a Web Application written in PHP, HTML, JavaScript,
 *		XML, SVG, and CSS (web programming languages and structured markup)
 *		is distributed under the terms of the GNU General Public License.
 *		The Web Application is not guaranteed, and is available only without
 *		warranty of fitness	for a particular purpose; merchantability.
 *
 *		A copy of the GNU General Public License is included in the program
 *		package, as maintained for public availability by:
 *
 *		The Free Software Foundation, Inc.
 *		51 Franklin Street, Fifth Floor
 *		Boston, MA 02110-1301
 *		USA
 *
 */
/*
 *
 *	DEVELOPMENT HTTP URL:
 *		 http://10.0.0.38/adbgithub/index.php
 *				-----------------------
 *
 */
require_once 'inc/dochead.inc.php';
require_once 'inc/nav.inc.php';
?>
<div id="maincol">
								<!--	^	id:maincol	^	-->
	<!--	id:doc_loc_href added ID data here for indication of preferred text	-->
	<h2 id="doc_loc_href" title="currentUrlPath.pathInfoBasename"><?php print $currentUrlPath.$pathInfoBasename; ?></h2>
<?php
// BEGIN PHP REQUIRE	#pageControls
			require 'inc/jscontrols.inc.php';
				if (isset($bnRegExReport)) {
					$bnRegExReport .= '</ul>
					';
					print $bnRegExReport;
				}
			require 'inc/accessories.inc.php';
// END PHP REQUIRE #pageControls
?>

	<div id="mainFrameContainer">
		<?php  

			/**
			   * 
			   * printResults (class-urlchopper.php ) is a near worthless function which basically prints what Xdebug already knows
			   * 
			   */
			   	if (!isset($chopThis)) {
				   $chopThis = $_SERVER['SCRIPT_NAME']; 
				}

			    ?>
		<!--	^	id:mainFrameContainer	^	-->
		<div id="frameTitler">Currently Viewing: <span id="frameName"><?php print $defaultIframe; ?></span>
		</div>
											<!--	$	id:frameTitler	$	-->
		<iframe title="frame content as selected in main navigation" src="<?php print $defaultIframe; ?>" id="mainFrame">
		</iframe>
	</div>
	<!--	$	id:mainFrameContainer	$	-->
</div>
<!--	$	id:maincol	$	-->
<?php	//	PRINT	#navlist ( array from ./inc/nav.inc.php )
		foreach($htmlPrint as $htmlNavItem){
			print $htmlNavItem;
		}
	?>
<!-- div id="displayHttPath"><?php print $currentUrlPath.$pathInfoBasename; ?></div -->

	<?php 
	require 'inc/footer.inc.php';
?>
</div>
<!--	$	id:wrapper	$	-->

</div>
<!--	$	id:pagewidth	$	-->
</body>
</html>