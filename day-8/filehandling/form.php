<?php
// echo $_SERVER["PHP_SELF"];
echo $_SERVER["REQUEST_METHOD"] == "POST";

// echo $_GET["fname"] . "<br>";
// echo $_GET["userEmail"];

echo $_POST["fname"] . "<br>";
echo $_POST["userEmail"];
