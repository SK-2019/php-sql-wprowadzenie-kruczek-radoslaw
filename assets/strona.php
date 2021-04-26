<?php

$navbar = <<<NAV

<ul class="nav">
        <li><a class="navbar" href="/Pracownicy/orgPracownicy.php">Organizacja i Pracownicy</a></li>
        <li><a class="navbar" href="/Pracownicy/agregat.php">Funkcje Agregujące</a></li>
        <li><a class="navbar" href="/Pracownicy/pracownicy.php">pracownicy</a></li>
        <li><a class="navbar" href="/Pracownicy/Data_i_Czas.php">Data i czas</a></li>
        <li><a class="navbar" href="/Dane-do-bazy/daneDoBazy.php">Dane do Bazy</a></li>
        <li><a class="navbar" href="/Biblioteka/ksiazki.php">Książki</a></li>
        <li><a class="navbar" href="/flexbox/flexbox.html">Flexbox</a></li>
        <li><a class="navbar" href="/index.php">strona główna</a></li>
        <li><a class="navbar" href="https://github.com/SK-2019/php-sql-wprowadzenie-kruczek-radoslaw">Github</a></li>
        <li>Relacje</li>
        <li><a class="navbar" href="/Relacje/autortytul.php">Autor - Tytuł</a></li>
        <li><a class="navbar" href="/Relacje/nauczycielklasa.php">Nauczyciel - Klasa</a></li>
        <li><a class="navbar" href="/Relacje/lekarzpacjent.php">Lekarz - Pacjent</a></li>
        <li><a class="navbar" href="/Relacje/mechanikauto.php">Mechanik - Auto</a></li>
        <li><a class="navbar" href="/Relacje/pracownikprojekt.php">Pracownik - Projekt</a></li>
</ul>

NAV;

$header = <<< HEADER

<h1 class="title">Radosław Kruczek</h1>
<a class="click" href="https://www.notion.so/SQL-3ccfadeab4b84d7794d7a13966de2547">Notion SO</a>

HEADER;


$strona_php = <<<PHP

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Radosław Kruczek</title>
        <link rel="stylesheet" href="assets/style.css" />
    </head>
    <body>
        <div class="container">
        <div class="header">
        {$header}
        </div>
        <div class="menu">
        {$navbar}
        </div>
        <div class="main"></div>
        </div>
    </body>
    </html>

PHP;




?>