<?php
$filename = 'my_upgrade(1).zip';
$match = 'my_upgrade';
if ((strpos($filename,$match))===false) {
	echo "Match not found.";
} else {
	echo "Match found end script.";
}

?>