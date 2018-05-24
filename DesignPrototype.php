<?php
session_start();
  include("Servers/connection.php");
	include("Servers/AptSql.php");
		$errorMessage = "&nbsp";

if (isset($_POST['uname']))
		{
			$Login = ValidateLogin();
			if ($Login != '') 
			{
				$errorMessage = $Login;
			}
		}

if (isset($_POST['myId'])) 
	{
		$see = FindAppointment();
		if ($see != '') 
			{
				$errorMessage = $see;
			}
	}
// if(isset($_POST['APID']))
// {
// 	$checking = CheckAPID();
// 			if ($checking != '') 
// 			{
// 				$errorMessage = $checking;
// 			}

// }

?>


<!DOCTYPE html>
<html lang="en">
<head>	
	<title>Rosario Memorial Hospital Prototype</title>
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
<!-- jQuery -->
<script src="http://thecodeplayer.com/u/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin for animation fun -->
<script src="http://thecodeplayer.com/u/js/jquery.easing.min.js" type="text/javascript"></script>

  	<!-- For Map -->
  	<style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
    <!-- For Map -->
</head>
<body>
<!-- col span's maximum span is 12 -->

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
				<li style="color: white; font-family: 'Open Sans', sans-serif;"> <a href="#"  value="Login" data-toggle="modal" data-target="#LoginModal" name="">Login </a></li>
				
			</ul>
		</div>
	</div>
</nav>
<!-- Navigation Bar................................................................................................-->

<!-- SlideShow of pictures ................................................................................ -->

<div id="carousel-example" class="carousel slide" data-ride="carousel" align="center" style="background-position: fixed; background-repeat: ">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1" class="tale"></li>
    <li data-target="#carousel-example" data-slide-to="2" class="tale"></li>
    <li data-target="#carousel-example" data-slide-to="3" class="tale"></li>
    <li data-target="#carousel-example" data-slide-to="4" class="tale"></li>
    <li data-target="#carousel-example" data-slide-to="5" class="tale"></li>
    <li data-target="#carousel-example" data-slide-to="6" class="tale"></li>
    <li data-target="#carousel-example" data-slide-to="7" class="tale"></li>
  </ol>
<style type="text/css">
	.tales {
  width: 100%;
}
.carousel-inner{
  width:100%;
  max-height: 1000px !important;
}
</style>


  <div class="carousel-inner" align="center" style="" >

    <div class="item active">
      <a href="#"><img src="Carousel/Entrance.jpg" ></a>
      <div class="carousel-caption" style="font-family: 'Open Sans', sans-serif; font-size: 30px;" >
        <h3>Rosario Memorial Hospital</h3>
		<p>Main Entrance</p>
      </div>

    </div>
    <div class="item">
     <a href="#"><img src="Carousel/Clinic.jpg" /></a>
      <div class="carousel-caption" style="font-family: 'Open Sans', sans-serif; font-size: 30px;">
        <h3>Rosario Memorial Hospital</h3>
		<p>Clinic</p>
      </div>

    </div>
    <div class="item">
      <a href="#"><img src="Carousel/Hosp3.jpg" /></a>
      <div class="carousel-caption" style="font-family: 'Open Sans', sans-serif; font-size: 30px;">
        <h3>Rosario Memorial Hospital</h3>
		<p>Parking Lot</p>
      </div>

    </div>
     <div class="item">
      <a href="#"><img src="Carousel/Hosp4.jpg" /></a>
      <div class="carousel-caption" style="font-family: 'Open Sans', sans-serif; font-size: 30px;">
        <h3>Rosario Memorial Hospital</h3>
		<p>Main Building</p>
      </div>
    </div>

    <div class="item">
      <a href="#"><img src="Carousel/Hallway.jpg" /></a>
      <div class="carousel-caption" style="font-family: 'Open Sans', sans-serif; font-size: 30px;">
        <h3>Rosario Memorial Hospital</h3>
		<p>Hallway</p>
      </div>
    </div>

    <div class="item">
      <a href="#"><img src="Carousel/Nurse.jpg" /></a>
      <div class="carousel-caption" style="font-family: 'Open Sans', sans-serif; font-size: 30px;">
        <h3>Rosario Memorial Hospital</h3>
		<p>Nurse Station</p>
      </div>
    </div>

    <div class="item">
      <a href="#"><img src="Carousel/Chapel.jpg" /></a>
      <div class="carousel-caption" style="font-family: 'Open Sans', sans-serif; font-size: 30px;">
        <h3>Rosario Memorial Hospital</h3>
		<p>Chapel</p>
      </div>
    </div>

    <div class="item">
      <a href="#"><img src="Carousel/Hosp5.jpg" /></a>
      <div class="carousel-caption" style="font-family: 'Open Sans', sans-serif; font-size: 30px;">
        <h3>Rosario Memorial Hospital</h3>
		<p>Hospital</p>
      </div>
    </div>

  </div>

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
<!-- SlideShow of pictures ................................................................................ -->

