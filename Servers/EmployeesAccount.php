<?php 
	include("connection.php");

	$sql = "CREATE TABLE EmployeesAccount(
		EmployeeID int (11),
		Type varchar(20),
		Name varchar(60),
		Address varchar(50),
		ContactNo varchar(11),
		Birthday date,
		Age int(5),
		Gender varchar(6),
		Department varchar(40),
		Username varchar(20),
		Password varchar(10)
		);";
	
	$result = mysql_query($sql);
		if (!$result)
			{echo "Error creating table!".mysql_error();
			$int2 = "INSERT INTO employeesaccount VALUES(2,'Admin2','Admin2','Dau','09554671447','1998-05-03',19,'Male','Admin2','Admin2','Admin2')";

				$int3 = "INSERT INTO employeesaccount VALUES(3,'Doctor','Dr. Ariel Anthonell Maltu','San Roque','09534631217','1960-01-11',55,'Male','Internal Medicine','Doctor1','Doctor1')";}
		else
		{
			echo "Table created successully!";
			$int = "INSERT INTO employeesaccount VALUES(1,'Admin','Admin','San Agustin','09075540712','1993-02-04',24,'Female','Admin','Admin','Admin')";
	

		// 		$result2 = mysql_query($int);
		// if (!$result2)
		// 	echo "Error creating table!".mysql_error();
		// else
		// 	echo "Table created successully!";
		}

	mysql_close($con);

?>