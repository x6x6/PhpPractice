<?php
$stdin = trim(fgets(STDIN));
$array = explode(" ", $stdin);

$a = (int)$array[0];
$b = (int)$array[1];

echo $b - $a;
?>
