<?php

include('CommonMethods.php');
$debug = true;
$COMMON = new Common($debug);

$UserID = ($_POST['UserID']);
$Fname = ($_POST['Fname']);
$Lname = ($_POST['Lname']);
$Password = ($_POST['Password']);
$MajorSelection = ($_POST['majorSelection']);

$sql = "insert into `Proj1: Student Data` (`ID`, `StudentID`, `FirstName`, `LastName`, `Password`, `Appt\
Num`,`Major`) values (NULL, '$UserID', '$Fname', '$Lname', '$Password', NULL, '$MajorSelection')";

$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);


?>
