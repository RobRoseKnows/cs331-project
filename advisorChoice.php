<!--page layout-->

<?php
  $title = "Advisor Choice";
  $debug = false;
  require("header.php");
?>

  <h1>Returning or New?</h1>

    <!--allows an advisor to register a new account-->
    <div id="login">
      <div id="form">
        <div class="top">
        <form method="post" action="advisorRegister.php">
	<input type="submit" name="next" class="button large go" value="Advisor Sign Up">
	</form>
	
	<br />
	<br />

	<!--lets a returning user sign in-->		
	<form method="link" action="advisorSignIn.php">
	<input type="submit" name="next" class="button large go" value="Returning Sign In">
	</form>
          
        </div>
	</div>
		
<?php
  require("./footer.php");
?>
