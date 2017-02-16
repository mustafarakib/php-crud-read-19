<?php
require_once("../../../vendor/autoload.php");
use App\Message\Message;

  if(!isset($_SESSION)){
      session_start();
  }
  $msg = Message::getMessage();
  echo "<div id='message'> $msg </div>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Title Create Form</title>
    <link rel="stylesheet" href="../../../resource/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../resource/bootstrap/css/bootstrap-theme.min.css">
    <script src="../../../resource/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<form action="store.php" method="post">
    Enter Book Name:
    <input type="text" name="bookName"><br>
    Enter Author Name:
    <input type="text" name="authorName"><br>
        <input type="submit">
</form>

<script src="../../../resource/bootstrap/js/jquery.js"></script>
<script>
    jQuery(function($) {
        $('#message').fadeOut (550);
        $('#message').fadeIn (550);
        $('#message').fadeOut (550);
        $('#message').fadeIn (550);
        $('#message').fadeOut (550);
        $('#message').fadeIn (550);
        $('#message').fadeOut (550);
    })
</script>

</body>
</html>
