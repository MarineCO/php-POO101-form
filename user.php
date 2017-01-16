<?php


	class UserForm {

		private $firstname = "";
		private $lastname= "";

		public function __construct($prenom, $nom) {
			$this->firstname = $prenom;
			$this->lastname = $nom;
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

	$myUser = new UserForm();

	echo '<h1>Exercice 3</h1>';
	echo '<div>' .$myUser->setLastname(). '</div>';
	echo '<div>' .$myUser->setFirstname(). '</div>';


	class OtherUserForm {

		private $firstname = "";
		private $lastname = "";

		public function __construct($prenom1, $nom1) {
			$this->firstname = $prenom1;
			$this->lastname = $nom1;
		}

		public function setFirstnameBis() {
			$this->firstname = $_POST['firstname'];
			return $this->firstname;
		}

		public function setLastnameBis() {
			$this->lastname = $_POST['lastname'];
			return $this->lastname;
		}
	}

	$myOtherUser = new OtherUserForm();

	echo '<h1>Exercice 4</h1>';
	echo '<div>' .$myOtherUser->setLastnameBis(). '</div>';
	echo '<div>' .$myOtherUser->setFirstnameBis(). '</div>';

?>