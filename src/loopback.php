<?php
echo '<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset="utf-8" />
<title> Loopback</title>
</head>
<body>';
?>
<?php
$p = array();
$type = 'GET OR POST';
	
	

$myJSON = array('type'=>$type	
);

foreach($_GET as $key => $value) {
	$myJSON[] = $key . ' : ' . $value;
	}



echo json_encode($myJSON);

?>
<!-- Use a for each loop to add variables to the JSON object -->

</body>
</html>