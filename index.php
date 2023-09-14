<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Docker Demo</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Hello Docker!</h1>
<!---->
<!--        <form action = "insert.php" method="post">-->
<!--            Language: <input type="text" name="Language" /><br><br>-->
<!--            -->
<!--            Type: <input type="radio" name="Static or Dynamic">-->
<!--            <label> static </label>-->
<!--            <input type="radio" name="Static or Dynamic">-->
<!--            <label> dynamic </label><br><br>-->
<!--            -->
<!--            Runtime: <input type="radio" name="Compiled or Interpreted">-->
<!--            <label> compiled </label>-->
<!--            <input type="radio" name="Static or Dynamic">-->
<!--            <label> interpreted </label><br><br>-->
<!--            -->
<!--            <input type="submit"/><br><br>-->
<!--        </form>-->

        <?php

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
