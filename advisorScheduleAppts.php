<?php
	$title = "Schedule Appointment";
	require('./header.php');
?>
    <div id="login">
      <div id="form">
        <div class="top">
	<h1>Schedule Appointments</h1>
	<h2>Select advising type</h2><br>

	<!--select whether the appointment being created will be individual or group-->
	<form method="post" action="./scheduleIndividual.php">
	<div class="nextButton">
		<input type="submit" name="next" class="button large go" value="Individual" style="float: center;">
	</div>
	</form>

	<form method="post" action="./scheduleGroup.php">
	<div class="nextButton">
		<input type="submit" name="next" class="button large go" value="Group" style="float: center;">
	
	<!--advisor can also return to their homepage-->
	</div>
	</form><form method="link" action="advisorHome.php">
			<input type="submit" name="home" class="button large" value="Home">
		</form>
   	</div>
	</div>
		</div>

<?php
	require("./footer.php");
?>
