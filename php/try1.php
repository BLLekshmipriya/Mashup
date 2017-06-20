<!DOCTYPE html>
<html>
<head>
	<title>Sum of digits</title>
</head>
<body>
	<?php

	$a=23;
	echo "Input : $a<br>";
	$sum=0;$r=0;
	for($i=0;$i<=strlen($a);$i++)
	{
	$r=$a%10;
	$a=$a/10;
	$sum=$sum+$r;
	}
	echo "Sum : $sum";
	?>
</body>
</html>