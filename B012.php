<?php
$n = trim(fgets(STDIN));

for($i=0;$i<$n;$i++){
  $ttl = 0;
  $even = 0;
  $odd = 0;
  $card_nums = trim(fgets(STDIN));

  for($j=0;$j<16;$j++){
    if($j % 2 == 0 && $j != 15){
      $tmp = $card_nums[$j] * 2;
      if($tmp > 9){
        $even += ((int)substr($tmp,0 ,1) + (int)substr($tmp, 1, 2));
      }else{
        $even += $tmp;
      }
    }elseif($j != 15){
      $odd += $card_nums[$j];
    }
  }

  if((int)substr($even+$odd, 1, 2) != 0){
    $result[$i] = 10 - (int)substr($even+$odd, 1, 2);
  }else{
    $result[$i] = 0;
  }

}

foreach ($result as $value) {
  echo $value."\n";
}




?>
