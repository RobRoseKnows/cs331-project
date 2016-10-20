<?php
$headerTitle = "Student Sign Up";
require("header.php");
include("CommonVariables.php");
?>

<form action='doStudentSignUp.php' method='post' name='studentSignUp'>
    <label for='studEmail'>Email: </label>
    <input type='email' id='studEmail' pattern='<? echo $umbcEmailPattern; ?>' \
required placeholder='example@umbc.edu'> <br>

  <label for='studIdNum'>Student Id Number: </label>
    <input type='text' id='studIdNum' pattern='<? echo $umbcIdPattern;?>' requi\
red> <br>

  <label for='fName'>First Name: </label>
    <input type='text' id='fName' required> <br>

  <label for='lName'>Last Name: </label>
    <input type='text' id='lName' required> <br>

  <label for='major'>Major: </label>
    <select name='major'>
        <option value='BioBA'>Biological Sciences BA</option>
        <option value='BioBS'>Biological Sciences BS</option>
        <option value='Biochem'>Biochemisty & Molecular Biology BS</option>
        <option value='Bioinfo'>Bioinformatics & Computational Biology BS</opti\
on>
        <option value='Bioed'>Biology Education BA</option>
        <option value='ChemBA'>Chemistry BA</option>
        <option value='ChemBS'>Chemistry BS</option>
        <option value='Chemed'>Chemistry Education BA</option>
    </select> <br>

  <label for='password'>Password: </label>
    <input type='password' id='password' required> <br>

  <label for='rePassword'>Retype Password: </label>
    <input type='password' id='rePassword' required> <br>


	<div class="nextButton">
			<input type="submit" name="Submit" class="button large go" value="Submit">
	    </div>
</form>


<?php
  require('footer.php');
?>
