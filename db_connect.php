<?php
	//print_r(PDO::getAvailableDrivers());
	$dbname='yejianchen';	
	$dbusername='yejianchen';	
	$dbpassword='Random1996!';		
	
	// Connessione al database
	//Nuova istanza della classe PDO
	try{
		$db=new PDO("pgsql:dbname=$dbname",$dbusername,$dbpassword);
		//Se ci sono errori li scrive
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connessione col DB OK";
	}
	catch (PDOException $e) {
		echo "Errore". $e->getMessage();
	}
?>
