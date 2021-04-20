<?php

$strona_php = <<<STRONA

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
            <?php include("header.php"); ?>
        </div>
        <div class="menu">
        <?php include("menu.php"); ?>
        </div>
        <div class="main"></div>
        </div>
    </body>
    </html>

STRONA;

?>