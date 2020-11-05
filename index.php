<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
</html>
<div class="nav">
    <a href="orgPracownicy.php">Org i Prac </a>
    <a href="agregat.php">Funkcje Agregujące </a>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-kruczek-radoslaw">Github </a>
</div>
<?php
    echo("<h1>Radosław Kruczek</h1>");
    require_once("connect.php");
    $sql = 'SELECT * FROM tabela, organizacja where dzial = id_org';
    echo("<h2>Zadanie 1</h2>");
    echo("<h3>Wyświetl wszystkich pracowników</h3>");
    echo("<li>".$sql);
    $result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>id</th>");
    echo("<th>imie</th>");
    echo("<th>nazwa_dzial</th>");
    echo("<th>zarobki</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['zarobki']."</td>");
        echo("</tr>");
    }
    echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * FROM tabela, organizacja where dzial = id_org and imie like "%a"';
echo("<h2>Zadanie 2</h2>");
echo("<h3>Wyświetl wszystkie kobiety</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>imie</th>");
echo("<th>nazwa_dzial</th>");
echo("<th>zarobki</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['zarobki']."</td>"); 
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * FROM tabela, organizacja where dzial = id_org and dzial in(1, 2)';
echo("<h2>Zadanie 3</h2>");
echo("<h3>Wyświetl wszystkich pracowników z działu serwis i handel</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>imie</th>");
echo("<th>nazwa_dzial</th>");
echo("<th>zarobki</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['zarobki']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * FROM tabela, organizacja where dzial = id_org and imie not like "%a" and dzial in(1, 3)';
echo("<h2>Zadanie 4</h2>");
echo("<h3>Wyświetl wszystkich męszczyzn z działu serwis i marketing</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>imie</th>");
echo("<th>nazwa_dzial</th>");
echo("<th>zarobki</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['zarobki']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * FROM tabela, organizacja where dzial = id_org and zarobki >30';
echo("<h2>Zadanie 5</h2>");
echo("<h3>Wyświetl wszystkich pracowników zarabiających więcej niż 30</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>imie</th>");
echo("<th>nazwa_dzial</th>");
echo("<th>zarobki</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['zarobki']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT max(zarobki) as maksymalne_zarobki FROM tabela, organizacja where dzial = id_org';
echo("<h2>Zadanie 6</h2>");
echo("<h3>Wyświetl maksymalne zarobki</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>maksymalne_zarobki</th>");
/*echo("<th>imie</th>");
echo("<th>nazwa_dzial</th>");
echo("<th>zarobki</th>");*/

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['maksymalne_zarobki']."</td>"); //<td>".$wiersz['imie']."</td><td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['zarobki']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT avg(zarobki) as srednia_zarobkow FROM tabela, organizacja where dzial = id_org and dzial in(1, 3)';
echo("<h2>Zadanie 7</h2>");
echo("<h3>Wyświetl średnią zarobków z działów serwis i marketing</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>srednia_zarobkow</th>");
/*echo("<th>imie</th>");
echo("<th>nazwa_dzial</th>");
echo("<th>zarobki</th>");*/

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['srednia_zarobkow']."</td>"); //<td>".$wiersz['imie']."</td><td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['zarobki']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT min(zarobki) as minimalne_zarobki FROM tabela, organizacja where dzial = id_org';
echo("<h2>Zadanie 8</h2>");
echo("<h3>Wyświetl minmalne zarobki</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>minimalne_zarobki</th>");
/*echo("<th>imie</th>");
echo("<th>nazwa_dzial</th>");
echo("<th>zarobki</th>");*/

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['minimalne_zarobki']."</td>"); //<td>".$wiersz['imie']."</td><td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['zarobki']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>