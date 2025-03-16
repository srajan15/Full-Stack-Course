<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  // $num1 = 5.6;
  // echo is_float($num1) . "<br>";

  // $num2 = 22;
  // echo is_int($num2) . "<br>";

  // $num3 = rand(1, 100);
  // echo $num3 . "<br>";

  // $num4 = sqrt(25);
  // echo $num4 . "<br>";

  // echo pow(2, 3) . "<br>";

  // $num5 = -20;
  // echo abs($num5) . "<br>";

  // $num6 = "30";
  // echo (int) $num6 . "<br>";

  // $num7 = "2.4";
  // echo (float) $num7 . "<br>";

  // $num8 = (int) $num7 + (int)$num6;
  // echo $num8 . "<br>";

  // $num8 = (int) $num7 + 8;
  // echo $num8 . "<br>";

  // $num8 = $num8 + 2;
  // $num8 += 2;
  // echo $num8 . "<br>";

  // echo "hello" . "world <br>";

  // $str = "hello";
  // $str .= "world";
  // echo $str . "<br>";

  // $age = 50;
  // $haveLicence = true;
  // if ($age >= 18 && !$haveLicence) {
  //   echo "you can drive <br>";
  // } else {
  //   echo "you can't drive <br>";
  // }

  // if ($age >= 18) {
  //   echo "you can vote <br>";
  // } elseif ($age >= 50) {
  //   echo "you can vote and drive also <br>";
  // } elseif ($age >= 70) {
  //   echo "you are not perfect to drive <br>";
  // } else {
  //   echo "you are under 18 <br>";
  // }

  // echo ($age >= 18) ? "you can drive <br>" : "you can't drive <br><br>";

  // // for ($i = 0; $i <= 10; $i++) {
  // //   echo ($i % 2 == 0) ? "number is $i even <br>" : "number is $i odd <br>";
  // // }
  // $i = 10;
  // while ($i >= 0) {
  //   echo ($i % 2 == 0) ? "number is $i even <br>" : "number is $i odd<br>";
  //   $i--;
  // }
  // $i = 6;
  // do {
  //   echo "only executed once <br>";
  //   $i++;
  // } while ($i >= 9);


  // $greet = function ($name) {
  //   return "hello " . $name . "<br>";
  // };

  // echo $greet("mob");

  $arr = [2, 4, 6, "hello"];
  $i = 0;
  echo $arr[0] . "<br>";
  $arr[1] = 5;
  echo $arr[3] . "<br>";
  array_push($arr, "world");

  foreach ($arr as $b) {
    echo "$b <br>";
  }


  // echo $arr[$i++] . "<br>";
  // echo $arr[$i] . "<br>";

  echo $arr[++$i] . "<br>";
  echo $arr[$i] . "<br>";

  echo $arr[2]-- . "<br>"; // 1. $arr[2] => 6
  echo $arr[2] . "<br>";   // 2. 6-- => 5
  echo "foreach loop <br>";

  foreach ($arr as $a) {
    echo "$a <br>";
  }

  $arr2 = ["name" => "mob", "age" => 22, "grade" => "A"];
  echo $arr2["name"] . "<br>";

  foreach ($arr2 as $i => $j) {
    echo "$i value $j <br>";
  }

  $arr3 = [[2, 4, 6, 8, 10], [3, 6, 8, 9, 10]];

  echo $arr3[0][4] . "<br>";

  for ($i = 0; $i < count($arr3); $i++) {
    for ($j = 0; $j < count($arr3[$i]); $j++) {
      echo $arr3[$i][$j];
    }
    echo "<br>";
  }
  echo count($arr2) . "<br>"





  ?>
  <!-- 0 % 2 = 0
  0 == 0
  1 % 2
  2 % 2 = 0
  0 == 0 -->



</body>

</html>