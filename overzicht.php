<html>
<head>
    <title>Ziekmeldingensytseem</title>
    <link rel="stylesheet" href="ziekmelden8.css">
</head>
<body>
<?php

include "config.php";

if(isset($_POST['voornaam']))
{
$str = $_POST;
$sth = $conn->prepare("SELECT * FROM zieken order by voornaam");
$row = $sth->setFetchMode(PDO:: FETCH_OBJ);
$sth->execute();
}

elseif (isset ($_POST['achternaam']))
{
$str = $_POST;
$sth = $conn->prepare("SELECT * FROM zieken order by achternaam");
$row = $sth->setFetchMode(PDO:: FETCH_OBJ);
$sth->execute();

}
elseif (isset ($_POST['achternaam'])){
$str = $_POST;
$sth = $conn->prepare("SELECT * FROM zieken order by klas");
$row = $sth->setFetchMode(PDO:: FETCH_OBJ);
$sth->execute();
}

else{
    $str = $_POST;
    $sth = $conn->prepare("SELECT * FROM zieken order by klas");
    $row = $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth->execute();
}

?>



<table class="lijstStijl">
    <tr>
        <th class="item">Voornaam: </th>
        <th class="item">Tussenvoegsel: </th>
        <th class="item">Achternaam: </th>
        <th class="item">Klas: </th>
        <th class="item">Ziek sinds: </th>
    </tr>
    <?php
    foreach($sth->fetchAll(PDO::FETCH_OBJ) as $row){
        ?>
        <tr>
            <td class="item"><?php echo $row->voornaam; ?></td>
            <td class="item"><?php echo $row->tussenvoegsel; ?></td>
            <td class="item"><?php echo $row->achternaam; ?></td>
            <td class="item"><?php echo $row->klas; ?></td>
            <td class="item"><?php echo $row->datum; ?></td>
        </tr>
    <?php } ?>
</table>
<form method='POST'>
    <div class="dropdown">
        <span>Sorteren</span>
        <div class="dropdown-content">
            <input type="submit" name="voornaam" value="voornaam">
            <input type="submit" name="achternaam" value="achternaam">
            <input type="submit" name="klas" value="klas">
        </div>
    </div>



</body>
</html>