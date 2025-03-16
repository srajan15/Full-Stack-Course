<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $nameErr = $passErr = "";
  $name = $passwd = "";
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty($_GET["fname"])) {
      $nameErr = "Please fill the field";
    } else {
      $name = $_GET["fname"];
    }
    (empty($_GET["passwd"]) ? $passErr = "please fill passwd" : $passwd = $_GET["passwd"]);
  }

  ?>

  <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="fname"> <?php echo $nameErr ?><br>
    <label for="Passwd">Password</label>
    <input type="password" id="Passwd" name="passwd"> <?php echo $passErr ?><br>
    <button type="submit">Submit</button>
  </form>

  <?php echo "$name  $passwd"; ?>

  <?php echo print_r($_SESSION); ?>

</body>

</html>