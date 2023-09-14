<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Docker Demo</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <form action = "">

        </form>

        <?php

        echo "<h1>Hello Docker!</h1>";

        $host = 'localhost';
        $user = 'root';
        $pass = 'password';
        $database = 'MyDB';
        $conn = new mysqli($host, $user, $pass, $database);
        $query = "SELECT * FROM `Programming Languages`";

        echo '<table class="center"> 
      <tr> 
          <th> Language </th> 
          <th> Static or Dynamic </th> 
          <th> Compiled or Interpreted </th> 
      </tr>';

        if ($result = $conn->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $name = $row['Language'];
                $type = $row['Static or Dynamic'];
                $runtime = $row['Compiled or Interpreted'];

                echo '<tr> 
                  <td>'.$name.'</td> 
                  <td>'.$type.'</td> 
                  <td>'.$runtime.'</td> 
              </tr>';
            }
        }
        
        $result->free();
        
        ?>

    </body>
</html>
