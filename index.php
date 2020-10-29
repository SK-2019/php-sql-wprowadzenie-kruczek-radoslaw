<?php
echo("<h1>zadanie praktyczne</h1>");
$conn = new mysqli('localhost', 'admin', '@', 'nauka');
$sql = 'SELECT * FROM pracownicy';
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=1>");
echo("<th>id</th>");
echo("<th>imie</th>");
echo("<th>dzial</th>");
echo("<th>zarobki</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['dzial']."</td><td>".$wiersz['zarobki']."</td><td>");
        echo("</tr>");
    }
echo("</table>");
?>