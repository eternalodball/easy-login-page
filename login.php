<?php

session_start();

$user=$_POST["username"];
$pass = $_POST["password"];

if ($user == "admin" && $pass == "admin") {
    echo "Login was successful!";
  } else {
    echo "Bad login!";
  }

session_destroy();


?>
