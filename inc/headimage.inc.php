<?php

/*
* @overview:
*   code removed from ./inc/dochead.inc.php
*  		[at approximately line #45]
*   this bit was used for testing various images from the directory
*   in attempt to find something suitable to place as a heading image
*   -----------------------------------------------------------------
*   HOWEVER, now that the SVG image has been implemented, this code
*   is no longer necessary. If the SVG (see bottom of ./inc/dochead.inc.php)
*   is removed, then this section can be used again, if placed back
*   into dochead.inc.php at (near) line 44.
*/

$imgContainer = array("css", "images", "img", "imgs", "graphics", "resources");
$imgNameArray = array("masthead", "head", "header", "heading", "banner", "title", "main");
$imgNameSuffix = array("image", "-image", "_image", "img", "-img", "_img", "div", "-div", "_div");
$imgExtnArray = array("png", "gif", "jpg", "jpeg");
foreach($imgContainer as $imgContVal){
	foreach($imgNameArray as $imgNameVal){
		foreach($imgExtnArray as $imgExtnVal){
			$testHeadImage = $xro.$imgContVal."/".$imgNameVal.".".$imgExtnVal;
			if(isset($headImage)){
				if(empty($headImgContReplace)){
					$headImgContReplace = "$imgContVal/";
				}
				break;
			}
			elseif(file_exists($testHeadImage)) {
				$headImage = $testHeadImage;
				// break(3);
			}
			else {
				foreach($imgNameSuffix as $imgSfxVal){
					$testHeadImage = $xro.$imgContVal."/".$imgNameVal.$imgSfxVal.".".$imgExtnVal;
					if(isset($headImage)){
						if(emtpy($headImgContReplace)){
							$headImgContReplace = "$imgContVal/";
						}
						break;
					}
					if(file_exists($testHeadImage)) {
						$headImage = $testHeadImage;
						// break;
					}
				}
			}
		}
	}
}
if(empty($headImage)){
	$headImage = "image_not_found";
}

/**
*	@param string headImageAlt
*	create a so-called valid string to be placed into the head-image alt attribute
**/

$headImageAlt = str_ireplace($headImgContReplace, "Decorative heading file-name ", $headImage);
$headImageAlt = str_ireplace(".", " is image-format ", $headImageAlt);

?>