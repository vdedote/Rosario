


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Appointment</title>
	<link rel="shortcut icon"  href="Logo.png" sizes="32x32" type="image/png"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />
  	<!-- The Stylesheet for the whole main page ......................... -->
  	<link rel="stylesheet" type="text/css" href="DesignPrototype.css">
  	<!-- The Stylesheet for the whole main page ......................... -->

  	<!-- Font of Open Sans.............................................................. -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  	<!-- font-family: 'Open Sans', sans-serif; -->
  	<!-- Font of Open Sans.............................................................. -->
</head>
<body>
<!-- Navigation Bar ............................................................................................. -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle ="collapse" data-target ="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<img src="Logo.png" height="50px"  align="left" style="background-color: ">
			<a class="navbar-brand" href="DesignPrototype.php" style="font-family: 'Open Sans', sans-serif; font-size: 20px;">Rosario Memorial Hospital Prototype</a>
		</div>
	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<li style="color: white; font-family: 'Open Sans', sans-serif;"><a href="DesignPrototype.php">Home</a></li>
			<li style="color: white; font-family: 'Open Sans', sans-serif;"><a href="Departments.php">Departments</a></li>
			<li style="color: white; font-family: 'Open Sans', sans-serif;"><a href="Services.php">Services</a></li>
			<li style="color: white; font-family: 'Open Sans', sans-serif;"><a href = "AppointmentOnline.php">Visitor's Guide</a></li>
			<li style="color: white; font-family: 'Open Sans', sans-serif;"><a href="AboutUs.php">About Us</a></li>
			<li style="color: white; font-family: 'Open Sans', sans-serif;"><a href = "AppointmentOnline.php">Contact</a></li>
				
		</ul>
	</div>
	</div>
</nav>
<!-- Navigation Bar................................................................................................ -->
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
		    	<h1>Book Online</h1><small>Schedule online. It's easy, fast and secure.</small>

		    </div>
		  </div>
		</div>
	</section>
<!-- Label .................................................................................................................. -->

<!-- Information on how to operate  ................................ -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<h4>Please mark the Doctor's Name.<br>
				Then press the "Set appointment Button"
				on the same spot.
				</h4>
			</div>
		</div>
	</div>
</section>
<!-- Information on how to operate ................................ -->

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



<!-- Appointments................................ -->
<section>
	<div class="container-fluid">
		<div class="row">

<div class="col-sm-3">
	<div class="thumbnail">
		    <img src="DoctorsFromWeb/Doctor.jpg" alt="View1" style="width:100%">
		        <center style="font-family: 'Open Sans', sans-serif;">
			        <h4>Internal Medicine</h4>
			        <br>
	<form method="POST" action="SetAppointment.php">
			<!-- <input type="hidden" name="service" id="service" value="Internal Medicine"> -->
		<div><td>
			<input type="radio" name="doctor" id="option1" value="Dr. Ariel Anthonell Maltu">Dr. Ariel Anthonell Maltu
		</td></div>
		<div><td>
			<input type="radio" name="doctor" id="option2" value="Dr. Cromwel P. Medina">
				Dr. Cromwel P. Medina
		</td></div>
		<div><td>
			<input type="radio" name="doctor" id="option3" value="Dr. Myrna N. Bacani">
				Dr. Myrna N. Bacani
		</td></div>
		<td>
    		<button type="submit" name="service" id="service" value="Internal Medicine"class="btn btn-primary">Set Appointment</button>
		</td>
				<br>
		</center>

	</div>
</div>
<div class="col-sm-3">
	<div class="thumbnail">
		     <img src="DoctorsFromWeb/Surgeon.jpg" alt="View1" style="width:100%">
		        <center style="font-family: 'Open Sans', sans-serif;">
			        <h4>Cardiology</h4>
			        <br>
	<form method="POST" action="SetAppointment.php">
		<!-- 	<input type="hidden" name="service" id="service" value="Cardiology"> -->
		<div><td>
			<input type="radio" name="doctor" id="option1" value="Dr. Michelle F. Serrano">Dr. Michelle F. Serrano
		</td></div>
		<div><td>
			<input type="radio" name="doctor" id="option2" value="Dr. Roberto M. Yabut">
				Dr. Roberto M. Yabut
		</td></div>
		<td>
    		<button type="submit" name="service" id="service" value="Cardiology"class="btn btn-primary">Set Appointment</button>
		</td>
				<br>
		</center>

	</div>
</div>
<div class="col-sm-3">
	<div class="thumbnail">
		       <img src="DoctorsFromWeb/Psychiatrist.jpg" alt="View1" style="width:100%">
		        <center style="font-family: 'Open Sans', sans-serif;">
			        <h4>Urology</h4>
			        <br>
	<form method="POST" action="SetAppointment.php">
			<!-- <input type="hidden" name="service" id="service" value="Urology"> -->
		<div><td>
			<input type="radio" name="doctor" id="option1" value="Dr. Brillo V. Vargas">Dr. Brillo V. Vargas
		</td></div>
		<div><td>
			<input type="radio" name="doctor" id="option2" value="Dr. Rico Y. Sampang">
				Dr. Rico Y. Sampang
		</td></div>
		<td>
    		<button type="submit" name="service" id="service" value="Urology"class="btn btn-primary">Set Appointment</button>
		</td>
				<br>
		</center>

	</div>
</div>
<div class="col-sm-3">
	<div class="thumbnail">
		     <img src="DoctorsFromWeb/Doctor.jpg" alt="View1" style="width:100%">
		        <center style="font-family: 'Open Sans', sans-serif;">
			        <h4>OB Gyne</h4>
			        <br>
	<form method="POST" action="SetAppointment.php">
		<!-- 	<input type="hidden" name="service" id="service" > -->
		<div><td>
			<input type="radio" name="doctor" id="option1" value="Dr. Gail Macabulos">Dr. Gail Macabulos
		</td></div>
		<div><td>
			<input type="radio" name="doctor" id="option2" value="Dr. Maria D. TanTamco">
		Dr. Maria D. TanTamco
		</td></div>
	    <div><td>
			<input type="radio" name="doctor" id="option3" value="Dr. Veneranda Panaligan">
		Dr. Veneranda Panaligan
		</td></div>
		<td>
    		<button type="submit" name="service" value="Obstetrics & Gynecology" class="btn btn-primary">Set Appointment</button>
		</td>
				<br>
		</center>

	</div>
</div>

		</div>
	</div>
</section>
<!--Appointments................................ -->

<!-- Foooooooooooooooooter ................................................................-->
	<section>
		<div class="container-fluid" style="background-color: black;">
			<div class="row">

				<div class="col-sm-12">
					<h4>©2017 Rosario Memorial Hospital All rights reserved | Designed by The Masterbatters</h3>
				</div>
			
			</div>
		</div>
	</section>
<!-- Foooooooooooooooooter ................................................................-->
</body>
</html>