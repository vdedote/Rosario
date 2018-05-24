<?php
	
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

		include("Servers/AptSql.php");
		  $errorMessage = "&nbsp";


if (isset($_POST['contact']))
		{
			$appt = SetPatientSched();
			if ($appt != '') 
			{
				$errorMessage = $appt;
			}
		}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <!-- Include meta tag to ensure proper rendering and touch zooming -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

<!-- Include jQuery Mobile stylesheets -->
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

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

      function gettime(objButton){  



    var x = document.getElementByName("time").value;
    // document.getElementById("demo").innerHTML = x;
   var y = document.getElementById("timesched");
   y.value = x;
}  
   
</script>

<style>
#datep {
    display: none;

}

.ui-datepicker-calendar tbody td > button.hover-calendar-cell {
    border: 1px solid #074e91;
    background: #5bacf7 url(images/ui-bg_glass_15_5bacf7_1x400.png) 50% 50% repeat-x;
    font-weight: bold;
    color: #1a1a1a; 
}
div.ui-datepicker {
font-size: 200%; 
}


.ui-datepicker-calendar tr {
text-align: center;
font: 15pt Arial, sans-serif;
-webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .5);
-moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .5);
}

.ui-datepicker-calendar td {
text-align: center;
font: 15pt Georgia, sans-serif;
-webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .5);
-moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .5);
}

#addon{background-color:#999; width:100%}

</style>
<body>

<section>
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
				<li style="color: white; font-family: 'Open Sans', sans-serif;"><a href="DesignPrototype.php">Cancel</a></li>
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
		    	<h1>Personal Information</h1><small>Schedule online. It's easy, fast and secure.</small>

		    </div>
		  </div>
		</div>
	</section>
<!-- Label .................................................................................................................. -->

<!--Doctors Information................................ -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
				<h4>Specialization</h4><input style=" font-size:20px; " type="text" name="doctor" style="margin-right:15%;"  class="form-control" value="<?php echo $sr; ?>"" readonly> 
		        <br>
		        <h4>Doctor's Name</h4>
		        <input style=" font-size:20px; " type="text" name="service" class="form-control" value="<?php echo $dc;?>" readonly>
			</div>
			<div class="col-sm-4">
		        <center><h3>Doctor'sSchedule</h3></center><br>
		       <?php 
					$sched="SELECT * FROM doctorsched WHERE DoctorName = '$dc'";

					$res = mysql_query($sched);
					$set = mysql_fetch_array($res);
					$day = $set['DaySchedule'];
					$time = $set['TimeSchedule'];
				
				?>
		        <center><h4><?php echo $day; echo $time; ?></h4></center>
		        <center><h4 style="color:red;">Always remember your Appointment ID</h4></center>
      		</div>
		</div>
	</div>
</section>
<!--Doctors Information................................ -->
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
<!-- Date Picker ++++++++++++++++++++++++++++++++++++++++ -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<h3>Select a date</h3>
				<input type="text" id="datep"/>
				<div id="datepicker"></div>
			</div>
