<?php

	echo "<table border=\"1\" cell spacing=\"50\" cell padding=\"10\">";
	
		for($i=1; $i<=7; $i++){
			echo "<tr>\n";
			for($j=1; $j<=7; $j++){
				$result = $i * $j;
				printf("<td> %d </td>", $result);
			}
			echo "</tr>";
		}
	
	echo "</table>";

?>
