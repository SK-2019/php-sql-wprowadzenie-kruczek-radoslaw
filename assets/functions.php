<?php

function table($sql){
    require_once("connect.php");
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
    $conn->close();
}

function table2($sql){
    require_once("../assets/connect.php");
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
    $conn->close();
}

function wow(){

    for($i=1;$i<5;$i++){
        echo("5");
    }

}

function delete(){

    echo("<form action='delete.php' method='POST'>");
   			echo("<input type='number' name='id' value='".$wiersz['id_autor']."' hidden></br>");
   			echo("<input type='submit' value='Usuń'>");
		echo("</form>");
}

?>