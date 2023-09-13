<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Docker Demo</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php

        echo "<h1>Hello Docker!</h1>";

        $host = 'localhost';
        $user = 'root';
        $pass = 'password';
        $database = 'MyDB';

        $conn = new mysqli($host, $user, $pass, $database);
        
        $query = "SELECT * FROM 'Programming Languages'";
        
        ?>

    </body>
</html>
