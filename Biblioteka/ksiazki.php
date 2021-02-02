<html>
    <head>
        <link rel="stylesheet" href="/style.css">
    </head>
<div class="container">
    <div class="item colorRed">
        <h1 class="title">Radosław Kruczek</h1>
    </div>
    <div class="item colorBlue">
        <ul>
        <li><a href="../Pracownicy\orgPracownicy.php">Organizacja i Pracownicy</a></li>
        <li><a href="../Pracownicy\agregat.php">Funkcje Agregujące</a></li>
        <li><a href="../Pracownicy\pracownicy.php">pracownicy</a></li>
        <li><a href="../Pracownicy\Data_i_Czas.php">Data i czas</a></li>
        <li><a href="../Dane-do-bazy\daneDoBazy.php">Dane do Bazy</a></li>
        <li><a href="../index.php">strona główna</a></li>
        <li><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kruczek-radoslaw">Github</a></li>
        </ul>
    </div>
    <div class="item colorGreen">
    <form action='wypozyczalnia.php' method='POST'>
<?php




    require_once("../connect.php");

    $sql = ("SELECT * from biblAutor");


    $result=$conn->query($sql);
        echo("<select name='autor' id='autor'>");

        while($wiersz=$result->fetch_assoc()) {
               
                    echo("<option value=".$wiersz['autor_id'].">".$wiersz["autor"]."</option>");}
                    
            
        echo("</select>");



?>


<?php
require_once("../connect.php");

//$sql = ("SELECT * from biblAutor, biblTytul, biblAutor_biblTytul where biblAutor_id=autor_id and biblTytul_id=tytul_id and biblAutor_id ='".$_POST['autor']."'");
$sql = ("SELECT * from biblTytul");

$result=$conn->query($sql);
        echo("<select name='tytul' id='tytul'>");

        while($wiersz=$result->fetch_assoc()) {
               
                    echo("<option value=".$wiersz['tytul_id'].">".$wiersz["tytul"]."</option>");}
                   //echo("<input type='number' name='autor' value='".$_POST['autor']."' hidden></br>");
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