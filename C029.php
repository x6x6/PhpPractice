<?php
$stdin1 = explode(' ', trim(fgets(STDIN)));

$m = $stdin1[0]; //連休の日数
$n = $stdin1[1]; //旅行の日数

$start = -99999;
$end = 0;
$rainfall_prob = 100;

for($i=0;$i<$m;$i++){
  $w_data[$i] = explode(' ', trim(fgets(STDIN)));
}

for($i=0;$i<$m;$i++){
  if($i + $n > $m){ //旅行終了日が連休の日数を過ぎていたら強制的に終わらす
    break;
  }
  $ttl = 0;
  for($j=0;$j<$n;$j++){ //降水確率の合計を求める
    $ttl += $w_data[$i+$j][1];
  }
  if($start < $w_data[$i][0]){ //？
    if($rainfall_prob >= (int)($ttl / $n)){　//降水確率の平均が今までのより引くかったら
      $start = $w_data[$i][0];
      $end = $w_data[$i+($j-1)][0];
      $rainfall_prob = (int)($ttl / $n);
    }
  }
}

echo $start." ".$end."\n";
?>
