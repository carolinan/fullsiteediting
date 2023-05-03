<?php

/** @overview   class domainTables
 *		@depends	./class/d-blink-inc.php
 *		provide methods for AnnieDeBrowsa saved URL management.
 *		this is essentially an application-specific place for storing bookmarks
*/


class domainTables
{
    public function showTables($db)
    {
        /** @method showTables
         *		domainTables->showTables()
         *          @param string _db
         *  			name of database as received via user input
         *  			_db is used for MySQL func "SHOW TABLES", for subsequent user
         *  			selection of db.table_name, as may contain various saved URL's
         *			table_name stored in HTML SELECT / OPTION block for domainTables->dropSelect
        */

        require_once  "d-blink-inc.php";
        $mysqlConn = new mysqlConn("localhost", "adbdba", "iv3gqfsxt3n9", "xiola_adbdba_anniedebrowsa");
        $sql = "SHOW TABLES FROM ".$db."; ";

        $result = mysqli_query($mysqlConn->dblinkObj, $sql) or
           /**
           * @var $mysqli
           *
           * die("Yo, mysqli_error(".mysqli_error($mysqli).") in ".$_SERVER['PHP_SELF']." at line ". __LINE__ ."."); // OLD CODE WITH $mysqli variable
           *
           */
           die("Yo, mysqli_error(".mysqli_error($mysqlConn->dblinkObj).") in ".$_SERVER['PHP_SELF']." at line ". __LINE__ .".");
        $htmlShow = "";

        if (!$result) {
            $htmlShow .= "DB Error, could not list tables\n";
            $result = mysqli_query($mysqlConn->dblinkObj, $sql) or
                $htmlShow .= 'MySQL Error: ' . mysqli_error($result);
            exit;
        }

        $htmlShow = "<select name=\"tableName\"> \n".
            "<option value=\"9999\"><- Select Table -></option>";
        while ($row = mysqli_fetch_row($result)) {
            if($row[0]!="dbupdateinfo") {
                $htmlShow .= "<option value=\"".$row[0]."\">".$row[0].
                    "</option> \n";
            }
        }
        $htmlShow .= "</select> \n";

        mysqli_free_result($result);

        return $htmlShow;
    }
// END domainTables->showTables

    public function dropSelect($table, $field, $other)
    {
        /** @method dropSelect
         *		domainTables->dropSelect()
         *		  @param string _table
         *			db.table_name input via HTML SELECT / OPTION (see domainTables->showTables)
         *		  @param string _field
         *			_field is irrelevant here, for hard-coded into dbtablelogic.inc.php as "*"
         *				(i.e. all table fields are queried, however this is customizable)
         *		  @param string _other
         *			db.table_name._field . in other words, this string represents a column of
         *			the table, table_name, of db. specific to AnnieDeBrowsa, is a URL nickname
        */
        require_once "d-blink-inc.php";
        $mysqlConn = new mysqlConn("localhost", "adbdba", "iv3gqfsxt3n9", "xiola_adbdba_anniedebrowsa");

        $sql = "SELECT ".$field." FROM `".$table."` ".
            "ORDER BY $other ASC ;";
        $result = mysqli_query($mysqlConn->dblinkObj, $sql) or die("Yo, I got stuck on this:".mysqli_error($mysqlConn->dblinkObj)." in ".$_SERVER['PHP_SELF']." at line ". __LINE__ .".");
        $numRows = mysqli_num_rows($result);

        $htmlShow = array('html' => "", 'newurl' =>"", 'comm' => "");

        if(!$result) {
            $htmlShow['html'] = "DB Error, could not list tables\n";
            $htmlShow['html'] .= 'MySQL Error: ' . mysqli_error($result);
            exit;
        } else {
            $htmlShow['html']="<select id=\"url_addr\" name=\"url_addr\"> \n".
                "<option value=\"9999\"><- Select Site -></option> \n";
            for($i=0;$i<$numRows;$i++) {
                $rowStuff = mysqli_fetch_array($result);
                $htmlShow['html'].= "<option value=\"".$i."\"> \n".
                    $rowStuff['url_name']."</option> \n";
                $htmlShow['newurl'][$i] = $rowStuff['url_addr'];
                $htmlShow['comm'][$i] = $rowStuff['url_comm'];
            }
            $htmlShow['html'].= "</select> \n";
        }
        mysqli_free_result($result);

        return $htmlShow;
    }
// END domainTables->dropSelect

