<html>
    <head>
        <link rel="stylesheet" href="/style.css">
    </head>
<div class="container">
    <div class="item colorRed">
        <h1 class="title">Radosław Kruczek</h1>
    </div>
    <div class="item colorBlue">
        <a href="../Pracownicy\orgPracownicy.php">Organizacja i Pracownicy</a>
        <a href="../Pracownicy\agregat.php">Funkcje Agregujące</a>
        <a href="../Pracownicy\pracownicy.php">pracownicy</a>
        <a href="../Pracownicy\Data_i_Czas.php">Data i czas</a>
        <a href="../Dane-do-bazy\daneDoBazy.php">Dane do Bazy</a>
        <a href="../index.php">strona główna</a>
        <a href="https://github.com/SK-2019/php-sql-wprowadzenie-kruczek-radoslaw">Github</a>
    </div>
    <div class="item colorGreen">

<?php


require_once("../connect.php");

$sql = ("SELECT * from biblAutor");


$result=$conn->query($sql);
        echo("<select name='autor' id='autor'>");

        while($wiersz=$result->fetch_assoc()) {
               
                    echo("<option value=".$wiersz['autor_id'].">".$wiersz["autor"]."</option>");}
                    //echo("<input type='Submit' value='Submit'><br>");
               
            
        echo("</select>");



?>

<?php
require_once("../connect.php");

$sql = ("SELECT * from biblTytul");

<form action='Biblioteka\wypozyczalnia.php' method='POST'>
$result=$conn->query($sql);
        echo("<select name='tytul' id='tytul'>");

        while($wiersz=$result->fetch_assoc()) {
               
                    echo("<option value=".$wiersz['tytul_id'].">".$wiersz["tytul"]."</option>");}
                    echo("<input type='Submit' value='Submit'><br>");
               
            
        echo("</select>");
?>
</form>
<?php
require_once("../connect.php");
$sql = ("SELECT * from biblAutor, biblTytul, biblAutor_biblTytul where biblAutor_id=autor_id and biblTytul_id=tytul_id");
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=0>");
echo("<th>id</th>");
echo("<th>autor</th>");
echo("<th>tytul</th>");

            
while($row=$result->fetch_assoc()) {
    echo("<tr>");
        echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>
        <td>
        <form action='delete_bibl.php' method='POST'>
        <input type='number' name='id' value='".$row['id']."' hidden></br>
        <input type='submit' value='Usuń'>
        </form></td>");
    echo("</tr>");
}

echo("</table>");

?>
    </div>
</div>