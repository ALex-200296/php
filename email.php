<?php
  $message = 'это самое простое сообщение в мире';
  $to = 'li.aa2012@yandex.ru';
  $from 'li.aa2014@yandex.ru'
  $subject = 'тема сообщщения';
  $headers = 'From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n';
  mail($to, $subject, $message, $headers);
?>