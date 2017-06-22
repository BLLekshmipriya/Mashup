<?php
$number=$argv[1];
function checkprime(){
	global $number;
	for ($i=2; $i < $number; $i++) { 
		if ($number%$i==0) {
			return 0;
		}
	}
	return 1;
}
$result=checkprime($number);
if ($result==0) {
	echo "No: is not prime.";
} else {
	echo "No: is prime.";
}

?>