<?php
	$title = "Advisor Home";
	include('header.php');
?>

	<div class="container main">
	<div id="nav">
		<form action="redirects/redirectAdvisorHomepage.php" method="post" name="Home">
	  
			<!--options for advisor, will route to other pages-->
			<input type="submit" name="next" class="button main selection" value="Schedule appointments"><br>
			<input type="submit" name="next" class="button main selection" value="Print schedule for a day"><br>
			<input type="submit" name="next" class="button main selection" value="Edit appointments"><br>
			<input type="submit" name="next" class="button main selection" value="Search for an appointment"><br>
			<input type="submit" name="next" class="button main selection" value="Create new Advisor Account"><br>
		
		</form>
	</div>
	<div id="section">
		<h1><?php echo "Welcome, {$_SESSION['ADVIDNumber']}!";  ?> </h1>

	</div>
	</div>

<?php
	include("./footer.php");
?>





