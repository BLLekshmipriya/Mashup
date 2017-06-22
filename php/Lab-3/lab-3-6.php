<?php
$number=$argv[1];
terenary($number);
function terenary($number){
	echo ($number>10?($number>30?'no: > 30':($number>20?'no: >20 but < 30':'no: < 20 but >10')):'no: < 10');

}
?>