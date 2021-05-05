

<?php
          ini_set('display_errors', '1');
          ini_set('display_startup_errors', '1');
          error_reporting(E_ALL);
echo("<h1>jestes w delete.php </h1>");



require_once("../assets/connect.php");

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