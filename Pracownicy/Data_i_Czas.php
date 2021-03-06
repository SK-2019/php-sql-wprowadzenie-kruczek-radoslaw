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

            function table($sql, $conn, $dana, $dana2){

                $result = $conn->query($sql);
                echo("<table border=0>");
                echo("<th>id_pracownicy</th>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>wiek</th>");
                echo("<th>data urodzenia</th>");
                while($wiersz=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$wiersz['id_pracownicy']."</td><td>".$wiersz['imie']."</td><td>".$wiersz[$dana2]."</td><td>".$wiersz['zarobki']."</td><td>".$wiersz[$dana]."</td>");
                    echo("</tr>");
                }
                echo("</table>");
            }

            function table2($sql, $conn, $column, $dana){

                $result = $conn->query($sql);
                echo("<table border=0>");
                echo("<th>$column</th>");
                while($wiersz=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$wiersz[$dana]."</td>");
                    echo("</tr>");
                }
            echo("</table>");
            }

            function table3($sql, $conn, $column, $column2, $dana, $dana2){

                $result = $conn->query($sql);
                echo("<table border=0>");
                echo("<th>$column</th>");
                echo("<th>$column2</th>");
                    while($wiersz=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$wiersz[$dana]."</td><td>".$wiersz[$dana2]."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
            }

            function table4($sql, $conn, $column, $column2, $column3, $dana, $dana2, $dana3){

                $result = $conn->query($sql);
                echo("<table border=0>");
                echo("<th>$column2</th>");
                echo("<th>$column</th>");
                echo("<th>$column3</th>");
                    while($wiersz=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$wiersz[$dana3]."</td><td>".$wiersz[$dana2]."</td><td>".$wiersz[$dana]."</td>");
                        echo("</tr>");
                    }
                echo("</table>");


            }
            function table5($sql1, $sql2, $conn, $dana){

                $result = $conn->query($sql1);
                $result = $conn->query($sql2);
                echo("<table border=0>");
                echo("<th>nazwa dnia</th>");
                
                    while($wiersz=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$wiersz[$dana]."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
            }

            function table6($sql, $conn){
                $result = $conn->query($sql);
                echo("<table border=0>");
                echo("<th>imie</th>");
                echo("<th>dni</th>");
                echo("<th>godziny</th>");
                echo("<th>minuty</th>");
                    while($wiersz=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$wiersz['imie']."</td><td>".$wiersz['dni']."</td><td>".$wiersz['godziny']."</td><td>".$wiersz['minuty']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");

            }

            require_once("../assets/connect.php");
            $sql = 'SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja where dzial=id_org;';
            echo("<h2>Zadanie 1</h2>");
            echo("<h3>wiek poszczególnych pracowników</h3>");
            echo("<li>".$sql."</li>");
            table($sql, $conn, 'data_urodzenia', 'nazwa_dzial');

            $sql = 'SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja where dzial = id_org and dzial = 1';
            echo("<h2>Zadanie 2</h2>");
            echo("<h3>wiek poszczególnych pracowników z działu serwis</h3>");
            echo("<li>".$sql."</li>");
            table($sql, $conn, 'data_urodzenia', 'nazwa_dzial');

            $sql = 'SELECT * ,sum(YEAR(curdate())-YEAR(data_urodzenia)) AS suma_wiek FROM pracownicy, organizacja where dzial = id_org';
            echo("<h2>Zadanie 3</h2>");
            echo("<h3>suma lat wszystkich pracowników</h3>");
            echo("<li>".$sql."</li>");
            table2($sql, $conn, "suma lat", 'suma_wiek');

            $sql = 'SELECT * ,sum(YEAR(curdate())-YEAR(data_urodzenia)) AS suma_wiek FROM pracownicy, organizacja where dzial = id_org and dzial = 2';
            echo("<h2>Zadanie 4</h2>");
            echo("<h3>suma lat pracowników z działu handel</h3>");
            echo("<li>".$sql."</li>");
            table2($sql, $conn, "suma lat", 'suma_wiek');

            $sql = 'SELECT * ,sum(YEAR(curdate())-YEAR(data_urodzenia)) AS suma_wiek FROM pracownicy, organizacja where dzial = id_org and dzial = 2 and imie like "%a"';
            echo("<h2>Zadanie 5</h2>");
            echo("<h3>suma lat kobiet z działu handel</h3>");
            echo("<li>".$sql."</li>");
            table2($sql, $conn, "suma lat", 'suma_wiek');

            $sql = 'SELECT * ,sum(YEAR(curdate())-YEAR(data_urodzenia)) AS suma_wiek FROM pracownicy, organizacja where dzial = id_org and dzial = 2 and imie not like "%a"';
            echo("<h2>Zadanie 6</h2>");
            echo("<h3>suma lat mężczyzn z działu handel</h3>");
            echo("<li>".$sql."</li>");
            table2($sql, $conn, "suma lat", 'suma_wiek');

            $sql = 'SELECT * ,avg(YEAR(curdate())-YEAR(data_urodzenia)) AS srednia_wiek FROM pracownicy, organizacja where dzial = id_org group by dzial';
            echo("<h2>Zadanie 7</h2>");
            echo("<h3>średnia lat pracowników w poszczególnych działach</h3>");
            echo("<li>".$sql."</li>");
            table3($sql, $conn, "średnia lat", 'dzial', 'srednia_wiek', 'nazwa_dzial');

            $sql = 'SELECT * ,sum(YEAR(curdate())-YEAR(data_urodzenia)) AS suma_wiek FROM pracownicy, organizacja where dzial = id_org group by dzial';
            echo("<h2>Zadanie 8</h2>");
            echo("<h3>suma lat pracowników w poszczególnych działach</h3>");
            echo("<li>".$sql."</li>");
            table2($sql, $conn, "suma lat", 'suma_wiek');

            $sql = 'SELECT *, max(YEAR(curdate())-YEAR(data_urodzenia)) AS najstarszy FROM pracownicy, organizacja where dzial = id_org group by dzial';
            echo("<h2>Zadanie 9</h2>");
            echo("<h3>najstarsi pracownicy w każdym dziale</h3>");
            echo("<li>".$sql."</li>");
            table4($sql, $conn, "najstarszy pracownik", "dzial", "wiek", 'najstarszy', 'imie', 'nazwa_dzial');

            $sql = 'SELECT *, min(YEAR(curdate())-YEAR(data_urodzenia)) AS najmlodszy FROM pracownicy, organizacja where dzial = id_org and dzial in(1, 2) group by dzial';
            echo("<h2>Zadanie 10</h2>");
            echo("<h3>najmłodsi pracownicy z działu handel i serwis</h3>");
            echo("<li>".$sql."</li>");
            table3($sql, $conn, "najmlodszy pracownik", 'dzial', 'najmlodszy', 'nazwa_dzial');

            $sql = 'SELECT *, min(YEAR(curdate())-YEAR(data_urodzenia)) AS najmlodszy FROM pracownicy, organizacja where dzial = id_org and dzial in(1, 2) group by dzial';
            echo("<h2>Zadanie 11</h2>");
            echo("<h3>najmłodsi pracownicy z działu handel i serwis</h3>");
            echo("<li>".$sql."</li>");
            table4($sql, $conn, "najmłodszy pracownik", "dzial", "wiek", 'najmlodszy', 'imie', 'nazwa_dzial');

            $sql = 'SELECT imie,DATEDIFF(CURDATE(),data_urodzenia) AS dni_zycia FROM pracownicy';
            echo("<h2>Zadanie 12</h2>");
            echo("<h3>długość życia pracowników w dniach</h3>");
            echo("<li>".$sql."</li>");
            table3($sql, $conn, "imie", "dni życia", 'imie', 'dni_zycia');

            $sql = 'SELECT * FROM pracownicy, organizacja WHERE dzial = id_org and imie NOT LIKE "%a" ORDER BY data_urodzenia ASC LIMIT 1';
            echo("<h2>Zadanie 13</h2>");
            echo("<h3>najstarszy mężczyzna</h3>");
            echo("<li>".$sql."</li>");
            table($sql, $conn, 'data_urodzenia', 'nazwa_dzial');

            $sql = 'SELECT *, DATE_FORMAT(data_urodzenia,"%W") from pracownicy, organizacja where dzial = id_org';
            echo("<h2>Zadanie 14</h2>");
            echo("<h3>wyświetl nazwy dni w dacie urodzenia</h3>");
            echo("<li>".$sql."</li>");
            table($sql ,$conn, 'DATE_FORMAT(data_urodzenia,"%W")', 'nazwa_dzial');

            $sql1 = 'SET lc_time_names = "pl_PL"';
            $sql2 = 'SELECT DATE_FORMAT(CURDATE(), "%W") as data';
            echo("<h2>Zadanie 15</h2>");
            echo("<h3>Wypisz dzisiejszą nzawę dnia po polsku</h3>");
            echo("<li>".$sql1);
            echo("<li>".$sql2);
            table5($sql, $sql2, $conn, 'data');

            $sql = 'SELECT *, DATE_FORMAT(data_urodzenia,"%M") from pracownicy, organizacja where dzial = id_org';
            echo("<h2>Zadanie 16</h2>");
            echo("<h3>wyświetl nazwy miesięcy w dacie urodzenia</h3>");
            echo("<li>".$sql."</li>");
            table($sql ,$conn, 'DATE_FORMAT(data_urodzenia,"%M")', 'nazwa_dzial');

            $sql = 'SELECT curtime(4) as godzina';
            echo("<h2>Zadanie 17</h2>");
            echo("<h3>Obecna, dokładna godzina</h3>");
            echo("<li>".$sql."</li>");
            table2($sql, $conn, "godzina", 'godzina');

            $sql = 'SELECT *, DATE_FORMAT(data_urodzenia,"%Y-%M-%W") from pracownicy, organizacja where dzial = id_org';
            echo("<h2>Zadanie 18</h2>");
            echo("<h3>Wyświetl datę urodzenia w formie: rok-miesiąc-dzień</h3>");
            echo("<li>".$sql."</li>");
            table($sql ,$conn, 'DATE_FORMAT(data_urodzenia,"%Y-%M-%W")', 'nazwa_dzial');

            $sql = 'SELECT imie,DATEDIFF(CURDATE(),data_urodzenia) as dni, DATEDIFF(CURDATE(),data_urodzenia)*24 as godziny, DATEDIFF(CURDATE(),data_urodzenia)*24*60 as minuty FROM pracownicy';
            echo("<h2>Zadanie 19</h2>");
            echo("<h3>Ile godzin, minut już żyjesz</h3>");
            echo("<li>".$sql."</li>");
            table6($sql, $conn);

            $sql = 'SELECT DATE_FORMAT("2003-08-08", "%j") as NrDniaRoku_Urodzenie';
            echo("<h2>Zadanie 20</h2>");
            echo("<h3>W którym dniu roku urodziłeś się</h3>");
            echo("<li>".$sql."</li>");
            table2($sql, $conn, "dzień urodzenia", 'NrDniaRoku_Urodzenie');

            $sql = 'SELECT
            DATE_FORMAT(data_urodzenia,"%W") as dzien, imie, data_urodzenia
            FROM
            pracownicy
            ORDER BY 
            CASE
                
                WHEN dzien = "poniedziałek" THEN 1
                WHEN dzien = "wtorek" THEN 2
                WHEN dzien = "środa" THEN 3
                WHEN dzien= "czwartek" THEN 4
                WHEN dzien = "piątek" THEN 5
                WHEN dzien = "sobota" THEN 6
                WHEN dzien = "niedziela" THEN 7
            END ASC';
            echo("<h2>Zadanie 21</h2>");
            echo("<h3>Pracownicy z nazwami dni tygodnia, w których się urodzili z sortowaniem od Poniedziałku do Niedzieli</h3>");
            echo("<li>".$sql."</li>");
            table4($sql, $conn, "imie", "dzień", "data urodzenia", 'data_urodzenia', 'imie', 'dzien');

            $sql = 'SELECT Count(DATE_FORMAT(data_urodzenia, "%W")) as IloscPracUr_Monday FROM pracownicy where DATE_FORMAT(data_urodzenia, "%W")="poniedziałek"';
            echo("<h2>Zadanie 22</h2>");
            echo("<h3>Ilu pracowników urodziło się w poniedziałek</h3>");
            echo("<li>".$sql."</li>");
            table2($sql, $conn, "ilość pracowników urodzonych w poniedziałek", 'IloscPracUr_Monday');

            $sql = 'SELECT Count(DATE_FORMAT(data_urodzenia,"%W")) as ilosc, DATE_FORMAT(data_urodzenia,"%W") as dzien FROM pracownicy group by dzien ORDER BY CASE WHEN dzien = "Poniedziałek" THEN 1 WHEN dzien = "Wtorek" THEN 2 WHEN dzien = "Środa" THEN 3 WHEN dzien= "Czwartek" THEN 4 WHEN dzien = "Piątek" THEN 5 WHEN dzien = "Sobota" THEN 6 WHEN dzien = "Niedziela" THEN 7 END ASC';
            echo("<h2>Zadanie 23</h2>");
            echo("<h3>Ilu pracowników urodziło się w poszczególne dni tygodnia</h3>");
            echo("<li>".$sql."</li>");
            table3($sql, $conn, "dzień tygodnia", "ilość osób", 'dzien', 'ilosc');

        ?>
    </div>
</div>
</body>
</html>