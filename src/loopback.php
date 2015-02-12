<?php
echo '<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset="utf-8" />
<title> Loopback</title>
</head>
<body>';
?>


<form method="post">
x: <input type = "text" name="x">
y: <input type = "text" name="y">
z: <input type = "text" name="z">
<input type = "submit">

</form>

<?php
$p = array();
$type = undefined;
	
if ($_GET)
{
	$type = "GET";
	$keyarray=$_GET;
} else {
	$type = "POST";
	$keyarray = $_POST;
}
foreach($keyarray as $key => $value) {
	$p[] = $key . ' : ' . $value;
	}


$myJSON = array('type'=>$type, 'parameters'=>$keyarray // I used a non associative array and called p. This is why I had brackets!
);

echo json_encode($myJSON);

?>

<!-- Use a for each loop to add variables to the JSON object -->

</body>
</html>