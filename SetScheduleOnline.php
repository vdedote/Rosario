<?php
	// session_start();
	include("Servers/connection.php");

	if(isset($_POST['doctor']))
	{
				$errorMessage = "";
				$doctor = $_POST['doctor'];
				$service = $_POST['service'];	


			$sqlCheck =  "SELECT * FROM doctorsched WHERE DoctorName ='$doctor'";
			$resultCheck = mysql_query($sqlCheck);
			if ($resultCheck > 0) 
						{
							// echo "0";
							$row = mysql_fetch_array($resultCheck);
								if ($row['Specialization'] == $service) 
								{
									$dc = $row['DoctorName'];
									$sr = $row['Specialization'];
									// echo "1";
									// echo '<script> window.location.href="SetAppointment.php"</script>';
								}
								else
								{
									$errorMessage = "Invalid Selection of Doctor!";
									echo $errorMessage;
								}
		 }			
	}
	else
	{
		header("location:AppointmentPage.php");
	}
?>
<<!DOCTYPE html>
<html lang="en">
  <title>Schedule Online</title>
	<link rel="shortcut icon" href="Logo.png" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />
    
  	<!-- The Stylesheet for the whole main page ......................... -->
  	<link rel="stylesheet" type="text/css" href="DesignPrototype.css">
  	<link rel="stylesheet" type="text/css" href="AppointmentOnline.css">
  	<!-- The Stylesheet for the whole main page ......................... -->

  	<!-- Font of Open Sans.............................................................. -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  	<!-- font-family: 'Open Sans', sans-serif; -->
  	<!-- Font of Open Sans.............................................................. -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://dl.dropboxusercontent.com/u/86701580/mypersonalcdn/renda/renda-icon-font.css">
  </head>
  	<script type="text/javascript" language = "javascript">
      function today_getDate()
        {
          var today = new Date();
      return today;
        }

        function date_limitToday()
        {
          var currentDate = new Date();
          currentDate = today_getDate();

          var dd = currentDate.getDate()-1;
          var mm = currentDate.getMonth()+1; //January is 0!
          var yyyy = currentDate.getFullYear();
      
      if(dd<10)
        {
              dd='0'+dd;
        } 
         
      if(mm<10)
        {
              mm='0'+mm;
          } 

          yyyy = yyyy-6;
      currentDate = yyyy+'-'+mm+'-'+dd;
            
      document.getElementById("BDAY").setAttribute("max", currentDate);
        }

      function age_compute()
      {
        
        var today = new Date();
      var today_d = today.getDate();
      var today_m = today.getMonth() + 1; //January is 0!
      var today_y = today.getFullYear();
      
      var dateInput = document.getElementById('BDAY').value;
      var bDate = new Date(dateInput);
      
      var bdate_d = bDate.getDate();
      var bdate_m = bDate.getMonth() + 1; //January is 0!
      var bdate_y = bDate.getFullYear();
      
      var age1 = today_y - bdate_y;
        if (((today_m - bdate_m) < 0) || ((today_m - bdate_m) == 0 && today_d < bdate_d))
          age1 = age1 -1;

      var txtAge = document.getElementById("age");
      txtAge.value = age1;
      }
   </script>
<body>
	<!-- Navigation Bar .................................................................................................................... -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle ="collapse" data-target ="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
				<img src="Logo.png" height="50px"  align="left" style="background-color: ">
			<a class="navbar-brand" href="DesignPrototype.php" style="font-family: 'Open Sans', sans-serif; font-size: 20px;">Rosario Memorial Hospital</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="active" style="color: white; font-family: 'Open Sans', sans-serif;"><a href="DesignPrototype.php">Home</a></li>
        <li style="color: white; font-family: 'Open Sans', sans-serif;"><a href="Services.php">Health Services</a></li>
        <li style="color: white; font-family: 'Open Sans', sans-serif;"><a href="Visitors.php">Visitor's Guide</a></li>
        <li style="color: white; font-family: 'Open Sans', sans-serif;"><a href="AboutUs.php">About Us</a></li>
		<li style="color: white; font-family: 'Open Sans', sans-serif;"> <a href="#"  value="Login" data-toggle="modal" data-target="#LoginModal" name="">Login </a></li>
				
			</ul>
		</div>
	</div>
</nav>
<!-- Navigation Bar................................................................................................-->

</body>
</html>