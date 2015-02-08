<?php 
	session_start();
	if($_GET)
	{
	$destroy = $_GET["end"];
	if ($destroy == 1)
	{
		echo "You have successfully logged out";
		session_destroy();
	}
	}

?>
<html>
<form action="content1.php" method="POST">
<input type="text" name="username" />
<input type="submit" value="login" />
</form>
</html>