<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
</html>
<div class="nav">
    <a href="pracownicy.php">pracownicy</a>
    <a href="agregat.php">Funkcje Agregujące</a>
    <a href="orgPracownicy.php">Prac i Org</a>
    <a href="index.php">strona główna</a>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-kruczek-radoslaw">Github</a>
</div>


<?php
require_once("connect.php");
$sql = 'SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja where dzial=id_org;';
echo("<h2>Zadanie 1</h2>");
echo("<h3>wiek poszczególnych pracowników</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>imie</th>");
echo("<th>nazwa_dzial</th>");
echo("<th>wiek</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['imie']."</td><td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['wiek']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja where dzial = id_org and dzial = 1';
echo("<h2>Zadanie 2</h2>");
echo("<h3>wiek poszczególnych pracowników z działu serwis</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>imie</th>");
echo("<th>nazwa_dzial</th>");
echo("<th>wiek</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['imie']."</td><td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['wiek']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * ,sum(YEAR(curdate())-YEAR(data_urodzenia)) AS suma_wiek FROM pracownicy, organizacja where dzial = id_org';
echo("<h2>Zadanie 3</h2>");
echo("<h3>suma lat wszystkich pracowników</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>suma lat</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['suma_wiek']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * ,sum(YEAR(curdate())-YEAR(data_urodzenia)) AS suma_wiek FROM pracownicy, organizacja where dzial = id_org and dzial = 2';
echo("<h2>Zadanie 4</h2>");
echo("<h3>suma lat pracowników z działu handel</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>suma lat z działu handel</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['suma_wiek']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * ,sum(YEAR(curdate())-YEAR(data_urodzenia)) AS suma_wiek FROM pracownicy, organizacja where dzial = id_org and dzial = 2 and imie like "%a"';
echo("<h2>Zadanie 5</h2>");
echo("<h3>suma lat kobiet z działu handel</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>suma lat z działu handel</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['suma_wiek']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * ,sum(YEAR(curdate())-YEAR(data_urodzenia)) AS suma_wiek FROM pracownicy, organizacja where dzial = id_org and dzial = 2 and imie not like "%a"';
echo("<h2>Zadanie 6</h2>");
echo("<h3>suma lat mężczyzn z działu handel</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>suma lat z działu handel</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['suma_wiek']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * ,avg(YEAR(curdate())-YEAR(data_urodzenia)) AS srednia_wiek FROM pracownicy, organizacja where dzial = id_org group by dzial';
echo("<h2>Zadanie 7</h2>");
echo("<h3>średnia lat pracowników w poszczególnych działach</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>średnia lat z poszczególnych działów</th>");
echo("<th>dzial</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['srednia_wiek']."</td><td>".$wiersz['nazwa_dzial']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * ,sum(YEAR(curdate())-YEAR(data_urodzenia)) AS suma_wiek FROM pracownicy, organizacja where dzial = id_org group by dzial';
echo("<h2>Zadanie 8</h2>");
echo("<h3>suma lat pracowników w poszczególnych działach</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>suma lat z poszczególnych działów</th>");
echo("<th>dzial</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['suma_wiek']."</td><td>".$wiersz['nazwa_dzial']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * ,max((YEAR(curdate())-YEAR(data_urodzenia)) AS wiek FROM pracownicy, organizacja where dzial = id_org group by dzial';
echo("<h2>Zadanie 9</h2>");
echo("<h3>najstarsi pracownicy w każdym dziale</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>wiek</th>");
echo("<th>dzial</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['wiek']."</td><td>".$wiersz['nazwa_dzial']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>