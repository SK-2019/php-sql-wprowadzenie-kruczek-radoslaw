<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Radosław Kruczek</title>
	<link rel="stylesheet" href="/assets/style.css" />
</head>
<body>
<div class="container">
	<div class="header">
		<?php include("../assets/header.php"); ?>
	</div>
	<div class="menu">
	<?php include("../assets/menu.php"); ?>
	</div>
	<div class="main">
	<h3>dodawanie pracownika</h3>
	<form action="insert.php" method="POST">
	    <input type="text" name="name" placeholder="name"></br>
		<input type="number" name="dzial" placeholder="dzial"></br>
	    <input type="number" name="zarobki" placeholder="zarobki"></br>
        <input type="date" name="data_urodzenia" placeholder="data urodzenia"></br>
		<input type="submit" value="dodaj pracownika"></br>
	</form>
    
</body>
</html>

<?php


require_once("../assets/connect.php");
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
          echo("<td>".$wiersz["id_pracownicy"]."</td><td>".$wiersz["imie"]."</td><td>".$wiersz["nazwa_dzial"]."</td><td>".$wiersz["zarobki"]."</td><td>".$wiersz["data_urodzenia"]."</td>
		
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
	</div>
</div>
</body>
</html>