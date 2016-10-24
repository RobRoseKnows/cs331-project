<?php

include_once("../includes/CommonMethods.php");

class SearchingClass
{
    protected $COMMON;
    protected $DEBUG;

    function SearchingClass($debug) {
        $this->DEBUG = $debug;
        $this->COMMON = new Common($debug);
    }

    function searchFor($date, $times, $major, $individual)
    {
        if (!isset($date)) {
            header("Location: findAppointment.php");
            return null;
        } else {

            $query = "SELECT * FROM `Appointment` WHERE `Day` = '$date'";

            if (isset($times)) {
                $clause = " WHERE ";
                foreach ($times as $time) {
                    $query .= $clause . "`TimeSlot` = '$time'";
                    $clause = " OR ";
                }
                $clause = " WHERE ";
            }

            if (isset($major)) {
                $query .= " WHERE `Major` = '$major''";
            }

            if (isset($individual)) {
                if ($individual == "true") {
                    $query .= " WHERE `maxStudents` = 1";
                } else {
                    $query .= " WHERE `maxStudents` > 1";
                }
            }

            $query .= " SORT BY `TimeSlot` ASC";
            return $this->COMMON->executeQuery($query, $_SERVER["SCRIPT_NAME"]);
        }
    }

    function echoItem($appointmentId) {

    }
}
?>

