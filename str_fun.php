<?php
  $string = "This is example";
  echo strlen($string); // длина строки
  echo "<br/>";
  echo strpos($string, 'exa'); // поиск строки, возвращает позицию строки
  echo "<br/>";
  echo substr($string, 3);
  echo "<br/>";
  $str = "<p> hello world </p>";
  echo htmlspecialchars($str);
  echo '<br/>';
  // strtolower() нижний регистр
  // strtoupper() верхний регистр
  echo md5('3');
  // trim('  string  ')
?>