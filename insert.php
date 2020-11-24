<?php
echo("jestes w insert.php </br>");
echo "<li>Imie: ". $_POST['name'];
echo "<li>Dzial: ". $_POST['dzial'];
echo "<li>zarobki: ". $_POST['zarobki'];
echo "<li>data urodzenia: ". $_POST['data_urodzenia'];


require_once("connect.php");
$sql = "INSERT INTO pracownicy (id_pracownicy,imie, dzial, zarobki, data_urodzenia) 
        VALUES (null,'".$_POST['name']."', ".$_POST['dzial'].", ".$_POST['zarobki'].",'".$_POST['data_urodzenia']."')";

//obsługa błędów zapisu do bazy
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//informacja o ewentualnych błędach
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>