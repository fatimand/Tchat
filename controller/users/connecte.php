<?php
   session_start();

require_once('../../service/userservice.php');
require_once ('../../model/users.php');
extract($_GET);

$ss = new UserService();
$s = $ss->getByLogin($login);
if ( $s != null && $s->getPassword() == (md5(base64_encode(sha1($password))))){
			
		$_SESSION['login'] = $s->getLogin();
        $_SESSION['id'] = $s->getId();
        $_SESSION['name'] = $s->getName();
        $_SESSION['professionnel'] = $s->getProfessionnel();
		$ss->updateConnect($s->getId());
		header("Location:afficheprofile.php?id=".$_SESSION['id'] );
	} else {
	header("Location:../../web/login.php?error='erreur'");
	}
      
