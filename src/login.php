<form action="content1.php" method="POST">
<input type="text" name="username" />
<input type="submit" value="login" />
</form>

<?php 
	if($_GET)
	{
	$destroy = $_GET["end"];
	echo "$destroy";
	session_destroy();
	}

?>