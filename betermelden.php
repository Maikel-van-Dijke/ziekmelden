<!DOCTYPE html>
<head>
    <title>Ziekmeldingensysteem</title>
    <link rel="stylesheet" href="ziekmelden8.css">
</head>
<body class="invoeren">
	<form method="post" class="toevoegen" action="betermelden2.php">

        <a class="datum">Vul hier de begindatum in: </a><br/><input type="date" name="datum" class="datum"><br/><br/>
		<a class="voornaam">Vul hier je voornaam in: <a/><br/><input type="text" name="voornaam" class="voornaam"><br/><br/>
		<a class="tussenvoegsel">Vul hier je tussenvoegsel in: </a><br/><input type="text" name="tussenvoegsel" class="tussenvoegsel"><br/><br/>
		<a class="achternaam">Vul hier je achternaam in: </a><br/><input type="text" name="achternaam" class="achternaam"><br/><br/>

        <label for="klas">Kies je klas:</label><br/>
        <select name="klas" class="klas" id="klas">
            <option value=""></option>
            <option value="IB1A">IB1A</option>
            <option value="IB1B">IB1B</option>
            <option value="IB1C">IB1C</option>
            <option value="IB1D">IB1D</option>
            <option value="IB2A">IB2A</option>
            <option value="IB2B">IB2B</option>
            <option value="IB2C">IB2C</option>
            <option value="IB2D">IB32D</option>
        </select><br/><br/><br/>
        <input type="submit" name="verzenden" class="verzenden" title="Pagina sluit na het ziekmelden"/>
    </form>
</body>
<br/>
<a class="overzichtBTN" href="betermeldenOverzicht.php"/>Klik hier voor een overzicht van alle betere

</body>
</html>