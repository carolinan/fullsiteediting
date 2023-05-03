<?php


/*

	#### BEGIN DATABASE TABLES AND FORMS ####
*/
/* 	UNCOMMENT THIS REGION FOR INCLUDING THE DATABASE PROCESSING _LOGIC_ 	*/

require 'class/class-dbtablelogic.php';

if(isset($msg)){
		print $msg;
	}
	elseif(isset($delRow)){
		print $delRow;
	}
	elseif(isset($reviewNames)){
			print "<p>The existing data is as follows:</p> \n";
			print $reviewNames;
	}

	if(isset($updateSeldrop))
	{
/*
		####	BEGIN UPDATE TABLE CODE ####
*/
		if(isset($updateUrl))
		{
			print $updateUrl;
		}

		else {

			?>
			<form id="urlSelector" action="<?php print $_SERVER['PHP_SELF']; ?>" method="post">
			<table>
			<tbody>
			<tr>
			<th>URL to Update Selector</th>
			</tr>
			<tr>
			<td>
			<?php

			print $updateSeldrop['html'];
			if(isset($updateSeldrop['newurl']) && count($updateSeldrop['newurl']) > 1){
				// PRINT URL SELECTOR FOR CHOICE TO POPULATE THE UPDATEFORM
				foreach($updateSeldrop['newurl'] as $uKey => $uVal){
					$hiddenHtml = "<input type=\"hidden\" ".
						"name=\"selectedUrl".$uKey."\" ".
						"id=\"selectedUrl".$uKey."\" ".
						"value=\"".$uVal."\" />";
					print $hiddenHtml;
				}
			}
			else {
				print '<p>EMPTY TABLE!</p>';
				print " \n";
			}

			?></td></tr>
			<tr>
			<td>
			<input type="submit" id="getUpData" name="getUpData" value="Populate Fields" />
			</td>
			</tr>
			<tr>
				<td>
				<button id="deleteButton" name="deleteButton" type="submit" value="deleteRow">
				<img src="css/button-delete.gif" alt="back button"/>
				</button>
				</td>
			</tr>
			</tbody>
			</table>
			</form>
			<?php
		}

	}
	elseif(isset($rowArray))
	{
	?>
	<dl id="outerDL">
<dt class="pointer">Reveal New URL Entry Form: <span style="font-weight: normal; color: black;" class="pointer" id="morehd0" onclick="showHide('moreinfo0')">[click...]</span></dt>
	<dd id="moreinfo0" class="displaynone">
	<dl id="innerDL">
	<dt>Modify Table:</dt>
	<dd>
	<form id="newData" method="post" action="<?php
		print $_SERVER['PHP_SELF']; ?>">
	<input type="hidden" name="url_id" value="<?php print $rowArray['url_id']; ?>" />
	<ul class="nobull">

	<li>Table:&#8195;<?php print $table; ?><br />
	<input type="hidden" name="tableName" value="<?php print $table; ?>" />
	</li>
	<li>Row:&#8195;<?php print $urlid; ?>

	<li>Tags related to this Entry:<br />
	<input type="text" name="url_tags" value="<?php print $rowArray['url_tags']; ?>" /></li>
	<li>Enter New Address:<br />
	<input type="text" name="url_addr" id="url_addr" value="<?php print $rowArray['url_addr']; ?>" /></li>
	<li>Encrypt<br />
	<input type="text" name="url_auth" id="url_auth" value="<?php print $rowArray['url_auth']; ?>" /></li>
	<li>Enter Any Comments:<br />
	<textarea cols="32" rows="8" name="url_comm" id="url_comm"><?php print $rowArray['url_comm']; ?></textarea></li>
	<li>Enter a Name for this URL:<br />
	<input type="text" name="url_name" id="url_name" value="<?php print $rowArray['url_name']; ?>" /></li>
	</ul>
	<input type="submit" name="updateExisting" id="updateExisting" value="Update Row" />
	</form>
	</dd>
	</dl>
	<!-- END INNERDL -->
	</dd>
	</dl>
	<!-- END OUTERDL -->
	<?php


		// END IF  !ISSET 'SUCCESS!'



	}
	else{
		if(isset($updateRow)){
			print $updateRow;
		}
	?>
<!-- 	<p><strong>NOTE:</strong><br />using <em>EmEditor</em> via <em>View Source With</em> in SeaMonkey (3<sup>rd</sup> Profile), the PHP document will open as a server-side view!</p> -->
		<div class="centered">
			<div id="dbFormContainer">
			<?php
			if(isset($newUrl)){
				print $newUrl;
			}

			if(isset($_POST['gettable'])){
			?>
			<form id="urlSelector" action="<?php print $_SERVER['PHP_SELF']; ?>" method="post">
			<table>
			<tbody>
			<tr>
			<th>URL Selector</th>
			</tr>
			<tr>
			<td>
			<?php

			print $selectorDrop['html'];
			if(is_array($selectorDrop) && (count($selectorDrop) > 1)){
			foreach($selectorDrop['newurl'] as $uKey => $uVal){
				$hiddenHtml = "<input type=\"hidden\" ".
					"name=\"selectedUrl".$uKey."\" ".
					"id=\"selectedUrl".$uKey."\" ".
					"value=\"".$uVal."\" /> \n";
				print $hiddenHtml;
			print "<p class=\"displaynone\" id=\"sC-".$uKey."\"><strong class=\"sansserif\">Table:&#8195;".$_POST['tableName'].
				"</strong> \n <br />".$selectorDrop['comm'][$uKey]."</p> \n";
			}
			}

			?></td></tr>
			<tr>
			<td>
			<input type="submit" id="goto" name="goto" value="View Selected" />
			</td>
			</tr>
			</tbody>
			</table>
			</form>
			<?php
			}
			else{

			?>
			<form id="tableSelect" action="<?php print $_SERVER['PHP_SELF']; ?>" method="post">
			<table summary="Containing form input necessary for selection of a desired database table">
			<tbody>
			<tr>
			<th>View Which DB Table?</th>
			</tr>
			<tr>
			<td>
			<?php

			print $tableSelect;

			?></td><!-- <td>target: new Tab&#8195;<input type="checkbox" value="newTab" id="targetView" name="targetView" /></td> --></tr>
			<tr>
			<td>
			<input type="submit" id="gettable" name="gettable" value="View Selected" />
			</td>
			</tr>
			</tbody>
			</table>
			</form>

			<?php
			}
			// ENDIF  GET ADDRESSES
			?>
			</div>

			<dl id="outerDL">
<dt class="pointer">Reveal New URL Entry Form: <span style="font-weight: normal; color: black;" class="pointer" id="morehd0" onclick="showHide('moreinfo0')">[click...]</span></dt>
				<dd id="moreinfo0" class="displaynone">
					<dl id="innerDL">
							<dt>Modify Tables:</dt>
							<dd>
						<form id="newData" method="post" action="<?php
							print $_SERVER['PHP_SELF']; ?>">
							<ul class="nobull">
							<li><br /><input type="radio" name="update-add" value="add" checked="checked" />&nbsp;Add New<br />
							<input type="radio" name="update-add" value="update"  />&nbsp;Update Existing</li>
							<li><hr /></li>
							<li>Select Table:<br />
							<?php
							print $tableSel4Input;
							?>
							</li>
							<li>Tags related to this Entry:<br />
							<input type="text" name="url_tags" value="" /></li>
							<li>Enter New Address:<br />
							<input type="text" name="url_addr" id="url_addr" value="http://" /></li>
							<li>Encrypt<br />
							<input type="text" name="url_auth" id="url_auth" value="" /></li>
							<li>Enter Any Comments:<br />
							<textarea cols="32" rows="8" name="url_comm" id="url_comm">Address saved because &hellip;</textarea></li>
							<li>Enter a Name for this URL:<br />
							<input type="text" name="url_name" id="url_name" value="" /></li>
							</ul>
							<input type="submit" name="enterUrl" id="enterUrl" value="Insert Data" />
							</form>
							</dd>
					</dl>
				<!-- END INNERDL -->
				</dd>
<dt class="pointer">Change Image Directory: <span style="font-weight: normal; color: black;" class="pointer" id="morehd1" onclick="showHide('moreinfo1')">[click...]</span></dt>
				<dd id="moreinfo1" class="displaynone">
					<form id="changeImageForm" method="post" action="<?php print $_SERVER['PHP_SELF']; ?>">
						<input type="text" id="imgDirSearch" name="imgDirSearch" value="" /><br />
						<input type="submit" id="SendImgDir" name="SendImgDir" value="Get New Images!" />
					</form>
				</dd>
<dt class="pointer">Show Image Contact Sheet: <span style="font-weight: normal; color:blue;" class="pointer" id="morehd2" onclick="showHide('moreinfo2')">[click...]</span></dt>
				<dd id="moreinfo2" class="displaynone">
					<?php
					$contactSheet = "<ul id=\"imgShow\"> \n";
				if(isset($cwThumbs) && is_array($cwThumbs)){
					foreach($cwThumbs as $cwKey => $cwImg){
						$contactSheet .= "<li class=\"imgShowItem\"><a onclick=\"popMeUp('".$cwImg.
						"')\"><img src=\"".$cwImg."\" alt=\"".$cwImg."\" title=\"".$cwImg."\" /></a></li> \n";
					}
				}
				else{
					$contactSheet .= '<li class="bold nobull noBull">Sorry, but $cwThumbs does not exists, is not an array, is has not been properly set.</li>'."\n";
				}
					$contactSheet .= "</ul> \n";

					print $contactSheet;
					print " \n <hr id=\"clearImgShow\" /> \n";
					?>
				</dd>
			</dl>
			<!-- END OUTERDL -->


		</div><!-- END CENTERED -->
	<?php
	}

?>
