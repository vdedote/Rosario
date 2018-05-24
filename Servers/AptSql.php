<?php 

	include("connection.php");
	function SetPatientSched()
	{
		$errorMessage = "";
		//Variables for Getting the values inside the Form
		$id    =  $_POST['clientID'];
		$lname =  $_POST['lname'];
		$fname =  $_POST['fname'];
		$mname =  $_POST['mname'];
		$addrs= $_POST['address'];
		$cont = $_POST['contact'];
		$bday  =  $_POST['birthday'];
		$age =  $_POST['Age'];
		$gender=  $_POST['sex'];
		$serv = $_POST['service'];
		$doc = $_POST['doctor'];
		$date = $_POST['datesched'];
		$time = $_POST['timesched'];


		$sqlCheck =  "SELECT * FROM AppointmentOnline WHERE TimeSchedule ='$time' and DateSchedule = '$date' and Doctor = '$doc';";
		$resultCheck = mysql_query($sqlCheck);
			if (mysql_num_rows($resultCheck) > 0) 
			{
				$ErrorMessage = "This Schedule already exist.";
				echo "1";
			}
			else
			{
				$sqlInsert =  "INSERT INTO AppointmentOnline VALUES ($id,'$lname','$fname','$mname','$addrs', '$cont', '$bday','$age', '$gender','$serv','$doc', '$date', '$time');";
						$InsertResult = mysql_query($sqlInsert);
						if (!$InsertResult)
							{
								echo "Error inserting record: ".mysql_error();
							}
								else
								{ 

								echo '<script> window.location.href="DesignPrototype.php"</script>';
									// echo 'add';
								}
				
		 }

			return $errorMessage;

	}

	function ValidateLogin()
		{
			$errorMessage = "";
			$LogUname= $_POST['uname'];
			$LogPass = $_POST['pword'];

			$sqlCheckUser = "SELECT * FROM EmployeesAccount WHERE Username = '$LogUname';"; 
			
			$runCheck = mysql_query($sqlCheckUser);

				if ($runCheck > 0) 
					{
						// echo "0";
						$row = mysql_fetch_array($runCheck);
							if ($row['Password'] == $LogPass) 
							{
								// echo "1";
								$_SESSION['ID'] = $row['EmployeeID'];
								$_SESSION['type'] = $row['Type'];

								echo '<script> window.location.href="Scheduling.php"</script>';
							}
							else
							{
								$errorMessage = "Incorrect Password!";
							}
					}
					else
					{
					$errormessage = "Username doesn't Exist";
					}
	

				return $errorMessage;	
		}


	function CheckAPID()
		{
			$errorMessage = "";
			$Checkid= $_POST['APID'];

			$sqlCheckUser = "SELECT * FROM appointmentonline WHERE ClientID =$Checkid";
			$runCheck = mysql_query($sqlCheckUser);

				if ($runCheck > 0) 
					{
						// echo "0";
						$row = mysql_fetch_array($runCheck);
							if ($row['ClientID'] == $Checkid) 
							{
								echo '<script> window.location.href="mySched.php"</script>';
							}
					}
					else
					{
					$errormessage = "Appointment ID doesn't Exist";
					}
	

				return $errorMessage;	
		}


function SetQueuing()
	{
		$errorMessage = "";
		//Variables for Getting the values inside the Form
		$id    =  $_POST['queID'];
		$lname =  $_POST['lname'];
		$fname =  $_POST['fname'];
		$mname =  $_POST['mname'];
		$addrs= $_POST['address'];
		$cont = $_POST['contact'];
		$bday  =  $_POST['birthday'];
		$age =  $_POST['Age'];
		$gender=  $_POST['sex'];
		$serv =$_POST['service'];
		$doc = $_POST['doctor'];
		$today = $_POST['today2'];
		$remark = $_POST['remark2'];

		$sqlCheck =  "SELECT * FROM Walkin WHERE QueuingID ='$id' and Service ='$ser'";
		$resultCheck = mysql_query($sqlCheck);
			if (mysql_num_rows($resultCheck) > 0) 
			{
				$ErrorMessage = "This Queuing ID already exist.";
				# code...
			}
			else
			{

		
				$sqlInsert =  "INSERT INTO Walkin VALUES ($id,'$lname','$fname','$mname','$addrs', '$cont', '$bday','$age', '$gender','$serv','$doc','$today','$remark');";
						$InsertResult = mysql_query($sqlInsert);
						if (!$InsertResult)
							{
								echo "Error inserting record: ".mysql_error();
							}
								else
								{ 
									echo '<script> window.location.href="Scheduling.php"</script>';
								}
				
			}

			return $errorMessage;

	}




?>