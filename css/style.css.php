<?php
if(defined("XRO")){
	$xro = XRO;
}
else {
	$xro = '';
}
if(isset($bodyid)){

	print '
<style><!--/*--><![CDATA[/*><!--*/
/* style.css.php */

	body#'.$bodyid.' li#'.$bodyid.'Nav a {
		/* background-color:#E1EbFF; */
		background-color:transparent;
		color:#008;
		font-weight:bold;
	}
	body#'.$bodyid.' li#'.$bodyid.'Nav {
		background-color: rgba(225, 235, 255, 0.6);
		border:0.2em solid #e1ebff;
	}
	body#'.$bodyid.' li#'.$bodyid.'Nav:hover {
		color:#000;
	}

/*]]>*/-->
</style>
	';

}
else {
	print '
<style type="text/css"><!--/*--><![CDATA[/*><!--*/
/* style.css.php */
	/*
	** DYNAMIC CSS FILE INFO: CAN NOT CREATE THE DYNAMIC PROPERTIES WITHOUT THE PROPER RESOURCES! **
	** TO CORRECT THIS PROBLEM, ENSURE DYNAMIC CSS RECEIVES THE ELEMENT SELECTOR DATA	**
	**	(i.e. check [ inc/dochead.inc.php ], and [ inc/arrayobjectparser.inc.php ]		**
	** GOOD LUCK, DINKAS!! HAW HAW! **
	*/
/*]]>*/-->
</style>
	';
}
if(file_exists($xro.'./resources/GillSansMT-ExtraCondensedBold.ttf')){
	print '
<style type="text/css"><!--/*--><![CDATA[/*><!--*/
/* style.css.php */

	@font-face {
		font-family: "Gill Sans MT Ext Condensed Bold";
		src: url("resources/GillSansMT-ExtraCondensedBold.ttf");
	}

/*]]>*/-->
</style>
	';
}
// temporarily disable this font style:
 // if(file_exists('./resources/placcond.ttf')){
 

// 	print '<style type="text/css"><!--/*--><![CDATA[/*><!--*/
/* style.css.php * /

//	@font-face {
//		font-family: "Placard Condensed";
//		src: url("resources/placcond.ttf");
//	}

//	#navlist li a {
//		font-family: "Placard Condensed";
//		font-size: 1.05em;
//	}

// /*]]>* /-->
// </style>
// 	';
// } */

// $cssPrint = new cssSelectors();
// $printSelectors = $cssPrint->selectorStyle;
// print '
// <style type="text/css"><!--/*--><![CDATA[/*><!--*/
// /* class-dynamicstyle.php */
// ';
// foreach($printSelectors as $csKey => $csVal){
	// print $csVal;
// }
// print '
// /*]]>*/-->
//</style>
// ';


?>
