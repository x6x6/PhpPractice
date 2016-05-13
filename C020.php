<?php
  $stdin = explode(' ', fgets(STDIN));
  $m = $stdin[0]; //仕入れた食材m[kg]
  $p = $stdin[1]; //仕入れた食材のmのうちp%売れた
  $q = $stdin[2]; //売れ残った量からみてq%売れた

  $leftover = $m - $m * ($p / 100); //売れ残りkg

  echo $leftover - $leftover * ($q / 100)."\n"; //加工して売れ残ったやつ
?>
