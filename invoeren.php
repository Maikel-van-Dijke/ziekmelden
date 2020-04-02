<!DOCTYPE html>
<head>
    <title>Ziekmeldingensysteem</title>
    <link rel="stylesheet" href="ziekmelden1.css">
</head>
<body class="invoeren">
	<form method="post" class="toevoegen" action="inserten.php">

        <a class="datum">Vul hier de begindatum in: </a><br/><input type="date" name="datum" class="datum"><br/><br/>
		<a class="voornaam">Vul hier je voornaam in: <a/><input type="text" name="voornaam" class="voornaam"><br/><br/>
		<a class="tussenvoegsel">Vul hier je tussenvoegsel in: </a><input type="text" name="tussenvoegsel" class="tussenvoegsel"><br/><br/>
		<a class="achternaam">Vul hier je achternaam in: </a><input type="text" name="achternaam" class="achternaam"><br/><br/>
		<a class="klas">Vul hier je klassennummer in: </a><input type="text" name="klas" class="klas"><br/><br/><br/>

		<input type="submit" name="verzenden" class="verzenden"/>
	</form>
</body>


</body>
</html>