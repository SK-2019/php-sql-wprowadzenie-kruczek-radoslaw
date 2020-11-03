<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
</html>
<?php
    echo("<h1>Radosław Kruczek</h1>");
    require_once("connect.php");
    $sql = 'SELECT * FROM tabela, organizacja where dzial = id_org';
    echo("<h2>Zadanie 1</h2>");
    echo("<li>".$sql);
    $result = $conn->query($sql);
    echo("<table border=1>");
    echo("<th>id</th>");
    echo("<th>imie</th>");
    echo("<th>nazwa_dzial</th>");
    echo("<th>zarobki</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['zarobki']."</td><td>");
        echo("</tr>");
    }
    echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * FROM tabela where imie like "%a"';
echo("<h2>Zadanie 2</h2>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>imie</th>");
echo("<th>dzial</th>");
echo("<th>zarobki</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['dzial']."</td><td>".$wiersz['zarobki']."</td><td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * FROM tabela where dzial in(1, 2)';
echo("<h2>Zadanie 3</h2>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>imie</th>");
echo("<th>dzial</th>");
echo("<th>zarobki</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['dzial']."</td><td>".$wiersz['zarobki']."</td><td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * FROM tabela where imie not like "%a" and dzial in(1, 3)';
echo("<h2>Zadanie 4</h2>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>imie</th>");
echo("<th>dzial</th>");
echo("<th>zarobki</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['dzial']."</td><td>".$wiersz['zarobki']."</td><td>");
        echo("</tr>");
    }
echo("</table>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * FROM tabela where zarobki >30';
echo("<h2>Zadanie 5</h2>");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>imie</th>");
echo("<th>dzial</th>");
echo("<th>zarobki</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['dzial']."</td><td>".$wiersz['zarobki']."</td><td>");
        echo("</tr>");
    }
echo("</table>");
?>
