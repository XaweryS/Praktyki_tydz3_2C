<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style3.css">
    <title>Wymiana ocen</title>
</head>
<body>
<form method="post" action="">
        <p>Imię ucznia:</p><input type="text" name="imie"><br>
        <p>Nazwisko ucznia:</p><input type="text" name="nazwisko"><br>
        <p>Ocena:</p><input type="number" min="1" max="6" name="ocena"><br><br>
        <button type="submit">Wyślij</button>
    </form><br>  
    <footer>
        <a href="SG.html">Powrót do Strony głuwnej</a>
    </footer>
</body>
</html>
<?php
$user = "root";
$host = "localhost";
$pass = "";
$db = "praktyki_3_is";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Nie działa połączenie: " . mysqli_connect_error());
}

$nazwisko = $_POST['nazwisko'];
$imie = $_POST['imie'];
$ocena = $_POST['ocena'];

$sql = "UPDATE uczniowie_2c SET Oceny = '$ocena' WHERE Imie = '$imie' AND Nazwisko = '$nazwisko'";

if (mysqli_query($con, $sql)){
    echo "dodany rekord";
}
else{
    echo"błąd";
}
mysqli_close($con);
?>