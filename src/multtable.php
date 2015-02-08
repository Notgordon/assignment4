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
<ul>
	<li> min-x =  minimum multiplicand </li>
	<li> max-x = maximum multiplicand </li>
	<li> min-y =  minimum multiplier</li>
	<li> max-y = maximum multiplier </li>

</ul>

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
	$run = True;
	
	if( $_GET["max-x"] < $_GET["min-x"]){
		echo "<font color='red'>min of multiplicand is larger than max!</font>" . '<br>';
		$run=False;
	}
	
	if( $_GET["max-y"] < $_GET["min-y"]){
		echo "<font color='red'>min of multiplier is larger than max!</font>" . '<br>';
		$run=False;
	}
	
	if( !is_numeric($_GET["min-x"])){
		echo "<font color='red'>min of multiplicand isn't an integer!</font>" . '<br>';
		$run=False;
	}
	
	if( !is_numeric($_GET["max-x"])){
		echo "<font color='red'>max of multiplicand isn't an integer!</font>" . '<br>';
		$run=False;
	}
	
	if( !is_numeric($_GET["min-y"])){
		echo "<font color='red'>min of multiplier isn't an integer!</font>" . '<br>';
		$run=False;
	}
	
	if( !is_numeric($_GET["max-y"])){
		echo "<font color='red'>max of multiplier isn't an integer!</font>" . '<br>';
		$run=False;
	}
	
?>
<p><h1> Table of Output </h1>

<table border ="1">
<tr><td>
<?php
	if($run === True)
	{
		for($j = $_GET["min-y"]; $j < $_GET["max-y"]+1; $j++){
			echo '<td>' . $j;
		}
		for ($i = $_GET["min-x"]; $i < $_GET["max-x"]+1; $i++){
			echo '<tr><td>' . $i;
			for ($k = $_GET["min-y"]; $k < $_GET["max-y"]+1; $k++){		
			echo '<td>' . $i*$k;
			}

		}
	}
	
	
	

?>
</table>

</body>
</html>