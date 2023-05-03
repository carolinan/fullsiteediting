<?php
/**
 * TSW phpCoder2008 prefab code for DB Admin
 *  
 */

// the following created (and, subsequently, editied) while using
// phpCoder2008 database code generation to create a "databound-
// dropdown-list", to query the "objects_primary" table of adintera_jsobsmeths

$query = mysql_query("SELECT ob_pri_id, ob_pri_name FROM objects_primary WHERE ob_pri_id = $_POST['ob_pri_id']");
 $jsObFormHtml = '<form id="jsobjectselect" action="' . $_SERVER["PHP_SELF"] . '" method="post">
 <select name=\"select\">' . "\n";
 
while($r = mysql_fetch_array($query))
{
	echo "<option value=\"".$r['ob_pri_id']."\">".$r['ob_pri_name']."</option>";
}
echo "</select>";


$query = mysql_query("SELECT  FROM objects_primary");
while($r = mysql_fetch_array($query))
{

}
?>