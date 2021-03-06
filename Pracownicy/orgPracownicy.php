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

        <?php

            ini_set('display_errors', '1');
            ini_set('display_startup_errors', '1');
            error_reporting(E_ALL);

            require_once("../assets/connect.php");

            function table($sql, $conn){

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
            }

            
            $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org';
            echo("<h2>Zadanie 1</h2>");
            echo("<h3>Pracownicy z nazwą działów</h3>");
            echo("<li>".$sql."</li>");
            table($sql, $conn);


            $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and dzial in(1, 4)';
            echo("<h2>Zadanie 2</h2>");
            echo("<h3>Pracownicy z działu 1 i 4</h3>");
            echo("<li>".$sql."</li>");
            table($sql, $conn);

            $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and imie like "%a"';
            echo("<h2>Zadanie 3</h2>");
            echo("<h3>Lista Kobiet z nazwami działów</h3>");
            echo("<li>".$sql."</li>");
            table($sql, $conn);

            $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and imie not like "%a"';
            echo("<h2>Zadanie 4</h2>");
            echo("<h3>Lista Mężczyzn z nazwami działów</h3>");
            echo("<li>".$sql."</li>");
            table($sql, $conn);

            $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org order by imie desc';
            echo("<h2>Zadanie 5</h2>");
            echo("<h3>pracownicy posortowani malejąco wg imienia</h3>");
            echo("<li>".$sql."</li>");
            table($sql, $conn);

            $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and dzial = 3 order by imie asc';
            echo("<h2>Zadanie 6</h2>");
            echo("<h3>pracownicy z działu 3 posortowani rosnąco po imieniu</h3>");
            echo("<li>".$sql."</li>");
            table($sql, $conn);

            $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and imie like "%a" order by imie asc';
            echo("<h2>Zadanie 7</h2>");
            echo("<h3>kobiety posortowane po imieniu rosnąco</h3>");
            echo("<li>".$sql."</li>");
            table($sql, $conn);

            $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and dzial in(1, 3)  and imie like "%a" order by zarobki asc';
            echo("<h2>Zadanie 8</h2>");
            echo("<h3>kobiety z działu 1 i 3 posortowane rosnąco po zarobkach</h3>");
            echo("<li>".$sql."</li>");
            table($sql, $conn);

            $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and imie not like "%a" order by id_org asc';
            echo("<h2>Zadanie 9</h2>");
            echo("<h3>Mężczyźni posortowani rosnąco po nazwie działu</h3>");
            echo("<li>".$sql."</li>");
            table($sql, $conn);

            $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and imie not like "%a" order by zarobki asc';
            echo("<h2>Zadanie 10</h2>");
            echo("<h3>Mężczyźni posortowani rosnąco po wysokości zarobków</h3>");
            echo("<li>".$sql."</li>");
            table($sql, $conn);

            $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and dzial = 4 order by zarobki desc limit 2';
            echo("<h2>Zadanie 11</h2>");
            echo("<h3>dwóch najlepiej zarabiających pracowników z działu 4</h3>");
            echo("<li>".$sql."</li>");
            table($sql, $conn);

            $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and dzial in(2, 4) and imie like "%a" order by zarobki desc limit 3';
            echo("<h2>Zadanie 12</h2>");
            echo("<h3>trzy najlepiej zarabiające kobiety z działu 4 i 2</h3>");
            echo("<li>".$sql."</li>");
            table($sql, $conn);

            $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org order by data_urodzenia asc limit 1';
            echo("<h2>Zadanie 13</h2>");
            echo("<h3>najstarszy pracownik</h3>");
            echo("<li>".$sql."</li>");
            table($sql, $conn);
            
        ?>
    </div>
</div>
</body>
</html>