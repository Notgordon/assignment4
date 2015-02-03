<?php
echo '<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset="utf-8" />
<title> Multiple Table </title>
</head>
<body>';

// Variables to be taken in
?>
<p><h3>Table of Input</h3>
<p>
<table border ="1">
<tr>
<td>
<td>Multiplicand
<td>Multiplier
<tr><td>Min
<?php

	echo '<td>' . $_GET["min-x"];
	echo '<td>' . $_GET["min-y"];


?>
<tr><td>Max
<?php

	echo '<td>' . $_GET["max-x"];
	echo '<td>' . $_GET["max-y"];

?>




</table>
<?php
	$run;
	if( $_GET["max-x"] < $_GET["min-x"]){
	echo "min of multiplicand is larger than max!";
	$run=false;
	}
?>
<p><h1> Table of Output </h1>

<table border ="1">
<tr><td>
<?php
	for($j = $_GET["min-y"]; $j < $_GET["max-y"]+1; $j++){
		echo '<td>' . $j;
	}
	for ($i = $_GET["min-x"]; $i < $_GET["max-x"]+1; $i++){
		echo '<tr><td>' . $i;
		for ($k = $_GET["min-y"]; $k < $_GET["max-y"]+1; $k++){		
		echo '<td>' . $i*$k;
		}

	}
	
	
	

?>
</table>

</body>
</html>