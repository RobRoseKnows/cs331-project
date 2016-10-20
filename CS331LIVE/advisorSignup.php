<?php

    $headerTitle = "Advisor Sign Up";
    require("header.php");
    include("CommonVariables.php");

?>

<form action='doAdvisorSignUp.php' method='post' name='advisorSignUp'>
    <label for='advEmail'>Email: </label>
    <input type='email' id='advEmail' pattern='<? echo $umbcEmailPattern; ?>' required placeholder='example@umbc.edu'> <br>
    
    <label for='advTitle'>Title: </label>
    <select name='advTitle'>
        <option value='dr'>Dr.</option>
        <option value='miss'>Miss.</option>
        <option value='mr'>Mr.</option>
        <option value='ms'>Ms.</option>
    </select> <br>

    <label for='advIdNum'>Id Number: </label>
    <input type='text' id='advIdNum' pattern='<? echo $umbcIdPattern;?>' required> <br>

    <label for='fName'>First Name: </label>
    <input type='text' id='fName'> <br>

    <label for='lName'>Last Name: </label>
    <input type='text' id='lName' required> <br>
   
    <label for='password'>Password: </label>
    <input type='password' id='password' required> <br>

    <label for='rePassword'>Retype Password: </label>
    <input type='password' id='rePassword' required> <br>

</form>

<?php 
    require('footer.php');
?>
