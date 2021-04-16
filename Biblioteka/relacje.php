<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Radosław Kruczek</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="item colorRed">
        <h1 class="title">Radosław Kruczek</h1>
      </div>
      <div class="item colorBlue">
        <ul class="nav">
        <li class="nav_item"><a href="Pracownicy/orgPracownicy.php">Organizacja i Pracownicy</a></li>
        <li class="nav_item"><a href="Pracownicy/agregat.php">Funkcje Agregujące</a></li>
        <li class="nav_item"><a href="Pracownicy/pracownicy.php">pracownicy</a></li>
        <li class="nav_item"><a href="Pracownicy/Data_i_Czas.php">Data i czas</a></li>
        <li class="nav_item"><a href="Dane-do-bazy/daneDoBazy.php">Dane do Bazy</a></li>
        <li class="nav_item"><a href="Biblioteka/ksiazki.php">Książki</a></li>
        <li class="nav_item"><a href="flexbox/flexbox.html">Flexbox</a></li>
        <li class="nav_item"><a href="../index.php">strona główna</a></li>
        <li class="nav_item"><a href="relacje.php">Relacje wiele do wielu</a></li>
        <li class="nav_item"><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kruczek-radoslaw">Github</a></li>
        </ul>
      </div>
      <div class="item colorGreen">
      <?php
      require_once("../connect.php");
    $sql = "SELECT * FROM autor";
    echo("<h3>Autorzy</h3>");
    echo("<li>".$sql);
    $result = $conn->query($sql) or die($conn->error);
    echo("<table border=0>");
    echo("<th>id</th>");
    echo("<th>nazwisko</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id']."</td><td>".$wiersz['nazwisko']."</td>");
        echo("</tr>");
    }
    echo("</table>");
    ?>
      </div>
    </div>
  </body>
</html>