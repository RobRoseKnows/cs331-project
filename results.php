<?php

$title="Appointment Search Results";
$debug=false;
require("./header.php");
require("includes/ResultsQuery.php");


if(isset($_GET['datePicker'])) {
    $SEARCH = new SearchingClass($debug);
    $dict = $_GET;
    $result = $SEARCH->searchFor($dict);

    echo("<h1>Search Results</h1>");
    echo("<h2>".$SEARCH->echoTerms($dict)."</h2>");

    if($result->num_rows > 0) {
        ?>
        <h3>Results:</h3>
        <form action="logic/doAppointmentSignUp.php" method="post" name="appointmentSignUp">

            <?php

            foreach ($result as $row) {
                echo($SEARCH->lineForRow($row));
            }

            ?>

            <input type="submit" name="submit" value="submit">

        </form>

        <?php

    } else {
        ?>
            <h3>No results found.</h3>
        <?php
    }
} else {
    echo("<h1>Search requires a date at minimum.</h1>");
}

require("./footer.php");

?>
