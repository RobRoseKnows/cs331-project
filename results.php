<?php

$title="Appointment Search Results";
$debug=false;
require("./header.php");
require("includes/ResultsQuery.php");


if(isset($_GET['datePicker'])) {
    $SEARCH = new SearchingClass($debug);
    $dict = $_GET;
    $result = $SEARCH->searchFor($dict);

    if($result->num_rows)

    ?>

    <?php
} else {
    echo("<h1>Search requires a date at minimum.</h1>");
}

require("./footer.php");

?>
