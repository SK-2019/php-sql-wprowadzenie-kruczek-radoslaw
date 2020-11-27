<?php

require_once("connect.php");
//definiujemy zapytanie $sql
$sql = $_POST['com'];

//wyświetlamy zapytanie $sql
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo ("<h2>Record deleted successfully</h2>");
  header('Location: daneDoBazy.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>