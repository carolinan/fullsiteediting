<?php

class dbAdmin {

	public $objectPrimary;
	public $prim2prop;
	public $showTablesHtml;

	function showTables($db) {
		require_once  "class.jsd-blink.php";
		$mysqlConn = new mysqlConn;
		$dblink = $mysqlConn->mysqlConn('', '', '', 'adintera_jsobsmeths');

		$sql = "SHOW TABLES FROM ".$db."; ";

		$result = mysql_query($sql) or die("Yo, I got stuck on this:".mysql_error());

		$this->showTablesHtml = "";

		if (!$result) {
			$this->showTablesHtml .= "DB Error, could not list tables\n";
			$this->showTablesHtml .= 'MySQL Error: ' . mysql_error();
			exit;
		}

		$this->showTablesHtml = "<select name=\"tableName\"> \n".
			"<option value=\"9999\"> - Select Table - </option>";
		while ($row = mysql_fetch_row($result)) {
			if($row[0]!="dbupdateinfo"){
			$this->showTablesHtml .= "<option value=\"".$row[0]."\">".$row[0].
				"</option> \n";
			}
		}
		$this->showTablesHtml .= "</select> \n";

		mysql_free_result($result);

		return $this->showTablesHtml;
	}
	// END showTables
	function getDbField($field) {

		require 'jsd-blink-inc.php';
		$this->objectPrimary = array();
		$sql = "SELECT ".$field." FROM objects_primary;";
		$result = mysqli_query($dblink, $sql);
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$this->objectPrimary = $row;
		}
		return $this->objectPrimary;
	}

	function joinQuePrim2prop($propertiesTable, $primaryTable) {
		require 'jsd-blink-inc.php';
		$this->prim2prop = array();
		$sql = "SELECT * FROM ".$propertiesTable." \n"
		. "LEFT JOIN ".$primaryTable." ON ".$primaryTable.".ob_pri_id\n"
		. "WHERE ".$primaryTable.".ob_pri_id = ".$propertiesTable.".ob_pri_fk \n"
		. "GROUP BY ".$propertiesTable.".ob_prop_id LIMIT 0,30;";

		$result = mysqli_query($dblink, $sql);
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$this->prim2prop = $row;
		}

		return $this->prim2prop;
	}

}


?>