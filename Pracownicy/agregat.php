<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

function table($sql, $conn, $column, $dana){
    $result = $conn->query($sql);
    echo("<table border=0>");
    echo("<th>$column</th>");
        while($wiersz=$result->fetch_assoc()){
            echo("<tr>");
            echo("<td>".$wiersz[$dana]."</td>"); 
            echo("</tr>");
        }
    echo("</table>");

}

function table2($sql ,$conn, $column, $column2, $dana, $dana2){
    $result = $conn->query($sql);
    echo("<table border=0>");
    echo("<th>$column</th>");
    echo("<th>$column2</th>");
        while($wiersz=$result->fetch_assoc()){
            echo("<tr>");
            echo("<td>".$wiersz[$dana]."</td><td>".$wiersz[$dana2]."</td>"); 
            echo("</tr>");
        }
    echo("</table>");

}

$sql = 'SELECT sum(zarobki) as suma_zarobki FROM pracownicy, organizacja where dzial = id_org';
echo("<h2>Zadanie 1</h2>");
echo("<h3>suma zrobków wszystkich pracowników</h3>");
echo("<li>".$sql."</li>");
table($sql, $conn, "suma_zarobki", 'suma_zarobki');

$sql = 'SELECT sum(zarobki) as suma_zarobki_kobiet FROM pracownicy, organizacja where dzial = id_org and imie like "%a"';
echo("<h2>Zadanie 2</h2>");
echo("<h3>suma zarobków kobiet</h3>");
echo("<li>".$sql."</li>");
table($sql, $conn, "suma zarbki kobiet", 'suma_zarobki_kobiet');

$sql = 'SELECT sum(zarobki) as suma_zarobki_mezczyzn FROM pracownicy, organizacja where dzial = id_org and imie not like "%a" and dzial in(2, 3)';
echo("<h2>Zadanie 3</h2>");
echo("<h3>suma zarobków mężczyzn w dziale 2 i 3</h3>");
echo("<li>".$sql."</li>");
table($sql, $conn, "suma zarbki mężczyzn", 'suma_zarobki_mezczyzn');

$sql = 'SELECT avg(zarobki) as srednia_zarobki_mezczyzn FROM pracownicy, organizacja where dzial = id_org and imie not like "%a"';
echo("<h2>Zadanie 4</h2>");
echo("<h3>średnia zarobków wszystkich mężczyzn</h3>");
echo("<li>".$sql."</li>");
table($sql, $conn, "średnia zarobków mężczyzn", 'srednia_zarobki_mezczyzn');


$sql = 'SELECT avg(zarobki) as srednia_zarobki_pracownicy FROM pracownicy, organizacja where dzial = id_org and dzial = 4';
echo("<h2>Zadanie 5</h2>");
echo("<h3>średnia zarobków pracowników z działu 4</h3>");
echo("<li>".$sql."</li>");
table($sql, $conn, "średnia zarobków pracowników", 'srednia_zarobki_pracownicy');

$sql = 'SELECT avg(zarobki) as srednia_zarobki_mezczyzn FROM pracownicy, organizacja where dzial = id_org and imie not like "%a" and dzial in(1, 2)';
echo("<h2>Zadanie 6</h2>");
echo("<h3>średnia zarobków mężczyzn z działów 1 i 2</h3>");
echo("<li>".$sql."</li>");
table($sql, $conn, "średnia zarobków mężczyzn", 'srednia_zarobki_mezczyzn');

$sql = 'SELECT count(imie) as ilosc_pracownicy FROM pracownicy, organizacja where dzial = id_org';
echo("<h2>Zadanie 7</h2>");
echo("<h3>ilu jest wszystkich pracowników</h3>");
echo("<li>".$sql."</li>");
table($sql, $conn, "ilość pracowników", 'ilosc_pracownicy');