<!-- This is for the Online Appointment ...........................................................................................-->
	<section>
		<div class="container-fluid">
		  <div class="row">
		    <div class="col-sm-12" style="background-color:hsl(120,40%,40%); color: white; font-family: 'Open Sans', sans-serif;">
		    	<center>
		    		<h2>Schedule your appointment online <a href="AppointmentPage.php" class="btn btn-info" role="button">Book an Appointment</a></h2>
		    	</center>
		    </div>
		  </div>
		</div>
	</section>
<!-- This is for the Online Appointment ...........................................................................................-->

<!-- Highlight of the Hospital ...................................................................................................-->
	<section style="font-family: 'Open Sans', sans-serif;">
		<div class="container">
  		<center style="font-family: 'Open Sans', sans-serif;">
  		
  		<h2 style="color:hsl(120,40%,40%);">About Us</h2>
  		<p style="color:hsl(120,40%,40%);">A family owned corporation, establish to provides affordable and quality health care services.</p>
  		</center>
		  <div class="row">
		    <div class="col-sm-4">
		      <div class="thumbnail">
		         <a href="#" target="_blank" style="text-decoration: none;">
		          <img src="Carousel/Hosp1.jpg" alt="View1" style="width:100%">
		          <div class="caption" style="font-family: 'Open Sans', sans-serif; font-size: 20px;">
		            <p>In the years to come, the Rosario Memorial Hospital will be an acclaimed medical institution promoting the standard of excellence in health care in Central Luzon. </p>
		          </div>
		        </a>
		      </div>
		    </div>
		    <div class="col-sm-4">
		      <div class="thumbnail">
		         <a href="#" target="_blank" style="text-decoration: none;">
		          <img src="Carousel/Hosp2.jpg" alt="View2" style="width:100%">
		          <div class="caption" style="font-family: 'Open Sans', sans-serif;">
		            <p style=" font-size: 20px;">In the years to come, the Rosario Memorial Hospital will be an acclaimed medical institution promoting the standard of excellence in health care in Central Luzon.</p>
		          </div>
		        </a>
		      </div>
		    </div>
		    <div class="col-sm-4">
		      <div class="thumbnail">
		        <a href="#" target="_blank" style="text-decoration: none;">
		          <img src="Carousel/Hosp4.jpg" alt="View3" style="width:100%">
		          <div class="caption" style="font-family: 'Open Sans', sans-serif; font-size: 20px;">
		            <p>In the years to come, the Rosario Memorial Hospital will be an acclaimed medical institution promoting the standard of excellence in health care in Central Luzon.</p>
		          </div>
		        </a>
		      </div>
		    </div>
		  </div>
		</div>
	</section>
<!-- Highlight of the  Hospital..............................................................................................-->
<!-- ++++++++++++++++++++++++++++ Modal for Login Employees ++++++++++++++++++++++++++++++++++++++++  -->

<!-- Modal -->
		  <div class="modal fade" id="LoginModal" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h3>Hospital Login</h3>
		        </div>
		        <div class="modal-body" style="padding:40px 50px;">
		          <form method="POST">
		            <div class="form-group">
		              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
		              <input type="text" class="form-control" placeholder="Enter Username" id="uname" name="uname" required>
		            </div>
		            <div class="form-group">
		              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
		              <input type="password" class="form-control" placeholder="Enter Password" id="pword"  name="pword" required>
		            </div>
		              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
		          </form>
		        </div>
		        <div class="modal-footer">
		          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Exit</button>
		        </div>
		      </div>
		      
		    </div>
		  </div> 
		</div>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- Modal for checking my appointment +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
 <div class="modal fade" id="MyAppoint" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <center><h4>My Appointment</h4></center>
		        </div>
		        <div class="modal-body" style="padding:40px 50px;">
		          <form method="GET" action="mySched.php">
		            <div class="form-group">
		              <h4><span class="glyphicon glyphicon-pushpin"></span>  My Appointment ID</h4>
		              <input type="number" class="form-control" placeholder="Enter Appointment ID" id="myId" name="myId" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxlength="9" min = "0" required>
		            </div>
		              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-search"></span>Find My Appointment</button>
		          </form>
		        </div>
		        <div class="modal-footer">
		          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Exit</button>
		        </div>
		      </div>
		      
		    </div>
		  </div> 
		</div>
