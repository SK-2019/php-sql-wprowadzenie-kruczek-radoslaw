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


          function table($sql, $conn, $columnid, $column2, $dana, $table){

            $result = $conn->query($sql);
            echo("<table border=0>");
            echo("<th>$columnid</th>");
            echo("<th>$column2</th>");
            while($wiersz=$result->fetch_assoc()){
              echo("<tr>");
              echo("<td>".$wiersz[$columnid]."</td><td>".$wiersz[$dana]."</td><td>
		
		
              <form action='delete.php' method='POST'>
              <input type='number' name='row' value='".$wiersz[$columnid]."' hidden>
              <input type='text' name='table' value='".$table."' hidden>
              <input type='text' name='column' value='".$columnid."' hidden>
              <input type='submit' value='Usuń'>
              </form>
              
              </td>");
              echo("</tr>");
            }
            echo("</table>");
          }


          $sql = "SELECT * FROM autor";
          echo("<h3>Autorzy</h3>");
          echo("<li>".$sql."</li>");
          table($sql, $conn, "id_autor", "autor", 'nazwisko', 'autor');

          $sql = "SELECT * FROM tytul";
          echo("<h3>Tytuły</h3>");
          echo("<li>".$sql."</li>");
          table($sql, $conn, "id_tytul", "tytul", 'tytul', 'tytul');

          $sql = 'SELECT * FROM autor_tytul, autor, tytul where autor_id = id_autor and tytul_id = id_tytul';
          echo("<h3>Autorzy i Tytuły</h3>");
          echo("<li>".$sql."</li>");
          table($sql, $conn, "nazwisko", "tytul", 'tytul', 'autor_tytul');
        ?>
      </div>
    </div>
  </body>
</html>