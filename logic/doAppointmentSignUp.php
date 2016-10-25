<?php

session_start();
include('../includes/CommonMethods.php');
$debug = true;
$COMMON = new Common($debug);

//store both the id number and password given
$studIdNum = ($_POST['studIdNum']);
$password = ($_POST['password']);

$sql = "SELECT * FROM `Student Data` WHERE `StudentID` = '$studIdNum' AND `Password` = '".md5($studIdNum)."'";

//determine how many matches the password has for that ID in the database
$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
$num_rows = mysql_num_rows($rs);

//if only one match, password correct
if($num_rows == 1){

  $apptId = $_POST["appointment"];

  $appointmentQuery = "SELECT * FROM `Appoinment` WHERE `ID` = '$apptId'";
  $appointmentResult = $COMMON->executeQuery($appointmentQuery, $_SERVER["SCRIPT_NAME"]);

  if(mysql_num_rows($appointmentResult) == 1) {

  }
}

//otherwise, password is incorrect, route user back to login screen
else{

  header('Location: studentLogin.php');
}


?>
