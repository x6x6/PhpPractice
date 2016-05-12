<?php
$stdin1 = trim(fgets(STDIN)); //工事現場のx座標,工事現場のy座標,工事現場の騒音の大きさ
$n = trim(fgets(STDIN)); //木陰の個数

for($i=0;$i<$n;$i++){
  $stdin2 = trim(fgets(STDIN));
  $position[$i] = explode(' ', $stdin2); //[0]=x [1]=y
}

$Co = explode(' ', $stdin1);

for($i=0;$i<$n;$i++){
  if((pow($position[$i][0] - $Co[0], 2) + pow($position[$i][1] - $Co[1], 2)) >= pow($Co[2],2) ){
    echo "silent\n";
  }else{
    echo "noisy\n";
  }
}
?>
