<html>
    <head>
        <link rel="stylesheet" href="/style.css">
    </head>
<div class="container">
    <div class="item colorRed">
        <h1 class="title">Radosław Kruczek</h1>
    </div>
    <div class="item colorGreen">
    <form action='wypozyczalnia.php' method='POST'>
<?php
require_once("../connect.php");

$sql = ("SELECT * from biblAutor, biblTytul, biblAutor_biblTytul where biblAutor_id=autor_id and biblTytul_id=tytul_id and biblAutor_id ='".$_POST['autor']."'");

$result=$conn->query($sql);
        echo("<select name='tytul' id='tytul'>");

        while($wiersz=$result->fetch_assoc()) {
               
                    echo("<option value=".$wiersz['tytul_id'].">".$wiersz["tytul"]."</option>");}
                    echo("<input type='number' name='autor' value='".$_POST['autor']."' hidden></br>");
                    echo("<input type='Submit' value='Submit'><br>");
               
            
        echo("</select>");
?>