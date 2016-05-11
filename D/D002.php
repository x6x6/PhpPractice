<?php
$n = fgets(STDIN);
$num = explode(" ",$n);

$a = (int)$num[0];
$b = (int)$num[1];

if($a > $b){
  echo $a;
}elseif($a < $b){
  echo $b;
}else{
  echo "eq";
}
?>
