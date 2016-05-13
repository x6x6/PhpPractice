<?php
$n = fgets(STDIN);

for($i=0;$i<$n;$i++){
  $texts[$i] = explode(' ', trim(fgets(STDIN)));
}

$point = 0;

for($i=0;$i<$n;$i++){
  if( strlen($texts[$i][0]) === strlen($texts[$i][1]) ){ //文字数を比較
    $cnt = 0;

    for($j=0;$j<strlen($texts[$i][0]);$j++){ //char毎に比較
      if($texts[$i][0][$j] != $texts[$i][1][$j]){
        $cnt++; //間違えた数
      }
    }

    if($cnt == 1){ //間違えた数一つなら＋１点
      $point += 1;
    }

    if(strcmp($texts[$i][0], $texts[$i][1]) == 0){ //全部一致していれば＋２点
      $point += 2;
    }
  }
}

echo $point."\n";
?>