    public function urlNames($table, $field, $other)
    {
        require_once "d-blink-inc.php";
        $mysqlConn = new mysqlConn("localhost", "adbdba", "iv3gqfsxt3n9", "xiola_adbdba_anniedebrowsa");

        $sql = "SELECT ".$field." FROM `".$table."` ".
            "ORDER BY `url_name` ASC ;";
        $result = mysqli_query($mysqlConn, $sql) or die("Yo, I got stuck on this:".mysqli_error($mysqlConn)." in ".$_SERVER['PHP_SELF']." at line ". __LINE__ .".");
        $numRows = mysqli_num_rows($result);

        $htmlShow = array('html' => "", 'newurl' =>"");

        if(!$result) {
            $htmlShow['html'] = "DB Error, could not list tables\n";
            $htmlShow['html'] .= 'MySQL Error: ' . mysqli_error($result);
            exit;
        } else {
            $htmlShow['html']="<select name=\"url_id\"> \n".
                "<option value=\"9999\"><- Select Site -></option> \n";
            for($i=0;$i<$numRows;$i++) {
                $rowStuff = mysqli_fetch_array($result);
                $htmlShow['html'].= "<option value=\"".$rowStuff['url_id']."\"> \n".
                    $rowStuff['url_name']."</option> \n";
                $htmlShow['newurl'][$i] = $rowStuff['url_addr'];
            }
            $htmlShow['html'].= "</select> \n";
        }
        mysqli_free_result($result);

        return $htmlShow;
    }
// END domainTables->urlNames

    public function getUrlDetails($dbName, $table, $urlid)
    {
        require_once "d-blink-inc.php";
        $mysqlConn = new mysqlConn("localhost", "adbdba", "iv3gqfsxt3n9", "xiola_adbdba_anniedebrowsa");
        $sql = "SELECT * FROM `".$table."` WHERE `url_id`=".$urlid.";";
        $result = mysqli_query($sql) or die("Yo, I got stuck on this:".mysqli_error($result)." in ".$_SERVER['PHP_SELF']." at line ". __LINE__ .".");
        $htmlShow = mysqli_fetch_array($result);
        return $htmlShow;
    }
// END domainTables->getUrlDetails

    public function updateUrl($table, $urlid=null, $addr, $auth, $comm, $name, $tags)
    {

        require_once "d-blink-inc.php";
        $mysqlConn = new mysqlConn("localhost", "adbdba", "iv3gqfsxt3n9", "xiola_adbdba_anniedebrowsa");
        $insertQue = "UPDATE `".$table."` SET `url_addr`='".$addr."',";
        if(isset($auth) && $auth!="") {
            $insertQue .= "`url_auth`='".$auth."',";
        }
        $insertQue .=    "`url_comm`='".$comm."',".
            "`url_name`='".$name."',".
            "`url_tags`='".$tags."' ".
            "WHERE `url_id`=".$urlid." LIMIT 1; ";
        $insertResult = mysqli_query($insertQue) or die("Yo, I got stuck on this:".mysqli_error($result)." in ".$_SERVER['PHP_SELF']." at line ". __LINE__ .".");

        if($insertResult) {
            $htmlReturn = "<h2>Success!</h2>";
        } else {
            $htmlReturn = "<h2>Error!</h2>";
        }

        return $htmlReturn;
    }
// END domainTables->updateUrl

    public function insertNewurl($table, $addr, $auth, $comm, $name, $tags)
    {
        require_once "d-blink-inc.php";
        $mysqlConn = new mysqlConn("localhost", "adbdba", "iv3gqfsxt3n9", "xiola_adbdba_anniedebrowsa");
        $insertQue = "INSERT INTO `".$table."`".
            " (`url_addr`, `url_auth`, `url_comm`, `url_name`, `url_tags`) VALUES ".
            " ('".$addr."', '".$auth."', '".$comm."', '".$name."', '".$tags."');";
        $insertResult = mysqli_query($mysqlConn->dblinkObj, $insertQue) or die("Yo, I got stuck on this:<br />".mysqli_error($result)." in ".$_SERVER['PHP_SELF']." at line ". __LINE__ .".");

        if($insertResult) {
            $htmlReturn = "<h2>Success!</h2>";
        } else {
            $htmlReturn = "<h2>Error!</h2>";
        }

        return $htmlReturn;
    }
// END domainTables->insertNewurl

