<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>your form has been submited</h1>
  <?php echo $_SERVER["REQUEST_METHOD"] . "<br>";
  echo $_POST["fname"] . "<br>";
  echo $_POST["passwd"] . "<br>";

  ?>
</body>

</html>