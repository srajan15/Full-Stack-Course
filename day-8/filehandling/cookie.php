<?php setcookie("name", "mob", time() - 3600) ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<!-- <body>
  <form action="<?php echo $_SERVER["PHP_SELF"]  ?>" method="post">
    <label for="name">Full Name:</label>
    <input type="text" placeholder="enter your full name" id="name" name="fname"><br>
    <label for="email">Email: </label>
    <input type="email" id="email" name="userEmail"><br>
    <input type="submit" value="submit">
  </form>
</body>

</html> -->

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   echo $_POST["fname"] . " " . $_POST["userEmail"];
//   // if (empty($_POST["fname"])) {

//   echo var_dump(($_SERVER));
// } else {
//   echo "undefine";
// }
//}


?>

<?php

// $file = fopen("example.php", "w");
// // $content = fread($file, filesize("test.txt"));
// $content = fwrite($file, " lorem ipsum");
// echo $content;
// fclose($file);

// echo readfile("test.txt");
echo print_r($_COOKIE);
echo $_COOKIE["name"];

include "test.php"


?>