<?php
echo("<h1>Radosław Kruczek</h1>");
$conn = new mysqli('sql7.freemysqlhosting.net', 'sql7373527', 'uQnUsHq6FQ', 'sql7373527');
$sql = 'SELECT * FROM tabela';
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
<?php
//echo("<h1>Radosław Kruczek</h1>");
$conn = new mysqli('sql7.freemysqlhosting.net', 'sql7373527', 'uQnUsHq6FQ', 'sql7373527');
$sql = 'SELECT * FROM tabela where imie like "%a"';
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
<?php
//echo("<h1>Radosław Kruczek</h1>");
$conn = new mysqli('sql7.freemysqlhosting.net', 'sql7373527', 'uQnUsHq6FQ', 'sql7373527');
$sql = 'SELECT * FROM tabela where dzial in(1, 2)';
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
<?php
//echo("<h1>Radosław Kruczek</h1>");
$conn = new mysqli('sql7.freemysqlhosting.net', 'sql7373527', 'uQnUsHq6FQ', 'sql7373527');
$sql = 'SELECT * FROM tabela where imie not like "%a" and dzial in(1, 3)';
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
<?php
//echo("<h1>Radosław Kruczek</h1>");
$conn = new mysqli('sql7.freemysqlhosting.net', 'sql7373527', 'uQnUsHq6FQ', 'sql7373527');
$sql = 'SELECT * FROM tabela where zarobki >30';
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