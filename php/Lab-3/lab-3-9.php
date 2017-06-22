<?php
$string=$argv[1];
Palindrome($string);
function Palindrome($string)
{
	global $string;
	$string=str_replace(' ','',$string);
	if ($string==strrev($string)) {
		echo "String is Palindrome";
	} else {
		echo "String is not Palindrome";
	}
	
}

?>