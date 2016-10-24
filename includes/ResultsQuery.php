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

    function searchFor($dict)
    {

        if (!isset($dict["datePicker"])) {
            header("Location: findAppointment.php");
            return null;
        } else {
            $date = $dict["datePicker"];

            $query = "SELECT * FROM `Appointment` WHERE (`Day` = '$date'";

            $clause = ") AND ( WHERE ";

            if (isset($dict["time"])) {
                $times = $dict["time"];

                foreach ($times as $time) {
                    $query .= $clause . "`TimeSlot` = '$time'";
                    $clause = " OR ";
                }

                $clause = " ) AND ( WHERE ";
            }

            if (isset($dict["major"])) {
                $major = $dict["major"];

                $query .= $clause." `Major` LIKE '%$major%'";
            }

            if (isset($dict["individual"])) {
                $query .= $clause." `maxStudents` = 1";
            } else {
                $query .= $clause . " `maxStudents` > 1";
            }

            if(isset($dict["onlyOpen"])) {
                $query .= $clause." `numStudents` < `maxStudents`";
            }

            $query .= " ) SORT BY `TimeSlot` ASC";
            return $this->COMMON->executeQuery($query, $_SERVER["SCRIPT_NAME"]);
        }
    }

    function lineForRow($row) {
        $apptId = $row["ID"];
        $location = $row["Location"];
        $timeSlot = $row["TimeSlot"];

        $numStudents = $row["numStudents"];
        $maxStudents = $row["maxStudents"];
        $slotsLeft = $maxStudents-$numStudents;

        $nameIdInput = "appt-option-$apptId";

        // If there are no slots left in an advising session, disable this option.
        $inputTag = "";
        if ($slotsLeft > 0) {
            $inputTag = "<input type='radio' name='$nameIdInput' id='$nameIdInput' value='$apptId'>";
        } else {
            $inputTag = "<input type='radio' name='$nameIdInput' id='$nameIdInput' value='$apptId' disabled>";
        }

        $labelOpenTag = "<label for='$nameIdInput'>";

        $label = "Time: $timeSlot - Location: $location";

        if($slotsLeft > 0) {
            $label .= " - $slotsLeft out of $maxStudents slots open.";
        } else {
            $label .= " - FULL";
        }

        $labelCloseTag = "</label>";
        $lineEnd = "<br>";

        // This puts all of the elements together and then returns it as a string.
        $finalOutput = $inputTag."".$labelOpenTag."".$label."".$labelCloseTag."".$lineEnd;
        return $finalOutput;
    }
}
?>

