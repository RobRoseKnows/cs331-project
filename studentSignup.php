<?php
$headerTitle = "Student Sign Up";
require("header.php");
include("CommonVariables.php");
?>

<form action='doStudentSignUp.php' method='post' name='studentSignUp'>
    <label for='studEmail'>Email: </label>
    <input type='email' id='studEmail' pattern='[A-Za-z0-9._+-]+@[A-Za-z0-9._-]*umbc.edu' required placeholder='example@umbc.edu'> <br>

  <label for='studIdNum'>Student Id Number: </label>
    <input type='text' id='studIdNum' name='studIdNum' pattern='[A-Z]{2}[0-9]{5}' required placeholder='AB12345'> <br>

  <label for='fName'>First Name: </label>
    <input type='text' id='fName' name='fName' required> <br>

  <label for='lName'>Last Name: </label>
    <input type='text' id='lName' name='lName' required> <br>

  <label for='major'>Major: </label>
    <select name='major'>
        <option value='BioBA'>Biological Sciences BA</option>
        <option value='BioBS'>Biological Sciences BS</option>
        <option value='Biochem'>Biochemisty &amp; Molecular Biology BS</option>
        <option value='Bioinfo'>Bioinformatics &amp; Computational Biology BS</option>
        <option value='Bioed'>Biology Education BA</option>
        <option value='ChemBA'>Chemistry BA</option>
        <option value='ChemBS'>Chemistry BS</option>
        <option value='Chemed'>Chemistry Education BA</option>
    </select> <br>

  <label for='password'>Password: </label>
    <input type='password' id='password' name='password' required> <br>

  <label for='rePassword'>Retype Password: </label>
    <input type='password' id='rePassword' name='rePassword' required> <br>
<?php
  require("footer.php");
?>