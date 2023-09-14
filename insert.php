<?php

$username = "root";
$password = "password";
$database = "MyDB";

$mysqli = new mysqli("localhost", $username, $password, $database);

$query = "INSERT INTO `Programming Languages` ('Language', 'Static or Dynamic','Compiled or Interpreted') VALUES ('{$name}', '{$type}', '{$runtime}')";

$mysqli->query($query);
$mysqli->close();
?>
