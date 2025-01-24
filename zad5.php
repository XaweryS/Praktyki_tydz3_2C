<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style3.css">
    <title>Formularz do usuwania uczniów</title>
</head>
<body>
    <form method="post" action="">
        <p>Imie:</p><input type="text" name="imie"><br>
        <p>Nazwisko:</p><input type="text" name="nazwisko"><br><br>
        <button type="submit">Usuń</button>
    </form>
    <?php
    $user = "root";
    $host = "localhost";
    $pass = "";
    $db = "praktyki_3_is";
    $con = mysqli_connect($host, $user, $pass, $db);
    if(!$con){
        die("Nie działa połączenie" . mysqli_connect_error());
    }
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];

    $sql = "DELETE FROM `uczniowie_2c` WHERE Imie = '$imie' AND Nazwisko = '$nazwisko'";
    if (mysqli_query($con, $sql)){
        echo "Rekord został wyeliminowany";
    }
    else{
        echo"błąd";
    }
    mysqli_close($con);
?>
<a href="StronaG.html">Powrót</a>
</body>
</html>
