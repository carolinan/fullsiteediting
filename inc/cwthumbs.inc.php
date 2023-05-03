<?php

if(file_exists($abspath . "/class/class-cwthumbs.php")){
    require $abspath . "/class/class-cwthumbs.php";
}
else {
	$javaScriptAlert[] = '
	<script type="text/javascript">
		alert("FAIL in File: cwthumbs.INC.php\n at '.__LINE__.': It seems the file, &#x201c;'.$abspath.'&#x2f;class&#x2f;CLASS-cwthumbs.php&#x201d; unavailable.");
	</script>
	';
}

if(isset($_POST['SendImgDir']) && isset($_POST['imgDirSearch'])){
	$thDir = $_POST['imgDirSearch'];
}
else{
$thDir = "css";
}

/** @var $imgThumbs etc
 * former approach to populate the contact sheet at db_admin.phtml
 * code remains for historical purposes only.
 *   $imgThumbs = new cwThumbs;
 *   $cwThumbs = $imgThumbs->getThumbs($thDir);
 *   $randomImage = $imgThumbs->randIMG($cwThumbs);
 **/

?>