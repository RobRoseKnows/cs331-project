<?php
  $title = "Appointment Sign Up";
  require("./header.php");
?>

<form action='logic/doAppointmentSignUp.php' method='post' name='appointmentSignUp'>
<!-- Type, Location, Time, Day, Major -->

  <label for='datePicker'>Lookup Date: </label>
  <input type='text' id='datePicker' name='datePicker' pattern='^(0[1-9]|1[012])[-](0[1-9]|[12][0-9]|3[01])[-](19|20)\d\d' required placeholder='10/21/2015'> <br>
  
  <input type='submit'>
</form>
<?php
  require("./footer.php");
?>
