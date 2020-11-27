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
echo("<h1>jestes w insert.php </h1>");
echo "<li>Imie: ". $_POST['name'];
echo "<li>Dzial: ". $_POST['dzial'];
echo "<li>zarobki: ". $_POST['zarobki'];
echo "<li>data urodzenia: ". $_POST['data_urodzenia'];


require_once("connect.php");
$sql = "INSERT INTO pracownicy (id_pracownicy,imie, dzial, zarobki, data_urodzenia) 
        VALUES (null,'".$_POST['name']."', ".$_POST['dzial'].", ".$_POST['zarobki'].",'".$_POST['data_urodzenia']."')";

//obsługa błędów zapisu do bazy
if ($conn->query($sql) === TRUE) {
  echo("<li>New record created successfully</li>");
  header('Location: daneDoBazy.php');
} else {
//informacja o ewentualnych błędach
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>