<?php
  $hostname="http://localhost/~raffo/chat_for_dummies/post.php";
?>

<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <title>CHAT</title>
  </head>
  <body>
    <h1><center>Chat di classe casuale</center></h1>
    <h3>Scrivi qui un messaggio e sarà recapito a un compagno di classe a caso</h3>
    <form action=<?= $hostname ?> method="post">
      <table>
      <tr>
        <td><textarea name="message" rows="1" cols="80"></textarea></td>
        <td><input type="submit" /></td>
      </tr>
      </table>
    </form>
  </body>
</html>
