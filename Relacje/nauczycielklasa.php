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
          require_once("../assets/connect.php");
          $sql = "SELECT * FROM nauczyciele";
          echo("<h3>Nauczyciele</h3>");
          echo("<li>".$sql);
          $result = $conn->query($sql) or die($conn->error);
          echo("<table border=0>");
          echo("<th>id_nauczyciela</th>");
          echo("<th>nazwisko</th>");

          while($wiersz=$result->fetch_assoc()){
              echo("<tr>");
              echo("<td>".$wiersz['id_Nauczyciela']."</td><td>".$wiersz['nazwisko']."</td>");
              echo("</tr>");
          }
          echo("</table>");

          $sql = "SELECT * FROM klasy";
          echo("<h3>Klasy</h3>");
          echo("<li>".$sql);
          $result = $conn->query($sql) or die($conn->error);
          echo("<table border=0>");
          echo("<th>id_klasy</th>");
          echo("<th>klasa</th>");

          while($wiersz=$result->fetch_assoc()){
              echo("<tr>");
              echo("<td>".$wiersz['id_klasy']."</td><td>".$wiersz['klasa']."</td>");
              echo("</tr>");
          }
          echo("</table>");

          $sql = "SELECT * FROM nauczyciele, klasy, naucz_klasa where nazwa_nauczyciel = id_Nauczyciela and nazwa_klasa = id_klasy ";
          echo("<h3>Nauczyciele i Klasy</h3>");
          echo("<li>".$sql);
          $result = $conn->query($sql) or die($conn->error);
          echo("<table border=0>");
          echo("<th>id_klasy</th>");
          echo("<th>klasa</th>");

          while($wiersz=$result->fetch_assoc()){
              echo("<tr>");
              echo("<td>".$wiersz['id']."</td><td>".$wiersz['nauczyciel']."</td><td>".$wiersz['klasa']."</td>");
              echo("</tr>");
          }
          echo("</table>");
        ?>
      </div>
    </div>
  </body>
</html>