<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/chat/dao/userdao.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/chat/connexion/connexion.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/chat/model/users.php';

class UserService implements UserDao {

    private $connexion;
    private $listUserAll = array();
    private $listUserOnline = array();

    function __construct() {
        $this->connexion = new Connexion();
    }

    public function create($o) {
        $query = "insert into user values 
		(null, '" . $o->getLogin() . "','" . $o->getName() . "','" . $o->getStatut()
		. "','" . $o->getPassword() . "','" . $o->getProfessionnel() . "','" . $o->getDateCreation() . "','" . $o->getDateModification()
		. "','" . $o->getDateDernierConnexion() . "')";
        $q = $this->connexion->getConnection()->prepare($query);
        $q->execute() ;
		$queryselec = "select * from user where id = (SELECT MAX(id) id from user)";
        $req = $this->connexion->getConnection()->prepare($queryselec);
        $req->execute();
		$affichage = $req->fetch(PDO::FETCH_OBJ);
        if(!$affichage)
            return false;
        else {
         return new Users($affichage->id, $affichage->login, $affichage->name,
									$affichage->statut , $affichage->password , $affichage->professionnel , $affichage->datecreation , $affichage->datemodification , $affichage->datedernierconnexion	);
               }
        return false;
    }

    public function delete($o) {
        $query = "delete from user where id = " . $o->getId();
        $q = $this->connexion->getConnection()->prepare($query);
        $q->execute() or die("Erreur");
    }

    public function getAll() {
        $query = "select * from user";
        $req = $this->connexion->getConnection()->prepare($query);
        $req->execute();
        while ($affichage = $req->fetch(PDO::FETCH_OBJ)) {
            $this->listUserAll[] = new Users($affichage->id, $affichage->login, $affichage->name,
									$affichage->statut , $affichage->password , $affichage->professionnel , $affichage->datecreation , $affichage->datemodification , $affichage->datedernierconnexion	);
        }
        return $this->listUserAll;
    }
	
	public function getUsersOnline() {
        $query = "select * from user where statut = 1";
        $req = $this->connexion->getConnection()->prepare($query);
        $req->execute();
        while ($affichage = $req->fetch(PDO::FETCH_OBJ)) {
            $this->listUserOnline[] = new Users($affichage->id, $affichage->login, $affichage->name,
									$affichage->statut , $affichage->password , $affichage->professionnel , $affichage->datecreation , $affichage->datemodification , $affichage->datedernierconnexion	);
        }
        return $this->listUserOnline;
    }

    public function getById($id) {
        $req = "select * from user where id = '".$id."'";
        $q = $this->connexion->getConnection()->prepare($req);
        $q->execute();
		$s = null;
        if ($affichage = $q->fetch(PDO::FETCH_OBJ))
            $s = new Users($affichage->id, $affichage->login, $affichage->name,
									$affichage->statut , $affichage->password , $affichage->professionnel , $affichage->datecreation , $affichage->datemodification , $affichage->datedernierconnexion	);
        return $s;
    }
	public function getByLogin($login) {
        $req = "select * from user where login = '" . $login."'";
        $q = $this->connexion->getConnection()->prepare($req);
        $q->execute();
		$s = null;
        if ($affichage = $q->fetch(PDO::FETCH_OBJ))
            $s = new Users($affichage->id, $affichage->login, $affichage->name,
									$affichage->statut , $affichage->password , $affichage->professionnel , $affichage->datecreation , $affichage->datemodification , $affichage->datedernierconnexion	);
        return $s;
    }

    public function update($o) {
        $query = "UPDATE user
		  SET name='" . $o->getName() . "', statut='" . $o->getStatut(). "', login='" . $o->getLogin() . "', password='" . $o->getPassword()
         . "', professionnel='" . $o->getProfessionnel()."', datemodification='" . $o->getDateModification(). "', datedernierconnexion='" . $o->getDateDernierConnexion() . "'	 
		  WHERE id=" . $o->getId();
        $req = $this->connexion->getConnection()->prepare($query);
        $req->execute() or die("erreur");
    }
	
	public function updateProfile($id,$professionnel,$name) {
        $query = "UPDATE user
		  SET name='" . $name  . "', professionnel='" . $professionnel."', datemodification='" . date('Y-m-d h:i:s') ."'	 
		  WHERE id=" . $id;
        $req = $this->connexion->getConnection()->prepare($query);
         $req->execute() or die("erreur");
    }
	 public function updateDisconnect($id) {
        $query = "UPDATE user
		  SET statut= 0 , datedernierconnexion='" . date('Y-m-d h:i:s') . "'	 
		  WHERE id=" . $id;
        $req = $this->connexion->getConnection()->prepare($query);
        $req->execute() or die("erreur");
    }
	 public function updateConnect($id) {
        $query = "UPDATE user
		  SET statut= 1 , datedernierconnexion='" . date('Y-m-d h:i:s') . "'	 
		  WHERE id=" . $id;
        $req = $this->connexion->getConnection()->prepare($query);
        $req->execute() or die("erreur");
    }

}
