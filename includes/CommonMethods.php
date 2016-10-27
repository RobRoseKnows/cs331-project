<?php

include("QueryRunner.php");

class CommonMethods
{
	var $RUNNER;
	var $debug;

	function CommonMethods($debug)
	{
	    $this->RUNNER = new QueryRunner($debug);
		$this->debug = $debug;
		return $this;
	}



	function isStudent($sid) {
        $sql = "select * from `Student Data` WHERE `StudentID` = $sid";
        $rs = $this->RUNNER->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);

        if(mysql_num_rows($rs) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function isAdvisor($sid) {
        $sql = "select * from `Student Data` WHERE `StudentID` = $sid";
        $rs = $this->RUNNER->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);

        if(mysql_num_rows($rs) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function isAppointment($aid) {
        $sql = "SELECT * FROM `Appoinment` WHERE `ID` = $aid";
        $rs = $this->RUNNER->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);

        if (mysql_num_rows($rs) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function isCorrectPassword($sid, $password, $forStudent) {
        $truePassword = md5($password);
        if($forStudent) {
            $sql = "SELECT * FROM `Student Data` WHERE `StudentID` = '$sid' AND `Password` = '$truePassword'";

            $rs = $this->RUNNER->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
            $num_rows = mysql_num_rows($rs);

            if($num_rows == 1) return true;
            else return false;
        } else {
            $sql = "SELECT * FROM `Advisor Data` WHERE `StudentID` = '$sid' AND `Password` = 'md5($password)'";

            $rs = $this->RUNNER->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
            $num_rows = mysql_num_rows($rs);
            if($num_rows == 1) return true;
            else return false;
        }
    }

} // ends class, NEEDED!!

?>