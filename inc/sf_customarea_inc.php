<?php
// DOCUMENT: SF_CUSTOMAREA_INC.PHP

?>

<p id="whatfontnow">Select from this list<sup>&dagger;</sup> to change the CSS font-family property of the preview box <span class="inlineDesc">(<sup>&dagger;</sup>powered by JavaScript)</span>:</p>
<?php
	 $htmlPgph_currFontName = "<p id=\"newfontname\" class=\"".$httpRequest_fontIndex."\"";
	 if(isset($htmlInlineStyle_fontText)){
		$htmlPgph_currFontName .= $htmlInlineStyle_fontText;
}
 	$htmlPgph_currFontName .=	 " title=\"the CSS Font-family property is now declared, ".$httpRequest_ucfirstFontName."\" ><span class=\"unstyle\">Current Font-Family:</span><br />".$httpRequest_ucfirstFontName."</p>";
	print $htmlPgph_currFontName;
?>
<form method="get" id="customfontform" action="<?php print $_SERVER['PHP_SELF']; ?>">
<?php
print $htmlSelect_FontName;
?>
</form>
<p><strong class="step">Step 2.)</strong><br />Enter the text you want to preview:</p>
<!-- NewLine X2 &#x000A;&#x000A; -->
<!-- Hearts-Spades-etc &#x2660; &#x2663; &#x2665; &#x2666; -->
<!-- OtherSymbols &#x26A0; &#x26A1; -->
<textarea id="inp" rows="8" cols="24">&#x000A; &#x000D; &#x2660;&#x2663; Edit the TextArea &#x2665;&#x2666;&#x000A;&#x000D; &#x26A0; Click Preview Bttn&#x26A1;&#x000A;
&amp;#x48;&amp;#x65;&amp;#x6c;&amp;#x6c;&amp;#x6f; &amp;#x28; test NCR&#x27;s too! &amp;#x29;</textarea>
<!-- 	^	customPreview	^	-->
<div id="customPreview"><span id="customPreviewTitle">Adjust Preview Style</span><p class="toggitalic" onclick="toggitalic('disp', 'fontStyle', 'italic');">
<img class="toggleimg" alt="toggle-italic" src="css/emphasis.png" /><img id="emlight" class="toggleimg" src="css/light-off.png" alt="off" /></p>
<p class="togglebold" onclick="togglebold('disp', 'fontWeight', 'bold');">
<img class="toggleimg" alt="toggle-bold" src="css/strong.png" /><img id="stronglight" class="toggleimg" src="css/light-off.png" alt="off" /></p>
<br />
<button id="fontButton" type="button" onclick="relay_text('inp', 'disp');">Click to Preview</button><br />
<br />
<div id="fontsizerbox">Font-size:<br />
	<select id="textsizer" name="textsizer">
		<option id="zull" value="0" selected="selected"> - font-size - </option>
		<option id="xxsmall" class="sizexxsmall" value="1">xx-small</option>
		<option id="xsmall" class="sizexsmall" value="2">x-small</option>
		<option id="small" class="sizesmall" value="3">small</option>
		<option id="medium" class="sizemedium" value="4">medium</option>
		<option id="large" class="sizelarge" value="5">large</option>
		<option id="xlarge" class="sizexlarge" value="6">x-large</option>
		<option id="xxlarge" class="sizexxlarge" value="7">xx-large</option>
		<option id="larger" class="larger" value="8">larger</option>
		<option id="smaller" class="smaller" value="9">smaller</option>
	</select>
</div>
<div id="aboutFontSize">Current font-size: <div id="jsPreview">medium</div>
</div>
<?php
	 if(isset($htmlInlineStyle_fontText)){
		if (!empty($fontFace_Minder)) {
			$fontFace_Minder = '';
		}
		$fontFace_Minder = "<br /><div id=\"user_font_minder\" class=\"".$httpRequest_fontIndex."\"";
		$fontFace_Minder .= $htmlInlineStyle_fontText;
		$fontFace_Minder .=	 " title=\"REMEMBER the CSS Font-family property YOU declared, ".$httpRequest_ucfirstFontName."\" ><span class=\"unstyle\">Preview <strong>".$httpRequest_ucfirstFontName."</strong>:</span></div>";
		print $fontFace_Minder;
	}
	 $customTextOut = "<p title=\"Resulting output from the text-field in Step 2\" id=\"disp\" class=\"".$httpRequest_fontIndex."\"";
	 $customTextOut .= ">&nbsp;</p> \n";
	 print $customTextOut;
?>
</div><!-- 	$	customPreview	$	-->
<p><strong class="step">Step 3.)</strong><br />
Place your custom text into the font preview dashed-box:</p>


<p id="stepFour"><strong class="step">Step 4.)</strong>
<br />[<strong>View&nbsp;<?php
	print $httpRequest_ucfirstFontName." declaration ".
	$htmlAnchor_displayDetails; ?></strong> ]<br />Copy and paste the values to your stylesheet&hellip;</p>
<?php

// follows is s

?>
