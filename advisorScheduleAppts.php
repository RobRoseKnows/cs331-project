<?php
	$title = "Schedule Appointment";
	require('./header.php');
?>

  <body>
    <div id="login">
      <div id="form">
        <div class="top">
	<h1>Schedule Appointments</h1>
	<h2>Select advising type</h2><br>

	<form method="post" action="./scheduleIndividual.php">
	<div class="nextButton">
		<input type="submit" name="next" class="button large go" value="Individual" style="float: center;">
	</div>
	</form>

	<form method="post" action="./scheduleGroup.php">
	<div class="nextButton">
		<input type="submit" name="next" class="button large go" value="Group" style="float: center;">
	</div>
	</form>



        </div>
	</div>
		</form>
		<form method="link" action="advisorHome.php">
		<input type="submit" name="home" class="button large" value="Home">
		</form>
   	</div>
	</div>

<?php
	require("./footer.php");
?>