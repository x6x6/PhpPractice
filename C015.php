<?php
  $n = fgets(STDIN);

  for($i=0;$i<$n;$i++){
    $receipt[$i] = explode(' ', fgets(STDIN));
  }

  $point = 0;

  for($i=0;$i<$n;$i++){
    if(preg_match("[3+]", $receipt[$i][0])){
      $point += floor($receipt[$i][1] * 0.03);
    }elseif(preg_match("[5+]", $receipt[$i][0])){
      $point += floor($receipt[$i][1] * 0.05);
    }else{
      $point += floor($receipt[$i][1] * 0.01);
    }
  }

  echo $point."\n";
?>
