<?php
//正規表現でやりたかった・・・
$stdin = explode(".", trim(fgets(STDIN))); //ipをオクテットごとに区切る
$n = trim(fgets(STDIN));
$search_ip = str_replace("*","[0-255]",$stdin);
for($i=0;$i<$n;$i++){
  $logs[] = explode(" ", trim(fgets(STDIN)));
  $log_ips[] = explode(".", $logs[$i][0]); //入力されたログのipをオクテットごとに区切る
}
// var_dump($logs);
for($i=0;$i<$n;$i++){
  $flag = 1;
  for($j=0;$j<4;$j++){
    if(strpos($search_ip[$j], "[") !== false){
      if(preg_match("[\D]", $search_ip[$j])){ //[1-20]みたいなのがあったら
        $tmp = explode("-", $search_ip[$j]); //数字だけ取り除く
        $tmp[0] = trim($tmp[0], "[");
        $tmp[1] = trim($tmp[1], "]");
        if($tmp[0] > $log_ips[$i][$j] || $log_ips[$i][$j] > $tmp[1]){ //そしてその範囲内かチェック 0-255
          $flag = 0;
          break;
        }
      }elseif($search_ip[$j] != $log_ips[$i][$j]){
        $flag = 0;
        break;
      }
    }
  }
  if($flag != 0){
    echo $logs[$i][0]." ".trim($logs[$i][3], "[")." ".$logs[$i][6]."\n"; //ip date path 出力
  }
}
?>
