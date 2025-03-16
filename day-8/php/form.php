<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
      echo "Name is required!";
    } else {
      $name = htmlspecialchars($_POST["fname"]);
      echo "Hello, " . $name;
    }
  }
  ?>



</body>

</html>