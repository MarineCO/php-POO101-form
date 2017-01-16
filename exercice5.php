<?php

	class Infos {

		private $civilite = "";
		private $firstname = "";
		private $lastname = "";

		public function __construct($str1, $str2, $str3) {
			$this->civilite = $str1;
			$this->firstname = $str2;
			$this->lastname = $str3;
		}

		public function setCivilite() {
			$this->civilite = $_GET['civilite'];
			return $this->civilite;
		}

		public function setFirstname() {
			$this->firstname = $_GET['firstname'];
			return $this->firstname;
		}

		public function setLastname() {
			$this->lastname = $_GET['lastname'];
			return $this->lastname;
		}
	}

	$getInfos = new Infos();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice 5 et 6 : form avec POO</title>
</head>
<body>
	
	<?php if (empty($_GET['firstname']) && empty($_GET['lastname'])) : ?>

		<form method="GET" action="exercice5.php">
			
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

	<?php else : ?>

		<div><?= $getInfos->setCivilite()." ".$getInfos->setFirstname()." ".$getInfos->setLastname(); ?></div>

	<?php endif; ?>

</body>
</html>