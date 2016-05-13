<?php
$n = fgets(STDIN); //日数

for($i=0;$i<$n;$i++){
  $stdin[$i] = explode(' ', trim(fgets(STDIN)));
  $OP[$i] = $stdin[$i][0]; //始値
  $CP[$i] = $stdin[$i][1]; //終値
  $HP[$i] = $stdin[$i][2]; //高値
  $LP[$i] = $stdin[$i][3]; //安値
}

echo $OP[0]." ".$CP[$n-1]." ".max($HP)." ".min($LP)."\n";
?>
