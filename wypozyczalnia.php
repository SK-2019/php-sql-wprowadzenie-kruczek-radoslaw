<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
</html>

<?php

echo("<li>autor: ".$_POST['autor']);
echo("<li>tytuł: ".$_POST['tytul']);


require_once("connect.php");

$sql = ("INSERT INTO biblAutor_biblTytul(id, biblAutor_id, biblTytul_id) VALUES(null,".$_POST['autor'].",".$_POST['tytul']."");


$result=$conn->query($sql);

$conn->close();

header('Location: ksiazki.php');

?>