<?php

include('CommonMethods.php');
$debug = true;
$COMMON = new Common($debug);


$date = ($_POST['date']);

foreach($_POST['time'] as $time){

  foreach($_POST['major'] as $major){

    $sql = "insert into `Appointment` (`ID`, `Location`, `TimeSlot`, `Day`, `Major`, `numStudents`, `maxStudents`, `listOfStudents`) values (NULL, '$location', '$time', '$day','$major', 0 , '$maxStudents')";

  }
}

$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);


?>
