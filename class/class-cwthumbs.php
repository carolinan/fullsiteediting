<?php


class CwThumbs {

	public $imagesDir 	= 	NULL;
	public $randomImage = 	NULL;
	public $thumbsCount =	NULL;
	public $tuptuo		= 	NULL;
    public $randomimage =   NULL;
    public $many        =   NULL;
    public $images      =   NULL;

    public function makeThumbs($dir,$abspath){
	
	
    if(isset($abspath)){
        $dir = $abspath;
        $this->imagesDir = $dir;
    }
    elseif(!$dir){
		$dir = $abspath."css";
		$this->imagesDir = $dir;
	}
	else {
		$this->imagesDir = $dir;
	}

	foreach(glob("$dir/*") as $item){
		if(!is_dir($item)){
			$item =	explode('/',$item);
			$sort[]= end($item);
		}
	}
	$killcounter = 0;
	if(count($sort) > 1){
		foreach($sort as $thumbsCount => $sorteditem){
			// $sortFileInfo = pathinfo($sorteditem);
			// $sortedExtn = $sortFileInfo['basename'];
            $this->thumbsCount[] = $thumbsCount;
			if(preg_match_all("/\.gif$/i", $sorteditem, $pma_sorteditem)){
			}
			elseif(preg_match_all("/\.png$/i", $sorteditem, $pma_sorteditem)){
			 
			}
			elseif(preg_match_all("/\.jpg$/i", $sorteditem, $pma_sorteditem)){
				 
			}
			elseif(preg_match_all("/\.bmp$/i", $sorteditem, $pma_sorteditem)){
				 
			}
			elseif(preg_match_all("/\.ico$/i", $sorteditem, $pma_sorteditem)){
				 
			}
			else {
				unset($sort[$killcounter]);
			}
			$killcounter++;

		}
	}

	if($sort){
		natsort($sort);
	}
	/*if(is_array($sort) && (count($sort) > 1)){
		foreach($sort as $sortKey => $sortItem){
			$images[]= $dir."/".$sortItem;
			$chooser[] = $sortKey;
		}
	}
	elseif(!is_array($sort) && isset($sort) && $sort != ""){
		$images = $sort;
	}

	$this->images = $images;*/
    $this->images = $sort;
	return $this->images;

} // end cwthumbs(METHOD)



    public function randIMG($output) {

// CODE BELOW WILL GENERATE A RANDOM IMAGE BASED ON THE INFO FROM CWDTHUMBS
$randhdimg = (count($output) * (0.5));
$randimg = rand(0,$randhdimg);
$this->randomimage = $randimg;
$imagedisplayed = $output[$randimg];
$coolassheader = "<img src=\"images/title/".$imagedisplayed."\" alt=\"groovy\" id=\"randy\" />";

return $imagedisplayed;

}

/* function norMage($output,$flatfile) {

	$thenumber = count($output);
	// $thenumber = $thenumber - $_SESSION[ArrayIterator::next($output)];
$imagedisplayed = $output[$thenumber];
$incremental = "<img src=\"images/title/".$imagedisplayed."\" alt=\"groovy\" id=\"randy\" />";
echo "<h1>".$thenumber.": is the value of output</h1>";

$thenumber++;
fwrite($fh, "$thenumber") or die("Could not write to file");

// close file
fclose($fh);

return $imagedisplayed;

} */

    public function cwCounter($bodyid,$upone,$output) {


$this->many = count($output);

// if(($bodyid="acheader") and (isset($_GET['upone']))) {
// DONT MISS ### THE MATCHING ELSE BELOW




	$this->tuptuo = array();
	$this->tuptuo = $output;

if(empty($keyit)) {
	$k=0;
}

		$keyit = $k+$_GET['upone'];


// } DONT MISS ##### THE MATCHING IF ABOVE

	return $keyit;
} // END CWCOUNTER METHOD

} // END CWTHUMBS CLASS


?>