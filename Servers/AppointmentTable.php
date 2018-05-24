<?php 
	include("connection.php");

	$sql = "CREATE TABLE AppointmentOnline(
		ClientID int (11),
		Lastname varchar(30),
		Firstname varchar(30),
		Middlename varchar(30),
		Address varchar(50),
		ContactNo varchar(11),
		Birthday date,
		Age int(5),
		Gender varchar(6),
		Service varchar(40),
		Doctor varchar(40),
		DateSchedule date,
		TimeSchedule varchar(20)
		);";
	
	$result = mysql_query($sql);
		if (!$result)
			echo "Error creating table!".mysql_error();
		else
			echo "Table created successully!";

	mysql_close($con);

?>