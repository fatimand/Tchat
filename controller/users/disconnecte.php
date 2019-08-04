<?php
   session_start();
require_once('../../service/userservice.php');
require_once ('../../model/users.php'); 
extract($_GET);

$ss = new UserService();
 $ss->updateDisconnect($_GET['id']);
 session_destroy();
header("Location:../../web/login.php");


      
