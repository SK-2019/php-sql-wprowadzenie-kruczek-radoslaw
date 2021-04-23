<html>
    <head>
        <link rel="stylesheet" href="/assets/style.css">
        <title>Pracownicy</title>
    </head>
</html>
<div class="container">
    <div class="header">
        
        <?php include("../assets/header.php"); ?>
    </div>
    <div class="menu">
    <?php include("../assets/menu.php"); ?>
    </div>
    <div class="main">
        

<?php
    include("../assets/functions.php");
    $sql = "SELECT * FROM pracownicy, organizacja where dzial = id_org";
    echo("<h2>Zadanie 1</h2>");
    echo("<h3>Pracownicy tylko z działu 2</h3>");
    echo("<li>".$sql);
    table($sql);


    
    $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and dzial in(2, 3)';
    echo("<h2>Zadanie 2</h2>");
    echo("<h3>Pracownicy tylko z działu 2 i z działu 3</h3>");
    echo("<li>".$sql);
    table($sql);

    $sql = 'SELECT * FROM pracownicy, organizacja where dzial = id_org and zarobki < 30';
    echo("<h2>Zadanie 3</h2>");
    echo("<h3>Pracownicy tylko z zarobkami mniejszymi niż 30</h3>");
    echo("<li>".$sql);
    table($sql);
?>
    </div>
</div>