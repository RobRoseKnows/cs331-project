<?php
session_start();
$debug = false;
include('./CommonMethods.php');
$COMMON = new Common($debug);
?>

<html lang="en">
<!-- basic layout-->
  <head>
    <meta charset="UTF-8" />
    <title>Search for Appointment</title>
        	<link rel='stylesheet' type='text/css' href='standard.css'/>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
		<h1>Search for Appointments</h1>
	    <div class="field">
		<form action="apptSearchResults.php" method="post" name="SearchApp">
			<label for="date">Date</label>
	      	<input id="date" type="date" name="date" placeholder="mm/dd/yyyy" autofocus> (mm/dd/yyyy)
			
			<!--ALL Possible appointments and table values from available appts-->
			<label for="time">Time</label><span style="font-size: 14px; font-family: Arial, Helvetica, sans-serif;">
			<br>
			<input type="checkbox" name="time[]" value="9:00:00"> 9:00am - 9:30am<br>
			<input type="checkbox" name="time[]" value="9:30:00"> 9:30am - 10:00am<br>
			<input type="checkbox" name="time[]" value="10:00:00"> 10:00am - 10:30am<br>
			<input type="checkbox" name="time[]" value="10:30:00"> 10:30am - 11:00am<br>
			<input type="checkbox" name="time[]" value="11:00:00"> 11:00am - 11:30am<br>
			<input type="checkbox" name="time[]" value="11:30:00"> 11:30am - 12:00pm<br>
			<input type="checkbox" name="time[]" value="12:00:00"> 12:00pm - 12:30pm<br>
			<input type="checkbox" name="time[]" value="12:30:00"> 12:30pm - 1:00pm<br>
			<input type="checkbox" name="time[]" value="13:00:00"> 1:00pm - 1:30pm<br>
			<input type="checkbox" name="time[]" value="13:30:00"> 1:30pm - 2:00pm<br>
			<input type="checkbox" name="time[]" value="14:00:00"> 2:00pm - 2:30pm<br>
			<input type="checkbox" name="time[]" value="14:30:00"> 2:30pm - 3:00pm<br>
			<input type="checkbox" name="time[]" value="15:00:00"> 3:00pm - 3:30pm<br>
			<input type="checkbox" name="time[]" value="15:30:00"> 3:30pm - 4:00pm<br></span>

			<!--advisor info-->
			<label for="advisor">Advisor</label>
	      	<select id="advisor" name="advisor">
				<option value="">All appointments</option>
				<option value="I">Individual appointments</option>
				<option value="0">Group appointments</option>

			</select>
        </div>
	<!--all the buttons-->
	    <div class="nextButton">
			<input type="submit" name="go" class="button large go" value="Go">


	    </div>
		</div>
		</form>

			<form action="studentHome.php" method="post" name="home">
			<input type="submit" name="return" class="button large go" value="Return to Home">
			</form>

		
  </body>
</html>