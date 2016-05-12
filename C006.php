<?php
$stdin1 = trim(fgets(STDIN));
$stdin2 = trim(fgets(STDIN));

$array1 = explode(' ', $stdin1);
$param = explode(' ', $stdin2); //パラメータの値の配列

$n = $array1[0]; //パラメーターの個数
$nop = $array1[1]; //ユーザーの人数
$top = $array1[2]; //トップを表示させる人数

for($i=0;$i<$nop;$i++){
  $stdin3 = trim(fgets(STDIN));
  $item_param[$i] = explode(' ', $stdin3); //ユーザが持っているパラメータの個数
}

$result = array();

for($j=0;$j<$nop;$j++){
  $sum = 0;
  for($k=0;$k<$n;$k++){
    $sum += $param[$k] * $item_param[$j][$k];
  }
  $result[$j] = (int)round($sum);
}

rsort($result);

for($m=0;$m<$top;$m++){
  echo $result[$m]."\n";
}

?>
