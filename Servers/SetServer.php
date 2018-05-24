<?php  
	include ("serverconnection.php");
	echo("<br>");

	include ("createDB.php");
	echo("<br>");

	
	include ("AppointmentTable.php");
	include ("DoctorSchedTable.php");
	include ("EmployeesAccount.php");
	include ("WalkinTable.php");
	include ("createtable_borrowing.php");

	echo("<br>");


	echo("Server has finished the set-up. Click <a href=\"../index.html\">HERE</a> Proceed to website.")
?>