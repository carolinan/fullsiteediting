<?php
require_once 'xro-inc.php';

class adminEntry {

  	var $queryin; // SQL insert query
	var $into;	// result of insert
	var $reqid;  // mysql_insert_id
	var $feel; // the MYSQL_RESULT
	var $currentdata; // MYSQLI_ASSOC ARRAY (in arry form)

function insertData($t, $h1,$p1, $h2, $p2, $ftitle, $form, $ltitle, $list, $pagename, $dblink) {
	global $t;
	echo $t." ".$h1." ".$p1." ".$h2." ".$p2." ".$ftitle." and more... should have gone into the database ya know";
	require_once 'db_link.php';
	$this->queryin = "INSERT INTO $t VALUES('','$h1', '$p1', '$h2', '$p2', '$ftitle','$form', '$ltitle', '$list', '$pagename');";
		$mysqli = mysqli_query($dblink,$this->queryin) or die(mysqli_error($mysqli));
		$this->reqid = mysqli_insert_id($mysqli);
			echo "This is the record id: <br /> ".$this->reqid;
		$this->look = "SELECT * FROM $t where cont_id=$this->reqid;";
		$this->feel = mysqli_query($dblink,$this->look) or die(mysqli_error($mysqli));
		$this->currentdata = mysqli_fetch_array($this->feel,MYSQLI_ASSOC);
		print_r($this->currentdata);
	
	return $this->currentdata;
	echo "<p>From inside of the func</p>";

}
}

?>
