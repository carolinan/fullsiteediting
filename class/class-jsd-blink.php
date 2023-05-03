<?php


 
class mysqlConn {

	public $dblinkObj;

	function mysqlConn($dbserver = 'localhost',	$dbuser = 'adintera', $dbpass = 'aFistFull-4669', $dbname = 'adintera_jsobsmeths') {
		$this->dblinkObj = mysql_connect($dbserver, $dbuser, $dbpass);
		mysql_select_db($dbname, $this->dblinkObj);

		return $this->dblinkObj;
	}
}
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>