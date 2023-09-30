<?php

$username = "root";
$password = "password";
$database = "MyDB";

$mysqli = new mysqli("localhost", $username, $password, $database);
if ($mysqli->connect_error) {
    exit("Could not connect");
}

$sql = "SELECT `Language`, `Static or Dynamic`, `Compiled or Interpreted` FROM `Programming Languages` WHERE Language = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($lang, $type, $runtime);
$stmt->fetch();
$stmt->close();

echo "<table class='center'>";
echo "<tr>";
echo "<th> Language </th>";
echo "<th> Static or Dynamic </th>";
echo "<th> Compiled or Interpreted </th>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $lang . "</td>";
echo "<td>" . $type . "</td>";
echo "<td>" . $runtime . "</td>";
echo "</tr>";
echo "</table>";

?>
