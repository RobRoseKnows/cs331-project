<?php 

class Common
{	
	var $conn;
	var $debug;
			
	function Common($debug)
	{
		$this->debug = $debug; 
		$rs = $this->connect("she3"); // db name really here
		return $rs;
	}

// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */
	
	function connect($db)// connect to MySQL
	{
		$conn = @mysql_connect("studentdb-maria.gl.umbc.edu", "she3", "she3") or die("Could not connect to MySQL");
		$rs = @mysql_select_db($db, $conn) or die("Could not connect select $db database");
		$this->conn = $conn; 
	}

// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */
	
	function executeQuery($sql, $filename) // execute query
	{
		if($this->debug == true) { echo("$sql <br>\n"); }
		$escaped = mysql_real_escape_string($sql);
		$rs = mysql_query($escaped, $this->conn) or die("Could not execute query '$sql' in $filename");
		return $rs;
	}			

	function isStudent($sid) {
        $sql = "select * from `Student Data` WHERE `StudentID` = $sid";
        $rs = $this->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);

        if(mysql_num_rows($rs) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function isAdvisor($sid) {
        $sql = "select * from `Student Data` WHERE `StudentID` = $sid";
        $rs = $this->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);

        if(mysql_num_rows($rs) == 1) {
            return true;
        } else {
            return false;
        }
    }

    function isCorrectPassword($sid, $password, $forStudent) {
        if($forStudent) {
            $sql = "SELECT * FROM `Student Data` WHERE `StudentID` = '$sid' AND `Password` = '" . md5($password) . "'";

            $rs = $this->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
            $num_rows = mysql_num_rows($rs);

            if($num_rows == 1) return true;
            else return false;
        } else {
            $sql = "SELECT * FROM `Student Data` WHERE `StudentID` = '$sid' AND `Password` = '" . md5($password) . "'";

            $rs = $this->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
            $num_rows = mysql_num_rows($rs);
            if($num_rows == 1) return true;
            else return false;
        }
    }

} // ends class, NEEDED!!

?>