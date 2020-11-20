<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
</html>

<?php


	echo("<h1>jesteś na stronie.php</h1>");
	
	echo("<ul>");
	
    echo("<li>Imie: ".$_POST["firstname"]);
    echo("<li>Nazwisko: ".$_POST["lastname"]);
    echo("<li>Miasto: ".$_POST["city"]);
    echo("<li>Telefon: ".$_POST["phone"]);
    echo("<li>Kod Pocztowy: ".$_POST["poscode"]);
		
	echo("<ul>");
?>
