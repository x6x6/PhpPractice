<?php
$time = new DateTime("10:00");
$break_time = new DateTime("12:00");
$n = trim(fgets(STDIN));
$time_table[0]['start'] = $time->format("H:i");
$flag = 0;

for($i=0;$i<$n;$i++){
  list($name[], $talk_time[]) = explode(" ", trim(fgets(STDIN)));
}

for($i=0;$i<$n;$i++){
  $time->add(new DateInterval("PT{$talk_time[$i]}M")); //$現在の発表者の終了時間
  $time_table[$i]['end'] = $time->format("H:i");
  $time_table[$i]['name'] = $name[$i];
  if(next($talk_time)){
    if(break_check($time->format("H:i"), $talk_time[$i+1]) && $flag == 0){ //休憩時間かチェック
      $time->add(new DateInterval("PT60M")); //６０分休憩足しこみ用
      $flag = 1;
    }else{
      $time->add(new DateInterval("PT10M")); //１０分休憩足しこみ用
    }
  }else{
    $time->add(new DateInterval("PT10M")); //１０分休憩足しこみ用
  }
  $time_table[$i+1]['start'] = $time->format("H:i"); //次の発表者の開始時間に休憩分時間分を足しこむ
}

//結果出力
for($i=0;$i<$n;$i++){
  echo $time_table[$i]['start']." - ".$time_table[$i]['end']." ".$time_table[$i]['name']."\n";
}


//発表予定者のトーク終了予定時刻（現在の発表者の終了時刻 + 10分休憩 + 次の発表者の持ち時間）が12:01のチェック
function break_check($end_time, $next_talk_time){
  $a = new Datetime($end_time);
  $a->add(new DateInterval("PT10M"));
  $a->add(new DateInterval("PT{$next_talk_time}M"));

  if($a->format("H:i") >= "12:01"){
    return true;
  }else{
    return false;
  }
}
?>
