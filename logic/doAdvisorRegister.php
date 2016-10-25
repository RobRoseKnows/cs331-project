<?php

include('../includes/CommonMethods.php');
$debug = true;
$COMMON = new Common($debug);

if($COMMON->isAdvisor($_SESSION["ADVIDNumber"])) {
//if the passwords given both match, create a new advisor
  if (($_POST['password']) == ($_POST['rePassword'])) {

    $advIdNum = ($_POST['advIdNum']);
    $fName = ($_POST['fName']);
    $lName = ($_POST['lName']);
    $password = ($_POST['password']);
    $office = ($_POST['office']);

    $checkQuery = "SELECT * FROM `Advisor Data` WHERE `StudentID` = '$advIdNum'";
    $checkResults = $COMMON->executeQuery($checkQuery, $_SERVER["SCRIPT_NAME"]);

    if ($checkResults->num_rows > 0) {
      header('Location: advisorRegister.php');
    } else {
      $sql = "insert into `Advisor Data` (`ID`, `StudentID`, `FirstName`, `LastName`,`Password`, `Office`) values (NULL, '$advIdNum', '$fName', '$lName','" . md5($password) . "','$office')";

      $rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
      header('Location: index.php');
    }
  } //otherwise, the passwords do not match and the user must be re-prompted
  else {

    header('Location: advisorRegister.php');

  }

} else {

  echo("Only advisors may register advisors.");
  header('Location: advisorLogin.php');
}
?>
