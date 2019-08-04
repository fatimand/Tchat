<?php
   session_start();
require_once('../../service/messsageservice.php');
require_once ('../../model/message.php');
extract($_GET);

       $ss = new MessageService();
		$m = new Message(null , $text, $_SESSION['id'] , null  , date('Y-m-d h:i:s'));

		$me = $ss->create($m); 
		header("Location:../../web/disscusiongroupe.php");
	

      
