<?php

include("CommonMethods.php");

class SearchingClass
{
    var $COMMON;
    var $DEBUG;

    function SearchingClass($debug) {
        $DEBUG = $debug;
        $COMMON = new Common($debug);
    }

    function searchFor($date, $times, $major, $individual)
    {
        if (!isset($date)) {
            echo("<script>alert('Search requires at least a date.')</script>");

            require("./footer.php");

            header("Location: findAppointment.php");
        }

        $date = $_GET['searchDate'];

        $query = "SELECT * FROM `Appointment` WHERE `Day` = '$date'";

        if (isset($_GET['searchTimes'])) {
            $clause = " WHERE ";
            foreach ($_GET['searchTimes'] as $time) {
                $query .= $clause . "`TimeSlot` = '$time'";
                $clause = " OR ";
            }
            $clause = " WHERE ";
        }

        if (isset($_GET['major'])) {
            $major = $_GET['major'];
            $query .= " WHERE `Major` = '$major''";
        }

        if (isset($_GET['individual'])) {
            $indv = $_GET['individual'];
            if ($indv == TRUE) {
                $query .= " WHERE `maxStudents` = 1";
            } else {
                $query .= " WHERE `maxStudents` > 1";
            }
        }

        $query .= " SORT BY `TimeSlot` ASC";
    }

}
?>

