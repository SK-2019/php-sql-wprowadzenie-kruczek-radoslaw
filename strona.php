<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
</html>

<?php


	echo("<h1>jesteś na stronie.php</h1>");
	
	echo("<ul>");
	
    echo("<li>".$_POST["firstname"]);
    echo("<li>".$_POST["lastname"]);
    echo("<li>".$_POST["city"]);
    echo("<li>".$_POST["phone"]);
    echo("<li>".$_POST["poscode"]);
		
	echo("<ul>");
?>
