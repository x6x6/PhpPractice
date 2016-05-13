<?php
$m = trim(fgets(STDIN)); //運べる量
$n = trim(fgets(STDIN)); //ファックスが届く回数

$ttl = 0; //取りに行く回数
$nos = 0;　//hour毎のファックス枚数

for($i=0;$i<$n;$i++){
    $fax_date[$i] = explode(' ', trim(fgets(STDIN))); //[$i][0]時　[$i][1]分　[$i][2]届く寮
}

for($i=0;$i<$n;$i++){
  if($fax_date[$i][0] == $fax_date[$i+1][0] && $i != $n){ //時が同じだったら
    // echo $fax_date[$i][0]."==".$fax_date[$i+1][0]."\n";
    $nos += $fax_date[$i][2]; //ファックスの枚数足しこんでいく
  }else{  //そのhourに運べる回数を計算
    $nos += $fax_date[$i][2]; //上の条件だとhourの最後のminの分が加算されないのでここで足しこみ
    if($nos % $m == 0){
      $ttl += (int)($nos / $m);
    }else{
      $ttl += (int)($nos / $m + 1);
    }
    $nos = 0;
  }
}

echo $ttl;

?>
