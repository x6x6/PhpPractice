<?php
$data = explode(' ', trim(fgets(STDIN)));
$n = $data[0]; //にんじんのデータ数
$s = $data[1]; //糖分目安
$p = $data[2]; //許容誤差

$flag = 0;
$clear = array('mass' => 0, 'suger' => 0, 'num' => 1); //許容範囲内のにんじんデータ

for($i=1;$i<=$n;$i++){
  $carrot_data[$i] = explode(' ', trim(fgets(STDIN))); //[$i][0]質量 [$i][1]糖分
}

for($i=1;$i<=$n;$i++){
  if(($s - $p) <= $carrot_data[$i][1] && $carrot_data[$i][1] <= ($s + $p)){
    if($clear['mass'] < $carrot_data[$i][0]){
      $clear['mass'] = $carrot_data[$i][0];
      $clear['suger'] = $carrot_data[$i][1];
      $clear['num'] = $i;
      $flag = 1;
    }
  }
}

if($flag == 1){
  echo $clear['num']."\n";
}else{
  echo "not found\n";
}
?>
