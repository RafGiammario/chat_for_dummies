<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  $filename = '/home/raffo/public_html/chat_for_dummies/data/log_messages.txt';
  $message = $_REQUEST["message"];
  $fd = fopen($filename, "a+");
  fwrite($fd, date("Y-m-d H:i:s")."\t".$_SERVER['SERVER_ADMIN'].":\t".trim($message)."\n");
  fclose($fd);
  file_put_contents('log_messages.txt', $message);
  header("Location:".$_SERVER['HTTP_REFERER']);
?>
