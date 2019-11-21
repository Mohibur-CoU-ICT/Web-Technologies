<?php

	$around = "around";
	
	echo 'What goes ' . $around . ', comes ' . $around . '.<br/>';
	
	if(date('F', time()) == "August"){
		echo "It's August, so it's really hot.";
	}
	else{
		echo "Not August, so at least not in the peak of the heat.";
	}
	echo "<br/>";

	/* 
	if(date('F', time()) == "November"){
		echo "It's November, so it's really hot.";
	}
	else{
		echo "Not November, so at least not in the peak of the heat.";
	}
	echo "<br/>";
 */
?>
