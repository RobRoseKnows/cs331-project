<?php
  require("header.php");
?>
   <h1> UMBC SIGN IN</h1>
<!--appropriate login page buttons-->
    <div id="login">
      <div id="form">
        <div class="top">
        <form method="link" action="./studentChoice.php">
   <input type="submit" name="next" class="button large go" value="Student Sign In">
   </form>

   <br />
   <br />

   <form method="link" action="./advisorChoice.php">
   <input type="submit" name="next" class="button large go" value="Advisor Sign In">
   </form>

        </div>
   </div>

<?php
  require("footer.php");
?>
