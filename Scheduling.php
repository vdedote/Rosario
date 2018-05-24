<?php
session_start();
	include("Servers/connection.php");
		include("Servers/AptSql.php");
		  $errorMessage = "&nbsp";

// if(!isset($_SESSION['ID']))
// {
// header('Location:DesignPrototype.php');
// }

		// if($_SESSION['type']=='Doctor')
		// {
			$ShowUserName = "SELECT * FROM employeesaccount WHERE EmployeeID = ".$_SESSION['ID'];
			$Exec = mysql_query($ShowUserName);
			$user = mysql_fetch_array($Exec);
			$name = $user['Name'];
			$ser= $user['Department'];
			// echo $_SESSION['ID'];
			// echo $ser;
			// echo $today;
			$ListAccount = "SELECT * FROM appointmentonline WHERE Doctor ='$name'";
			$result = mysql_query($ListAccount);
			$row = mysql_fetch_array($result);

		

if (isset($_POST['queID']))
    {
      $AddQue = SetQueuing();
      if ($AddQue != '') 
      {
        $errorMessage = $AddQue;
      }
    }

    $datetoday = date("Y-m-d");
    $ListAccount2 = "SELECT * FROM Walkin WHERE Doctor = '$name';";
	$result2 = mysql_query($ListAccount2);
		// echo $datetoday;
?>

<!DOCTYPE html>
<html lang="en">
<head>	
	<title>Scheduling</title>
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
  	<!-- The Stylesheet for the whole main page ......................... -->

  	<!-- Font of Open Sans.............................................................. -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  	<!-- font-family: 'Open Sans', sans-serif; -->
  	<!-- Font of Open Sans.............................................................. -->

  
</head>
<body  onload="SetDate();">

<!-- Date Auto Compute +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
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

      function SetDate()
		{
		var date = new Date();

		var day = date.getDate();
		var month = date.getMonth() + 1;
		var year = date.getFullYear();

		if (month < 10) month = "0" + month;
		if (day < 10) day = "0" + day;

		var today2 = year + "-" + month + "-" + day;


		document.getElementById('today2').value = today2;
		document.getElementById('today1').value = today1;
		}
</script>
<!-- Date Auto Compute +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


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
        <li style="color: white; font-family: 'Open Sans', sans-serif;"><a href="Logout.php">LogOut</a></li>
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
          <h1>My Schedules</h1>

        </div>
      </div>
    </div>
  </section>
<!-- Label .................................................................................................................. -->

<!-- Just an"Enter Command" ................................ -->
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <br><br>
      </div>
    </div>
  </div>
</section>
<!-- Just an"Enter Command" ................................ -->

<!-- Details about the Doctor and its specialization -->
<section>
  <div class="container-fluid">
    <div class="row">
      
      <div class="col-sm-4">
        <h4>Doctor's Name</h4> <input style=" font-size:20px; " type="text" name="doctor" style="margin-right:15%;"  class="form-control" value="<?php echo $name; ?>" readonly> 
        <br>
        <h4>Specialization</h4>
        <input style=" font-size:20px; " type="text" name="service" class="form-control" value="<?php echo $ser; ?>" readonly>
        <br> 
      </div>

      <div class="col-sm-4">
        <center><h4>My Clinic Schedule</h4></center><br>
        <?php 
          $sched="SELECT * FROM doctorsched WHERE DoctorID=".$_SESSION['ID'];

          $res = mysql_query($sched);
          $set = mysql_fetch_array($res);
          $day= $set['DaySchedule'];
          $time= $set['TimeSchedule'];
        ?>
        <center><h4><?php echo $day; echo $time; ?></h4></center>
      </div>

      <div class="col-sm-4">
        <button style="width: 50%;" class="btn btn-info btn-block" value="Add Queuing" data-toggle="modal" data-target="#AddQueModal" name="">Add Queing</button> <br>
        <p>Someone who is willing to wait in line.</p>
      </div>

    </div>
  </div>
</section>
<!-- Details about the Doctor and its specialization -->

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
            while ($row = mysql_fetch_array($result))
            {
          ?>
              <tbody>
                <tr>
                
                  <td style="cursor: pointer;" align="center"> <?php echo $row['Lastname'];?></td>
                  <td style="cursor: pointer;" align="center"> <?php echo $row['Firstname'];?></td>
                  <td style="cursor: pointer;" align="center"> <?php echo $row['Middlename'];?></td>
                  <td style="cursor: pointer;" align="center"> <?php echo $row['ContactNo.'];?></td>
                  <td style="cursor: pointer;" align="center"> <?php echo $row['DateSchedule'];?></td>
                  <td style="cursor: pointer;" align="center"> <?php echo $row['TimeSchedule'];?></td>
                
                </tr>
              </tbody>
          <?php  
            } 
          ?> 
        </table>
      </div>
        <!-- Tables of the persons who set an  Appointment online.+++++++++++++++++++++++++++++ -->

        <!-- Tables of the persons who set an  Appointment through queuing............................. -->
          <div class="col-sm-6">
          <h4>Patients Info(Walk In)</h4>
             <table class="table table-hover">
          <thead>
            <tr>
              <th align="center">Queuing ID</th>
              <th align="center">Last Name</th>
              <th align="center">First Name</th>
              <th align="center">Middle Name</th>
              <th align="center">Contact No.</th>
            </tr>
          </thead>
           <?php
            while ($row2 = mysql_fetch_array($result2))
            {
          ?>
              <tbody>
                <tr>
                  <td style="cursor: pointer;" align="center"> <?php echo $row2['QueuingID'];?></td>
                  <td style="cursor: pointer;" align="center"> <?php echo $row2['Lastname'];?></td>
                  <td style="cursor: pointer;" align="center"> <?php echo $row2['Firstname'];?></td>
                  <td style="cursor: pointer;" align="center"> <?php echo $row2['Middlename'];?></td>
                  <td style="cursor: pointer;" align="center"> <?php echo $row2['ContactNo'];?></td>
                
                </tr>
              </tbody>
          <?php  
            } 
          ?> 
        </table>
          </div>
        <!--  Tables of the persons who set an  Appointment through queuing ........................... -->
    </div>
  </div>
