<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Radosław Kruczek</title>
    <link rel="stylesheet" href="/assets/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="header">
        <?php include("../assets/header.php"); ?>
      </div>
      <div class="menu">
      <?php include("../assets/menu.php"); ?>
      </div>
      <div class="main">
      <?php
          ini_set('display_errors', '1');
          ini_set('display_startup_errors', '1');
          error_reporting(E_ALL);
      
          require_once("../assets/connect.php");
      
      
          function table($sql, $conn, $columnid, $column2, $dana, $dana2, $table){
      
            $result = $conn->query($sql);
            echo("<table border=0>");
            echo("<th>$columnid</th>");
            echo("<th>$column2</th>");
            while($wiersz=$result->fetch_assoc()){
              echo("<tr>");
              echo("<td>".$wiersz[$dana2]."</td><td>".$wiersz[$dana]."</td><td>
		
		
              <form action='delete.php' method='POST'>
              <input type='number' name='row' value='".$wiersz[$dana2]."' hidden>
              <input type='text' name='table' value='".$table."' hidden>
              <input type='text' name='column' value='".$columnid."' hidden>
              <input type='submit' value='Usuń'>
              </form>
              
              </td>");
              echo("</tr>");
            }
            echo("</table>");
          }
          function table2($sql, $conn, $columnid, $column2, $column3, $dana, $dana2, $dana3, $table){
      
            $result = $conn->query($sql);
            echo("<table border=0>");
            echo("<th>$columnid</th>");
            echo("<th>$column2</th>");
            echo("<th>$column3</th>");
            while($wiersz=$result->fetch_assoc()){
              echo("<tr>");
              echo("<td>".$wiersz[$dana3]."</td><td>".$wiersz[$dana2]."</td><td>".$wiersz[$dana]."</td><td>
		
		
              <form action='delete.php' method='POST'>
              <input type='number' name='row' value='".$wiersz[$dana3]."' hidden>
              <input type='text' name='table' value='".$table."' hidden>
              <input type='text' name='column' value='".$columnid."' hidden>
              <input type='submit' value='Usuń'>
              </form>
              
              </td>");
              echo("</tr>");
            }
            echo("</table>");
          }

          $sql = "SELECT * FROM lekarze";
          echo("<h3>Lekarze</h3>");
          echo("<li>".$sql."</li>");
          table($sql, $conn, "id_lekarza", "nazwisko", 'nazwisko', 'id_lekarza', 'lekarze');

          $sql = "SELECT * FROM pacjenci";
          echo("<h3>Pacjenci</h3>");
          echo("<li>".$sql."</li>");
          table($sql, $conn, "id_pacjenta", "imie", 'imie', 'id_pacjenta', 'pacjenci');

          $sql = "SELECT * FROM lekarze, pacjenci, lek_pac where lekarz = id_lekarza and pacjent = id_pacjenta ";
          echo("<h3>Lekarze I Pacjenci</h3>");
          echo("<li>".$sql."</li>");
          table2($sql, $conn, "id", "lekarz", "pacjent", 'imie', 'nazwisko', 'id', 'lek_pac');
        ?>
      </div>
    </div>
  </body>
</html>