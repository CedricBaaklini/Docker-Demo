<?php

$username = "root";
$password = "password";
$database = "MyDB";

$mysqli = new mysqli_sql("localhost", $username, $password, $database);

$name = $mysqli->real_escape_string($_POST['Language']);
$type = $mysqli->real_escape_string($_POST['Static or Dynamic']);
$runtime = $mysqli->real_escape_string($_POST['Compiled or Interpreted']);
?>
