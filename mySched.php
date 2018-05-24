<?php
	include("Servers/connection.php");
  

      $Checkid= $_GET['myId'];

      $sqlCheckUser = "SELECT * FROM AppointmentOnline WHERE ClientID =".$_GET['myId'];
      $result = mysql_query($sqlCheckUser);
      // $row = mysql_fetch_array($result);


?>

<!DOCTYPE html>
<html>
<head>
	<title>My Schedule</title>
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
</head>
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
				<li style="color: white; font-family: 'Open Sans', sans-serif;"> <a href="#" data-toggle="modal" data-target="#MyAppoint" name="">My Appointment</a></li>
		        <li style="color: white; font-family: 'Open Sans', sans-serif;"><a href="Services.php">Health Services</a></li>
		        <li style="color: white; font-family: 'Open Sans', sans-serif;"><a href="Visitors.php">Visitor's Guide</a></li>
		        <li style="color: white; font-family: 'Open Sans', sans-serif;"><a href="AboutUs.php">About Us</a></li>
			</ul>
		</div>
	</div>
</nav>
<!-- Navigation Bar................................................................................................-->
<!-- Just a"Enter Command" ................................ -->
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <br><br><br>
      </div>
    </div>
  </div>
</section>
<!-- Just a"Enter Command" ................................ -->
<!-- Label .................................................................................................................. -->
<section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12" style="background-color:rgb(78, 232, 111); color: white; font-family: 'Open Sans', sans-serif; background-image: url(Carousel/Hosp1.jpg);">
          <h1>My Schedule</h1>

        </div>
      </div>
    </div>
  </section>
<!-- Label .................................................................................................................. -->
<!-- Just a"Enter Command" ................................ -->
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <br><br><br>
      </div>
    </div>
  </div>
</section>
<!-- Just a"Enter Command" ................................ -->

<!-- Tables to view appointments.+++++++++++++++++++++++++++++ -->
<section>
  <div class="container-fluid">
    <div class="row">
      <!-- Tables of the persons who set an  Appointment online.+++++++++++++++++++++++++++++ -->
      <div class="col-sm-6">
        <h4>Patients Info(Online Appointment)</h4>
        <table class="table table-hover">
          <thead>
            <tr>
              <th align="center">Last Name</th>
              <th align="center">First Name</th>
              <th align="center">Middle Name</th>
              <th align="center">ContactNo</th>
              <th align="center">Date</th>
              <th align="center">Time</th>
            </tr>
          </thead>
          <?php
            while ($row = mysql_fetch_row($result))
            {
            
          ?>
              <tbody>
                <tr>
                
                  <td style="cursor: pointer;" align="center"> <?php echo $row[1 ];?></td>
                  <td style="cursor: pointer;" align="center"> <?php echo $row[2];?></td>
                  <td style="cursor: pointer;" align="center"> <?php echo $row[3];?></td>
                  <td style="cursor: pointer;" align="center"> <?php echo $row[5];?></td>
                  <td style="cursor: pointer;" align="center"> <?php echo $row[11];?></td>
                  <td style="cursor: pointer;" align="center"> <?php echo $row[12]; ?></td>
                
                </tr>
              </tbody>
          <?php  
            } 
          ?> 
        </table>
      </div>
        <!-- Tables of the persons who set an  Appointment online.+++++++++++++++++++++++++++++ -->


</body>
</html>