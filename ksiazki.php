<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
</html>
<div class="nav">
    <a href="pracownicy.php">pracownicy</a>
    <a href="agregat.php">Funkcje Agregujące</a>
    <a href="Data_i_Czas.php">Data_i_czas</a>
    <a href="index.php">strona główna</a>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-kruczek-radoslaw">Github</a>
</div>


<?php
require_once("connect.php");
$sql = 'SELECT * FROM biblAutor';
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=0>");
echo("<th>id</th>");
echo("<th>autor</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id']."</td><td>".$wiersz['autor']."</td>");
        echo("</tr>");
    }
echo("</table>");
?>