    public function deleteRow($table, $id)
    {
        require_once "d-blink-inc.php";
        $mysqlConn = new mysqlConn("localhost", "adbdba", "iv3gqfsxt3n9", "xiola_adbdba_anniedebrowsa");
        $deleteSQL = "DELETE FROM `".$table."` ".
            "WHERE `url_id`=".$id." ".
            "LIMIT 1;";
        $delResult = mysqli_query($deleteSQL);
        $rowNum = mysqli_affected_rows();

        if(!$delResult) {
            $htmlReturn = "<p>DB Error, could not complete this request due to ";
            $htmlReturn .= "MySQL Error: <br /> \n".mysqli_error($result)."</p> \n";
            exit;
        } elseif($rowNum < 1) {
            $htmlReturn = "<h3>Whoa!</h3> \n<p class=\"antihead attn\">Row ".$id.
                " does not exist.</p> \n <p>View address names?</p> \n".
                "<form method=\"post\" action=\"$_SERVER[PHP_SELF]\" ".
                "id=\"didError\" /> \n".
                "<button name=\"reload\" value\"view\" type\"submit\" /> \n".
                "Review</button> \n".
                "<button name=\"cancel\" value\"decline\" type\"submit\" id=\"cancel\" /> \n".
                "Decline</button> \n".
                "</form>";

        } else {
            $htmlReturn = "<h3>Successfully deleted ".$rowNum." entry!</h3> \n";
        }
        return $htmlReturn;
    }
// END domainTables->deleteRow

    public function reviewNames($table, $field, $other)
    {
        require_once "d-blink-inc.php";
        $mysqlConn = new mysqlConn("localhost", "adbdba", "iv3gqfsxt3n9", "xiola_adbdba_anniedebrowsa");
        $sql = "SELECT ".$field." FROM `".$table."` ".
            "ORDER BY $other ASC ;";
        $result = mysqli_query($sql) or die("Yo, I got stuck on this:".mysqli_error($result)." in ".$_SERVER['PHP_SELF']." at line ". __LINE__ .".");
        $numRows = mysqli_num_rows($result);

        $htmlShow = array('html' => "", 'newurl' =>"");

        if(!$result) {
            $htmlShow  .= "DB Error, could not list tables\n";
            $htmlShow  .= 'MySQL Error: ' . mysqli_error($result);
            exit;
        } else {
            $htmlShow ="<ul id=\"reviewData\"> \n";
            for($i=0;$i<$numRows;$i++) {
                $rowStuff = mysqli_fetch_array($result);
                $htmlShow .= "<li id=\"name".$i."\"> \n".
                    $rowStuff['url_name']."</li> \n";
            }
            $htmlShow .= "</ul> \n";
        }
        mysqli_free_result($result);

        return $htmlShow;
    }
// END domainTables->reviewNames


}

class adbSettings
{
    public $htmlConcat = '';
    public function showSettings()
    {
        $this->htmlConcat = '';
        $this->htmlConcat .= '<table cellspacing="5">
			<thead>
				<tr>
				<th>Column</th>
					<td>Type</td>
					<td>Comment</td>
				</tr>
			</thead>
			<tbody>
				<tr>
				<th>set_id</th>
					<td>int(11) <em>Auto Increment</em></td>
					<td>&#xA0;</td>
				</tr>
				<tr class="odd">
				<th>set_substr</th>
					<td>varchar(254)</td>
					<td>Use substring to manipulate adb handling of nav items by trimming chars from filename to affect Navlist Sort (e.g. substr($string,N,N)</td>
				</tr>
				<tr>
				<th>set_url</th>
					<td>mediumtext</td>
					<td>DB Row applicable to this URL only</td>
				</tr>
				<tr class="odd">
				<th>set_comm</th>
					<td>text <em>NULL</em></td>
					<td>Add comments specific to the settings for a URL (i.e. choping first 4 chars of filenames to better sort-by char[0+n])</td>
				</tr>
				<tr>
				<th>set_stamp</th>
					<td>timestamp</td>
					<td>record timestamp on entry for historical research</td>
				</tr>
			</tbody>
		</table>';
        return $this->htmlConcat;
    }
}
