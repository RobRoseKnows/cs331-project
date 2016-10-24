<?php
$title = "Advisor Sign Up";
require("header.php");
?>

<form action='logic/doAdvisorSignUp.php' method='post' name='advisorSignUp'>
    <label for='advEmail'>Email: </label>
    <input type='email' id='advEmail' pattern=<?php echo("'$umbcEmailPattern'"); ?> required placeholder='example@umbc.edu'> <br>

  <label for='advTitle'>Title: </label>
    <select name='advTitle'>
        <option value='dr'>Dr.</option>
        <option value='miss'>Miss.</option>
        <option value='mr'>Mr.</option>
        <option value='ms'>Ms.</option>
    </select> <br>

  <label for='advIdNum'>Id Number: </label>
    <input type='text' id='advIdNum' name='advIdNum' pattern=<?php echo("'$umbcIdPattern'"); ?> required> <br>

  <label for='fName'>First Name: </label>
    <input type='text' id='fName' name='fName' required> <br>

  <label for='lName'>Last Name: </label>
    <input type='text' id='lName' name='lName' required> <br>

  <label for='office'>Office: </label>
    <input type='text' id='office' name='office' required> <br>

  <label for='password'>Password: </label>
    <input type='password' id='password' name='password' required> <br>

  <label for='rePassword'>Retype Password: </label>
    <input type='password' id='rePassword' name='rePassword' required> <br>

  <input type='submit'>

</form>

<?php
  require('footer.php');
?>