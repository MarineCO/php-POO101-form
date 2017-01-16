<?php

	class User {

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

	$myUser = new User();
	echo '<div>' .$myUser->setLastname(). '</div>';
	echo '<div>' .$myUser->setFirstname(). '</div>';

?>