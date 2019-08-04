<?php
   session_start();
require_once('../../service/userservice.php');
require_once ('../../model/users.php');
extract($_GET);

$ss = new UserService();
$u = $ss->getByID($id);
	if ( $u  ) {
		$_SESSION['login'] = $u->getLogin();
        $_SESSION['id'] = $u->getId();
        $_SESSION['name'] = $u->getName();
        $_SESSION['professionnel'] = $u->getProfessionnel();
		header("Location:../../web/profile.php" );
	} else {
	header("Location:../../web/registre.php?error='erreur'");
	}

      
