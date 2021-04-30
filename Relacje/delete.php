

<?php
echo("<h1>jestes w delete.php </h1>");



require_once("../connect.php");

function delete($table, $column, $row){
//definiujemy zapytanie $sql
$sql = "DELETE  FROM $table WHERE $column = $row";

//wyświetlamy zapytanie $sql
echo $sql;

if ($conn->query($sql) === TRUE) {
  echo ("<h2>Record deleted successfully</h2>");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

delete($_POST['table'], $_POST['column'], $_POST['row']);

?>