<?php
$mailid = 'rayy@example.com';
echo "Extract username from $mailid \nUsername : ";
echo strstr($mailid,'@',true);
?>