<?php
$input = array('PHP', 'is', 'a', 'widely-used', 'open', 'source', 'general-purpose', 'scripting',
'language');
echo "1. ";
echo implode(' ', $input)."\n";
echo "2. ";
echo implode('-', $input)."\n";
echo "3. \n";
echo implode("\n", $input)."\n";

?>