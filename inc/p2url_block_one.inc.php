<?php

?>
<div><p>[<span id="urlPathTrigger" class="trigger" onclick="showHidePlus(\'urlPathContainer\',\'urlPathTrigger\')"> toggle </span>] detail view</p></div>
		<div id="urlPathContainer" class="target keyTerms">
		<h4>WinPath Transformation Details</h4>
		<ul class="larger">
		<li><em>WinPath™</em> transformed the submitted system <em>path</em> into several smaller strings, each representing one of the containers which make up the path (i.e. each folder name along the path was extracted to a single string).</li>
		<li>The individual container names are derived by PHP <code>preg_match()</code> when &#x201c; &#x2f; &#x201d; (a <em>slash</em>  character) is matched along the path.</li>
		<li>With each consecutive match, the resulting character strings, naturally corresponding to each container, are stored in an array.</li>
		</ul>
		<p>The array, key/value pairs representing each portion of <code>?winpath=</code> is listed with a brief explanation which details whether it was used to build the http URL, or discarded.</p>
		<p><strong>Trivial Note:</strong> Each array index-key is equal to the number of
		slashes	preceding the path sub-section, as stored in that key&#x27;s
		value, respectively.</p>
		<p>Also, some additional processing info is hidden in the HTML source. If you&#x27;re using a Mozilla browser, try selecting from <em class="red">result: http://_..._</em> to the following <em class="red">key[x]</em>, then right-click, and choose "View <em>Selection</em> Source"</p>
		</div>
<?php

?>