$sql = 'SELECT count(imie) as ilosc_kobiet FROM pracownicy, organizacja where dzial = id_org and imie like "%a" and dzial in(1, 3)';
echo("<h2>Zadanie 8</h2>");
echo("<h3>ile kobiet pracuje łącznie w działach 1 i 3 </h3>");
echo("<li>".$sql."</li>");
table($sql, $conn, "ilość kobiet", 'ilosc_kobiet');

$sql = 'SELECT nazwa_dzial, sum(zarobki) FROM pracownicy, organizacja where dzial = id_org group by dzial';
echo("<h2>Zadanie 9</h2>");
echo("<h3>suma zarobków w poszczególnych działach</h3>");
echo("<li>".$sql."</li>");
table2($sql ,$conn, "nazwa_dzial", "sum(zarobki)", 'nazwa_dzial', 'sum(zarobki)');

$sql = 'SELECT nazwa_dzial, count(imie) FROM pracownicy, organizacja where dzial = id_org group by dzial';
echo("<h2>Zadanie 10</h2>");
echo("<h3>ilość pracowników w poszczególnych działach</h3>");
echo("<li>".$sql."</li>");
table2($sql ,$conn, "nazwa_dzial", "count(imie)", 'nazwa_dzial', 'count(imie)');

$sql = 'SELECT nazwa_dzial, avg(zarobki) FROM pracownicy, organizacja where dzial = id_org group by dzial';
echo("<h2>Zadanie 11</h2>");
echo("<h3>średnie zarobków w poszczególnych działach</h3>");
echo("<li>".$sql."</li>");
table2($sql ,$conn, "nazwa_dzial", "avg(zarobki)", 'nazwa_dzial', 'avg(zarobki)');

$sql = 'SELECT sum(zarobki) as sum, if( (imie like "%a"), "mężczyźni","kobiety") as "plec" FROM pracownicy group by plec';
echo("<h2>Zadanie 12</h2>");
echo("<h3>suma zarobków kobiet i mężczyzn</h3>");
echo("<li>".$sql."</li>");
table2($sql ,$conn, "suma zarobków", "płeć", 'sum', 'plec');

$sql = 'SELECT avg(zarobki) as avg, if( (imie like "%a"), "mężczyźni","kobiety") as "plec" FROM pracownicy group by plec';
echo("<h2>Zadanie 13</h2>");
echo("<h3>średnia zarobków kobiet i mężczyzn</h3>");
echo("<li>".$sql."</li>");
table2($sql ,$conn, "średnia zarobków", "płeć", 'avg', 'plec');

$sql = 'SELECT nazwa_dzial, sum(zarobki) FROM pracownicy, organizacja where dzial = id_org group by dzial having sum(zarobki) < 28';
echo("<h2>Zadanie 14</h2>");
echo("<h3>suma zarobków w poszczególnych działach mniejsza niż 28</h3>");
echo("<li>".$sql."</li>");
table2($sql ,$conn, "nazwa_dzial", "suma zarobków", 'nazwa_dzial', 'sum(zarobki)');

$sql = 'SELECT nazwa_dzial, avg(zarobki) FROM pracownicy, organizacja where dzial = id_org and imie not like "%a" group by dzial having sum(zarobki) > 30';
echo("<h2>Zadanie 15</h2>");
echo("<h3>średnie zarobków mężczyzn w poszczególnych działach większe od 30</h3>");
echo("<li>".$sql."</li>");
table2($sql ,$conn, "nazwa_dzial", "średnia zarobków", 'nazwa_dzial', 'avg(zarobki)');

$sql = 'SELECT nazwa_dzial, count(imie) FROM pracownicy, organizacja where dzial = id_org group by dzial having count(imie) > 3';
echo("<h2>Zadanie 16</h2>");
echo("<h3>ilość pracowników w poszczególnych działach większa niż 3</h3>");
echo("<li>".$sql."</li>");
table2($sql ,$conn, "nazwa_dzial", "ilość pracowników", 'nazwa_dzial', 'count(imie)');
?>
    </div>
</div>
</body>
</html>