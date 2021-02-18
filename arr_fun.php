<?php
  $arr = array( 12, 17, 18, 56);
  $arr2 = array('123' => 123);
  echo count($arr);
  echo "<br/>";
  echo sort($arr);
  echo "<br/>";
  print_r($arr);
  print_r($arr2); 
  echo "<br/>";
  $arr3 = array_merge($arr, $arr2);
  print_r($arr3);
  echo "<br/>";
  unset($arr3[2]);
  print_r($arr3)
?>  