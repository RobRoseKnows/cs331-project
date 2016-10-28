<?php
$title = "Appointment Search";
require("./header.php");
$datePattern = '^(0[1-9]|1[012])[ .-/](0[1-9]|[12][0-9]|3[01])[-](19|20)\d\d';

?>

  <form action='results.php' method='post' name='appointmentSearch'>
   
    <!-- Type, Location, Time, Day, Major -->
    <h1>Search for an appointment</h1>

    <label for='datePicker'>Date: </label>
    <input type='date' id='datePicker' name='datePicker' pattern=<?php echo("'$datePattern'"); ?> required placeholder='10/21/2015'> <br>

    <div>
      <h2>Time: </h2>
      <?php include("includes/static/timeCheckboxes.php"); ?>
    </div>

    <div>
      <h2>Major: </h2>
      <?php include("includes/static/majorsSelect.php"); ?>
    </div>

    <!-- Need: datePicker, individual, times, major, onlyOpen-->
    <label><input type="checkbox" id="onlyOpen" name="onlyOpen" value = "open"> Show me only open sessions</label><br>

    <label><input type="checkbox" id="individual" name="individual" value = "ind"> Show me individual sessions only</label><br>

    <input type='submit'>

</div>
  </form>

	<?php
	if(isset($_SESSION['ADVIDNumber']))
	{?>
			    <div class="finishButton">
			<button onclick="location.href = 'advisorHome.php'" class="button large go" >Return to Home</button>
	    </div>
		
	<?php}
	else
	{?>
			    <div class="finishButton">
			<button onclick="location.href = 'studentHome.php'" class="button large go" >Return to Home</button>
	    </div>
		
	<?php
	}
	?>


<?php
require("./footer.php");
?>