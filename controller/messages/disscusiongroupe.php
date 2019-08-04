<?php
   session_start();
require_once('../../service/userservice.php');
require_once ('../../model/users.php');
extract($_GET);

$ss = new UserService();
	if ( $ss->getByLogin($login) == null ) {
		$users = new Users(null , $login, $name , 1 ,(md5(base64_encode(sha1($password)))) ,
                    '' , date('Y-m-d h:i:s') , date('Y-m-d h:i:s') , date('Y-m-d h:i:s'));

		$u = $ss->create($users); 
		$_SESSION['login'] = $login;
        $_SESSION['id'] = $u->getId();
        $_SESSION['name'] = $u->getName();
		$ss->updateConnect($s->getId()); // pour change le statut et la date de dernier connexion
		header("Location:afficheprofile.php?id=".$_SESSION['id'] );
	} else {
				header("Location:../../web/registre.php?error='erreur'");
	}

      
