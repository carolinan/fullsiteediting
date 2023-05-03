<?php

/*
**	@function chopUrl(param1)
**		Process a simple string containing an HTTP URL
**	@param1 string $urlString
**		UserSpace[var.string] == ( e.g. http://some.web/site/url/path.dig )
**	@var ARRAY $urlCharray
**	  Prototype of the "AnnieDeBrowsa RegEx Processing Array"[1]
**		Key[0] ==	"subject"
**		Key[1] ==	"replace"
**		Key[2] ==	"search"
**		Key[3] ==	"result"
**		Key[4] ==	"url"
**	NOTE:
**		ONLY $urlCharray['subject'] changes, while keys [1-4] are hardcoded
**		(hence titling this "AnnieDeBrowsa REgEx PRocessing Array", however,
**		in truth, such should only contain up to Key[3], while the expression
**		(here) assigned to Key[4] should be evaluated outside of any such
**		function.
**
*/

function chopUrl($urlString){
	// array
	$urlCharray = compact('subject','replace','search','result','url');
	$urlCharray["subject"]	= $urlString;						// key[0]
	$urlCharray["replace"]	= '';								// key[1]
	$urlCharray["search"]	= '@^(.*(?=(/).*))@';				// key[2]
	$urlCharray["result"]	= preg_replace($urlCharray["search"],
								$urlCharray["replace"],
								$urlCharray["subject"]);		// key[3]
	$urlCharray["url"]		= str_ireplace($urlCharray["result"],
								$urlCharray["replace"],
								$urlCharray["subject"]);		// key[4]
	// ::2010-01-13:: return preg_replace("/.*\//",'',$urlCharray["url"]);
	return $urlCharray["url"];
}

class getFileStuff {

	public $pathNew;
	public $currentDir;
	public $bodyId;
	public $currentUrlPath;
	public $thispage;
	public $pathInfoArray;
	
	function parseFileStuff($thisFile) {
	
		$this->pathInfoArray = pathinfo($thisFile);
		// // $pathInfoDirname	= $this->pathInfoArray['dirname']; // //
			// because the above is stupid... too difficult to understand the 
			// purpose for symbol-name pathInfoDirname vs its assigned value
			// at least on this retrospective examination 20110113
		$pathReplace 	= '';
		$removePathPart = '@^.*/?='.$this->pathInfoArray["basename"].'@';
		$pathFound 	= preg_replace($removePathPart, $pathReplace, $thisFile);
		$this->pathNew 	= str_replace($pathFound, '', $this->pathInfoArray['dirname']);
		$this->currentDir = $pathFound;
		$parseUrl 	= parse_url($this->pathInfoArray['dirname'], PHP_URL_PATH);
		$thispage 	= rtrim($this->pathInfoArray['basename'], $this->pathInfoArray['extension']);
		$this->thispage = substr($thispage,0,strlen($thispage)-1);
		$this->bodyId 	= $this->thispage;
		if(isset($_SERVER['SERVER_NAME'])){
			$serverName = $_SERVER['SERVER_NAME'];
		}
		else{
			$serverName = 'localhost';
		}
		$serverUrl = 'http://' . $serverName;
		$this->currentUrlPath = $serverUrl.$pathFound;
		if(!preg_match("@^.*[/]$@",$this->currentUrlPath)){
			$this->currentUrlPath = $this->currentUrlPath.'/';
		}	
		
	}
}

?>