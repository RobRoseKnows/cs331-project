<?php
$title = "Schedule Group";
require("./header.php");
?>
<div id="login">
    <div id="form">
        <div class="top">
            <h1>Schedule Group Appointments</h1>

            <form action="processGroupApp.php" method="post" name="Confirm">
                <div class="field">
                    <label for="Date">Date</label>


                    <input id="Date" type="date" name="Date" placeholder="mm/dd/yyyy" min="2016-10-15" max="2017-6-30" required autofocus> (mm/dd/yyyy) <br>


                    <div class="field">

                        <?php include("includes/timeDropDown.php"); // This is so we can keep all of the drop down values coordinated.?>

                    </div>

                    <div class="field">

                        <?php include("includes/majorsDropDown.php"); // This keeps all the dropdown values coordinated ?>

                    </div>

                    <div class="field">
                        <!--repeat amounts-->
                        <label><input type="checkbox" name="repeat[]" value="Monday">Monday</label>
                        <labeL><input type="checkbox" name="repeat[]" value="Tuesday">Tuesday</label>
                        <labeL><input type="checkbox" name="repeat[]" value="Wednesday">Wednesday</label>
                        <labeL><input type="checkbox" name="repeat[]" value="Thursday">Thursday</label>
                        <labeL><input type="checkbox" name="repeat[]" value="Friday">Friday</label>
                    </div>


                    <div class="field">
                        <h3>Student limit:
                            <input type="number" id="stepper1" name="stepper1" min="1" max="10" value="10" /></h3>
                    </div>

                    <div class="nextButton">
                        <input type="submit" name="next" class="button large go" value="Create">
                    </div>
            </form>

        </div>
    </div>
    <form method="link" action="advisorHome.php" name="home">
        <input type="submit" name="next" class="button large" value="Return to Home">
    </form>
    <?php
    require("./footer.php");
    ?>
