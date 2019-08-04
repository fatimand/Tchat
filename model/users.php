<?php

class Users {
    private $id;
    private $login;
    private $name;
    private $statut; // online ou offline
    private $password;
    private $professionnel;
    private $datecreation;
    private $datemodification;
    private $datedernierconnexion;
    
    
    public function __construct($id, $login, $name , $statut, $password , $professionnel , $datecreation , $datemodification , $datedernierconnexion) {
        $this->id = $id;
        $this->login = $login;
        $this->name = $name;
        $this->statut = $statut;
        $this->password = $password;
        $this->professionnel = $professionnel;
        $this->datecreation = $datecreation;
        $this->datemodification = $datemodification;
        $this->datedernierconnexion = $datedernierconnexion;
    }
    
    
    function getId() {
        return $this->id;
    }

     function getLogin() {
        return $this->login;
    }
	function getName() {
        return $this->name;
    }
	function getStatut() {
        return $this->statut;
    }
	function getPassword() {
        return $this->password;
    }
	function getProfessionnel() {
        return $this->professionnel;
    }
	function getDateCreation() {
        return $this->datecreation;
    }
	function getDateModification() {
        return $this->datemodification;
    }
	function getDateDernierConnexion() {
        return $this->datedernierconnexion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLogin($login) {
        $this->login = $login;
    }
	function setName($name) {
        $this->name = $name;
    }
	function setStatut($statut) {
        $this->statut = $statut;
    }
	function setPassowrd($password) {
        $this->password = $password;
    }
	function setProfessionnel($professionnel) {
        $this->professionnel = $professionnel;
    }
	
	function setDateCreation($datecreation) {
        $this->datecreation = $datecreation;
    }
	function setDateModification($datemodification) {
        $this->datemodification = $datemodification;
    }
	function setDateDernierConnexion($datedernierconnexion) {
        $this->datedernierconnexion = $datedernierconnexion;
    }
	

    


}
