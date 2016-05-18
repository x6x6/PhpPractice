<?php
list($team, $no) = explode(" ", trim(fgets(STDIN)));
$team_a =  explode(" ", trim(fgets(STDIN))); //添え字が背番号
$team_b =  explode(" ", trim(fgets(STDIN))); //添え字が背番号

$center_line = 55; //コートのセンターラインのx座標
$no--;

//Ateamの場合
if($team == "A"){
  rsort($team_b);
  // var_dump($team_b);
  for($i=0;$i<11;$i++){
    if($team_a[$i] >= $center_line && $team_a[$no] < $team_a[$i] && $team_b[1] < $team_a[$i]){
      $offside_member[$i] = $i + 1;
    }
  }
}elseif($team == "B"){
  sort($team_a);
  for($i=0;$i<11;$i++){
    if($team_b[$i] <= $center_line && $team_b[$no] > $team_b[$i] && $team_a[1] > $team_b[$i]){
      $offside_member[$i] = $i + 1;
    }
  }
}

// var_dump($team_a);
// var_dump($team_b);

if(isset($offside_member) == false){
  echo "None";
}else{
  foreach($offside_member as $no){
    echo $no."\n";
  }
}
?>
