<?php
$input_line = (int)fgets(STDIN);
$ip_array = array();

for($i=0;$i<$input_line;$i++){
  $ip_array[$i] = trim(fgets(STDIN));
}

foreach($ip_array as $key => $ip_addres){
  $flag = 1;
  if(substr_count($ip_array[$key], ".") == 3){ //ピリオドの判定 数が３つあるか
    $ip = explode('.', $ip_addres); //検査するIPアドレスを分ける
    foreach($ip as $ip_secter){
      if($ip_secter < 0 || $ip_secter > 255 || count($ip) != 4){　//０～２５５であるか、４つに分けられているか　×192.1.1.
        $flag = 0;
        break;
      }
    }
  }else{
    $flag = 0;
  }

  if($flag == 0){
    echo "False\n";
  }else{
    echo "True\n";
  }
}
?>
