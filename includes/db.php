<?php
$host = "localhost";
$user = "blairex";
$pass = "200527";
$db_name = "project";

$conn = mysqli_connect($host, $user, $pass, $db_name);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

