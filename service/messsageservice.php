<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/chat/dao/messagedao.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/chat/connexion/connexion.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/chat/model/message.php';

class MessageService implements MessageDao {

    private $connexion;
    private $listGroupe = array();
    private $listUserRecu = array();
    private $listUserEnvoi = array();

    function __construct() {
        $this->connexion = new Connexion();
    }

    public function create($o) {
        $query = "insert into message values (null, '" . $o->getText() . "','" . $o->getUserEnvoi() . "',null,'" . $o->getDateEnvoi(). "')";
        $q = $this->connexion->getConnection()->prepare($query);
        $q->execute() or die("Erreur");
    }

    public function delete($o) {
        $query = "delete from message where id = " . $o->getId();
        $q = $this->connexion->getConnection()->prepare($query);
        $q->execute() or die("Erreur");
    }

	public function getGroupe() {
        $query = "select id,text,userenvoi,dateenvoi,userrecu from message where userrecu is null order by dateenvoi , userenvoi";
        $req = $this->connexion->getConnection()->prepare($query);
        $req->execute();
        while ($affichage = $req->fetch(PDO::FETCH_OBJ)) {
			$userenvoi =""; if (isset($affichage->userenvoi)) $userenvoi = $affichage->userenvoi;
			$userrecu =""; if (isset($affichage->userrecu)) $userrecu = $affichage->userrecu;
			$dateenvoi =""; if (isset($affichage->dateenvoi)) $dateenvoi = $affichage->dateenvoi;
            $this->listGroupe[] = new Message($affichage->id, $affichage->text,$userenvoi ,
									$userrecu , $dateenvoi);
        }
        return $this->listGroupe;
    }
	
	public function getByIdUserEnvoi($id) {
        $query = "select * from message where userenvoi = " .$id;
        $req = $this->connexion->getConnection()->prepare($query);
        $req->execute();
        while ($affichage = $req->fetch(PDO::FETCH_OBJ)) {
            $userenvoi =""; if (isset($affichage->userenvoi)) $userenvoi = $affichage->userenvoi;
			$userrecu =""; if ($affichage->userrecu != "") $userrecu = $affichage->userrecu;
			$dateenvoi =""; if (isset($affichage->dateenvoi)) $dateenvoi = $affichage->dateenvoi;
            $this->listUserEnvoi[] = new Message($affichage->id, $affichage->text,$userenvoi ,
									$userrecu , $dateenvoi);
									}
        return $this->listUserEnvoi;
    }
	
	public function getByIdUserRecu($id) {
        $query = "select * from message where userrecu = " .$id ;
        $req = $this->connexion->getConnection()->prepare($query);
        $req->execute();
        while ($affichage = $req->fetch(PDO::FETCH_OBJ)) {
            $this->listUserRecu[] = new Message($affichage->id, $affichage->text, $affichage->userenvoi,
									$affichage->userrecu , $affichage->dateenvoi);
									}
        return $this->listUserRecu;
    }

    public function update($o) {
        $query = "UPDATE message
		  SET text='" . $o->getText() . "', userenvoi='" . $o->getUserEnvoi(). "', userrecu='" . $o->getUserRecu()  . "'	 
		  WHERE id=" . $o->getId();
        $req = $this->connexion->getConnection()->prepare($query);
        $req->execute() or die("erreur");
    }

}
