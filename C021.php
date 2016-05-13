<?php
$stdin = explode(' ', trim(fgets(STDIN)));
$xc = $stdin[0]; //台風の中心x座標
$yc = $stdin[1]; //台風の中心y座標
$r_1 = pow($stdin[2], 2); //台風の中心で風が無い範囲？（半径）
$r_2 = pow($stdin[3], 2); //暴風域

$n = fgets(STDIN); //人の数

for($i=0;$i<$n;$i++){
  $position[$i] = explode(' ', fgets(STDIN)); //人がいる座標
 }

for($i=0;$i<$n;$i++){
  $tmp = (pow($position[$i][0] - $xc ,2) + pow($position[$i][1] - $yc,2));

  if($r_1 <= $tmp && $tmp <= $r_2){
    echo "yes\n";
  }else{
    echo "no\n";
  }
}
?>
