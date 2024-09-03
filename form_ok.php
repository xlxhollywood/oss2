<?php
  $username = $_GET['username'];
  $email = $_GET['email'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  이름 : <?= $username?> <br>
  이메일 : <?= $email?> <br>
</body>
</html>