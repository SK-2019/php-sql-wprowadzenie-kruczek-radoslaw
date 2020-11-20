<?php
echo("jestes w insert.php </br>");
echo "<li>". $_POST['name'];
echo "<li>". $_POST['dzial'];
echo "<li>". $_POST['zarobki'];
echo "<li>". $_POST['data_urodzenia'];


require_once("connect.php");
$sql = "INSERT INTO Pracownicy (null, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null,'Balbina', 4, 86,'1999-05-21')";

//obsługa błędów zapisu do bazy
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//informacja o ewentualnych błędach
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>