<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dane do Bazy</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="nav">
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-kruczek-radoslaw">Github</a>
    <a href="index.php">strona główna</a>
</div>
	<h3>dodawanie pracownika</h3>
	<form action="insert.php" method="POST">
	    <input type="text" name="name" placeholder="name"></br>
		<input type="number" name="dzial" placeholder="dzial"></br>
	    <input type="number" name="zarobki" placeholder="zarobki"></br>
        <input type="date" name="data_urodzenia" placeholder="data urodzenia"></br>
		<input type="submit" value="dodaj pracownika"></br>
	</form>
    <h3>resetowanie tabeli</h3>
	<form action="reset.php" method="POST">
	    <input type="text" name="com" value='-u radek -p radek_009 < bazaPracownicyOrganizacja.sql' hidden></br>
		<input type="submit" value="zresetuj tabelę"></br>
	</form>
</body>
</html>

<?php


require_once("connect.php");
$sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org';
$result = $conn->query($sql);
echo("<table border=0>");
echo("<th>id_pracownicy</th>");
echo("<th>imie</th>");
echo("<th>nazwa_dzial</th>");
echo("<th>zarobki</th>");
echo("<th>data_urodzenia</th>");

    while($wiersz=$result->fetch_assoc()){
        echo("<tr>");
          echo("<td>".$wiersz["id_pracownicy"]."</td><td>".$wiersz["imie"]."</td><td>".$wiersz["zarobki"]."</td><td>".$wiersz["data_urodzenia"]."</td><td>".$wiersz["data_urodzenia"]."</td>
		
		<td>
		
		
		<form action='delete.php' method='POST'>
   			<input type='number' name='id' value='".$wiersz['id_pracownicy']."' hidden></br>
   			<input type='submit' value='Usuń'>
		</form>
		
		</td>
		
		");
            echo("</tr>");
        }
echo("</table>");

?>