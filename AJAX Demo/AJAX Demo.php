<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>AJAX Demo with Docker</title>
    </head>
    <style>
        .center {
            margin-left: auto;
            margin-right: auto;
        }

        body {
            font-family: "Helvetica Neue", sans-serif;
            background-color: #1D63ED;
            color: #00084D;
            text-align: center;
        }
        body h1 {
            font-size: 48px;
        }
        body p {
            font-size: 24px;
        }
        body table, body th, body td {
            border: 2px solid;
            border-collapse: collapse;
            width: auto;
        }
        body table th, body table td, body th th, body th td, body td th, body td td {
            padding: 5px;

    </style>
    <script>
        function showlang(str) {
            var xhttp;
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "getlang.php?q=" + str, true);
            xhttp.send();
        }
    </script>
    <body>
        <h1> AJAX Docker Demo </h1>
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
        
        echo "<table>";
        echo "<tr>";
        echo "<th> Language </th>";
        echo "<td>" . $lang . "</td>";
        

        ?>
    </body>
</html>
