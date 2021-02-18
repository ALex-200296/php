<?php
  if(isset($_POST['done'])) {
    if($_POST['name'] == "")
      echo 'Введите имя <a href="index.php">Введите имя</a>';
    else 
      header("Location:email.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Обработка форм</title>
</head>
<body>
  <form name="test" action="" method="post">
    <label for="">
    Имя
    <input type="text" name="name">
    </label>
    <input type="text" name="email">
    <textarea name="message" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="done" value="Готово">
  </form>
</body>
</html>