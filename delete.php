<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

</body>
</html>
<div class="nav">
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-kruczek-radoslaw">Github</a>
    <a href="daneDoBazy.php">Dane do Bazy</a>
    <a href="index.php">strona główna</a>
    
</div>




<?php
echo("<h1>jestes w delete.php </h1>");
echo "<li>".$_POST['id'];



require_once("connect.php");
//definiujemy zapytanie $sql
$sql = "DELETE  FROM pracownicy WHERE id_pracownicy= '".$_POST['id']."';";

//wyświetlamy zapytanie $sql
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo ("<h2>New record created successfully</h2>");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>