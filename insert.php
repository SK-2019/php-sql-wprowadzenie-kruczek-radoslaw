<?php
echo("jestes w insert.php </br>");
echo "<li>". $_POST['name'];
echo "<li>". $_POST['dzial'];
echo "<li>". $_POST['zarobki'];
echo "<li>". $_POST['data_urodzenia'];


require_once("connect.php");
$sql = "INSERT INTO pracownicy (null, name, dzial,zarobki,data_urodzenia)
	      VALUES (
					null,". 
					$_POST['name'], 
					$_POST['dzial'], 
					$_POST['zarobki'],
					$_POST['data_urodzenia']
				;

echo("<li>". $sql);

$conn->query($sql);

$conn->close();
?>