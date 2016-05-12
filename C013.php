<?php
$hate_num = fgets(STDIN);
$m = fgets(STDIN); //病室の総数
$room_num = array();
$cnt = 0; //条件にあった部屋の数

for($i=0;$i<$m;$i++){
  $room_num[$i] = fgets(STDIN); //部屋番号
}

for($i=0;$i<$m;$i++){
  if(strpos(trim($room_num[$i]), trim($hate_num)) === false){
    echo $room_num[$i];
    $cnt++;
  }
}

if($cnt == 0){
  echo "none";
}

echo "\n";
?>
