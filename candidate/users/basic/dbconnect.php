<?php

	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'tech_db');
	
	$conn = mysqli_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysqli_select_db($conn,DBNAME);
	
	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
	
	if ( !$dbcon ) {
		die("Database Connection failed : " . mysql_error());
	}