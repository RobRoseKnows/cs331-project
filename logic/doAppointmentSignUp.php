<?php

session_start();
include('../includes/CommonMethods.php');
$debug = true;
$COMMON = new Common($debug);

//store both the id number and password given
$studIdNum = ($_SESSION["SIDNumber"]);
$advIdNum = ($_SESSION["ADVIDNumber"]);


if($_POST["next"] == "Sign Up") {
//if only one match, password correct
    if ($COMMON->isStudent($studIdNum)) {

        $apptId = $_POST["appointment"];

        if($COMMON->isAppointment($apptId)) {
            $checkCurrentApptQuery = "SELECT * FROM `Student Data` WHERE `ApptNum` != NULL AND `StudentID` = $studIdNum";
            $checkCurrentResult = $COMMON->executeQuery($checkCurrentApptQuery, $_SERVER["SCRIPT_NAME"]);

            if(mysql_num_rows($checkCurrentResult) > 0) {
                // Get rid of that user in the appointment they're already in.
                $removeStudentFromAppointment =
                    "UPDATE `Appointment` SET `listOfStudents` = REPLACE(`listOfStudents`, ',$studIdNum', '')"
                    ." WHERE INSTR(`listOfStudents`, ',$studIdNum') > 0";
                $COMMON->executeQuery($removeStudentFromAppointment, $_SERVER["SCRIPT_NAME"]);
            }

            $addStudentQuery =
                "UPDATE `Appointment` SET `listOfStudents` ="
                ." ( CASE WHEN `listOfStudents`=''"
                ." THEN $studIdNum"
                ." ELSE concat(`listOfStudents`,',$studIdNum' ) END )"
                ." AND `numStudents` = `numSudents` + 1";

            $COMMON->executeQuery($addStudentQuery, $_SERVER["SCRIPT_NAME"]);

        } else {
            header('Location: findAppointment.php');
        }

    } //otherwise, password is incorrect, route user back to login screen
    else {
        header('Location: studentLogin.php');
    }

} else if($_POST["next"] == "Delete Appointment") {
    if($COMMON->isAdvisor($advIdNum)) {
        $apptId = $_POST["appointment"];

        if($COMMON->isAppointment($apptId)) {
            $dropQuery = "DELETE FROM `Appointment` WHERE `ID` = $apptId";
            $COMMON->executeQuery($dropQuery, $_SERVER["SCRIPT_NAME"]);

            $removeAppointment = "UPDATE `Student Data` SET `ApptNum` = NULL WHERE `ApptNum` = $apptId";
            $COMMON->executeQuery($removeAppointment, $_SERVER["SCRIPT_NAME"]);

            header('advisorHome.php');
        } else {
            header('Location: findAppointment.php');
        }
    } else {
        header('Location: advisorLogin.php');
    }
} else {
    header('Location: findAppointment.php');
}

?>
