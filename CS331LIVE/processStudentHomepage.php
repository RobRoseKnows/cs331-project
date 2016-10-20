<?php
session_start();

if($_POST["selection"] == 'Signup')
{
?>
	<form action="StudProcessType.php" method="post" name="SelectType" style="text-align: center;">
	<div class="nextButton" style="text-align: center;">
		<input type="submit" name="type" class="button large go" value="Individual" style="margin-right: 60px;">
		<input type="submit" name="type" class="button large go" value="Group">
	    </div>
	</form>
}
elseif($_POST["selection"] == 'View'){
	header('Location: 04StudViewApp.php');
}
elseif($_POST["selection"] == 'Reschedule')
{
	$_SESSION["resch"] = true;
	<form action="StudProcessType.php" method="post" name="SelectType" style="text-align: center;">
	<div class="nextButton" style="text-align: center;">
		<input type="submit" name="type" class="button large go" value="Individual" style="margin-right: 60px;">
		<input type="submit" name="type" class="button large go" value="Group">
	</div>
	</form>
}
elseif($_POST["selection"] == 'Cancel'){
	header('Location: 05StudCancelApp.php');
}
elseif($_POST["selection"] == 'Search'){
	header('Location: 09StudSearchApp.php');
}
elseif($_POST["selection"] == 'Edit'){
	header('Location: 06StudEditInfo.php');
}
elseif($_POST["selection"] == 'Next'){
	header('Location: 14StudSelectTypeNext.php');
}
