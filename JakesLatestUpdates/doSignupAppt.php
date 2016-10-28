<?php
session_start();

$debug = false;
include('./CommonMethods.php');
$COMMON = new Common($debug);
$apptID = $_POST['apptNum'];
$SID = $_SESSION['SIDNumber'];

$sql = "select * from `Appointment` where `ID` = $apptID";
$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
$row = mysql_fetch_array($rs)

$sql2 = "select * from `Student Data` where `StudentID` = $SID";
$rs2 = $COMMON->executeQuery($sql2, $_SERVER["SCRIPT_NAME"]);
$row2 = mysql_fetch_array($rs2)

if($row2[5]!= NULL)
{
	$_SESSION['badSignup'] = TRUE;
}
else
{
	//determine if you can actually sign up for that appt, major check can be added in later revision
	if($row[5]<$row[6])
	{
		//schedule appt
		$sql3 = "update `Student Data` set `numStudents` = '$row[5]+1', `listOfStudents`= '$row[7].=$SID' where `ID` = '$apptID'";
		$rs3 = $COMMON->executeQuery($sql3, $_SERVER["SCRIPT_NAME"]);

	}
	else
	{
		$_SESSION['badSignup'] = TRUE;
	}
}





?>