<?php

$navbar = <<<NAV

<ul class="nav">
        <li class="nav_item"><a href="/Pracownicy/orgPracownicy.php">Organizacja i Pracownicy</a></li>
        <li class="nav_item"><a href="/Pracownicy/agregat.php">Funkcje Agregujące</a></li>
        <li class="nav_item"><a href="/Pracownicy/pracownicy.php">pracownicy</a></li>
        <li class="nav_item"><a href="/Pracownicy/Data_i_Czas.php">Data i czas</a></li>
        <li class="nav_item"><a href="/Dane-do-bazy/daneDoBazy.php">Dane do Bazy</a></li>
        <li class="nav_item"><a href="/Biblioteka/ksiazki.php">Książki</a></li>
        <li class="nav_item"><a href="/flexbox/flexbox.html">Flexbox</a></li>
        <li class="nav_item"><a href="/index.php">strona główna</a></li>
        <li class="nav_item"><a href="/Relacje/autortytul.php">Autor - Tytuł</a></li>
        <li class="nav_item"><a href="https://github.com/SK-2019/php-sql-wprowadzenie-kruczek-radoslaw">Github</a></li>
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
        <title>Radosław Kruczek</title>
        <link rel="stylesheet" href="style.css" />
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