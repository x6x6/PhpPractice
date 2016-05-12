<?php
$parent = explode(' ', fgets(STDIN)); //親カード
$n = fgets(STDIN);

for($i=0;$i<$n;$i++){
    $child[$i] = explode(' ', fgets(STDIN));
}

for ($i=0;$i<$n;$i++){
  if($parent[0] == $child[$i][0]){
    if($parent[1] <= $child[$i][1]){
      echo "High\n";
    }else{
      echo "Low\n";
    }
  }elseif($parent[0] >= $child[$i][0]){
    echo "High\n";
  }else{
    echo "Low\n";
  }
}
?>
