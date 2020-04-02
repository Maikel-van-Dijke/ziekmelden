<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "ziekmelden";
try {
    $datum = $_POST['datum'];
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $klas = $_POST['klas'];
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO zieken (datum,voornaam,tussenvoegsel,achternaam,klas)
    VALUES ('$datum','$voornaam', '$tussenvoegsel','$achternaam','$klas')";
    $conn->exec($sql);
    echo "Persoon succesvol ziek gemeld";
}
catch(PDOException $e)
{

    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<html>
<head>
    <link rel="stylesheet" href="ziekmelden1.css">
    <title>Ziekmeldingensysteem</title>
</head>
</html>
