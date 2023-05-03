<?php

namespace Adbgithub;

class Path2url_Segmatch {
    var $class_path;

    function __construct() {
        $this->class_path = dirname(__FILE__);
    }

    public function test_segment(){
// if($i <= $file_path_depth) {

    switch($switch_val){
        case '@file@i':
    }

if(preg_match('@file@i',$switchVal,$segMatch)){
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];

    $path2url .= '/'.$switchVal;;
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">It looks like you&#x27;re browsing the filesystem. I&#x27;m going to exclude <code>'.$switchVal.'</code> as I build the <code>http://</code> url, but it may fail anyway.</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';
}
elseif(preg_match('@apache[\d\.]+$@i',$switchVal,$segMatch)){
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];
    $path2url .= '/'.$switchVal;;
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';

}
elseif(preg_match('@^\w{1}:$@i',$switchVal,$segMatch)){
    $path2url .= '/'.$switchVal;;
    $test[$i]= __LINE__;
    $test_error_line = $test[$i];
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">This looks like an MS O/S <em>Drive Letter</em>. I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';
}
elseif(preg_match('@htdocs@i',$switchVal,$segMatch)){
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];
    $path2url .= '/'.$switchVal;;
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';
}
elseif(preg_match('@html@i',$switchVal,$segMatch)){
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];
    $path2url .= '/'.$switchVal;;
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';
}
elseif(preg_match('@cygdrive@i',$switchVal,$segMatch)){
    $file_path_depth=$file_path_depth + 1;
    $cygPath="u";
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];
    $path2url .= '/'.$switchVal;;
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';
}
elseif(preg_match('@[a-zA-Z]{1,1}@i',$switchVal,$segMatch)){
    if(isset($cygPath) && ($cygPath == "u")){ 
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];
    $path2url .= '/'.$switchVal;;
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';
    }
}
elseif(preg_match('@public_html@i',$switchVal,$segMatch)){
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];
    $path2url .= '/'.$switchVal;;
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';
}
elseif(preg_match('@html@i',$switchVal,$segMatch)){
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];
    $path2url .= '/'.$switchVal;;
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';
}
elseif(preg_match('@www@i',$switchVal,$segMatch)){
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];
    $path2url .= '/'.$switchVal;;
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';
}
elseif(preg_match('@var$@i',$switchVal,$segMatch)){
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];
    $path2url .= '/'.$switchVal;;
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';

}
elseif(preg_match('@usr$@i',$switchVal,$segMatch)){
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];
    $path2url .= '/'.$switchVal;;
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';

}
elseif(preg_match('@www$@i',$switchVal,$segMatch)){
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];
    $path2url .= '/'.$switchVal;;
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';

}
elseif(preg_match('@inetpub$@i',$switchVal,$segMatch)){
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];
    $path2url .= '/'.$switchVal;;
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';

}
elseif(preg_match('@wwwroot$@i',$switchVal,$segMatch)){
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];
    $path2url .= '/'.$switchVal;;
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';

}
elseif(preg_match('@webroot$@i',$switchVal,$segMatch)){
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];
    $path2url .= '/'.$switchVal;;
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';

}
elseif(($i < 1) && preg_match('@[\w_\-]+@i',$switchVal,$segMatch)) {
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];
    $path2url .= $path2url;
    $htmlConcat .= '<br /><img src="'.$xro.'css/warning_transp.png" alt="Attention!" /> key['.$i.']: <code>preg_match(&#x27;/'.$segMatch[0].'/i&#x27;, &#x27;<strong class="red">'.$switchVal.'</strong>&#x27;)</code>'."\n";
    $htmlConcat .= '<br /><span class="serif">I <em>think</em> this is a Linux User directory. Using my best guess, I&#x27;ll treat this as part of the server DOCUMENT_ROOT:</span>';
    $htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';
}
else {
    $test[$i] = __LINE__;
    $test_error_line = $test[$i];
    $htmlConcat .= '<br /><br /><img src="'.$xro.'css/stop.gif" alt="ERROR!" /> key['.$i.']:<br />
        Not sure of the cause of this ERROR, yet, but I do know <code>$test{'.$i.'}</code> hit here!
        <br />This chunk of the path, assigned to <code>$switchVal</code>: '.$switchVal.'<br />
        <em>Now</em>, what does that tell you?<br />
        ';
    if(is_array($segMatch)){
        $htmlConcat .= '<strong><code>$segMatch</code> is an <em>array</em></strong>, at the following values
            <br />';
        foreach($segMatch as $segmentNow){
            $htmlConcat .= '<code>$segMatch</code> : '.$segmentNow.'<br />';
        }
        $htmlConcat .= '<pre>PHP print_r($segMatch)
            ';
            print_r($segMatch);
        $htmlConcat .= '</pre>
            <br />';
    }
    else {
        $htmlConcat .= '<code>$segMatch</code> is NOT an array, and has value of '.$segMatch.'
        <br />';
    }
}
}

else{
$test[$i] = __LINE__;
$path2url .= '/'.$switchVal;
$htmlConcat .= '<br /><img src="'.$xro.'css/check_green.png" alt="Valid!" /> key['.$i.']: <span class="urlPathNoMatch">'.$switchVal.'</span> was used to build the HTTP URL.';
$htmlConcat .= '<br /><span class="serif">result: <span class="green monospace urlSoFar">'.$path2url.'</span> &#x2026;</span>
        ';
}
    } // end test_segment()
} // end class path2url_segmatch
?>