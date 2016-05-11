<?php
$stdin = fgets(STDIN);
$array = explode(" ", $stdin);

$m = (int)$array[0];
$n = (int)$array[1];

echo $m." ";

for($i=0;$i<9;$i++){
  echo $m += $n;
  if($i != 8){
    echo " ";
  }
}
?>
