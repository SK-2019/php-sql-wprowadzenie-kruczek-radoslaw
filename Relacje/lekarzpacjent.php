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
      
      
          function table($sql, $conn, $columnid, $column2, $dana){
      
            $result = $conn->query($sql);
            echo("<table border=0>");
            echo("<th>$columnid</th>");
            echo("<th>$column2</th>");
            while($wiersz=$result->fetch_assoc()){
              echo("<tr>");
              echo("<td>".$wiersz[$columnid]."</td><td>".$wiersz[$dana]."</td>");
              echo("</tr>");
            }
            echo("</table>");
          }

          $sql = "SELECT * FROM lekarze";
          echo("<h3>Lekarze</h3>");
          echo("<li>".$sql);
          table($sql, $conn, "id_lekarza", "nazwisko", 'nazwisko');

          $sql = "SELECT * FROM pacjenci";
          echo("<h3>Pacjenci</h3>");
          echo("<li>".$sql);
          table($sql, $conn, "id_pacjenta", "imie", 'imie');

          $sql = "SELECT * FROM lekarze, pacjenci, lek_pac where lekarz = id_lekarza and pacjent = id_pacjenta ";
          echo("<h3>Lekarze I Pacjenci</h3>");
          echo("<li>".$sql);
          $result = $conn->query($sql) or die($conn->error);
          echo("<table border=0>");
          echo("<th>id</th>");
          echo("<th>lekarz</th>");
          echo("<th>pacjent</th>");

          while($wiersz=$result->fetch_assoc()){
              echo("<tr>");
              echo("<td>".$wiersz['id']."</td><td>".$wiersz['nazwisko']."</td><td>".$wiersz['imie']."</td>");
              echo("</tr>");
          }
          echo("</table>");
          table($sql, $conn, "nazwisko", "pacjent", 'imie');
        ?>
      </div>
    </div>
  </body>
</html>