<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  echo "hello world<br>";
  //php code
  #php code
  /* php
  code
  */
  $newVar = "hello";
  echo "<h1 style='color: red;'>$newVar</h1>";
  $name = "mob";
  $age = 52;
  $salary = 8000.50;
  $haveDrivingLicence = true;
  echo "$name, $age, $salary, $haveDrivingLicence <br>";

  // function fnn($a, $b)
  {
    echo $a + $b;
  }

  fnn(5, 3);
  function loc()
  {
    $a = 5;
    echo "$a";
  }

  // // loc();

  // // echo "$a";

  // // $a = "global";

  function gl()
  {
    global $a;
    echo "$a <br>";
  }
  gl();
  echo "$a";

  // // function func()
  // // {
  // //   static $a = 0;
  // //   $a++;
  // //   echo "$a";
  // // }
  // // func();
  // // func();
  // // func();

  // // $p = "lorem ipsum";
  // // // echo 'var value $p';

  // // // define("PI", 3.14);

  // // // echo PI;
  // // echo 'var ' . $p . ' value';
  // $a = 55;
  // $b = "hello lorem ipsum";
  // $c = 2.5;
  // $d = true;

  // echo var_dump($a) . "<br>";
  // echo "var " . $a . " value <br>";
  // echo var_dump($b) . "<br>";
  // echo var_dump($c) . "<br>";
  // echo var_dump($d) . "<br>";
  // echo strlen($b) . "<br>";
  // $text = "I love JavaScript!";
  // echo str_replace("JavaScript", "PHP", $text) . "<br>";
  // echo is_int(5.2);
  // // Output: I love PHP!

  // // echo str_word_count($b);

  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection


  // Check connection
  $conn = new mysqli($servername, $username, $password);
  try {
    $conn;
  } catch (Exception $e) {
    echo $e->getMessage();
  }
  try {
    $sql = "CREATE DATABASE mydb";
    if ($conn->query($sql) == true) {
      echo "created";
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }
  ?>

</body>

</html>