<?php
list($n, $m) = explode(" ", fgets(STDIN));

$page = 1;
$i = 1;
$j = 1;

while(true){
  $a = 1;
  $j = 2 * $n * $page;
  while($a <= $n){
    $front[$a] = $i;
    $back[$a] = $j;
    $i++;
    $a++;
    $j--;
  }
  $i += $n;
  $page++;

  if(array_search($m, $front) !== false){
    echo $back[array_search($m, $front)]."\n";
    break;
  }elseif(array_search($m, $back) !== false){
    echo $front[array_search($m ,$back)]."\n";
    break;
  }
}

?>
