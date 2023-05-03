<?php
/**
** @package AnnieDeBrowsa
** @component navigation
**
** @path ./inc/basenamecleaner.inc.php
**
** @since 2009-08-17
** 		#revised 2009-09-11
**/

/**
**	@overview
*
* 	- Pass string [uncleanName] to function, cleanBasename
* 	- Remove any [uncleanName] characters invalid for use as HTML-Attributes
* 		(e.g. href="invalid_&/? url" BECOMES href="valid_url" )
*	- Return original string, modified using PHP built-in HTMLSPECIALCHARS() func.
**/

/**
* 	@function cleanBasename
*
* 		@param uncleanName (string)
* 			the directory object -- a file or sub-directory.
*
* 			 #see nav.inc.php, @line =~52: opendir()
* 			 #see nav.inc.php, @line =~59: readdir()
**/


function cleanBasename($uncleanName) {
	//	note: experimental array value= ".bak", since str_replace, not regex

	$invalidCharacters = array(	"?", 
								"[", 
								"]", 
								"/", 
								"\\", 
								"=", 
								"<", 
								">", 
								":", 
								";", 
								",", 
								"'", 
								"\"", 
								"&", 
								"$", 
								"#", 
								"*", 
								"(", 
								")", 
								"|", 
								"~", 
								"`", 
								"!", 
								"{", 
								"}",
            " " // add space char just to test 2022.02.02 JS
	);
$bnc_count = 0;
	foreach($invalidCharacters as $invalidSubject){

		$cleanName = str_replace($invalidSubject, htmlspecialchars($invalidSubject), $uncleanName);
		$bnc_count++;
	}

	return $cleanName;
}

?>
