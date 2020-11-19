<?php
require_once("connect.php");
$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) VALUES (null,'Ksawery', 3, 36,'1995-10-21')";

$conn->query($sql);

$conn->close();
?>