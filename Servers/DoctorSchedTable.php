<?php 
	include("connection.php");

	$sql = "CREATE TABLE DoctorSched(
		DoctorID int (11),
		DoctorName varchar(60),
		Specialization varchar(40),
		DaySchedule varchar(30),
		TimeSchedule varchar(20)
		);";
	
	$result = mysql_query($sql);
		if (!$result)
			echo "Error creating table!".mysql_error();
		else
			echo "Table created successully!";

	mysql_close($con);

?>