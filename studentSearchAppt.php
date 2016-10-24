<?php
require("./header.php");

$COMMON = new Common($debug);
?>
    <div id="login">
      <div id="form">
        <div class="top">
		<h1>Search for Appointments</h1>
	    <div class="field">
		<form action="./apptSearchResults.php" method="post" name="SearchApp">
			<label for="date">Date</label>
	      	<input id="date" type="date" name="date" placeholder="mm/dd/yyyy" autofocus> (mm/dd/yyyy)
			
			<!--ALL Possible appointments and table values from available appts-->

			<?php include("includes/static/timeCheckboxes.php"); ?>

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

<?php
	require("./footer.php");
?>