<?php
	$title = "Student Home";
	require('./header.php');
?>
	<div class="container main">
	<div id="nav">
		<form action="redirects/redirectStudentHomepage.php" method="post" name="Home">
		<?php

			//options the student has from their homepage
			echo "<button type='submit' name='selection' class='button main selection' value='View'>View my appointment</button><br>";
			echo "<button type='submit' name='selection' class='button main selection' value='Reschedule'>Reschedule my appointment</button><br>";
			echo "<button type='submit' name='selection' class='button main selection' value='Cancel'>Cancel my appointment</button><br>";
			echo "<button type='submit' name='selection' class='button main selection' value='Search'>Search for appointment</button><br>";
			echo "<button type='submit' name='selection' class='button main selection' value='Edit'>Edit student information</button><br>";
		?>
		</form>
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
