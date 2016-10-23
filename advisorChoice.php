<!--page layout-->

<?php
  $title = "Advisor Choice";
  $debug = false;
  require("./header.php");
?>

  <h1>Returning or New?</h1>
<!--appropriate login page buttons-->
    <div id="login">
      <div id="form">
        <div class="top">
        <form method="link" action="./advisorSignup.php">
	<input type="submit" name="next" class="button large go" value="Advisor Sign Up">
	</form>
	
	<br />
	<br />

	<form method="link" action="./advisorSignIn.php">
	<input type="submit" name="next" class="button large go" value="Returning Sign In">
	</form>
          
        </div>
	</div>
		
<?php
  require("./footer.php");
?>