<!-- Modal for checking my appointment +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- Members of the group a.k.a Elite ................................................... -->
	<section>
		<div class="container-fluid">
			<center style="font-family: 'Open Sans', sans-serif; color:hsl(120,40%,40%); ">
			<h2>Our Team of Professionals</h2>
			<p>Dedicated and Hardworking</p>
			</center>
			<div class="row">
				<div class="col-sm-4">
					<center>
						<img src="ProDoctors/Pro1.jpg" class="img-thumbnail" width="304" height="236">
					</center>
				</div>
				<div class="col-sm-4">
					<center>
						<img src="ProDoctors/Pro.jpg" class="img-thumbnail" width="304" height="236">
					</center>
				</div>
				<div class="col-sm-4">
					<center>
						<img src="ProDoctors/Pro2.jpg" class="img-thumbnail" width="304" height="236">
					</center>
				</div>
			</div>
		</div>
	</section>
<!-- Members of the group a.k.a Elite ................................................... -->

<!-- Just a"Enter Command" ................................ -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<br><br>
			</div>
		</div>
	</div>
</section>
<!-- Just a"Enter Command" ................................ -->

<!-- Services offered by the Hospital .....................................................................................................-->
	<section>
		<div class="container-fluid">
			<center style="font-family: 'Open Sans', sans-serif; color:hsl(120,40%,40%);">
				<h2>Our Services</h2>
				<p>First. Best. Always.</p>
			</center>
				<div class="row">
					<div class="col-sm-4" style=" font-family: 'Open Sans', sans-serif; ">
					<center>
					<h3>General Surgery</h3>
					<img src="IconsForHome/surgeon.png" style="width:20%; height: 25%;">
					<p>There are many reasons to have surgery. Some operations can relieve or prevent pain. Others can reduce a symptom of a problem or improve some body function. Some surgeries are done to find a problem.</p>
					<a href="#">Read More</a>
					</center>
		    		</div>

		    		<div class="col-sm-4" style=" font-family: 'Open Sans', sans-serif;">
					<center>
					<h3>Internal Medicines</h3>
					<img src="IconsForHome/medicine.png" style="width:20%; height: 25%;">
					<p>There are many reasons to have surgery. Some operations can relieve or prevent pain. Others can reduce a symptom of a problem or improve some body function. Some surgeries are done to find a problem.</p>
					<a href="#">Read More</a>
					</center>
		    		</div>

		    		<div class="col-sm-4" style=" font-family: 'Open Sans', sans-serif;">
					<center>
					<h3>Dental Service</h3>
					<img src="IconsForHome/dental.png" style="width:20%; height: 25%;">
					<p> There are many reasons to have surgery. Some operations can relieve or prevent pain. Others can reduce a symptom of a problem or improve some body function. Some surgeries are done to find a problem.</p>
					<a href="#">Read More</a>
					</center>
		    		</div>

				</div>
		</div>
	</section>
<!-- Services offered by the Hospital .....................................................................................................-->

<!-- Just a"Enter Command" ................................ -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<br><br>
			</div>
		</div>
	</div>
</section>
<!-- Just a"Enter Command" ................................ -->

<!-- Just a"Enter Command" ................................ -->
<section>
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-sm-12">
				<br><br>
			</div>
		</div>
	</div>
</section>
<!-- Just a"Enter Command" ................................ -->

<!-- Our Advantages .......................................................................-->
	<section>
		<div class="container-fluid">
			<center>
				<h2 style="font-family: 'Open Sans', sans-serif; color: hsl(120,40%,40%);">Our Advantages</h2>
			</center>
			<div class="row">
				<div class="col-sm-7">
						<br>
						<p style="font-family: 'Open Sans', sans-serif; padding-left: 10%; padding-top: 7%">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
						
						<ul style="font-family: 'Open Sans', sans-serif;  padding-left: 10%; padding-top: 3%; ">
							<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores </li>
							<br>
							<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores </li>
							<br>
							<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores </li>
							<br>
							<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis </li>
							<br><br><br>


						</ul>
				</div>

				<div class="col-sm-5">
					<img src="DoctorsFromWeb/doctor1.png" width="62%" align="" alt="Doctor">
				</div>

			</div>
		</div>
	</section>
