<?php



session_start();
$username = $_POST['username'];
//if(session_status() == PHP_SESSION_ACTIVE){
	
	$SESSION = array();
	
	
	
	if(!isset($username) && !isset($_SESSION['name'])){
		$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
		$filePath = implode('/',$filePath);
		$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
		header("Location: {$redirect}/login.php", true);
	}
	
	
	
	if(!isset($_SESSION['visits'])){
		$_SESSION['visits'] = 0;
	}
	
	$_SESSION['visits']++;
	
	if(isset($username) && $username != ""){
		$_SESSION['name'] = $username; // saves the name into the session
		echo "Hello $_SESSION[name] you have visited this page $_SESSION[visits] times before. ";
		echo 'Click <a href="http://web.engr.oregonstate.edu/~rechstee/assignment4/login.php?end=1' . SID . '">here<a/> to logout.';
		echo '<br /> You now have access to the secret second content <a href="http://web.engr.oregonstate.edu/~rechstee/assignment4/content2.php' . SID . '">page</a></p>';
	}
	
	else if (!isset($username))
	{
		$username = $_SESSION['name'];
		echo "Hello $_SESSION[name] you have visited this page $_SESSION[visits] times before. ";
		echo 'Click <a href="http://web.engr.oregonstate.edu/~rechstee/assignment4/login.php?end=1' . SID . '">here<a/> to logout.';
		echo '<br /> You now have access to the secret second content <a href="http://web.engr.oregonstate.edu/~rechstee/assignment4/content2.php' . SID . '">page</a></p>';
	}
	
	else{
		echo "A username must be entered. Click <a href='http://web.engr.oregonstate.edu/~rechstee/assignment4/login.php'>here<a/> to return to the login screen.";
		
	}
	
//}	
	
	


?>
<html>
<body>
<?php if($access == true) :?>
	Click <a href='http://people.oregonstate.edu/~rechstee/cs290/assignment4/login.php?end=1'>here<a/> to logout.
	<p> You now have access to the secret second content <a href='http://people.oregonstate.edu/~rechstee/cs290/assignment4/content2.php'>page</a></p>
<?php endif; ?>
</body>
</html>