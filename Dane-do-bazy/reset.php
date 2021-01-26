<?php

require_once("connect.php");

system('mysql --user=radek --password=Radek2003! radek_009<Pobrane/bazaPracownicyOrganizacja.sql');


//definiujemy zapytanie $sql
//$sql ="source '".$_POST['com']."' ";

//wyświetlamy zapytanie $sql
//echo $sql;

//if ($conn->query($sql) === TRUE) {
  //echo ("<h2>Record deleted successfully</h2>");
  
} //else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
}
header('Location: daneDoBazy.php');
//$conn->close();
?>