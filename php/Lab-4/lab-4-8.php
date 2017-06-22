<?php
$input='the quick brown fox jumps over the lazy dog.';
echo $input;
echo "\nReplaced string : ";
echo preg_replace("/the/","That",$input,1);
?>