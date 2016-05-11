<?php
$stdin = trim(fgets(STDIN));
$array = explode(" ", $stdin);

$n = (int)$array[0];
$s = $array[1];

switch ($s) {
  case 'km':
    echo $n * 1000 * 100 * 10;
    break;
  case 'm':
    echo $n * 100 * 10;
    break;
  case 'cm':
    echo $n * 10;
    break;
}
?>
