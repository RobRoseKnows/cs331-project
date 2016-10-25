<?php
$title = "Edit Student";
require("header.php");

$debug = true;
$COMMON = new Common($debug);

$sql = "select * from `Student Data`";
$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);

//Fetch student info
while($row = mysql_fetch_row($rs)){
    if($row["StudentID"] == $_SESSION["SIDNumber"]){

        $_SESSION["firstName"] = $row["FirstName"];
        $_SESSION["lastName"] = $row["LastName"];
        $_SESSION["major"] = $row["Major"];
        $_SESSION["studEmail"]=$row["Email"];
        $_SESSION["SIDNumber"]=$row["StudentID"];
    }
}

?>
<body>
<div id="login">
    <div id="form">
        <!--Displays previously parsed information-->
        <div class="top">
            <h2>Edit Student Information<span class="login-create"></span></h2>
            <form action="logic/processStudentEdit.php" method="post" name="Edit">
                <div class="field">
                    <label for="firstName">First Name</label>
                    <input id="firstName" size="30" maxlength="50" type="text" name="firstName" required value='<?php echo $_SESSION["firstName"];?>'>
                </div>
                <div class="field">
                    <label for="lastName">Last Name</label>
                    <input id="lastName" size="30" maxlength="50" type="text" name="lastName" required value='<?php echo $_SESSION["lastName"];?>'>
                </div>
                <div class="field">
                    <label for="studEmail">E-mail</label>
                    <input id="studEmail" size="30" maxlength="255" type="text" name="studEmail" required value='<?php echo $_SESSION["studEmail"];?>' pattern=<?php echo("'$umbcIdPattern'"); ?>>
                </div>
                <div class="field">
                    <label for="major">Major</label>
                    <?php include("includes/static/majorsSelect.php"); ?>
                </div>
                <div class="nextButton">
                    <input type="submit" name="save" class="button large go" value="Save">
                </div>
            </form>
        </div>

</body>

</html>
