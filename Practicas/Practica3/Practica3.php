<?php
	for ($i=1; $i < 12; $i++) { 
		# code...
		echo "Tabla del ".$i;
		echo "<br/>"; 
		for ($j=1; $j <= 12 ; $j++)
		{ 
			# code...
			echo "$i x $j = ".$i * $j."<br/>"; 
		}
		echo "<br/>";
	}
?>