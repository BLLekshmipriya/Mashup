<?php
$url= "http://www.w3resource.com/php-exercises/php-basic-exercises.php";
echo "Scheme : ";
echo parse_url($url,PHP_URL_SCHEME);
echo "\nHost : ";
echo parse_url($url,PHP_URL_HOST);
echo "\nPath : ";
echo parse_url($url,PHP_URL_PATH);
echo "\n";
?>