</section>
<!-- Tables to view appointments.+++++++++++++++++++++++++++++ -->

<!-- Modal for Adding a Queue Patient +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
 <div class="modal fade" id="AddQueModal" role="dialog">
        <div class="modal-dialog">
        <form method="POST">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h3>Add New Patient</h3>
               <div class="form-group">
                  <label>Date Today:</label> 
                  <input style="width: 30%;" type="date" name="today2" id="today2" class="form-control" readonly>
                </div>
                <div class="form-group"> 
                  <input type="number" style="width: 20%;" class="form-control" id="queID" name="queID" placeholder="Queuing ID"  required/>
                </div>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              
                  <?php $rem = "OnWait"; ?>
                    <input type="hidden" name="service" value="<?php echo $ser; ?>">
                    <input type="hidden" name="doctor" value="<?php echo $name; ?>">
                    <input type="hidden" name="remark2" id="remark2" value="<?php echo $rem; ?>"
                  >
                <div class="form-group">
                  <label for="frstname"><span class="glyphicon glyphicon-user"></span>First Name</label>
                  <input type="text" class="form-control" placeholder="Enter Firstname" id="fname" name="fname" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{,30}$" required>
                </div>
                <div class="form-group">
                  <label for="lstname"><span class="glyphicon glyphicon-user"></span>Last Name</label>
                  <input type="text" class="form-control" placeholder="Enter Lastname" id="lname" name="lname" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{,30}$" required>
                </div>
                <div class="form-group">
                  <label for="mdname"><span class="glyphicon glyphicon-user"></span>Middle Name</label>
                  <input type="text" class="form-control" placeholder="Enter Middlename" id="mname" name="mname" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{,30}$" required>
                </div>

                <div class="form-group">
                <label for="sx"><span class="glyphicon glyphicon-user"></span>Sex</label>
                    <div class="buying-selling-group" id="buying-selling-group" data-toggle="buttons">
                        <label class="btn btn-default buying-selling">
                            <input type="radio" name="sex" id="option1" value="Male" autocomplete="off">
                            <span class="radio-dot"></span>
                            <span class="buying-selling-word">Male</span>
                        </label>
                    
                        <label class="btn btn-default buying-selling">
                            <input type="radio" name="sex" id="option2" value="Female" autocomplete="off">
                            <span class="radio-dot"></span>
                            <span class="buying-selling-word">Female</span>
                        </label>
                    </div>
                </div>

                 <div class="form-group">
                  <label for="bdy"><span class="glyphicon glyphicon-calendar"></span>Birthdate</label>
                   <input style="width: 50%" type="date" class="form-control" id="BDAY" name = "birthday" onclick=" today_limitToday();" onblur="age_compute();">

                   <label for="age"><span class="glyphicon glyphicon-calendar"></span>Age</label>
                   <input type="number" id="age" name="Age" min= "0" maxlength="3" class="form-control" readonly="" style="cursor: not-allowed; width: 50%;">

                </div>

                <div class="form-group">
                  <label for="addrss"><span class="glyphicon glyphicon-map-marker"></span>Address</label>
                  <input type="text" class="form-control" placeholder="Enter Address" id="address" name="address" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{,30}$" required>
                </div>
                <div class="form-group">
                  <label for="contct"><span class="glyphicon glyphicon-phone"></span>Contact Number</label>
                  <input type="number" class="form-control" placeholder="Enter Contact Number" id="contact" name="contact" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxlength="11" min = "0">
                </div>
               
                  <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-plus-sign"></span> Submit</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Exit</button>
            </div>
          </div>
          
        </div>
      </div> 
    </div>
<!-- Modal for Adding a Queue Patient +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- Foooooooooooooooooter ................................................................-->
	<!-- <section>
		<div class="container-fluid" style="background-color: black;">
			<div class="row">

				<div class="col-sm-12">
					<h4>©2017 Rosario Memorial Hospital All rights reserved | Designed by The Masterbatters</h3>
				</div>
			
			</div>
		</div>
	</section> -->
<!-- Foooooooooooooooooter ................................................................-->

</body>
</html>