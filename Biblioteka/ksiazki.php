<html>
    <head>
        <link rel="stylesheet" href="/style.css">
        <title>Biblioteka</title>
    </head>
<div class="container">
    <div class="header">
  
        <?php include("../header.php"); ?>
    </div>
    <div class="menu">
    <?php include("../menu.php"); ?>
    </div>
    <div class="main">
    <form action='ksiazki2.php' method='POST'>
<?php




    require_once("../connect.php");

    $sql = ("SELECT * from biblAutor");


    $result=$conn->query($sql);
        echo("<select name='autor' id='autor'>");

        while($wiersz=$result->fetch_assoc()) {
               
                    echo("<option value=".$wiersz['autor_id'].">".$wiersz["autor"]."</option>");}
                    echo("<input type='Submit' value='Submit'><br>");
                    
            
        echo("</select>");



?>

</form>

<?php
require_once("../connect.php");
$sql = ("SELECT * from biblAutor, biblTytul, biblwypoz where wypautor_id=autor_id and wyptytul_id=tytul_id");
echo("<h2>Wypożyczone Książki</h2>");
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