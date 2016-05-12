<?php
$n = fgets(STDIN);

for($i=1;$i<10;$i++){
  echo $i * $n;

  if($i != 9){
    echo " ";
  }
}
?>
