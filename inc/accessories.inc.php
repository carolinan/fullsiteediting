<?php

/*
* File Path: ./inc/accessories.inc.php
* @overview:
*	provide various "accessories" to web development, including a CHMOD permissions table, etc.
*	included in ./index.php at approx line 32
*/

/** @HTML
*	#Element - HEADINGs :  No headings above H4 may be used here. */

?> 
<div id="accessContainer" class="target">		<!--	^	id:accessContainer	^	-->
<h4>CHMOD Assistant</h4>
<span class="trigger antihead" id="chmodTrigger" onclick="showHide('chmodContainer')">[toggle]</span>
										<!--	^	id:chmodContainer	^	-->
	<div id="chmodContainer" class="target">
	<p>Ensure files and folders are assigned the proper user permissions:</p>
	<table id="chmodTableOuter" class="width_200">
		<caption>change mode helper script outer</caption>
		<tbody>
		<tr>
		<td>
			<form name="chmod">
				<table id="chmodTableInner">
				<caption>change mode helper script form</caption>
				<colgroup>
				<col class="width_200" />
				<col class="width_200" />
				<col class="width_150" />
				<col class="width_150" />
				</colgroup>

				<tbody><tr class="bg_grey">
				<td class="bg_white right">
				<p class="left"><b>Permissions</b></p></td>
				<td class="width_40 center">owner</td>
				<td class="width_40 center">group</td>
				<td class="center width_40">other</td>
				</tr>

				<tr class="bg_grey">
				<td class="bg_white right">read:&nbsp; </td>
				<td class="width_40 bg_lightx2grey center"><input type="checkbox" onclick="calc_chmod()" value="" name="owner4" /></td>
				<td class="width_37 bg_white center"><input type="checkbox" onclick="calc_chmod()" value="" name="group4" /></td>
				<td class="bg_lightx2grey center"><input type="checkbox" onclick="calc_chmod()" value="" name="other4" /></td>
				</tr>

				<tr class="bg_grey">
				<td class="bg_white right">write:&nbsp; </td>
				<td class="width_40 bg_lightx2grey center"><input type="checkbox" onclick="calc_chmod()" value="" name="owner2" /></td>
				<td class="width_37 bg_white center"><input type="checkbox" onclick="calc_chmod()" value="" name="group2" /></td>
				<td class="bg_lightx2grey center"><input type="checkbox" onclick="calc_chmod()" value="" name="other2" /></td>
				</tr>

				<tr class="bg_grey">
				<td class="bg_white right">execute:&nbsp; </td>
				<td class="width_40 bg_lightx2grey center"><input type="checkbox" onclick="calc_chmod()" value="" name="owner1" /></td>
				<td class="width_37 bg_white center"><input type="checkbox" onclick="calc_chmod()" value="" name="group1" /></td>
				<td class="bg_lightx2grey center"><input type="checkbox" onclick="calc_chmod()" value="" name="other1" /></td>
				</tr>

				<tr>
				<td class="bg_white left">Permissions:</td>
				<td class="bg_white center" colspan="3"><input type="text" onkeyup="octalchange()" size="5" value="" name="t_total" /> </td>
				</tr>

				<tr class="bg_grey">
				<td class="bg_white left" colspan="4">
				<input type="text" style='border: 0px none ; font-family: "Courier New",Courier,mono;' size="12" value="" name="sym_total" />
				</td>
				</tr>
				</tbody>
				</table>
			</form>
		</td>
		</tr>
		</tbody>
	</table>
	</div>
	<!--	$	id:chmodContainer	$	-->
<h4>HTML Assistant</h4>
<span class="trigger antihead" id="w3cHtml_Trigger" onclick="showHide('w3cHtml_Container')">[toggle]</span>
	<div id="w3cHtml_Container" class="target"><!--	^	id:w3cHtml_Container	^	-->
		<dl>
			<dt>Key and Important Elements of the W3C Praxis</dt>
			<dd>
				<ul>
					<li><a onclick="load3rdFrame('http://encyclopedia.thefreedictionary.com/HTML')" id="navAnchor_w3html" href="#mainFrameContainer">HTML</a></li>
					<li><a onclick="load3rdFrame('http://encyclopedia.thefreedictionary.com/Character+encodings+in+HTML')" id="navAnchor_w3CharEncodings" href="#mainFrameContainer">Character encodings</a></li>
					<li><a onclick="load3rdFrame('http://encyclopedia.thefreedictionary.com/Dynamic+HTML')" id="navAnchor_w3DynamicHTML" href="#mainFrameContainer">Dynamic HTML</a></li>
					<li><a onclick="load3rdFrame('http://encyclopedia.thefreedictionary.com/Font+family+%28HTML%29')" id="navAnchor_w3Fontfamily" href="#mainFrameContainer">Font family</a></li>
					<li><a onclick="load3rdFrame('http://encyclopedia.thefreedictionary.com/HTML+editor')" id="navAnchor_w3HTMLeditor" href="#mainFrameContainer">HTML editor</a></li>
					<li><a onclick="load3rdFrame('http://encyclopedia.thefreedictionary.com/HTML+element')" id="navAnchor_w3HTMLelement" href="#mainFrameContainer">HTML element</a></li>
					<li><a onclick="load3rdFrame('http://encyclopedia.thefreedictionary.com/HTML+scripting')" id="navAnchor_w3HTMLscripting" href="#mainFrameContainer">HTML scripting</a></li>
					<li><a onclick="load3rdFrame('http://encyclopedia.thefreedictionary.com/Comparison+of+layout+engines+%28HTML%29')" id="navAnchor_w3LayoutEngineComp" href="#mainFrameContainer">Layout engine comparison</a></li>
					<li><a onclick="load3rdFrame('http://encyclopedia.thefreedictionary.com/Style+sheet+%28web+development%29')" id="navAnchor_w3StyleSheets" href="#mainFrameContainer">Style Sheets</a></li>
					<li><a onclick="load3rdFrame('http://encyclopedia.thefreedictionary.com/Unicode+and+HTML')" id="navAnchor_w3Unicode" href="#mainFrameContainer">Unicode and HTML</a></li>
					<li><a onclick="load3rdFrame('http://encyclopedia.thefreedictionary.com/World+Wide+Web+Consortium')" id="navAnchor_w3TheW3C" href="#mainFrameContainer">The W3C</a></li>
					<li><a onclick="load3rdFrame('http://encyclopedia.thefreedictionary.com/Comparison+of+web+browsers')" id="navAnchor_w3WebBrowsersComp" href="#mainFrameContainer">Web browsers comparison</a></li>
					<li><a onclick="load3rdFrame('http://encyclopedia.thefreedictionary.com/Web+colors')" id="navAnchor_w3WebColors" href="#mainFrameContainer">Web colors</a></li>
					<li><a onclick="load3rdFrame('http://encyclopedia.thefreedictionary.com/XHTML')" id="navAnchor_w3XHTML" href="#mainFrameContainer">XHTML</a></li>
				</ul>
			</dd>
		</dl>
	</div>
	<!--	$	id:w3cHtml_Container	$	-->
</div>		
<!--	$	id:accessContainer	$	-->
