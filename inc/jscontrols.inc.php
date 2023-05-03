<?php

/**
 * @package AnnieDeBrowsa
 *
 * @component content, javascripted events
 * @path ./inc/jscontrols.inc.php
 * @since 2008-07-25
 *  #revised 2009-09-14
 *
 * @overview
 *      INCLUDE THE JAVASCRIPT NAVIGATION TOGGLER FX COLLAPSE BIT
 *          #see index.php @ =~ 24
**/

?>

<div id="pageControls">
    <header id="pageControlHeader">Page Control</header>
    <ul id="controList">
    <li id="toTopJscon">
            <a class="intraNav" href="#header"><img src="<?php print $xro ?>css/arrow-up.png" alt="jump to top" /> <span id="headerJumper">top</span> </a></li>
        <li id="leftColtrigger" onclick="collapseNav('leftcol')">
            <span class="trigger">
                <a title="Toggle show &#x2F; hide HTML id:leftcol (the navigation at left)">
                    <img id="navControl" src="<?php print $xro ?>css/directional-arrow-left.png" alt="collapse navigation" /> <span id="navTxt">toggle</span> nav </a></span></li>
        <li id="pageCon_goBack">
            <span class="handler" id="goBackHandler"><a title="JavaScript Function of showme-hideme_js - goBack()" onclick="goBack()"><img src="<?php print $xro ?>css/back-matchingred.png" height="16" width="26" alt="History: Go Back" title="Back to previous page" /></a></span>
        </li>
        <li id="toBottom">
            <a class="intraNav" href="#footer"><img src="<?php print $xro ?>css/arrow-down.png" alt="jump to bottom" /> <span id="footJumper">bottom</span> 
            </a></li>
        <li id="accessTrigger"><span class="trigger" id="accessContainerTrigger" onclick="showHide('accessContainer')"> toggle acc </span></li>
        <li class="loader"> <span id="lockFrameLoader" class="cssloader"><a id="lockFrameAnchor" title="Lock main iframe for easier viewing of large images or lengthy text" href="#mainFrameContainer">lock iframe</a> </span>
        </li>
        <li class="trigger">
            <span id="cssBox_Trigger" class="trigger" onclick="showHide('cssBox_Target')"><a title="Toggle show &#x2F; hide CSS Box Model illustration"> CSS Box </a></span>
        </li>
        <li id="fbloader" class="loader">
            <span class="loader">
                <a title="Click to activate the portable Firebug Lite script embedded in my javascript container"><img src="<?php print $xro ?>css/firebug_icon_oldver.png" alt="launch firebug lite" width="16" height="16" /> Firebug <em>Lite</em></a>
            </span>
        </li>
                <li id="iframe2top"><span class="trigger" id="send2top" onclick="frame2top()"><a title="send frame to top">frame2top</a></span></li>
        <li id="js2index"></li>
    </ul>
    <!-- temp note: moved css box model image to dochead for now -->
</div>
 
<hr class="hidden" />

<?php
    // END JAVASCRIPT COLLAPSER BIT
?>