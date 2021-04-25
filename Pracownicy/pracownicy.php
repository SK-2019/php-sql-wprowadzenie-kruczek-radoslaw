<html>
    <head>
        <link rel="stylesheet" href="/assets/style.css">
        <title>Pracownicy</title>
    </head>

<div class="container">
    <div class="header">
        
        <?php include("../assets/header.php"); ?>
    </div>
    <div class="menu">
    <?php include("../assets/menu.php"); ?>
    </div>
    <div class="main">
        
        <?php
            include_once("../assets/functions.php");
            $p = "SELECT * FROM pracownicy, organizacja where dzial = id_org";
            echo("<h2>Zadanie 1</h2>");
            echo("<h3>Pracownicy tylko z działu 2</h3>");
            echo("<li>".$p);
            table($p);
            
            require_once("../assets/connect.php");
            $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and dzial in(2, 3)';
            echo("<h2>Zadanie 2</h2>");
            echo("<h3>Pracownicy tylko z działu 2 i z działu 3</h3>");
            echo("<li>".$sql);
            $result = $conn->query($sql);
            echo("<table border=0>");
            echo("<th>id_pracownicy</th>");
            echo("<th>imie</th>");
            echo("<th>nazwa_dzial</th>");
            echo("<th>zarobki</th>");
            echo("<th>data_urodzenia</th>");
            while($wiersz=$result->fetch_assoc()){
                echo("<tr>");
                echo("<td>".$wiersz['id_pracownicy']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['zarobki']."</td><td>".$wiersz['data_urodzenia']."</td>");
                echo("</tr>");
            }
            echo("</table>");

            $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and zarobki < 30';
            echo("<h2>Zadanie 3</h2>");
            echo("<h3>Pracownicy tylko z zarobkami mniejszymi niż 30</h3>");
            echo("<li>".$p);
            $result = $conn->query($sql);
            echo("<table border=0>");
            echo("<th>id_pracownicy</th>");
            echo("<th>imie</th>");
            echo("<th>nazwa_dzial</th>");
            echo("<th>zarobki</th>");
            echo("<th>data_urodzenia</th>");
            while($wiersz=$result->fetch_assoc()){
                echo("<tr>");
                echo("<td>".$wiersz['id_pracownicy']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['zarobki']."</td><td>".$wiersz['data_urodzenia']."</td>");
                echo("</tr>");
            }
            echo("</table>");   
            
        ?>

    </div>
</div>
</html>