<?php
list($team, $no) = explode(" ", trim(fgets(STDIN)));
$team_a =  explode(" ", trim(fgets(STDIN))); //添え字が背番号
$team_b =  explode(" ", trim(fgets(STDIN))); //添え字が背番号
$flag = 0;

array_unshift($team_a, "99999");
array_unshift($team_b, "-99999");

$center_line = 55; //コートのセンターラインのx座標
$goal_line_a = 0; //team_aのゴールラインのx座標
$goal_line_b = 110; //team_bのゴールラインのx座標

// var_dump($team_a);

//Ateamの場合
if($team == "A"){
  rsort($team_b);
  // var_dump($team_b);
  for($i=1;$i<=11;$i++){
    if($i == $no){
      continue;
    }
    if($team_a[$i] >= $center_line && $team_a[$i] <= $goal_line_b){
      if($no < $team_a[$i]){
        if($team_b[1] < $team_a[$i]){
          // $offside[] = $team_a[$i];
          $flag = 1;
          echo $i."\n";
        }
      }
    }
  }
}elseif($team == "B"){
  sort($team_a);
  // var_dump($team_a);
  for($i=1;$i<=11;$i++){
    if($i == $no){
      continue;
    }
    if($team_b[$i] <= $center_line && $goal_line_a <= $team_b[$i]){
      if($no > $team_b[$i]){
        if($team_a[1] > $team_b[$i]){
          // $offside[] = $team_b[$i];
          $flag = 1;
          echo $i."\n";
        }
      }
    }
  }
}


if($flag != 1){
  echo "None\n";
}
?>