<!-- Personal Information Fill-Up ++++++++++++++++++++++++-->
			<div class="col-sm-6">
				<form method="POST">
					<div class="form-group">
						<input type="hidden" name="service" class="form-control" value="<?php echo $sr; ?>" readonly>
					</div>
					<div class="form-group">
						<input type="hidden" name="doctor" style="margin-right:15%;"  class="form-control" value="<?php echo $dc;?>" readonly> 	
					</div>
					<div class="form-group">
						 <h4><span class="glyphicon glyphicon-time"></span>Set Time</h4>
							<select style="cursor: pointer; width: 50%;" placeholder="Time" name="timesched" class="form-control">
								<option></option>
								<option >7:00am -8:00am</option>
								<option >8:00am -9:00am</option>
								<option >9:00am -10:00am</option>
							</select> 	
					</div>
					<div class="form-group">
						<h4><span class="glyphicon glyphicon-calendar"></span>Date</h4>
						 <input style="width: 50%;" type="text" id="datesched" name="datesched"  class="form-control" readonly="" style="cursor: not-allowed;" />	
					</div>
					<div class="form-group">
						<h4><span class="glyphicon glyphicon-pushpin"></span>Appointment ID</h4> <small style="color: red;" >Please do not forget your Appointment ID</small>
							 <input  style="width: 50%;" type="number" class="form-control" name ="clientID" id ="clientID" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxlength="9" min = "0" required>	
					</div>
						<br><h4 style="color: green;"><span class="glyphicon glyphicon-asterisk"></span> After selecting the desired Date & Time, Please Fill up the textbox with the corresponding details that are being asked.</h4><br>

					<div class="form-group">
						<h4><span class="glyphicon glyphicon-user"></span>First Name</h4>
						 <input style="width: 75%;" type="text" id="fname" name="fname"  class="form-control" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{,30}$" required />		
					</div>

					<div class="form-group">
						<h4><span class="glyphicon glyphicon-user"></span>Last Name</h4>
						 <input style="width: 75%;" type="text" id="lname" name="lname"  class="form-control" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{,30}$" required />		
					</div>

					<div class="form-group">
						<h4><span class="glyphicon glyphicon-user"></span>Middle Name</h4>
						 <input style="width: 75%;" type="text" id="mname" name="mname"  class="form-control" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{,30}$" required />		
					</div>
					<div class="form-group">
						<h4><span class="glyphicon glyphicon-map-marker"></span>Address</h4>
						 <input style="width: 75%;" type="text" id="address" name="address"  class="form-control" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{,30}$" required />		
					</div>
					 <div class="form-group">
		                  <label for="contct"><span class="glyphicon glyphicon-phone"></span>Contact Number</label>
		                  <input type="number" style="width: 50%;" class="form-control"id="contact" name="contact" required="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  maxlength="11" min = "0">
                	</div>
                	<div class="form-group">
	                  <h4><span class="glyphicon glyphicon-calendar"></span> Birthdate</h4>
	                   <input type="date" class="form-control" style="width:50%;" id="BDAY" name = "birthday" onclick=" today_limitToday();" onblur="age_compute();">

	                   <h4><span class="glyphicon glyphicon-calendar"></span> Age</h4><small style="color: red;" >Your Age will be auto fill when you input your correct birthdate</small>
	                   <input type="number" style="width: 40%;" id="age" name="Age" min= "0" maxlength="3" class="form-control" readonly="" style="cursor: not-allowed;"> 
					</div>
					<div class="form-group">
		                <h4><span class="glyphicon glyphicon-user"></span>Sex</h4>
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
                	<button style="width: 50%;" type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-plus-sign"></span> Submit</button>
				</form>
			</div>
<!-- Personal Information Fill-Up ++++++++++++++++++++++++-->
		</div>
	</div>
</section>
<!-- Date Picker ++++++++++++++++++++++++++++++++++++++++ -->
			

<script type="text/javascript">
var $datePicker = $("div#datepicker");

// var $datePicker = $("div");

$datePicker.datepicker({
    changeMonth: true,
    changeYear: true,
    inline: true,
     dateFormat: 'yy-mm-dd',
    altField: "#datep",

 onSelect: function (date) {
        // alert(date);
        var x = document.getElementById("datesched");
        x.value = date;

 }
 
});
    
</script>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://dl.dropboxusercontent.com/u/86701580/mypersonalcdn/renda/renda-icon-font.css">
<!-- jQuery -->
<script src="http://thecodeplayer.com/u/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin for animation fun -->
<script src="http://thecodeplayer.com/u/js/jquery.easing.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="AppointmentOnline.css">


<script type="text/javascript">
//breakdown the labels into single character spans
$(".flp label").each(function(){
  var sop = '<span class="ch">'; //span opening
  var scl = '</span>'; //span closing
  //split the label into single letters and inject span tags around them
  $(this).html(sop + $(this).html().split("").join(scl+sop) + scl);
  //to prevent space-only spans from collapsing
  $(".ch:contains(' ')").html("&nbsp;");
})

var d;
//animation time
$(".flp input").focus(function(){
  //calculate movement for .ch = half of input height
  var tm = $(this).outerHeight()/2 *-1 + "px";
  //label = next sibling of input
  //to prevent multiple animation trigger by mistake we will use .stop() before animating any character and clear any animation queued by .delay()
  $(this).next().addClass("focussed").children().stop(true).each(function(i){
    d = i*50;//delay
    $(this).delay(d).animate({top: tm}, 200, 'easeOutBack');
  })
})
$(".flp input").blur(function(){
  //animate the label down if content of the input is empty
  if($(this).val() == "")
  {
    $(this).next().removeClass("focussed").children().stop(true).each(function(i){
      d = i*50;
      $(this).delay(d).animate({top: 0}, 500, 'easeInOutBack');
    })
  }
})


</script>


<script type="text/javascript">
  $(window).resize(function() {
  if ($(window).width() <= 600) {
    $('#prop-type-group').removeClass('btn-group');
    $('#prop-type-group').addClass('btn-group-vertical');
  } else {
    $('#prop-type-group').addClass('btn-group');
    $('#prop-type-group').removeClass('btn-group-vertical');
  }
});

</script>


</body>
</html>