<?php
	$title = "Student Home";
	require('./header.php');
?>
	<div class="container main">
	<div id="nav">
		<nav class="action-options">
			<a href="editStudentInfo.php">Edit Student Info</a>
			<a href="studentCancel.php">Cancel Appointment</a>
			<a href="findAppointment.php">Search for an appointment</a>
		</nav>
	</div>
	<div id="section">
		

		<!--welcome message to user-->
		<h1><?php echo "Welcome, {$_SESSION['SIDNumber']}!";  ?> </h1>

	</div>
	</div>
	</div>
	<?php
		require('./footer.php');
	?>
