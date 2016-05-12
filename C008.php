<?php
$stdin = trim(fgets(STDIN));
$text = fgets(STDIN);

$tags = explode(' ', $stdin); //[0]開始タグ [1]終了タグ
$end_tag = 0;

while(strpos($text,$tags[0],$end_tag) !== false){
  $start_tag = strpos($text, $tags[0], $end_tag); //開始タグ位置検索
  $start_tag_e = strpos($text, '>',$start_tag);
  $end_tag = strpos($text, $tags[1],$start_tag_e);
  if($end_tag == false){
    break;
  }

  $result = substr($text, $start_tag_e + 1, ($end_tag - 1) - $start_tag_e);

  if($result == false){
    echo "<blank>\n";
  }else{
    echo $result."\n";
  }
}
?>
