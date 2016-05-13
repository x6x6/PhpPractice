<?php
$q = fgets(STDIN);

for($i=0;$i<$q;$i++){
  $input_nums[$i] = fgets(STDIN);
}

foreach ($input_nums as $num) {
  $s = 0;
  for($i=1;$i<$num;$i++){
    if($num % $i == 0){  //割り切れたら
      $s += $i; //約数を足しこみ
    }
  }

  switch ($s) {
    case $num == $s:
      echo "perfect\n";
      break;
    case ($num - $s) == 1:
      echo "nearly\n";
      break;
    default:
      echo "neither\n";
      break;
  }

}
?>
