<?php

class Connexion {

    private $connextion;

    public function __construct() {
        $host = 'localhost';

        $login = 'root';
        $password = '';
        try {
		
            $this->connextion = new PDO("mysql:host=$host;dbname=tchat", $login, $password);
            $this->connextion->query("SET NAMES UTF8");
			$this->connextion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
		catch(PDOException $e)
			{
		echo "Connection failed: " . $e->getMessage();
		} catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getConnection() { 
        return $this->connextion;
    }

}
