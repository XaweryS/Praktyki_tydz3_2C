<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style3.css">
    <title>Ocena</title>
</head>
<body>
<form method="post" action="">
    <input type="text" name="imie"><br>
    <input type="text" name="nazwisko"><br>
    <input type="number" name="ocena" min="1" max="6"><br>
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
    $ocena = $_POST['ocena'];
    $pol = mysqli_connect($ho, $urz, $haslo, $baza);
    if (!$pol) {
        die("Nie działa pol" . mysqli_connect_error());
    }
    $kwe = "UPDATE uczniowie_2c SET Ocena = '$ocena' WHERE Imie = '$imie' AND Nazwisko = '$nazwisko'";
    if (mysqli_query($pol, $kwe)){
        echo "Działa";
    }
    else{
        echo"Nie Działa";
    }
    mysqli_close($pol);
?> 
</body>
</html>
