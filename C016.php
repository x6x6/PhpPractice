<?php
$s = trim(fgets(STDIN));

$search = array('A','E','G','I','O','S','Z');
$replace = array('4','3','6','1','0','5','2',);

echo str_replace($search,$replace,$s);
?>
