<?php
   session_start();
require_once('../../service/userservice.php');
require_once ('../../model/users.php');
extract($_GET);

$ss = new UserService();
$s = $ss->getById($_SESSION['id']);
if ( $s != null && $s->getPassword() == (md5(base64_encode(sha1($password))))){
			$u = $ss->updateProfile($_SESSION['id'] ,$professionnel,$name);  // modifi session profe +name verifier le pass
		$_SESSION['login'] = $s->getLogin();
        $_SESSION['id'] = $s->getId();
        $_SESSION['name'] = $name;
        $_SESSION['professionnel'] = $professionnel;
		header("Location:../../web/profile.php?ok='ok'");
}
	 else {
				header("Location:../../web/profile.php?error='erreur'");
	}

      
