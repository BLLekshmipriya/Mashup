<?php
$string= $argv[1]; 
echo $string."\n";
echo substr(chunk_split($string, 2, ':'),0,-1)."\n";
?>