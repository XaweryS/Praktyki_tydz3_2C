<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Zad3</title>
</head>
<body>
<form method="post" action="">
    <input type="text" name="imie"><br>
    <input type="text" name="nazwisko"><br>
    <input type="number" name="wiek"><br>
    <button type="submit">Wyslij</button>
    <br><a id="pow" href="StronaG.html">Powrót</a>
</form>
<?php
    $urz = "root";
    $ho = "localhost";
    $haslo = "";
    $baza = "p2c";
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $wiek = $_POST['wiek'];
    $pol = mysqli_connect($ho, $urz, $haslo, $baza);
    if(!$pol){
        die("Nie działa pol" . mysqli_connect_error());
    }
    $kwe = "INSERT INTO uczniowie_2c (imie, nazwisko,wiek) VALUES ('$imie', '$nazwisko','$wiek')";
    if (mysqli_query($pol, $kwe)){
        echo "Działa";
    }
    else{
        echo"Nie działa";
    }
    mysqli_close($pol);
?>
</body>
</html>