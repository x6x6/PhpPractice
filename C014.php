<?php
$stdin = explode(' ', fgets(STDIN));
$n = $stdin[0]; //箱の数
$r = $stdin[1]; //ボールの半径

$box = array();

for($i=0;$i<$n;$i++){
  $box[$i] = explode(' ', fgets(STDIN)); //[$i][0]高さ [$i][1]幅 [$i][2]奥行き
}

for ($i=0;$i<$n;$i++) {
  if(($r * 2) <= $box[$i][0] && ($r * 2) <= $box[$i][1] && ($r * 2) <= $box[$i][2]){
    echo $i + 1 ."\n";
  }
}
?>
