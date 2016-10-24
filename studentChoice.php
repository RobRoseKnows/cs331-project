<?php 
  $title = "Student Choice";
  require("./header.php");
?>
  <h1>Returning or New?</h1>
<!--appropriate login page buttons-->
    <div id="login">
      <div id="form">
        <div class="top">
	<!--brings student to page where they can create an account-->
        <form method="link" action="studentRegister.php">
	<input type="submit" name="next" class="button large go" value="Student Sign Up">
	</form>
	
	<br />
	<br />

	<!--brings student to page where they can sign in if they already have an account-->
	<form method="link" action="./studentSignIn.php">
	<input type="submit" name="next" class="button large go" value="Returning Sign In">
	</form>
          
        </div>
	</div>
<?php
  require("./footer.php");
?>
