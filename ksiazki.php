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

<?php
require_once("connect.php");

$sql = ("SELECT * from biblAutor");
echo("<li>".$sql."</li>");

$result=$conn->query($sql);
        echo("<select name='tytul' id='tytul'>");

        while($wiersz=$result->fetch_assoc()) {
               
                    echo("<option value=".$wiersz['id'].">".$wiersz["autor"]."</option>");}
                    echo("<input type='Submit' value='Sumbit'><br>");
               
            
        echo("</select>");



?>
</body>
<?php
require_once("connect.php");

$sql = ("SELECT * from biblTytul");
echo("<li>".$sql."</li>");

$result=$conn->query($sql);
        echo("<select name='tytul' id='tytul'>");

        while($wiersz=$result->fetch_assoc()) {
               
                    echo("<option value=".$wiersz['id'].">".$wiersz["tytul"]."</option>");}
                    echo("<input type='Submit' value='Sumbit'><br>");
               
            
        echo("</select>");
?>
<?php
require_once("connect.php");
$sql = 'SELECT * FROM biblAutor_biblTytul';
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