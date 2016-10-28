<?php
session_start();
$debug = false;
include('./CommonMethods.php');
$COMMON = new Common($debug);

?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>View Appointment</title>
	<link rel='stylesheet' type='text/css' href='standard.css'/>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
		<h1>View Appointment</h1>
	    <div class="field">
	    <?php
			$studentID = ($_SESSION['SIDNumber']);

			//grabs appointment based on student ID
			$sql = "select * from `Appointment` where `listOfStudents` like '%$studentID%'";
			$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
			$num_rows = mysql_num_rows($rs);

			if($num_rows > 0)
			{
				$row = mysql_fetch_row($rs); // get legit data
				$numStudents = $row[5];
				$advisorID = $row[8];				

				if($numStudents == 1){
					$sql2 = "select * from `Advisor Data` where `StudentID` = '$advisorID'";
					$rs2 = $COMMON->executeQuery($sql2, $_SERVER["SCRIPT_NAME"]);
					$row2 = mysql_fetch_row($rs2);
					$advisorName = $row2[2] . " " . $row2[3];
					$location = $row2[1];

				}
				else
				{
					$advisorname = "Group";
				}
			
				$date = $row[3];
				$time = $row[2];
				echo "<label for='info'>";
				echo "Advisor: ", $advisorName, "<br>";
				echo "Appointment: ", $date, "<br>Time: ", $time , "<br>";
				echo "Location: ", $location , "</label>";

			}
			else // something is up, and there DB table needs to be fixed
			{
				echo("No appointment, if you scheduled please reschedule or contact your advisor");
				$sql = "update `Student Data` set `ApptNum` = NULL where `StudentID` = '$studentID'";
				$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
			}
	

		?>
        </div>
	    <div class="finishButton">
			<button onclick="location.href = 'studentHome.php'" class="button large go" >Return to Home</button>
	    </div>
		</div>
		</form>
  </body>
</html>