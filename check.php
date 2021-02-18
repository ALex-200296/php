<?php
  if($_POST['name'] == "")
    echo 'Введите имя <a href="index.php">Введите имя</a>';
  else 
    header("Location:page.php");
?>