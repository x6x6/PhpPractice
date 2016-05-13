<?php
$stdin1 = explode(' ', trim(fgets(STDIN)));

$m = $stdin1[0]; //連休の日数
$n = $stdin1[1]; //旅行の日数

$start = -99999;
$end = 0;
$persent = 100;

for($i=0;$i<$m;$i++){
  $w_data[$i] = explode(' ', trim(fgets(STDIN)));
}

// var_dump($w_data);
// echo $n;
  // echo $m;
// echo $w_data[0][0];
// echo $w_data[$m-1][0];

for($i=0;$i<$m;$i++){
  if($i+$n > $m){
    // echo $i;
    break;
  }
  $ttl = 0;

  for($j=0;$j<$n;$j++){
    $ttl += $w_data[$i+$j][1];
  }

// echo $i.":".(int)($ttl / $n)."\n";

  if($start < $w_data[$i][0]){
    if($persent >= (int)($ttl / $n)){
      $start = $w_data[$i][0];
      $end = $w_data[$i+($j-1)][0];
      $persent = (int)($ttl / $n);
    }
  }
}

echo $start." ".$end."\n";

// var_dump($percent);
?>
