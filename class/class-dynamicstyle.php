<?php

/**
 * @resource [ class/class-dynamicstyle.php ]
 * @abstract
 * THIS IS TOTALLY A TEST; LITTLE MORE THAN A THOUGHT ON PAPER (at creation date)
 * (i.e. as i'm going along here, i'm thinking this probably didn't need to be
 * a class, but just a function, but what the hell, eh...)
 *
 * create css selector for styling #navList > LI based on file extension
 *	!IMPORTANT! : this code uses the file extension [ .png ]
 *		therefore new icons must also be created as [ .png ] image type
 *		New PNG images should have alpha transparency for consistency with
 *		other icons in #navlist. (ideally, all icons will have some sort of
 *		consistent appearance. this is clearly not the case, currently)
 *
 * @author @ajaxStardust | jsabarese
 * @since 2010/04/09
 */
class cssSelectors {
    //put your code here
	public $selectorStyle;
	public $selectorExists;

	function cssSelectors($extension,$iteration){
		// as this is a brand new class 20100409, not certain what is
		// required. iteration is included as known constant for
		// indexing each current #navlist li
		if(empty($this->selectorExists)){
			$this->selectorExists = array();
			// what happens if the public var is not declared as such?
			// lets comment it out and see cause him forgetums
			// $this->selectorStyle = array();
		}
		
		$selTemp = $extension;
		foreach($this->selectorExists as $seKey => $seVal){
			if($seVal != $selTemp){
				$this->selectorStyle = '
						li.'.$extension.'icon {
							list-style-image: url(navicon.gif);
						}

						li.'.$extension.'icon {
							list-style-image: url('.$extension.'icon.png);
						}
						';
				$this->selectorExists = $extension;
			}
		}
		

		return $this->selectorStyle;
	}
}
?>
