<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style3.css">
    <title>Wyrzucanie Uczniów</title>
</head>
<body>
<form method="post" action="">
    <input type="text" name="imie"><br>
    <input type="text" name="nazwisko"><br>
    <button type="submit">Wyrzuć</button>
<?php
    $urz = "root";
    $ho = "localhost";
    $haslo = "";
    $baza = "p2c";
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $pol = mysqli_connect($ho, $urz, $haslo, $baza);
    if(!$pol){
        die("Nie działa pol" . mysqli_connect_error());
    }
    $kwe = "DELETE FROM `uczniowie_2c` WHERE Imie = '$imie' AND Nazwisko = '$nazwisko'";
    if (mysqli_query($pol, $kwe)){
        echo "<br>"."Uczeń wyrzucony";
    }
    else{
        echo"Nie Działa";
    }
    mysqli_close($pol);
?>
<br><a id="pow" href="StronaG.html">Powrót</a>
</body>
</html>
