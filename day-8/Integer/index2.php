<?php
session_start();
$_SESSION["name"] = "noah";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="form.php" method="POST">
    <label for="name">Full Name:</label>
    <input type="text" id="name" name="fname" placeholder="Enter your Full name" required><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="passwd"><br>
    <textarea rows="10" cols="20" required placeholder="enter your message"></textarea><br>
    <input type="submit" value="submit😀">
    <button type="reset">reset</button>


  </form>

  <?php
  session_unset();
  session_destroy();
  print_r($_SESSION);
  ?>
</body>

</html>