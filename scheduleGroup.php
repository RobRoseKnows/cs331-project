<?php
  $title = "Schedule Group";
  require("./header.php");
?>
    <div id="login">
      <div id="form">
        <div class="top">
		<h1>Schedule Group Appointments</h1>

        <form action="processGroupApp.php" method="post" name="Confirm">
	    <div class="field">
	      <label for="Date">Date</label>


	      <input id="Date" type="date" name="Date" placeholder="mm/dd/yyyy" min="2016-10-15" max="2017-6-30" required autofocus> (mm/dd/yyyy)
	    </div>

      <div class="field">
        <label for="Time">Times</label><br>

	<!--all possible time slots-->
        <input type="checkbox" name="time[]" value="08:00:00"> 8:00AM - 8:30AM <br>
        <input type="checkbox" name="time[]" value="08:30:00"> 8:30AM - 9:00AM <br>
        <input type="checkbox" name="time[]" value="09:00:00"> 9:00AM - 9:30AM <br>
        <input type="checkbox" name="time[]" value="09:30:00"> 9:30AM - 10:00AM <br>
        <input type="checkbox" name="time[]" value="10:00:00"> 10:00AM - 10:30AM <br>
        <input type="checkbox" name="time[]" value="10:30:00"> 10:30AM - 11:00AM <br> 
        <input type="checkbox" name="time[]" value="11:00:00"> 11:00AM - 11:30AM <br>
        <input type="checkbox" name="time[]" value="11:30:00"> 11:30AM - 12:00PM <br>
        <input type="checkbox" name="time[]" value="12:00:00"> 12:00PM - 12:30PM <br>
        <input type="checkbox" name="time[]" value="12:30:00"> 12:30PM - 1:00PM <br>
        <input type="checkbox" name="time[]" value="13:00:00"> 1:00PM - 1:30PM <br>
        <input type="checkbox" name="time[]" value="13:30:00"> 1:30PM - 2:00PM <br>
        <input type="checkbox" name="time[]" value="14:00:00"> 2:00PM - 2:30PM <br>
        <input type="checkbox" name="time[]" value="14:30:00"> 2:30PM - 3:00PM <br>
        <input type="checkbox" name="time[]" value="15:00:00"> 3:00PM - 3:30PM <br>
        <input type="checkbox" name="time[]" value="15:30:00"> 3:30PM - 4:00PM <br>
       
      </div>

      <div class="field">
	<!--Major lists-->
        <label for="Majors">Majors</label>
          <br><input type="checkbox" name="major[]" value="Biological Sciences BA" >Biological Sciences BA<br>
          <input type="checkbox" name="major[]" value="Biological Sciences BS" >Biological Sciences BS<br>
          <input type="checkbox" name="major[]" value="Biochemistry & Molecular Biology BS" >Biochemistry & Molecular Biology BS<br>
          <input type="checkbox" name="major[]" value="Bioinformatics & Computational Biology BS" >Bioinformatics & Computational Biology BS<br>

          <input type="checkbox" name="major[]" value="Biology Education BA" >Biology Education BA<br>
          <input type="checkbox" name="major[]" value="Chemistry BA" >Chemistry BA<br>
          <input type="checkbox" name="major[]" value="Chemistry BS" >Chemistry BS<br>
          <input type="checkbox" name="major[]" value="Chemistry Education BA checked>Chemistry Education BA<br><br>




      </div>

        <div class="field">
	<!--repeat amounts-->
            <label for="Repeat">Repeat Weekly</label>
            <input type="checkbox" name="repeat[]" value="Monday">Monday
            <input type="checkbox" name="repeat[]" value="Tuesday">Tuesday
            <input type="checkbox" name="repeat[]" value="Wednesday">Wednesday
            <input type="checkbox" name="repeat[]" value="Thursday">Thursday
            <input type="checkbox" name="repeat[]" value="Friday">Friday
        </div>


	<div class="field">
        	<h3>Student limit: 
        	<input type="number" id="stepper1" name="stepper1" min="1" max="10" value="10" /></h3>
        </div>

	<div class="nextButton">
		<input type="submit" name="next" class="button large go" value="Create">
	</div>
	</div>
	</form>
		<form method="link" action="advisorHome.php" name="home">
			<input type="submit" name="next" class="button large" value="Return to Home">
		</form>
<?php
  require("./footer.php");
?>
