<?php

/**
 *	@overview resource [ ./class/d-blink-inc.php ]
 * 	#purpose: establish connection between the php application, and a datasource

**/

/**	@Setup :: create a MySQL Database for AnnieDeBrowsa application
 *	!PREREQUISITE: resource [ ./resources/~anniedebrowsa.sql ]
 *
 *	[1] TXT EDIT: open anniedebrowsa.sql in text editor. (located in [ resources ] folder)
 *	[2] BROWSER: Point web browser to phpMyAdmin of development server.
 *			Open an empty SQL tab/window (**)
 *				(if required, D/L a stable release at phpmyadmin.sourceforge.net )
 *	[3] TXT EDIT: Select-All anniedebrowsa.sql . copy selected text
 *	[4] BROWSER: In the empty SQL field, paste the copied text. Execute query.
 *		(i.e. click Go / tell PhpMyAdmin to submit the raw SQL)
 *	[5] BROWSER: Verfiy database has been created.
 *		Point browser to phpMyAdmin: Databases
 *
 *	(**) Use whatever method you prefer for database admin. i.e. It is
 *		just as well to query MySQL using the OEM MySQL GUI / Workbench.
 *		Ideally, a developer might use the mysql prompt from the command line,
 *		understanding various ways and means of MySQL / DB administration.
 *		A MySQL tutorial is, of course, beyond the scope this overview. ;-)
**/

class mysqlConn {

	public $dblinkObj; // Object representing a connection between PHP and MySQL

/**
 *	@mysqlConn method constructor
 *		@param 	string	_dbserver
 *			name of database server to be used
 *		@param 	string 	_dbuser
 *			username with read / write access to database server
 *		@param 	string	_dbpass
 *			password of _dbuser (managed, private access, security)
 *		@param 	string 	_dbname
 *			database which will be used with this application
 *
 *	@optional
 *		after creating the database, as described in @Setup above, it is appropriate
 *		to grant priviledges on DB'xiola_adbdba_anniedebrowsa` to a private username for use in this file
 *			(i.e. locate the GRANT / CREATE USER sql in [ resources ].
 *			find the SQL text corresponding to the mysqlConn params here, and
 *			replace those values with your own username / pass text.)
 *
**/

	function __construct($dbserver, $dbuser, $dbpass, $dbname) {
		$this->dblinkObj = mysqli_connect($dbserver, $dbuser, $dbpass);
		mysqli_select_db($this->dblinkObj,$dbname); 

	}
}

?>