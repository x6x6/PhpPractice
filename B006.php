<?php
  list($o_y,$s,$theta) = explode(" ", trim(fgets(STDIN))); //$o_y:初期高さ　$s:初速 $theta:角度
  list($x,$y,$size) = explode(" ", trim(fgets(STDIN))); //$x:的までの距離 $y:的までの高さ　$size:的の大きさ

  $g = 9.8; //重力加速度？

  // $aaa = $o_y + tan($x)
  $l = ($o_y + tan(deg2rad($theta)) * $x);
  $r = ($g * pow($x, 2));


  $tan_theta = cos($theta) * pow(10, 1);
  $tan_theta = floor($tan_theta);
  $tan_theta = $tan_theta / pow(10 ,1);


  // echo $tan_theta;

  $a = 2 * (pow($s, 2)) * $tan_theta;

  $b =  $r / $a;

  $aaaa= $l - $b;

  // echo $aaaa;
  // Techo $a;
  // echo cos($theta);

  echo round($y - $aaaa,2);

?>
