<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>

<div class="nav">
    <a href="pracownicy.php">pracownicy</a>
    <a href="agregat.php">Funkcje Agregujące</a>
    <a href="Data_i_Czas.php">Data_i_czas</a>
    <a href="index.php">strona główna</a>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-kruczek-radoslaw">Github</a>
</div>
<h1>Radosław Kruczek</h1>
<form action='wypozyczalnia.php' method='POST'>
<?php


require_once("connect.php");

$sql = ("SELECT * from biblAutor");


$result=$conn->query($sql);
        echo("<select name='autor' id='autor'>");

        while($wiersz=$result->fetch_assoc()) {
               
                    echo("<option value=".$wiersz['id'].">".$wiersz["autor"]."</option>");}
                    //echo("<input type='Submit' value='Submit'><br>");
               
            
        echo("</select>");



?>
</body>
<?php
require_once("connect.php");

$sql = ("SELECT * from biblTytul");


$result=$conn->query($sql);
        echo("<select name='tytul' id='tytul'>");

        while($wiersz=$result->fetch_assoc()) {
               
                    echo("<option value=".$wiersz['id'].">".$wiersz["tytul"]."</option>");}
                    echo("<input type='Submit' value='Submit'><br>");
               
            
        echo("</select>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul where biblAutor_id = autor_id and biblTytul_id = tytul_id';
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=0>");
echo("<th>id</th>");
echo("<th>biblAutor_id</th>");
echo("<th>biblTytul_id</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id']."</td><td>".$wiersz['biblAutor_id']."</td><td>".$wiersz['biblTytul_id']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>
</form>