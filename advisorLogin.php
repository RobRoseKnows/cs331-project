<?php

include('CommonMethods.php');
$debug = true;
$COMMON = new Common($debug);

$UserID = ($_POST['UserID']);
$Fname = ($_POST['Fname']);
$Lname = ($_POST['Lname']);
$Password = ($_POST['Password']);
$Office = ($_POST['Office']);

$sql = "insert into `Advisor Data` (`ID`, `StudentID`, `FirstName`, `LastName`,\
 `Password`, `Office`) values (NULL, '$UserID', '$Fname', '$Lname', '$Password'\
,'$Office')";

$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);


?>
