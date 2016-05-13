<?php
$num = array(); //食材ごとに何人前出来るかを格納しとく

$n = fgets(STDIN);
for($i=0;$i<$n;$i++){
  $recipe[$i] = explode(' ', fgets(STDIN));
}

$m = fgets(STDIN);
for($i=0;$i<$m;$i++){
  $my_food[$i] = explode(' ', fgets(STDIN));
  $food[$i] = $my_food[$i][0]; //名前と個数を分ける
  $quan[$i] = $my_food[$i][1];
}

for($i=0;$i<$n;$i++){
  if(in_array($recipe[$i][0], $food)){ //レシピの食材が持っている食材にあったら
    $index = array_search($recipe[$i][0], $food);
    $num[$i] = (int)($quan[$index] / $recipe[$i][1]);
  }else{
    echo "0\n";
    exit;
  }
}
echo min($num)."\n"; //$numの最小値を表示
?>
