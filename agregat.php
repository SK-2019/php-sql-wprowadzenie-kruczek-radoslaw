<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
</html>
<div class="nav">
    <a href="index.php">strona główna </a>
    <a href="orgPracownicy.php">Org i Prac </a>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-kruczek-radoslaw">Github </a>
</div>

<?php
require_once("connect.php");
$sql = 'SELECT sum(zarobki) as suma_zarobki FROM tabela, organizacja where dzial = id_org';
echo("<h2>Zadanie 1</h2>");
echo("<h3>suma zrobków wszystkich pracowników</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>suma_zarobki</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['suma_zarobki']."</td>"); 
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT sum(zarobki) as suma_zarobki_kobiet FROM tabela, organizacja where dzial = id_org and imie like "%a"';
echo("<h2>Zadanie 2</h2>");
echo("<h3>suma zarobków kobiet</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>suma_zarobki_kobiet</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['suma_zarobki_kobiet']."</td>"); 
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT sum(zarobki) as suma_zarobki_mezczyzn FROM tabela, organizacja where dzial = id_org and imie not like "%a" and dzial in(2, 3)';
echo("<h2>Zadanie 3</h2>");
echo("<h3>suma zarobków mężczyzn w dziale 2 i 3</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>suma_zarobki_mezczyzn</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['suma_zarobki_mezczyzn']."</td>"); 
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT avg(zarobki) as srednia_zarobki_mezczyzn FROM tabela, organizacja where dzial = id_org and imie not like "%a" and dzial in(2, 3)';
echo("<h2>Zadanie 4</h2>");
echo("<h3>średnia zarobków wszystkich mężczyzn</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>srednia_zarobki_mezczyzn</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['srednia_zarobki_mezczyzn']."</td>"); 
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT avg(zarobki) as srednia_zarobki_pracownicy FROM tabela, organizacja where dzial = id_org and dzial = 4';
echo("<h2>Zadanie 5</h2>");
echo("<h3>średnia zarobków pracowników z działu 4</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>srednia_zarobki_pracownicy</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['srednia_zarobki_pracownicy']."</td>"); 
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT avg(zarobki) as srednia_zarobki_mezczyzn FROM tabela, organizacja where dzial = id_org and imie not like "%a" and dzial in(1, 2)';
echo("<h2>Zadanie 6</h2>");
echo("<h3>średnia zarobków mężczyzn z działów 1 i 2</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>srednia_zarobki_mezczyzn</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['srednia_zarobki_mezczyzn']."</td>"); 
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT count(imie) as ilosc_pracownicy FROM tabela, organizacja where dzial = id_org';
echo("<h2>Zadanie 7</h2>");
echo("<h3>ilu jest wszystkich pracowników</h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ilosc_pracownicy</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['ilosc_pracownicy']."</td>"); 
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT count(imie) as ilosc_kobiet FROM tabela, organizacja where dzial = id_org and imie like "%a" and dzial in(1, 3)';
echo("<h2>Zadanie 8</h2>");
echo("<h3>ile kobiet pracuje łącznie w działach 1 i 3 </h3>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>ilosc_kobiet</th>");
    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['ilosc_kobiet']."</td>"); 
        echo("</tr>");
    }
echo("</table>");
?>
