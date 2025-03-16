<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $nameError = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
      $nameError = "its require";
    } else {
      $nameError = "";
      $name = htmlspecialchars($_POST["fname"]);
      echo "Hello, " . $name;
    }
  }
  ?>
  <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
    <label for="name">Full Name;</label>
    <input type="text" id="name" name="fname"><?php echo $nameError; ?><br>
    <label for="age">Age:</label>
    <input type="text" id="age" name="age"><br>
    <button type="submit">submit</button>

  </form>



</body>

</html>