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
    $sql = "INSERT INTO beter (datum,voornaam,tussenvoegsel,achternaam,klas)
    VALUES ('$datum','$voornaam', '$tussenvoegsel','$achternaam','$klas')";
    $conn->exec($sql);
    echo "<script>window.close();</script>";
}
catch(PDOException $e)
{

    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<html>
<head>
    <title>Ziekmeldingensytseem</title>
    <link rel="stylesheet" href="ziekmelden8.css">
</head>
<body>




</body>
</html>