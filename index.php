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
        
        $conn = new mysqli($host, $user, $pass);
        
        if ($conn -> connect_error) {
            die("Connection failed: " . $conn -> connect_error);
        } else {
            echo "<p> Connected to MySQL server successfully! </p>";
        }

        ?>

    </body>
</html>
