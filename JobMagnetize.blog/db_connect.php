<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "job_board";
	$url = 'mysql:host=localhost;dbname=job_board';
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
	
	try {
		$pdo = new PDO($url, $user, $pass, $options);
		$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  		
  		$dbh = null;
	}
	catch (PDOException $e) {
	  
	  print "Connecton or Query Failed: " . $e->getMessage() . "<br/>";
	  die();
	}

?>
