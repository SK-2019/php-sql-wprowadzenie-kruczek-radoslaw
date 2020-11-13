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
echo("<table border=0>");
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
echo("<table border=0>");
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
echo("<table border=0>");
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
echo("<table border=0>");
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
echo("<table border=0>");
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
echo("<table border=0>");
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
echo("<table border=0>");
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
echo("<table border=0>");
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
$sql = 'SELECT *, max(YEAR(curdate())-YEAR(data_urodzenia)) AS najstarszy FROM pracownicy, organizacja where dzial = id_org group by dzial';
echo("<h2>Zadanie 9</h2>");
echo("<h3>najstarsi pracownicy w każdym dziale</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=0>");
echo("<th>dzial</th>");
echo("<th>najstarszy pracownik</th>");
echo("<th>wiek</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['najstarszy']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT *, min(YEAR(curdate())-YEAR(data_urodzenia)) AS najmlodszy FROM pracownicy, organizacja where dzial = id_org and dzial in(1, 2) group by dzial';
echo("<h2>Zadanie 10</h2>");
echo("<h3>najmłodsi pracownicy z działu handel i serwis</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=0>");
echo("<th>dzial</th>");
echo("<th>wiek</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['najmlodszy']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT *, min(YEAR(curdate())-YEAR(data_urodzenia)) AS najmlodszy FROM pracownicy, organizacja where dzial = id_org and dzial in(1, 2) group by dzial';
echo("<h2>Zadanie 11</h2>");
echo("<h3>najmłodsi pracownicy z działu handel i serwis</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=0>");
echo("<th>dzial</th>");
echo("<th>najmłodszy pracownik</th>");
echo("<th>wiek</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['najmlodszy']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT imie,DATEDIFF(CURDATE(),data_urodzenia) AS dni_zycia FROM pracownicy';
echo("<h2>Zadanie 12</h2>");
echo("<h3>długość życia pracowników w dniach</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=0>");
echo("<th>imie</th>");
echo("<th>dni życia</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['imie']."</td><td>".$wiersz['dni_zycia']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * FROM pracownicy, organizacja WHERE dzial = id_org and imie NOT LIKE "%a" ORDER BY data_urodzenia ASC LIMIT 1';
echo("<h2>Zadanie 13</h2>");
echo("<h3>najstarszy mężczyzna</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=0>");
echo("<th>imie</th>");
echo("<th>dzial</th>");
echo("<th>zarobki</th>");
echo("<th>data urodzenia</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['imie']."</td><td>".$wiersz['dzial']."</td><td>".$wiersz['zarobki']."</td><td>".$wiersz['data_urodzenia']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT *, DATE_FORMAT(data_urodzenia,"%W") from pracownicy';
echo("<h2>Zadanie 14</h2>");
echo("<h3>wyświetl nazwy dni w dacie urodzenia</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=0>");
echo("<th>id</th>");
echo("<th>imie</th>");
echo("<th>dzial</th>");
echo("<th>zarobki</th>");
echo("<th>data urodzenia</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id_pracownicy']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['dzial']."</td><td>".$wiersz['zarobki']."</td><td>".$wiersz['DATE_FORMAT(data_urodzenia,"%W-%m-%Y")']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
