<?php
$stdin =  explode(' ', trim(fgets(STDIN)));
$H = $stdin[0];
$W = $stdin[1];

for($i=0;$i<$H;$i++){
  $scale[$i] = explode(' ', fgets(STDIN));
}

for($i=0;$i<$H;$i++){
  $result = "";
  for($j=0;$j<$W;$j++){
    if((int)$scale[$i][$j] >= 128 && (int)$scale[$i][$j] <= 255){
      $result .= "1 ";
    }elseif((int)$scale[$i][$j] >= 0 && (int)$scale[$i][$j] <= 127){
      $result .= "0 ";
    }
  }
  echo trim($result)."\n";
}
?>
