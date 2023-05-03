<?php

class dbAdmin {

	public $objectPrimary;
	public $prim2prop;

	function getDbField($field){

		require 'jsd-blink-inc.php';
		$this->objectPrimary = array();
		$sql = "SELECT ".$field." FROM objects_primary;";
		$result = mysqli_query($dblink, $sql);
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$this->objectPrimary = $row;
		}
		return $this->objectPrimary;
	}

	function joinQuePrim2prop($propertiesTable, $primaryTable){
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