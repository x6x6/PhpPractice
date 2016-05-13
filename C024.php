<?php
$n = fgets(STDIN); //命令数
$var1 = 0;
$var2 = 0;

for($i=0;$i<$n;$i++){
  $input_date[$i] = explode(' ', trim(fgets(STDIN)));
}

for($i=0;$i<$n;$i++){
  switch ($input_date[$i][0]) {
    case 'SET':
      if($input_date[$i][1] == 1){
        $var1 = $input_date[$i][2];

      }elseif($input_date[$i][1] == 2){
        $var2 = $input_date[$i][2];

      }
      break;

    case 'ADD':
      $var2 = $var1 + $input_date[$i][1];
      break;

    case 'SUB':
      $var2 = $var1 - $input_date[$i][1];
      break;
  }
}

echo $var1." ".$var2."\n";
?>
