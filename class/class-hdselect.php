<?php

class headSelect {

// NOTE: ALL THAT WE DO HERE IS COUNT THE IMAGES 
// WE MAKE AN ARRAY WITH THE IMAGE NUMBERS FOR IDENTIFICATION
// THE RESULTING ID-NUMBER CORRESPONDS TO USER INPUT, ENABLING THE USER SELECTION
// $SENDBACK is an array containing all of the data about the folder glob() scan
// $imgback is similar to $sendback() except is contains only image names (right?)

/*	public $headselKeys; // only counters and are probably worthless
	public $headselImage;  // only counters and probably is worthless
*/
	public $sendback; // the return() info
	public $imgback; // form of an array is $imgback[] created from the foreach loop


function headSelect($folder){
	global $assemble;
	global $sendback;
	global $putsout;


	if(!$folder){
		$folder = '.';
	}
	foreach(glob("$folder/*") as $headselImage){
		$assemble[]= end(explode('/',$headselImage));
	}
	$countit = array('index.html', 'index.php', 'thumbs.db', 'styles.css');
	$count2kill = 0;
	foreach($assemble as $assembleeditem){
		foreach($countit as $count2check){
			if(strtolower($assembleeditem) == strtolower($count2check)){
				unset($assemble[$count2kill]);
			}
		}
		$count2kill++;

	}

	 if($assemble){
		natsort($assemble);
	}

	foreach($assemble as $this->headselKeys => $this->headselImage){
 		$this->imgback[] = $this->headselImage;
		$sendback[]= $this->headselKeys;
	}
	if(!$sendback){
		return array();
	}

	$sendback = $assemble;
	return $sendback;

} // end headSelect(METHOD)

} // Class dismissed


?>