<?php
$inputCharacter=$argv[1];
echo "Inputed Character : ".$inputCharacter."\n";
$nextCharacter=++$inputCharacter;
if (strlen($nextCharacter)>1) {
	$nextCharacter=$nextCharacter[0];
}
echo "Next Character : ".$nextCharacter;
?>