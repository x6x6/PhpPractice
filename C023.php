<?php
  $w_number = explode(' ', trim(fgets(STDIN))); //当選番号
  $n = fgets(STDIN); //くじの枚数

  for($i=0;$i<$n;$i++){
    $lot_nums[$i] = explode(' ', trim(fgets(STDIN)));
  }

  for($i=0;$i<$n;$i++){
    echo count(array_intersect($lot_nums[$i], $w_number))."\n";　//配列同士を比較して一致している要素の数を出力
  }
?>
