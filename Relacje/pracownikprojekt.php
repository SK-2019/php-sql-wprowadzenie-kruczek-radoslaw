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
          $sql = "SELECT * FROM pracownik";
          echo("<h3>Pracownicy</h3>");
          echo("<li>".$sql);
          $result = $conn->query($sql) or die($conn->error);
          echo("<table border=0>");
          echo("<th>id</th>");
          echo("<th>imie</th>");
          echo("<th>wynagrodzenie</th>");
          echo("<th>Data urodzenia</th>");

          while($wiersz=$result->fetch_assoc()){
              echo("<tr>");
              echo("<td>".$wiersz['id_pracownika']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['wynagrodzenie']."</td><td>".$wiersz['dataUrodzenia']."</td>");
              echo("</tr>");
          }
          echo("</table>");

          $sql = "SELECT * FROM projekt";
          echo("<h3>Projekty</h3>");
          echo("<li>".$sql);
          $result = $conn->query($sql) or die($conn->error);
          echo("<table border=0>");
          echo("<th>id_projektu</th>");
          echo("<th>projekt</th>");

          while($wiersz=$result->fetch_assoc()){
              echo("<tr>");
              echo("<td>".$wiersz['id_projektu']."</td><td>".$wiersz['nazwa']."</td>");
              echo("</tr>");
          }
          echo("</table>");

          $sql = "SELECT * FROM pracownik, projekt, prac_proj where pracownik = id_pracownika and projekt = id_projektu";
          echo("<h3>Pracownicy i projekty</h3>");
          echo("<li>".$sql);
          $result = $conn->query($sql) or die($conn->error);
          echo("<table border=0>");
          echo("<th>id</th>");
          echo("<th>Pracownik</th>");
          echo("<th>Projekt</th>");

          while($wiersz=$result->fetch_assoc()){
              echo("<tr>");
              echo("<td>".$wiersz['id']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['nazwa']."</td>");
              echo("</tr>");
          }
          echo("</table>");
          ?>
      </div>
    </div>
  </body>
</html>