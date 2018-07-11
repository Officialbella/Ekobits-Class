<?php

class db
 {
 	private $host = "localhost"; // Host Server
 	private $user = "root"; // Defualt User = root
 	private $pswd = ""; // ""
 	private $dbName = "ekobits_class"; // Database Name

 	function __construct()
 	{
 		# code... ;
 	}


 	function connect() {
 		$con_str = "mysql:host=$this->host;dbname=$this->dbName";
 		
 		try {
 			$conn = new PDO($con_str, $this->user, $this->pswd);
 			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		} catch(PDOException $ex) {
 			echo "Error: ".$ex->getMessage();
 		}

 		return $conn;
 	}


 	
 } 




?>