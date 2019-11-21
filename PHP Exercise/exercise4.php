<?php
	$name = "Harry";
	$age = 28;
	
	var_dump($name);
	echo "<br/>";
	
	print_r($name);
	echo "<br/>";
	
	var_dump($age);
	echo "<br/>";
	
	$name = null;
	var_dump($name);
	echo "<br/>";
	
	unset($name);
	$name = $age;
	var_dump($name);
	echo "<br/>";
	/*Var_dump() gives the type, size and value of the variable, 
	whereas print_r() gives only the value.
	Use the unset($var_name) function to get a value of NULL in the final line.*/
?>
