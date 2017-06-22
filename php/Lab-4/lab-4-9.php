<?php
$String1 = 'football';
$String2 = 'footboll';
echo "String1 : ".$String1."\n";
echo "String2 : ".$String2."\n";
$position=strspn($String1^$String2,"\0");
printf('First difference between two strings at position %d : "%s" vs "%s"',$position,$String1[$position],$String2[$position]);
?>