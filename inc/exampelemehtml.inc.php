<?php

// NEW PHP FILE (N++ MACRO)

?>
<h2>($HEADING2)</h2>

<p>($PARAGRAPH)</p>

<h2>($HEADING2)</h2>
<p class="serif">($PARAGRAPH .serif)</p>
<p class="note">($PARAGRAPH .note)</p>
	<div id="holdingTank">($DIV #holdingTank)
<p class="sans-serif floatlt">($PARAGRAPH .sans-serif .floatlt)</p>
<p class="note">($PARAGRAPH .note)</p>
<p class="strong red serif oblique italic">($PARAGRAPH .strong .red .oblique .italic)</p>
  <ol class="lower-roman">($ORDEREDLIST .lower-roman)
  <li>($LI)<a href="http://192.168.2.1/" target="_bsmt" id="anchor01">($ANCHOR) [base station mgt tool ]</a>
  <li>($LI)<a href="#" target="_none01">$(FALSEANCHOR)</a></li>
   </ol>

<h2>($HEADING2)</h2>


<p>$(PARAGRAPH [no classes]) </p>


<p class="note floatrt">($PARAGRAPH .note .floatrt)</p>
($closingDIV #holdingTank [:after])</div>

<h2>($HEADING2)</h2>
	<pre>pre
	no
	special class</pre>
	<pre class="code">($pre .code)
and Pre
	ist
	goode</pre>
	
<?php

// END EXAMPELEMEHTML.INC.PHP

?>