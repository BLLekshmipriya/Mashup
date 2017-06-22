<?php
$factorialOf=$argv[1];
factorial($factorialOf);
function factorial($factorialOf){
	$n=1;
	if ($factorialOf==0) {
	echo "0! = 1";
	} else {
	for ($i=1; $i <=$factorialOf ; $i++) { 
		$n *=$i;
	}
	echo "$factorialOf! = $n";
}

} 
?>