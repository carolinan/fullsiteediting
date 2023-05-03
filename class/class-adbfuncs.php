<?php

/*
**	@overview:
**		attempt to make the application more dynamic by including
**		or excluding special bits of code (via adbVarControl object)
**		which will determine the behaviour of the app.
*
**		@example_use:
**			@method getDefinedVarsHide:
**				if called, will hide paths from getDefinedVars.phtml for
**				the sake of security. This method would be required only
**				in a publicly visible installation.
*/

class AdbFuncs {

	public $kickoutJavaScript='';
/* 	public function __construct() {
		self::frame_only();
	} */
	
	public function frame_only($setKickout){
		$js_regex = str_ireplace("/", "\/", $_SERVER['PHP_SELF']);
                $thisFile = preg_replace("/.*\//",'',$_SERVER['PHP_SELF']);
                
		if($setKickout==TRUE){
			$this->kickoutJavaScript = '
			<script type="text/javascript">

			var initLoc	= {}, prefLoc = {}, regExp, js_regex;
                        js_regex = "'.$js_regex.'";			
			initLoc.location = [];
			prefLoc.location = [];


			function redirectPage() {

				regExp = /'.$js_regex.'/

				if (top.location.href === self.location.href) {

					initLoc.location = self.location;
								
					prefLoc.location.href = initLoc.location.href.replace(regExp,"/'.$thisFile.'");

					// window.location.href = prefLoc.location.href;
                                        window.location.href = window.location.href + "/..";
				}
			}

			window.onload = redirectPage;

			</script>
			';
		}
		else{
			$this->kickoutJavaScript = '';
		}
		return $this->kickoutJavaScript;
	}
// END METHOD frame_only
}
// END CLASS adbFuncs

class adbVarControl {

	public $secureMode;
	public $getDefinedVars;
	public $decision;

	function browseThis_Selector($decision) {
		if(isset($decision) && ($decision != '')) {
			if(is_dir($decision)) {
				$this->setNewPath = $decision;
			}
		}
	}
// END METHOD browseThis_Selector

	function getDefinedVarsHide($thisKey){
	    if($thisKey=='curWorkDir'){
	    	$definedVarNames[$thisKey] = "[hidden]";
			// $thisValue = "[hidden]";
	    }
		elseif($thisKey=='dir'){
	    	$definedVarNames[$thisKey] = "[hidden]";
			// $thisValue = "[hidden]";
	    }
		elseif($thisKey=='subject'){
	    	$definedVarNames[$thisKey] = "[hidden]";
	    	// $thisValue = "[hidden]";
	    }
		$this->getDefinedVars = $definedVarNames;
	}
// END METHOD getDefinedVarsHide

	function setSecureMode($mode){
		if($this->secureMode == NULL){
			$this->secureMode = $mode;
		}
		return $this->secureMode;

	}
// END METHOD setSecureMode

}
// END CLASS adbVarControl