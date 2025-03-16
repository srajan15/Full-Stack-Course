</ /?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
  <?php
  session_destroy();
  unset($_SESSION["name"]);
  echo $_SESSION["name"];
  ?>
</body>

</html>