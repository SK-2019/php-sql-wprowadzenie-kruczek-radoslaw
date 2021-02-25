<?php
//require_once("config.php");
$conn = new mysqli($_SERVER['MYSQL_SERV'],$_SERVER['MYSQL_NAME'], $_SERVER['MYSQL_PS'], $_SERVER['MYSQL_DB']);
if ($conn->connect_error) {
    die("connection failed: ".mysqli_connect_error());
}
?>