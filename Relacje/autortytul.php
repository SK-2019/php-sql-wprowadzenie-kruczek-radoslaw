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

      $result = $conn->query($sql) or die($conn->error);
      echo("<table border=0>");
      echo("<th>$columnid</th>");
      echo("<th>$column2</th>");
      while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id_autor']."</td><td>".$wiersz['$dana']."</td>");
        echo("</tr>");
      }
      echo("</table>");
    }


    $sql = "SELECT * FROM autor";
    echo("<h3>Autorzy</h3>");
    echo("<li>".$sql);
    table($sql, $conn, "id_autor", "autor", "nazwisko")

    $sql = "SELECT * FROM tytul";
    echo("<h3>Tytuły</h3>");
    echo("<li>".$sql);
    $result = $conn->query($sql) or die($conn->error);
    echo("<table border=0>");
    echo("<th>id_tytul</th>");
    echo("<th>tytul</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id_tytul']."</td><td>".$wiersz['tytul']."</td>");
        echo("</tr>");
    }
    echo("</table>");

    $sql = 'SELECT * FROM autor_tytul, autor, tytul where autor_id = id_autor and tytul_id = id_tytul';
    echo("<h3>Autorzy i Tytuły</h3>");
    echo("<li>".$sql);
    $result = $conn->query($sql) or die($conn->error);
    echo("<table border=0>");
    echo("<th>id</th>");
    echo("<th>nazwisko</th>");
    echo("<th>tytul</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id']."</td><td>".$wiersz['nazwisko']."</td><td>".$wiersz['tytul']."</td>");
        echo("</tr>");
    }
    echo("</table>");
    ?>
      </div>
    </div>
  </body>
</html>