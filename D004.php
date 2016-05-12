<?php
  $input_line = (int)fgets(STDIN);
  $strings = array();
  $hello = "Hello ";

  for($i=0;$i<$input_line;$i++){
    $strings[$i] = trim(fgets(STDIN));
    $hello .= $strings[$i].",";
  }

  $hello = substr($hello,0, -1);
  $hello .= ".";

  echo $hello;
?>
