<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
</html>
<div class="nav">
    <a href="orgPracownicy.php">Org i Prac </a>
    <a href="agregat.php">Funkcje Agregujące </a>
    <a href="Data_i_Czas.php">Data_i_czas</a>
    <a href="index.php">strona główna </a>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-kruczek-radoslaw">Github </a>
   
</div>
<?php
    echo("<h1>Radosław Kruczek</h1>");
    require_once("connect.php");
    $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and dzial = 2';
    echo("<h2>Zadanie 1</h2>");
    echo("<h3>Pracownicy tylko z działu 2</h3>");
    echo("<li>".$sql);
    $result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>id_pracownicy</th>");
    echo("<th>imie</th>");
    echo("<th>nazwa_dzial</th>");
    echo("<th>zarobki</th>");
    echo("<th>data_urodzenia</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id_pracownicy']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['zarobki']."</td><td>".$wiersz['data_urodzenia']."</td>");
        echo("</tr>");
    }
    echo("</table>");
?>
<?php
    $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and dzial in(2, 3)';
    echo("<h2>Zadanie 2</h2>");
    echo("<h3>Pracownicy tylko z działu 2 i z działu 3</h3>");
    echo("<li>".$sql);
    $result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>id_pracownicy</th>");
    echo("<th>imie</th>");
    echo("<th>nazwa_dzial</th>");
    echo("<th>zarobki</th>");
    echo("<th>data_urodzenia</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id_pracownicy']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['zarobki']."</td><td>".$wiersz['data_urodzenia']."</td>");
        echo("</tr>");
    }
    echo("</table>");
?>
<?php
    $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and zarobki < 30';
    echo("<h2>Zadanie 3</h2>");
    echo("<h3>Pracownicy tylko z działu 2</h3>");
    echo("<li>".$sql);
    $result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>id_pracownicy</th>");
    echo("<th>imie</th>");
    echo("<th>nazwa_dzial</th>");
    echo("<th>zarobki</th>");
    echo("<th>data_urodzenia</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id_pracownicy']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['zarobki']."</td><td>".$wiersz['data_urodzenia']."</td>");
        echo("</tr>");
    }
    echo("</table>");
?>