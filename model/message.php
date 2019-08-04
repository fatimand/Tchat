<?php

class Message {
    private $id;
    private $text;
    private $userenvoi;
    private $userrecu; // si un seul utilisateur dc id utilisateur sion null dans le cas groupe
    private $dateenvoi;
    
    
    function __construct($id, $text, $userenvoi , $userrecu, $dateenvoi ) {
        $this->id = $id;
        $this->text = $text;
        $this->userenvoi = $userenvoi;
        $this->userrecu = $userrecu;
        $this->dateenvoi = $dateenvoi;
    }
    
    function getId() {
        return $this->id;
    }
     function getText() {
        return $this->text;
    }
	function getUserEnvoi() {
        return $this->userenvoi;
    }
	function getUserRecu() {
        return $this->userrecu;
    }
	function getDateEnvoi() {
        return $this->dateenvoi;
    }
    function setId($id) {
        $this->id = $id;
    }

    function setText($text) {
        $this->text = $text;
    }
	function setUserEnvoi($userenvoi) {
        $this->userenvoi = $userenvoi;
    }
	function setUserRecu($userrecu) {
        $this->userrecu = $userrecu;
    }
	function setDateEnvoi($dateenvoi) {
        $this->dateenvoi = $dateenvoi;
    }
	
}
