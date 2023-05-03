<?php

/*
MODIFIED MAY 20 2009
*/
require_once "class/class-main-db.php";

$showDomains = new domainTables;

if(isset($_POST['enterUrl']) && isset($_POST['update-add']))
{
	if($_POST['update-add']=="add"){
	$newUrl = $showDomains->insertNewurl(
		$_POST['tableName'], $_POST['url_addr'],$_POST['url_auth'], addslashes($_POST['url_comm']), $_POST['url_name'], $_POST['url_tags']
																);
	}

}
elseif(isset($_POST['updateExisting'])){
	$updateRow = $showDomains->updateUrl(
		$_POST['tableName'], $_POST['url_id'], $_POST['url_addr'],$_POST['url_auth'], $_POST['url_comm'], $_POST['url_name'], $_POST['url_tags']
		);
}

if(isset($_POST['gettable'])) {
	$db	=	'centrewe_onlinedomains';
	$field = '*';
	$other = "url_name";
	$selectorDrop = $showDomains->dropSelect($_POST['tableName'], $field, $other);
	$tableSel4Input = $showDomains->showTables($db);
}
else {
	$db	=	'centrewe_onlinedomains';
	$tableSelect = $showDomains->showTables($db);
	$tableSel4Input = $showDomains->showTables($db);
}



if(isset($_GET['msg'])){
	$msg=$_GET['msg'];
}
$err01="You forgot to <br /><strong><em>SELECT a TABLE!</em></strong></p>";
if(isset($_POST['tableName']) && $_POST['tableName']=="9999"){
	$loc = $_SERVER['PHP_SELF'];
	$tellMe = urlencode("<p class=\"error\">Error: Please try again.<br />".$err01);
	header("Location: ".$loc."?msg=".$tellMe);
	exit;
}
else{
	if(isset($_POST['goto'])) {
		$newUid = ($_POST['url_addr']);
		$selectedUrl = "selectedUrl".$newUid;
		$location = $_POST[$selectedUrl];
		header("Location: ".$location);
	}
	elseif(isset($_POST['getUpData'])) {
		session_start();
		$table = $_SESSION['tableName'];
		$urlid = $_POST['url_id'];
		require_once "class/class-main-db.php";
		$rowData = new domainTables;
		$dbName = "centrewe_onlinedomains";
		$rowArray = $rowData->getUrlDetails($dbName, $table, $urlid);

	}
	elseif(isset($_POST['deleteButton'])&& $_POST['deleteButton']=="deleteRow") {
		session_start();
		$table = $_SESSION['tableName'];
		$urlid = $_POST['url_id'];
		require_once "class/class-main-db.php";
		$delObj = new domainTables;
		$delRow = $delObj->deleteRow($table, $urlid);
	}
	elseif(isset($_POST['reload']) && $_POST['reload']=="view"){
		session_start();
		require_once "class/class-main-db.php";
		$showDomains = new domainTables;
		$table = $_SESSION['tableName'];
		$field = '*';
		$other = "url_name";
		$reviewNames = $showDomains->reviewNames($table, $field, $other);
	}
	elseif(isset($_POST['update-add'])&& $_POST['update-add']=="update") {

		if(isset($_POST['tableName']) && $_POST['tableName']!="9999")
		{
		session_start();
		foreach($_POST as $postKey => $postVal){
			$_SESSION[$postKey] = $postVal;
		}
		require_once "class/class-main-db.php";

		$showDomains = new domainTables;
		$db	=	'centrewe_onlinedomains';
		$field = '*';
		$other = "url_name";
		$updateSeldrop = $showDomains->urlNames($_SESSION['tableName'], $field, $other);
		$tableSel4Input = $showDomains->showTables($db);
		}
		elseif(isset($_POST['getUpData']) && isset($_POST['url_id'])) {
		$updateUrl = $showDomains->updateUrl(
		$_POST['tableName'], isset($_POST['url_id']), $_POST['url_addr'],$_POST['url_auth'], $_POST['url_comm'], $_POST['url_name'], $_POST['url_tags']
										);
		}


	}
}


?>
