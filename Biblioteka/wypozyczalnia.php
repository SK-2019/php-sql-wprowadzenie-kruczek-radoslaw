<html>
    <head>
        <link rel="stylesheet" href="/style.css">
    </head>
</html>

<?php

//echo("<li>autor: ".$_POST['autor']);
//echo("<li>tytuł: ".$_POST['tytul']);


require_once("../connect.php");

$sql = "INSERT INTO biblwypoz(id, wypautor_id, wyptytul_id) VALUES(null,'".$_POST['autor']."','".$_POST['tytul']."')";


$result=$conn->query($sql);

header('Location: ksiazki.php');
/*obsługa błędów zapisu do bazy
if ($conn->query($sql) === TRUE) {
    echo("<li>New record created successfully</li>");
    
  } else {
  //informacja o ewentualnych błędach
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
*/

?>