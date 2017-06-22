<?php
$sum=1;
for ($i=1; $i <= 6 ; $i++) { 
	for ($j=1; $j < $i; $j++) { 
		echo $sum++." ";
	}
	echo "\n";
}
?>