<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
</html>

<?php

echo("<li>autor: ".$_POST['autor']);
echo("<li>tytuł: ".$_POST['tytul']);


require_once("connect.php");

$sql = "INSERT INTO biblAutor_biblTytul(id, biblAutor_id, biblTytul_id) VALUES(null,'".$_POST['autor']."','".$_POST['tytul']."')";


$result=$conn->query($sql);

//obsługa błędów zapisu do bazy
if ($conn->query($sql) === TRUE) {
    echo("<li>New record created successfully</li>");
    
  } else {
  //informacja o ewentualnych błędach
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
//header('Location: ksiazki.php');

?>