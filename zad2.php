<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Zad2</title>
</head>
<body>
<?php
    $urz= "root";
    $ho= "localhost";
    $haslo= "";
    $baza= "p2c";
    $pol=mysqli_connect($ho, $urz, $haslo, $baza);
    $kwe= "SELECT * FROM uczniowie_2c";
    $res = mysqli_query($pol, $kwe);
    if(mysqli_num_rows($res) >0){
        while($wie = mysqli_fetch_assoc($res)){
            echo "<div id='tab'>Imię to: " . $wie['Imie'] . "</div>".
            "<div id='tab'> Nazwisko to: " . $wie['Nazwisko'] . "</div>".
            "<div id='tab'> Ocena to: " . $wie['Ocena'] . "</div>".
            "<div id='tab'> Wiek to: " . $wie['Wiek'] . "</div><br>";
        }
    }
    else{
        echo"błąd";
    }
    mysqli_close($pol);
?>
<a id="Pow" href="StronaG.html">Powrót</a>
</body>
</html>