<!-- Our Advantages .......................................................................-->

<!-- Just a"Enter Command" ................................ -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<br><br>
			</div>
		</div>
	</div>
</section>
<!-- Just a"Enter Command" ................................ -->

<!-- Just a"Enter Command" ................................ -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<br><br>
			</div>
		</div>
	</div>
</section>
<!-- Just a"Enter Command" ................................ -->
<!-- Appointment........................................... -->
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					
				</div>
				<div class="col-sm-6">

				   <center>
				   		<img src="IconsForHome/clock.png" alt="clock" align="center" width="25%">
						<h3 style="font-family: 'Open Sans', sans-serif; color: hsl(120,40%,40%);">
							Schedule your Appointment Online Now
						</h3>
				   </center>
					<p style="font-family: 'Open Sans', sans-serif;">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae velit a lacus ultrices egestas a in justo. Sed lorem massa, accumsan sit amet purus vel, pulvinar gravida ligula. Fusce lectus elit, laoreet quis nulla sit amet, auctor finibus ipsum. Aliquam at nisl ipsum.
						<br>
						Mauris sit amet laoreet mauris. Aenean vitae lacus vitae libero interdum tristique vel vitae erat. Vestibulum sit amet tincidunt ligula. Sed malesuada augue quis purus rhoncus aliquet. Ut eros risus, lobortis nec tincidunt vehicula, gravida sit amet sapien. Ut eget felis vehicula, pharetra elit non, gravida nibh.
					</p>
					<a href="AppointmentPage.php" style="font-family: 'Open Sans', sans-serif;" class="btn btn-info btn-block" role="button">Book an Appointment</a>
				</div>

				<div class="col-sm-3">
					
				</div>
			</div>
		</div>
	</section>
<!-- Appointment........................................... -->
<!-- Just a"Enter Command" ................................ -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<br><br>
			</div>
		</div>
	</div>
</section>
<!-- Just a"Enter Command" ................................ -->

<!-- Just a"Enter Command" ................................ -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<br><br>
			</div>
		</div>
	</div>
</section>
<!-- Just a"Enter Command" ................................ -->

<!-- Comments / Messages ......................................................-->
	<section>
		<div class="container-fluid">
			<center style="font-family: 'Open Sans', sans-serif;color: hsl(120,40%,40%);"><h2>Comments & Suggestions</h2></center>
			<div class="row">
				<div class="col-sm-5">
					<form>
						<label style="font-family: 'Open Sans', sans-serif;color: hsl(120,40%,40%);">Comment:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</form>
				</div>

				<div class="col-sm-4">
					<form>
						<label style="font-family: 'Open Sans', sans-serif;color: hsl(120,40%,40%);">Name:</label>
						<input type="text" class="form-control" id="usr">
						<br>
						<label style="font-family: 'Open Sans', sans-serif;color: hsl(120,40%,40%);">Email:</label>
						<input type="text" class="form-control" id="email">
					</form>
				</div>

				<div class="col-sm-3">
					<form>
						<label style="font-family: 'Open Sans', sans-serif;color: hsl(120,40%,40%);">Contact Number:</label>
						<input type="text" class="form-control" id="contactnum">
						<br><br>
						<button style="font-family: 'Open Sans', sans-serif;" type="button" class="btn btn-success btn-block">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>
<!-- Comments / Messages ......................................................-->

<!-- Just a"Enter Command" ................................ -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<br><br>
			</div>
		</div>
	</div>
</section>
<!-- Just a"Enter Command" ................................ -->

<!-- Just a"Enter Command" ................................ -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<br><br>
			</div>
		</div>
	</div>
</section>
<!-- Just a"Enter Command" ................................ -->
<!-- Header for the google map.............................. -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<center><h3 style="color: hsl(120,40%,40%);font-family: 'Open Sans', sans-serif; ">Location</h3></center>
			</div>
		</div>
	</div>
</section>
<!-- Header for the google map.............................. -->

<!-- Google Map.............................................................. -->
<section>
	 <div id="map" style="background-color: lightgrey;"></div>
    <script >
      function initMap() {
        var uluru = {lat: 14.967006, lng: 120.632168};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1awLZOrq5XatMUo4hiHDSH8KK35Jrh_A&callback=initMap">
    </script>
</section>
<!-- Google Map.............................................................. -->

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