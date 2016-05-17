<?php
  list($o_y,$s,$theta) = explode(" ", trim(fgets(STDIN))); //$o_y:初期高さ　$s:初速 $theta:角度
  list($x,$y,$size) = explode(" ", trim(fgets(STDIN))); //$x:的までの距離 $y:的までの高さ　$size:的の大きさ

  $g = 9.8; //重力加速度？

  $right =  ($g * pow($x, 2)) / (2 * (pow($s, 2)) * pow(cos(deg2rad($theta)), 2)); //右辺の式
  $left = ($o_y + tan(deg2rad($theta)) * $x); //左辺の式
  $hit = $left - $right;

  $distance = abs($y - $hit); //的の中心より高いところに刺さったら負の数になるので絶対値にする

  // echo $distance."\n";

  if($distance <= ($size - 0.1) / 2){
    echo "Hit ".round($distance, 1);
  }else{
    echo "Miss";
  }
?>
