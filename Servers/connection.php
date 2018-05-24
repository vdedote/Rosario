<?php
	
	//connection variables
		//hostname
			$dbHost = "localhost";

		//username
			$dbUser = "root";

		//password
			$dbPass = "";

		// databaseName
			$dbName = "Rosario";

		//save connection in variable for checking
			$con = mysql_connect($dbHost, $dbUser, $dbPass);


		//connection checking
			if (!$con)
				die ("Connection Error." . mysql_error());

		//Display message for checking
					// echo ("Connected Successfully!");


			$core = mysql_select_db($dbName);
			if (!$core) die("Connection Error: ".mysql_error());
	
?>