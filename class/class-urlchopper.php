<?php

/**
* Description of urlchopperclass
*
* @author Ambrose
*/
class urlChopper {
	
	// in order of appearance per method urlChopper() :wink:
	public	$chop_subject	= 	'';
	public	$chop_replace	= 	'';
	public	$chop_search	= 	'';
	public	$chop_result	= 	'';
	public	$chop_url       = 	'';
	public	$chop_trim		= 	'';
	public	$strokeWidth	=	'';
	
	function chopUrl($urlString=NULL){
		/*
		*	@function chopUrl(param1)
		*		Process a simple string containing an HTTP URL
		*	@param1 string $urlString
		*		UserSpace[var.string] == ( e.g. http://some.web/site/url/path )
		*
		*/
		$this->chop_subject	= $urlString;
		$this->chop_replace	= '';
		$this->chop_search	= '@^(.*(?=(/).*))@';
		$this->chop_result	= preg_replace($this->chop_search,$this->chop_replace,$this->chop_subject);
		$this->chop_url		= str_ireplace($this->chop_result,$this->chop_replace,$this->chop_subject);
		$this->chop_trim = ltrim($this->chop_result,"/");
		
		return preg_replace("/.*\//",'',$this->chop_url);
	}
	// END METHOD chopUrl
	
	function svgTextChopper($urlString=NULL){
		/*
		* @workinprogress
		* i dunno what the hell is going on here, at this moment...
		* (i.e. check ./css/masthead.svg.php or whatever it's named...
		*	and why the need of FOR loop aover solidusChunk array hmm... )
		* however, i am conscious of effort to replace previous function in dochead.inc.php
		* instead with reference to the method of urlChopper, above.
		*	REM 20120524, js
		*/
		$this->chop_subject	= $urlString;
		$this->chop_replace	= ''; 
		$this->chop_search	= '@^(.*(?=(/).*))@';
		$this->chop_result	= preg_replace($this->chop_search,$this->chop_replace,$this->chop_subject);
		$this->chop_url		= str_ireplace($this->chop_result,$this->chop_replace,$this->chop_subject);
		$solidusHere = explode('/', $this->chop_url) ;
		$solidusNum = count($solidusHere);
		$solidusChunk = array();
		if(isset($solidusNum) && ($solidusNum > 1)){
			for($s=0;$s<($solidusNum-1);$s++){
				$solidusChunk[] = $solidusHere[$s];
				// $solidusChunk[] = preg_replace('@(\x5c)@', '/', $solidusChunk[$s]);
			}
		}
		
		// return preg_replace("/.*\//",'',$this->chop_url);
		return implode('/', $solidusChunk);
	}
	// END METHOD svgTextChopper
	
	function svgFontStyler($multiplier,$svgStroke){
		$this->strokeWidth 		=	$svgStroke * $multiplier;
		return $this->strokeWidth;
	}
	
function printResults($c_replace, $c_result, $c_search, $c_subject, $c_trim, $c_url,$chopThis){
		// PREVIEW results of the CONSTRUCTOR method.
		$urlChopper_printResults = '<div class="content" id="tempInfo">		<!--	//	php_line_75:class-urlchopper.php	//	-->
		<pre class="prewrap">
		require \'class/class-urlchopper.php\';
		<span class="violet bold">$_SERVER[\'SCRIPT_NAME\']</span> = '.$_SERVER['SCRIPT_NAME'].'
		<span class="green underline">$urlChopper</span> = new <strong>urlChopper</strong>;
		$chopThis = <span class="green underline">$urlChopper</span>-><span class="red" title="urlChopper is method of urlChopper class">urlChopper(</span><span class="violet bold">$_SERVER[\'SCRIPT_NAME\']</span><span class="red">);</span> : '. $chopThis .'
		$chop_subject: <span class="violet">'.	$c_subject .'</span>
		$chop_replace: ' .	$c_replace . '
		$chop_search: ' . $c_search . '
		$chop_result: '. 	$c_result . '
		$chop_url: '. 	$c_url	. '
		$chop_trim: '.	$c_trim . '
		</pre>
		</div>';
		return $urlChopper_printResults;
		
	}
	// END METHOD printResults 
}
?>
