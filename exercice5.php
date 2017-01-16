<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 5 : form avec POO</title>
</head>
<body>
	
	<form method="POST" action="exercice5.php">
		
		<select name="civilite" id="civilite">
			<option value="Mme">Mme</option>
			<option value="Mr">Mr</option>
		</select>

		<label for="lastname">Nom</label>
		<input id="lastname" name="lastname" type="text"/>

		<label for="firstname">Prénom</label>
		<input id="firstname" name="firstname" type="text"/>

		<input type="submit" value="Valider"/>

	</form>

</body>
</html>