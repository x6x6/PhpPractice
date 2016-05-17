<?php
list($n, $m) = explode(" ", trim(fgets(STDIN)));

$ttl = 0;

if($n == 0 || $m == 0){ //ライブがなかったらorファンが一人も来なかったら終わり
  echo "0"."\n";
  exit();
}

for($i=0;$i<$m;$i++){//損益計算
  $live[$i] = explode(" ", trim(fgets(STDIN)));
  $profit[$i] = array_sum($live[$i]);
}

rsort($profit);

foreach($profit as $value){ //利益あるライブだけ計算する負の値が着たら終了
  if($value >= 0){
    $ttl += $value;
  }else{
    break;
  }
}

echo $ttl."\n";

?>
